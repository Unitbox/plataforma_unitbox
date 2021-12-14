<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Model;

class FaleConosco extends Model
{
    protected $table = 'faleconosco';

    protected $fillable = ['name','last_name', 'email', 'company_name', 'phone_1', 'phone_2', 'subject', 'message'];
}
