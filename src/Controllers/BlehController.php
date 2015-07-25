<?php namespace Enchance\Bleh\Controllers;

use App\Http\Controllers\Controller;
use Enchance\Bleh\Bleh;

class BlehController extends Controller {

	public function foo() {
		// Init
		$page_title      = '2 Bananas';
		$welcome_message = 'Welcome! Welcome! Have 2 bananas.';

		$data = compact('page_title', 'welcome_message');
		return view('bleh::welcome', $data);
		// return Bleh::saySomething();
		// return 'The controller works!';
	}

}