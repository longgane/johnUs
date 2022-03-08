<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundApplication extends AppModel
{
    use HasFactory;

    protected $table = 'fund_application';
    public const TABLE_NAME = 'fund_application';
    protected $guarded = [];
}
