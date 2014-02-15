<?php
class Dvd{
	public static function search($dvd_title,$genre,$rating)
	{
		$query = DB::table('dvd_titles')
		->select('title' ,DB::raw("DATE_FORMAT(release_date,'%b %d %Y') AS release_date"),'format_name','genre_name','label_name','rating_name','sound_name')  // dont use DB:raw on user input
		->join('formats','formats.id','=','dvd_titles.format_id')
		->join('genres','genres.id','=','dvd_titles.genre_id')
		->join('labels','labels.id','=','dvd_titles.label_id')
		->join('ratings','ratings.id','=','dvd_titles.rating_id')
		->join('sounds','sounds.id','=','dvd_titles.sound_id');

		if($dvd_title){
			$query->where('title','LIKE',"%$song_title%");
		}
		if($genre != 'All'){
			$query->where('genre_id','=',"$genre");
		}
		if ($rating != 'All') {
			$query->where('rating_id','=',"$rating");
		}

		$dvds = $query->get();
		return $dvds;
	}

}