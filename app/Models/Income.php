<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'category_id', 'amount', 'date', 'description'];

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable', 'categorizables');
    }
}
