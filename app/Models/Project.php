<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $incrementing = false;
    protected $keyType = 'string';

    public function pages()
    {
        return $this->hasMany(Page::class, 'project_id', 'id');
    }
}
