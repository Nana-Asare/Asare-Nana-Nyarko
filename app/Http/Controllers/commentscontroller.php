<?php 

namespace App\Http\Controllers;

use App\Article;
use App\CommentMod;

class commentscontroller extends Controller
{
    public function store{Article $article}
    {
      
      $this->validate(request(),['body'=>'required|min:2']);

     CommentMod::create([

       'body'=>request('body'),	
 
       'article_id' =>$article->id	 

     	]);


      return back();

    }
}
