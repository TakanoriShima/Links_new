<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    
    
    
        protected $fillable = ['user_id', 'community_id', 'title', 'content', 'image', 'disdosure_range',];
     
    /**
     * このトピックを所有するユーザー。（Userモデルとの多対1の関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
