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
    'created_at', // 作成日時は非表示にする場合
    'updated_at', // 更新日時も非表示にする場合
];

// リレーションシップを定義  
public function category()  
{  
    return $this->belongsTo(Category::class); // 1対多リレーションのカテゴリ定義  
}  
}
