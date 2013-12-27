<?php
/**
 * Startsidan
 */
$app->get('/', function () use ($template, $contentLoader) {
	$data = $contentLoader->getNews();
	echo $template->render('index.twig', [
		'newsItems' => $data,
		'title' => 'Hem'
	]);
});
/**
 * Sida
 */
$app->get('/:pagename', function ($pagename) use ($template, $contentLoader) {
	$data = $contentLoader->getPage($pagename);
	echo $template->render('about.twig', ['content' => $data]);
});
/**
 * Nyheter
 */
$app->get('/nyheter/:title', function ($title) use ($template) {
	$data = get_posts([
		'name' => $title,
		'post_type' => 'post'
	]);
	$data = array_shift($data);
	echo $template->render('news.twig', [
		'content' => $data,
		'title' => $data->post_title
	]);
});
/**
 * Undersida
 */
$app->get('/:parent/:child', function ($parent, $child) use ($template) {
	$data = get_posts([
		'pagename' => $parent.'/'.$child,
		'post_type' => 'page'
	]);
	$data = array_shift($data);
	echo $template->render('page.twig', ['content' => $data]);
});
