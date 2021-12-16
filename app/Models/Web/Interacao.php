<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Model;

class Interacao extends Model
{
    protected $table = 'interacoes';

    protected $fillable = ['name','last_name', 'email', 'company_name', 'phone_1', 'phone_2', 'subject', 'message'];
}
