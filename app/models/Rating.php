<?php
class Rating{
	public static function getAll(){
		$query = DB::table('ratings')->get();
		return $query;
	}
}

?>