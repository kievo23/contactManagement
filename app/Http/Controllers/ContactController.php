<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact as Contact;
use App\Http\Requests;
use Illuminate\View\Middleware\ErrorBinder;

class ContactController extends Controller
{
    //
    public function index(Request $request)
	{
	    Auth::logout();
	    $records = Contact::all();
	    return view('contacts.index',['contacts' => $records]);
	}

	public function add(Request $request)
	{
	    return view('contacts.addperson');
	}

	public function store(Request $request){

		$this->validate($request, [
			'firstName' => 'required|max:255',
			'secondName' => 'required|max:255',
			'idNumber' => 'required|max:255',
			'email' => 'required|email|unique:contacts|max:255',
			'phone' => 'required|max:255',
	    ]);

	    
	    	$task = new Contact;
		    $task->firstName = $request->firstName;
		    $task->secondName = $request->secondName;
		    $task->IdNumber = $request->idNumber;
		    $task->email = $request->email;
		    $task->phone = $request->phone;
		    $task->save();
			return redirect('contacts/index');
	}

	public function destroy(Request $request, $id){
		Contact::destroy($id);
		return redirect('contacts/index');
	}
}
