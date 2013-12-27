<?php
namespace ordbild\ContentLoader;

/**
* 	ContentLoader
* 	Loads content from WP
*/
class ContentLoader
{
	protected $query;
	public function getPage($title)
	{
		$data = get_posts([
			'post_type' => 'page',
			'pagename' => $title
		]);
		$data = array_shift($data);
		return $data;
	}
	public function getNews()
	{
		$data = get_posts([
			'post_type' => 'post'
		]);
		return $data;
	}
	protected function validate($data)
	{
		// TODO
	}
}