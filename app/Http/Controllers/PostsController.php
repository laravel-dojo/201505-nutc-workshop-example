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
		$data = ['post_type' => '文章總覽'];

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
		return 'posts.store';
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
	 	$data = [
	        'post' => [
	            'title' => '文章內容 '.$id,
	            'sub_title' => '文章副標題'
	        ]
	    ];

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
		$data = compact('id');

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
		return 'posts.update: '.$id;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return 'posts.destroy: '.$id;
	}

	public function random()
	{
		$titles = [
	        '感謝上師，讚嘆師父！',
	        '每個人都能出來！',
	        '會走到什麼地方？'
	    ];

	    $sub_titles = [
	        '一雙眼和一雙眼短暫的交會擦身而過',
	        '人們也就三三五五的散去',
	        '樹要樹皮人要麵皮'
	    ];

	    $post = [
	        'title' => $titles[rand(0, 2)],
	        'sub_title' => $sub_titles[rand(0, 2)],
	    ];

	    $data = compact('post');

	    return view('posts.show', $data);
	}

	public function comment($id)
	{
		return 'posts.comment: '.$id;
	}
	
}
