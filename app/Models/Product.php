<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // これでテスト用のテーブルと
    use HasFactory;
    
    
    // こちらは多のリレーションシップなのでbelongsToメソッドを使う
    public function category() {
        return $this->belongsTo(Category::class);
    }
    
}
