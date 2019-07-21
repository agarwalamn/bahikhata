<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payee extends Model
{
    protected $fillable = array('name');

    public function user()
    {
        return $this->belongsTo(User::class,'id');
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
