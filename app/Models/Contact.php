<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // use HasFactory;

    //Table Name 
    protected $table = 'contacts';
    //Primary Key
    public $primaryKey = 'id';
    //Other Column
    protected $fillable = ['contactName' , 'contactEmail', 'contactSubject', 'message'];
    //Timestamps
    public $timestamps = true;
}
