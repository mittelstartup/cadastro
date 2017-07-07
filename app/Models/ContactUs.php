<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    public $table = 'contact_us';

    public $fillable = ['contact_name','contact_email', 'contact_phone', 'contact_message'];
}
