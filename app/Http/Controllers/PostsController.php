<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PostsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = \App\Post::orderBy('created_at', 'desc')
						  ->get();

		$post_type = '文章總覽';

		$data = compact('posts', 'post_type');

    	return view('posts.index', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = \App\Post::create(\Input::all());

		return redirect()->route('posts.show', $post->id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = \App\Post::find($id);

	 	$data = compact('post');

	    return view('posts.show', $data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = \App\Post::find($id);

		$data = compact('post');

    	return view('posts.edit', $data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = \App\Post::find($id);

		$post->update(\Input::all());

		return redirect()->route('posts.show', $post->id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		\App\Post::destroy($id);

		return redirect()->route('posts.index');
	}

	public function random()
	{
		$id = rand(1, 10);
		$post = \App\Post::find($id);

	 	$data = compact('post');

	    return view('posts.show', $data);
	}

	public function comment($id)
	{
		$post = \App\Post::find($id);
		$comment = \App\Comment::create(\Input::all());

		$post->comments()->save($comment);

		return redirect()->route('posts.show', $post->id);
	}

}
