<?php

use Acme\repositories\SpinBlox_BlogRepository;

use app\models\SpinBlox_Blog;

use app\models\Validators as Validators;

class BlogController extends BaseController {

	/**
	* The spinblox_blog model
	*
	* @var app\Models\SpinBlox_Blog
	*/

	protected $spinblox_blog;

	/**
	* The layout
	*
	*/

	protected $layout = 'layouts.master';

	/**
	* Instantiate the controller
	* @param \app\Models\SpinBlox_Blog $spinblox_blog
	* @return void
	*/
	public function __construct(SpinBlox_BlogRepository $spinblox_blog)
	{
		$this->spinblox_blog = $spinblox_blog;
	}

	/**
	 * Methods for showing
     **/

	/**
	 * Listing all blogs
	 *
	 * @return \Illuminate\View\View
	 **/
	public function index()
	{
		$totalBlogs = SpinBlox_Blog::all();
		$allBlogs = SpinBlox_Blog::paginate(10);
		$this->layout->content = \View::make('home.index', array('allBlogs' => $allBlogs, 'totalBlogs' => $totalBlogs));
	}

	/**
	 * Listing all blogs
	 *
	 * @return \Illuminate\View\View
	 **/
	public function admin_index()
	{
		$totalBlogs = SpinBlox_Blog::all();
		$allBlogs = SpinBlox_Blog::paginate(10);
		$this->layout->content = \View::make('home.admin_index', array('allBlogs' => $allBlogs, 'totalBlogs' => $totalBlogs));
	}

	/**
	* Show the form for creating a new blog
	* @return \Illuminate\View\View
	*
	*/
	public function create()
	{
		$data = array('type' => 'spinblox_blog');
		$this->layout->content = \View::make('forms.new_blog', $data);

	}

	/**
	* Store a newly created spinblox_blog in storage
	* @return \Illuminate\View\View
	*/

	public function store()
	{
		$input = \Input::all();

		$validation = new Validators\SpinBlox_Blog;

		if($validation->passes())
		{
			/* Original Code 
			$this->spinblox_blog->create($input);
			*/

			/* Need these blocks of code for properly
			Storing Photo Filepaths into the database correctly */
			$filename = str_random(4) . \Input::file('blog_photo_path')->getClientOriginalName();
			$destination = "uploads/photos/";
			$upload = \Input::file('blog_photo_path')->move($destination, $filename);

			if ( $upload == false )
			{
				return \Redirect::to('home.index')
				->withInput()
				->withErrors($validation->errors)
				->with('message', 'Could not upload picture');
			}

			$this->spinblox_blog->create($input, $filename);
			return \Redirect::route('overview')
			->with('message', 'Blog Created Successfully.');
		}
		else
		{
			return \Redirect::back()
			->withInput()
			->withErrors($validation->errors)
			->with('message', 'Could not create blog.  Please try again.');
		}

	}

	/**
	* Display the specified blog's photos
	* 
	* @param int $id ID of the blog
	* @return \Illuminate\View\View
	*/

	public function show($id)
	{
		$spinblox_blog = $this->spinblox_blog->findOrFail($id);
		/* $blogPhotos = $this->blog_photo->findByBlogId($id); */
		$this->layout->content = \View::make('home.blog', array('spinblox_blog' =>$spinblox_blog));
	}

	/**
	* Show the form for editing the specified blog.
	* @param int $id Id of the blog
	* @return \Illuminate\View\View
	*/
	public function edit($id)
	{
		$spinblox_blog = $this->spinblox_blog->find($id);

		if(is_null($id))
		{
			return \Redirect::to('home.index');
		}

		$data = array('type' => 'spinblox_blog', 'spinblox_blog' => $spinblox_blog);
		$this->layout->content = \View::make('forms.edit_blog', $data);

	}

	/**
	* Update the specified blog in the database.
	* @param int $id Id of the blog
	* @return \Illuminate\View\View
	*/

	public function update($id)
	{
		$input = \Input::all();

		$validation = new Validators\SpinBlox_Blog($input);

		if ($validation->passes())
		{
			/*
			Insert data code here.
			*/

			return \Redirect::route('show_blog', array('id' => $id));
		}
		else
		{
			return \Redirect::route('edit_blog', array('id' => $id))
			->withInput()
			->withErrors($validation->errors)
			->with('message', 'Could not edit blog.');
		}

	}

	/**
	* Remove the specified blog from the database
	*
	* @param int $id Id of the blog
	* @return \Illuminate\View\View
	*/	

	public function destroy($id)
	{
		$this->spinblox_blog->delete($id);
		return \Redirect::route('overview'); 
	}



}



