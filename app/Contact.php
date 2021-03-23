<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{	
	protected $primaryKey = 'id_contact';
    protected $table ='contact';
    protected $fillable = ['email_contact','name_contact','message_contact','status'];
    
}