<?php
class Genre{
	public static function getAll(){
		$query = DB::table('genres')->get();
		return $query;
	}
}

?>