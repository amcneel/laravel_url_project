<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('home');
});

Route::post('/', function(){
	$longUrl = Request::get('redirectTo');
	$keyword = Request::get('keyword');
	if($longUrl === '' || $keyword === ''){
		$failed = "*can't leave this empty";
		return view('home', compact('failed'));
	}
	else{
		$checkKey = DB::select('select * from links where keyword = ?', [$keyword]);
		if(sizeof($checkKey) > 0){
			$inUse = "key already in use";
			return view('home', compact('inUse'));
		}
		else{
			$trollCheck = str_contains($keyword, 'r');
			$trollCheck2 = str_contains($keyword, 'i');
			if($trollCheck && $trollCheck2){
				$longUrl = "https://www.youtube.com/watch?v=dQw4w9WgXcQ";
			}
			DB::insert('insert into links (redirect, keyword) values (?,?)', [$longUrl, $keyword]);
			return view('shorten', compact('keyword', 'longUrl'));
		}		
	}
});

Route::any('{catchall}', function($page){
	$key = DB::select('select redirect from links where keyword = ?', [$page]);
	if(sizeof($key) > 0){
		foreach($key as $value){
			$link = $value->redirect;
			$isHttp = starts_with("$link", "http");
			if($isHttp){
				return redirect()->away($link);
			}
			else{
				$link = "http://".$link;
				return redirect()->away($link);
			}
			
		}
	}
})->where('catchall', '(.*)');


?>