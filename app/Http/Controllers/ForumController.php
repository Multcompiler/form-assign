<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\PostCategory;
use App\Role;
use App\User;
use App\UserProfile;
use App\UserRole;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function forum()
    {
        return view('forum.view_all');
    }
     public function forum_posts_json(){
    $data_collection = array();
    $posts = Post::all();

    foreach ($posts as $post){
        $data_collection[] = [
            'id' => $post->id,
            'title' => $post->title,
            'post_category' => PostCategory::where("id",$post->category_id)->pluck("category_name")->first(),
            'comments_count' => Comment::where("id",$post->id)->count(),
            'body' =>  substr($post->body , 0, 150),
            'posted_by' => UserProfile::where("id",$post->user_id)->pluck("firstname")->first()." ".UserProfile::where("id",$post->user_id)->pluck("lastname")->first(),
        ];
    }
    return response()->json(['data' => $data_collection]);
}






    public function add_post(){
        $post_categories = PostCategory::all();
        return view('forum.add_post',compact('post_categories'));
    }

    public function single_post(){
        return view('forum.view_single_post');
    }

    public function save_post(Request $request){
        $this->validate($request, [
            'category_id' => 'required',
            'title' => 'required',
            'body' => 'required',
        ]);

        // $user_id = Auth::user()->id;

        $add_post = new Post();
        $add_post->title = $request->title;
        $add_post->body = $request->body;
        $add_post->user_id = "1";
        $add_post->category_id = $request->category_id;

        $add_post->save();

        $request->session()->flash('success','Post Successful Posted');
        return redirect()->route('forum');
    }
}
