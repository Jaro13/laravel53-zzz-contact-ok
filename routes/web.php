<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Route::get('/', ['as' => 'home', function () {
    return view('home');
}]);

Route::get('services', ['as' => 'services', function () {
    return view('services');
}]);

Route::get('contact', ['as' => 'contact.form', function () {
    return view('contact');
}]);

Route::get('contact/success', ['as' => 'contact.success', function () {
    return view('success');
}]);

Route::post('contact', ['as' => 'contact.submit', function() {
	
	$validation = validator(
		request()->only('name', 'email', 'message', 'terms', 'g-recaptcha-response'),
		[
			'name' => 'required',
			'email' => 'required|email',
			'message' => 'required',
     		'terms' => 'required',
      'g-recaptcha-response' => 'required|captcha',


		]
	);

	if ($validation->passes()) {
		Mail::to('softart.poczta@gmail.com')->send(new App\Mail\Contact(request()));

		//return redirect()->route('contact.success');
    flash()->overlay('You are now a Laracasts member!', 'Yay');
    return redirect()->route('home')->with('success','Item created successfully!');
    //return redirect()->route('home')->flash()->overlay('You are now a Laracasts member!', 'Yay');

	}

//	return redirect()->route('contact.form')->withErrors($validation->errors())->withInput();
return redirect()->route('contact.form')->withErrors($validation->errors())->withInput();
//return redirect()->route('contact.form')->with('success','Item created successfully!');
//return redirect()->route('contact.form')->withErrors($validation->errors())->withInput()->flash()->overlay('You are now a Laracasts member!', 'Yay');
//powrot wraz z komunikaem sukcesu? - jak to zrobic?
//return redirect()->route('contact.form')->with('success','Item created successfully!');


//przyklad
// http://itsolutionstuff.com/post/laravel-5-implement-flash-messages-with-exampleexample.html
//return back()->with('success','Item created successfully!');

//return redirect()->route('contact.form')->withErrors($validation->errors())->with('status', 'Profile updated!');

}]);
