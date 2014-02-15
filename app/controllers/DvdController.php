<?php

class DvdController extends BaseController {

	public function search()
	{
		$genres = Genre::getAll();
		$ratings = Rating::getAll();
		
		return View::make('dvds/search')
			->nest('genre_menu','dvds/menus/genre-menu',['genres' => $genres])
			->nest('rating_menu','dvds/menus/rating-menu',['ratings' => $ratings]);
	}

	public function listDvds(){
		
		$dvd_title = Input::get('dvd_title');
		$genre = Input::get('genre');
		$rating = Input::get('rating');

		$dvds = Dvd::search($dvd_title,$genre,$rating);

		return View::make('dvds/dvds-list', [
			'dvds' => $dvds
			]);
	}
}
?>