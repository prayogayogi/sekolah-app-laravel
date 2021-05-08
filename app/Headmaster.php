<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Headmaster extends Model
{
    protected $fillable = ['nama', 'nid', 'mapel', 'no_hp', 'role_id', 'gambar'];
}
