<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogger;
use App\Blog;
use DB;

class BloggerController extends Controller
{
    //
    public function showForm(){
    	return view('home.index');
    }

    public function register(Request $request){
    	$name = $request->name;
    	$username = $request->username;
    	$email = $request->email;
    	$password = $request->password;

    	$bloggers = new Blogger;
    	$bloggers->name = $name;
    	$bloggers->username = $username;
    	$bloggers->email = $email;
    	$bloggers->password = $password;

    	$bloggers->save();

    	return redirect('/');
    }

    public function logIn(Request $request){
    	$usernameLogIn = $request->userLogIn;
    	$passwordLogIn = $request->userPassword;

    	$bloggerLogIn = DB::table('bloggers')->where([
    			'username' => $usernameLogIn,
    			'password' => $passwordLogIn
    		])->get();


    	if(count($bloggerLogIn) > 0){
    		$blogger = Blogger::where('username', $usernameLogIn)->get();


    		return view('profile.blogger', compact('blogger'));

    	} else {
    		return redirect('/');
    	}
    }

    public function showBlogs(){
        $blogs = Blog::all();

        return view('blogs', compact('blogs'));
    }

    public function post(Request $request, $id){
        $id = $request->id;
    	$subject = $request->subject;
    	$body = $request->body;


    	$blogs = new Blog;
    	$blogs->blogger_id = $id;
    	$blogs->subject = $subject;
    	$blogs->body = $body;

    	$blogs->save();

        $blogger = Blogger::where('id', $id)->get();

        return view('profile.blogger', compact('blogger'));
    }

    public function viewBlog($id){

        $blog = Blog::where('id', $id)->get();

        return view('view-blog', compact('blog'));

    }
}
