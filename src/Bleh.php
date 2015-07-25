<?php namespace Enchance\Bleh;

class Bleh {

	public static function saySomething() {
		return trans('bleh::messages.greeting');
		// return config('bleh.message');
		// return 'Hello World!';
	}

}