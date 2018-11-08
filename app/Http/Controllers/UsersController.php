<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\PostCategory;
use App\Role;
use App\Subscription;
use App\User;
use App\UserProfile;
use App\UserRole;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function view_users(){
        return view('users.view');
    }

    public function forum_users_json(){
        $data_collection = array();
        $users = User::all();

        foreach ($users as $user){
            $data_collection[] = [
                'id' => $user->id,
                'email' => $user->email,
                'status' => $user->status,
                'firstname' => UserProfile::where("user_id",$user->id)->pluck("firstname")->first(),
                'lastname' => UserProfile::where("user_id",$user->id)->pluck("lastname")->first(),
                'location' => UserProfile::where("user_id",$user->id)->pluck("location")->first(),
                'gender' => UserProfile::where("user_id",$user->id)->pluck("gender")->first(),
                'date_of_birth' => UserProfile::where("user_id",$user->id)->pluck("date_of_birth")->first(),
                'postal_code' => UserProfile::where("user_id",$user->id)->pluck("postal_code")->first(),
                'role' => Role::where("id",UserRole::where("user_id",$user->id)->pluck("role_id")->first())->pluck("display_name")->first(),
            ];
        }
        return response()->json(['data' => $data_collection]);
    }


    public function edit_user($id){
        $user_details = array();
        $user = User::find($id);
        $user_details[] = [
            'id' => $user->id,
            'email' => $user->email,
            'firstname' => UserProfile::where("id",$user->id)->pluck("firstname")->first(),
            'lastname' => UserProfile::where("id",$user->id)->pluck("lastname")->first(),
            'gender' => UserProfile::where("id",$user->id)->pluck("gender")->first(),
            'date_of_birth' => UserProfile::where("id",$user->id)->pluck("date_of_birth")->first(),
            'postal_code' => UserProfile::where("id",$user->id)->pluck("postal_code")->first(),
            'location' => UserProfile::where("id",$user->id)->pluck("location")->first(),
            'bio' => UserProfile::where("id",$user->id)->pluck("bio")->first(),
        ];

        return view('users.edit' ,compact('user_details'));
    }


    public function delete_user($id){
        $user_details = array();
        $user = User::find($id);
        $user_details[] = [
            'id' => $user->id,
            'firstname' => UserProfile::where("id",$user->id)->pluck("firstname")->first(),
            'lastname' => UserProfile::where("id",$user->id)->pluck("lastname")->first(),
            'role' => Role::where("id",UserRole::where("user_id",$user->id)->pluck("role_id")->first())->pluck("display_name")->first(),
        ];

        return view('users.delete' ,compact('user_details'));
    }

    public function remove_user_details($id){
        $user = User::find($id);

        if(UserProfile::where("id",$user->id)->count() > 0){
            UserProfile::where("id",$user->id)->delete();
        }

        if(Post::where("user_id",$user->id)->count() > 0){
           $posts = Post::where("user_id",$user->id)->get();
            foreach ($posts as $post){
                Comment::where("post_id",$post->id)->delete();
            }

           Post::where("user_id",$user->id)->delete();

        }

        UserRole::where("user_id",$user->id)->delete();

        $user->delete();

        Session::flash('success','User Successfully Deleted');
        return redirect()->route('view_users');
    }


    public function save_edited_user(Request $request){
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'location' => 'required',
            'status' => 'required',
            'email' => 'required',
            'bio' => 'required',
            'date_of_birth' => 'required',
            'postal_code' => 'required',
        ]);

        $user_id = Auth::user()->id;
        //$user_id = "2";

        $core_data = User::find($user_id);
        $core_data->email = $request->email;
        $core_data->status = $request->status;
        $core_data->save();

        if (UserProfile::where('user_id',$user_id)->count() > 0){
            $user_update   = UserProfile::where('user_id',$user_id)->get()->first();

            $user_update->firstname = $request->firstname;
            $user_update->lastname = $request->lastname;
            $user_update->gender = $request->gender;
            $user_update->location = $request->location;
            $user_update->date_of_birth = $request->date_of_birth;
            $user_update->postal_code = $request->postal_code;
            $user_update->bio = $request->bio;
            $user_update->save();
        }else{
            $user_update   = new UserProfile();
            $user_update->user_id = $user_id;
            $user_update->firstname = $request->firstname;
            $user_update->lastname = $request->lastname;
            $user_update->gender = $request->gender;
            $user_update->location = $request->location;
            $user_update->date_of_birth = $request->date_of_birth;
            $user_update->postal_code = $request->postal_code;
            $user_update->bio = $request->bio;
            $user_update->save();
        }

        $request->session()->flash('success','User Successfully Updated');
        return redirect()->route('view_users');
    }

    public function view_user($id){
        //User details
        $user = User::find($id);
        $user_details[] = [
            'id' => $user->id,
            'email' => $user->email,
            'firstname' => UserProfile::where("id",$user->id)->pluck("firstname")->first(),
            'lastname' => UserProfile::where("id",$user->id)->pluck("lastname")->first(),
            'gender' => UserProfile::where("id",$user->id)->pluck("gender")->first(),
            'date_of_birth' => UserProfile::where("id",$user->id)->pluck("date_of_birth")->first(),
            'postal_code' => UserProfile::where("id",$user->id)->pluck("postal_code")->first(),
            'location' => UserProfile::where("id",$user->id)->pluck("location")->first(),
            'bio' => UserProfile::where("id",$user->id)->pluck("bio")->first(),
        ];

        //Post for this user
        $post_details = array();
        $posts = Post::where("user_id",$user->id)->get();
        $posts_count = Post::where("user_id",$user->id)->count();

            foreach ($posts as $post){
                $post_details[] = [
                    'id' => $post->id,
                    'category_name' => PostCategory::where("id",$post->category_id)->pluck("category_name")->first(),
                    'comments_count' => Comment::where("post_id",$post->id)->count(),
                    'title' =>$post->title ,
                    'body' => $post->body,
                    'posted_date' => Carbon::parse($post->created_at)->format("d"),
                    'posted_month' => Carbon::parse($post->created_at)->format("M"),
                ];
            }

        //Active Subscription
        $check_subscription = "Expired";
        $subscription_days = "0";
        $user_subscriptions = Subscription::where("user_id",$user->id)->get();
        foreach ($user_subscriptions as $user_subscription){
            if(Carbon::now() < Carbon::parse($user_subscription->end_date)){
                $check_subscription = "Active";
                $subscription_days = Carbon::parse($user_subscription->end_date)->diffInDays(Carbon::now()) ." Days";
            }
        }

        //Subscription List All
        $user_data = array();

        foreach ($user_subscriptions as $user_subscription){
            $user_data[] = [
                'id' => $user_subscription->id,
                'token' =>$user_subscription->token,
                'start_date' => $user_subscription->start_date,
                'end_date' => $user_subscription->end_date,
                'status' => (Carbon::now() < Carbon::parse($user_subscription->end_date)) ? " Valid" : "Expired",
                'days_remain' => (Carbon::now() < Carbon::parse($user_subscription->end_date)) ? Carbon::parse($user_subscription->end_date)->diffInDays(Carbon::now())." Days" : "0 Days"
            ];
        }

        return view('users.profile',compact('user_details','post_details','posts_count','user_data','check_subscription','subscription_days'));
    }
}
