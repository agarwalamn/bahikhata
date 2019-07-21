<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = array('information','amount');

    public function payee()
    {
        return $this->belongsTo(Payee::class);
    }
}
