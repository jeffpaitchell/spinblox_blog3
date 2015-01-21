<?php namespace Acme\repositories\Eloquent;

use acme\repositories\SpinBlox_BlogRepository;

use app\models\SpinBlox_Blog;

class EloquentSpinBlox_BlogRepository implements SpinBlox_BlogRepository {
	
	public function all()
	{
		return SpinBlox_Blog::all();
	}

	public function find($id)
	{
		return SpinBlox_Blog::find($id);
	}

	public function findOrFail($id)
	{
		return SpinBlox_Blog::findOrFail($id);
	}

	public function create($input, $filename)
	{
		$newBlog = new SpinBlox_Blog;
		$newBlog->blog_name = $input['blog_name'];
		$newBlog->blog_description = $input['blog_description'];
		$newBlog->blog_content = $input['blog_content'];
		$newBlog->blog_photo_path = $filename;
		$newBlog->blog_author = $input['blog_author'];
		return $newBlog->save();
	}

	public function update($id, $input)
	{
        /* When using Input::, make sure the backslash is front of it
        Otherwise it will not work! */

       	$spinblox_blog = SpinBlox_Blog::find($id);
		$spinblox_blog->blog_name = $input['blog_name'];
		$spinblox_blog->blog_description = $input['blog_description'];
		$spinblox_blog->blog_content = $input['blog_content'];
		$spinblox_blog->touch();
		return $spinblox_blog->save();
	}

	public function delete($id)
	{
		$spinblox_blog = SpinBlox_Blog::find($id);
		return $spinblox_blog->delete();
	}

	public function forceDelete($id)
	{
		$spinblox_blog = SpinBlox_Blog::find($id);
		return $spinblox_blog->forceDelete();
	}

	public function restore($id)
	{
		$spinblox_blog = SpinBlox_Blog::withTrashed()->find($id);
		return $spinblox_blog->restore();
	}
}