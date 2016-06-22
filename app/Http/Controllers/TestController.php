<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class TestController extends Controller{

	public function showProfile(){
		// $action = Route::currentRouteAction();
		// print_r($action);
		// exit;
		$data['name'] = 'Kathrine111';
		$data['age'] = '18';
		$view = view('welcome', $data);
		return $view;
		// return "ID是{$id}";
	}

	public function bar(){
		// return redirect('test');
		// abort(404);
		// var_dump(Route::currentRouteName());
		var_dump($_REQUEST);
	}
}