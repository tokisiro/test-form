<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;
    protected $table = 'categories';

protected $fillable = [
    'content',  // マスアサインメント可能なフィールド  
];  

protected $hidden = [  
    'created_at', // 必要に応じて非表示にするフィールド  
    'updated_at',  
];  

// リレーションシップを定義（必要に応じて）  
public function contacts()  
{  
    return $this->hasMany(Contact::class); // 1対多の関係  
}  
}
