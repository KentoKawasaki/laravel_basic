<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeSearch($query, $search) {
        
        if($search !== null) {
            $search_split = mb_convert_kana($search, 's'); // 全角スペースを半角スペースに変換
            $search_words = preg_split('/\s+/', $search_split); // 空白で区切る
            foreach($search_words as $word) {
                $query->where('name', 'like', "%{$word}%");
            }
        }

        return $query;
    }
}
