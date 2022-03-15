<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    // shopテーブルがもつarea_idからareaテーブルのレコードを取得
    public function area(){
        return $this->belongsTo('App\Models\Area');
    }
    
    //中間テーブルcategory_shop経由でcategoryを取得
    public function category_shop(){
        return $this->belongsToMany(Category::class);
    }
}
