<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected 	$table 			= 	'comment';
    protected 	$primaryKey 	= 	'cmt_id';
    public 		$incrementing 	= 	true;

    public function countCommentOfPost($postId)
    {
    	return Comment::where('post_id', $postId)->count();
    }

    public function getCommentOfPost($postId)
    {
    	return Comment::where('post_id', $postId)
    			->join('users','comment.user_id', '=', 'users.id')
    			->select('comment.cmt_content','comment.cmt_id','users.user_name','users.avatar','users.id')
    			->orderBy('comment.cmt_id', 'desc')
    			->paginate(8);
    }
}
