<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class MainController extends Controller
{
    //
	public function home(){
		return view('home');
	}

	public function about(){
		return view('about');
	}

	public function review()
	{
		$reviews = new Contact();
		//dd($reviews->all());
		return view('review', ['reviews'=>$reviews->all()]);
	}

	public function review_check(Request $request)
	{
		$valid = $request->validate([
			'email' => 'required|min:4|max:100',
			'subject' => 'required',
			'message' => 'required|min:15|max:500'
		]);
		
		$review = new Contact();
		$review->email = $request->input('email');
		$review->subject = $request->input('email');
		$review->message = $request->input('message');

		$review->save();
		
		//dd($request);
		return redirect()->route('review');
	}
}