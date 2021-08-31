<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class A2p extends Model
{
    protected $table = 'a2p' ;
    protected $fillable = ['source','asal','costumer','SMSC','link','operator','sender','terminasi','tipe_terminasi','SID','status_terminasi','created_at','updated_at'];
}
