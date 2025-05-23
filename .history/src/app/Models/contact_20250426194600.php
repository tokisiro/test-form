<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    protected $fillable = [
    'category_id',
    'first_name',
    'last_name',
    'gender',
    'email',
    'tel',
    'address',
    'building',
    'detail',
];

protected $hidden = [
    'created_at',
    'updated_at',
];

public function category()
{
    return $this->belongsTo(Category::class);
}
}
