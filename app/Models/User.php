<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends AppModel
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'user';
    public const TABLE_NAME = 'user';
    protected $guarded = [];
}
