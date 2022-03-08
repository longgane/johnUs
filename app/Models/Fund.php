<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fund extends AppModel
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'fund';
    public const TABLE_NAME = 'fund';
    protected $guarded = [];
}
