<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('app.auth.login');
    }

    public function login(Request $request)
    {
        if (in_array('', $request->only('email', 'password'))) {
            return response()->json(['status' => 'danger', 'message' => 'Informe todos os dados para efetuar o login']);
        }
        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            return response()->json(['status' => 'danger', 'message' => 'Atenção, informe um e-mail válido!']);
        }

        $user = User::where('email', $request->email)
        ->where('status', 1)
        ->first();

        if (!$user) {
            return response()->json(['status' => 'danger', 'message' => 'E-mail informado não existe no nosso banco de dados.']);
        }

        $validCredentials = Hash::check($request->password, $user->getAuthPassword());

        if (!$validCredentials) {
            return response()->json(['status' => 'danger', 'message' => 'Usuário e/ou senha inválidos.']);
        }

        $user_tenants = DB::table('tenants')
        ->join('users_tenants', 'tenants.id', '=', 'users_tenants.tenant_id')
        ->select('tenants.id', 'tenants.name', 'tenants.img_logo')
        ->where('users_tenants.user_id', $user->id)
        ->where('tenants.status', true)
        ->get();

        if(!Cache::has('tenant_channel_user'. $user->id)) {

            $canaisTenantsUser = DB::table('tenants_canais_atendimentos as a')
            ->join('users_canais_atendimentos as b', 'a.id', '=', 'b.tenant_canal_atendimento_id')
            ->where('b.user_id', $user->id)
            ->where('a.status', true)
            ->select('a.*')
            ->get();

            Cache::put('tenant_channel_user'. $user->id, $canaisTenantsUser);
        }
        
        if ($user_tenants->isEmpty()) {
            return response()->json(['status' => 'danger', 'message' => 'Usuário não possui clientes liberado. Entre em contato com sistemas@sconline.com.br solicitando o acesso.']);
        }

        Auth::login($user, true);

        $this->authenticatedLog();

        return response()->json(['status' => 'success', 'message' => 'success', 'data' => $user_tenants]);
    }

    // generation log access
    private function authenticatedLog()
    {
        LogUserAccess::create([
            'user_id' => Auth::user()->id,
            'login_ip' => request()->ip(),
            'dispositive' => request()->userAgent()
        ]);
    }
}
