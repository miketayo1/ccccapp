<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Members;
use Session;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use DateTime;
use Intervention\Image\ImageManager;

Class SearchController extends Controller{

	public function getResults(Request $request)
	{
	

		$query = $request->input('query');

		if (!$query) {
			return redirect()->back();
		}
		if (empty($query)) {
			return redirect()->back()->with('error', 'search can not be empty');
		}

		if(is_null($query)){
			return redirect()->back()->with('error', 'search can not be empty');
		}
		
		$members = Members::where(DB::raw("CONCAT(firstName, '' , lastName)"), 'LIKE', "%{$query}%")
		->orWhere('phone', 'LIKE', "%{$query}%" )->orWhere('email', 'LIKE', "%{$query}%" )->orWhere('phone', 'LIKE', "%{$query}%" )->orderBy('created_at')->paginate(10);


		return view('search.results', compact('members'));
		
	}


	public function getResult(Request $request)
	{
	

		$query = $request->input('query');

		
		
		$members = Members::where(DB::raw("CONCAT(firstName, '' , lastName)"), 'LIKE', "%{$query}%")
		->orWhere('phone', 'LIKE', "%{$query}%" )->orWhere('email', 'LIKE', "%{$query}%" )->orWhere('phone', 'LIKE', "%{$query}%" )->orderBy('created_at')->paginate(10);


		return view('search.results', compact('members'));
		
	}




}