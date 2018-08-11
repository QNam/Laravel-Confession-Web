<?php

namespace App\Http\ViewComposers;
use Illuminate\Support\Facades\Auth;

use Illuminate\View\View;
use App\Http\Controllers\PostController as PostController;

class TopPostComposer
{
    public function compose(View $view)
    {
            $post = new PostController();
            $topPostByView  =   $post->getTopPostByView();
            $topPostByCmt   =   $post->getTopPostByCmt();

            $view->with(['topView' => $topPostByView, 
                        'topCmt' => $topPostByCmt]);
    }
}