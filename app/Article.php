<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function hasManyComments(){
    	//建立和Comment的对应关系
    	return $this->hasMany('App\Comment', 'article_id', 'id');
    }
}
