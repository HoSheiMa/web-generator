<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const ADMIN = "ADMIN";
    const CUSTOMER = "CUSTOMER";
    const ADMIN_CODE = "0x1";
    const CUSTOMER_CODE = "0x2";

    protected $guarded = [];

    use HasFactory;
}
