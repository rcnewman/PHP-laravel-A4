<?php
class Dvd{
	public static function search($dvd_title,$genre,$rating)
	{
		$query = DB::table('dvds')
		->select('title' ,DB::raw("DATE_FORMAT(release_date,'%b %d %Y') AS release_date"),'format_name','genre_name','label_name','rating_name','sound_name')  // dont use DB:raw on user input
		->join('formats','formats.id','=','dvds.format_id')
		->join('genres','genres.id','=','dvds.genre_id')
		->join('labels','labels.id','=','dvds.label_id')
		->join('ratings','ratings.id','=','dvds.rating_id')
		->join('sounds','sounds.id','=','dvds.sound_id');

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