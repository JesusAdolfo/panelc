<?php namespace Blog\Http\Controllers;

use Blog\Post;
use Blog\Http\Requests\ContactFormRequest;

class WelcomeController extends Controller {

	
	/** 
	* @return void
	*/
	public function index()
	{
		$posts = \DB::table('posts')->orderBy('id','desc')->paginate(2);

		return view('welcome')
		->with('posts',$posts);
	}

	public function about()
	{
		return view('about');
	}
	
	public function menus()
	{
		return view('menus');
	}

	public function contact()
	{
		return view('contact');
	}

	public function blog()
	{
		$posts = \DB::table('posts')->orderBy('id','desc')->paginate(4);

		return view('blog')
		->with('posts',$posts);
	}

	public function article($slug){

		$post = Post::findBySlug($slug);

		return view('article')
		->with('post', $post);


	}

	public function tags($tag){

		$posts = Post::where('tags', 'LIKE', '%'.$tag.'%')->paginate(6);

		return view('tags')
		->with('posts', $posts)->with('tag', $tag);
		
	}

	public function create()
    {
        return view('contact');
    }

	public function store(ContactFormRequest $request){

		\Mail::send('emails.contact',
	        array(
	            'name' => $request->get('name'),
	            'email' => $request->get('email'),
	            'user_message' => $request->get('message')
	        ), function($message)
	    {
	        $message->from('randomized@gmail.com');
	        $message->to('rodriguezjesus609@gmail.com', 'Admin')->subject('Contacto enviado desde Panel Ciudadano');
	    });

		return \Redirect::route('home')->with('alert', 'Tu mensaje ha sido enviado!');

	}


}
