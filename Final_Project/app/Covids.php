<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Covids extends Model
{
    protected $fillable = ['country', 'case', 'deadth', 'recover', 'active', 'new'];
}
