<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest as PostRequest;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Redirect;

use App\Http\Model\Post;
use App\Http\Model\Comment;

class PostController extends Controller
{
    private $textPerPost        =   400;
    private $fileSavePlace      =   'uploads/post';
    private $fileStoragePath    =   'uploads\post\\';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $posts = Post::orderBy('post_number', 'desc')->paginate(5);

        $posts = $this->templatePostInView($posts,$this->textPerPost,true);

        return view('home')->with(['posts' => $posts,
                                    'title' => 'Confesstion']);

    }


    private function templatePostInView($posts = array(),$textNum, $hasImage)
    {
        $cmt = new Comment();

         foreach ($posts as $post) 
         {
            $path = storage_path('app\\'.$this->fileStoragePath. $post->post_image);
            if (!File::exists($path) || $hasImage == false) 
            {
                $post->post_image = null;
            }

            $strlen     =   strlen($post->post_content);
            $post->countComment = $cmt->countCommentOfPost($post->post_id);
            $post->post_content = nl2br(substr($post->post_content,0,$textNum) );
            if ($strlen >= $this->textPerPost) {
                $post->post_content .= '....';
            }
        }

        return $posts;
    }


    public function getTopPostByView()
    {
        $posts  =   Post::orderBy('countView', 'desc')->limit(20)->get();

        return $this->templatePostInView($posts,100,false);

    }


    public function getTopPostByCmt()
    {
        $posts  =   Post::orderBy('countCmt', 'desc')->limit(20)->get();

        return $this->templatePostInView($posts,100,false);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $_imageName =   null;
        $_token     =   $request->input('_token');

        //Create post's ID using hash date + token. 
        $date   =   new \DateTime();
        $salt   =   $date->getTimestamp();
        $_id    =   md5($_token.$salt);

        $_content   =   $request->input('content');

        //Check image exists
        if ($request->hasFile('image')) {
            $_image     =   $request->file('image');
            $_imageName =   $_id.'.'.$_image->getClientOriginalExtension();

            //store image with name : post's id + img ext
            $_image->storeAs($this->fileSavePlace,$_imageName) ;
        }
        
        //Store in DB
        if ( Post::insert(['post_id'        => $_id, 
                            'post_content'  => $_content, 
                            'post_image'    => $_imageName,
                            'post_date'     => NOW(),
                            'countView'     => 0,
                            'countCmt'      => 0]) ) {
            return redirect()->route('index');
        } else {
            Session::flash('message', 'Có lỗi xảy ra. Vui lòng thử lại !'); 
            Session::flash('class', 'danger'); 

            return redirect()->route('index');
        }
    }


    public function setPathFileInView($filename)
    {
        $path = storage_path('app\\'.$this->fileStoragePath. $filename);

        if (!File::exists($path)) {
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post       =   Post::find($id);
        $path = storage_path('app\\'.$this->fileStoragePath. $post->post_image);
        if (!File::exists($path)) {
            $post->post_image = null;
        }

        //get comment of post
        $comment    =   new Comment(); 
        $cmts       =   $comment->getCommentOfPost($id);
        //+ 1 view when user view post
        $countView = Post::find($id)->countView;
        $doUpdateCountView  =   Post::where('post_id', $id)->update(['countView' => $countView + 1]);    

        $post->post_content =   nl2br($post->post_content);
        $post->countComment =   $comment->countCommentOfPost($id);
        return view('post',array('post' => $post,'cmts' => $cmts));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
