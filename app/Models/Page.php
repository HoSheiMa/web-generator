<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function components()
    {
        return $this->hasMany(Component::class, 'page_id', 'id')->orderBy('order_in_list', 'asc');
    }
}
