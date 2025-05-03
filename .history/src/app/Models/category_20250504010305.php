<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ategory extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $fillable = [
        'content',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
