<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table 		= 	'post';
    protected $primaryKey	=	'post_id';
    public 	  $incrementing = 	false;


    public function getPostInfo($id){
    	$data = array();
    	$data = Post::where('post_id',$id)->get();
    	$data .= Comment::where('post_id',$id)->get();

    	return $data;	
    }
}
