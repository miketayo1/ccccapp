<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Members;
use App\User;
use Carbon\Carbon;

Class HomeController extends Controller{

	public function index()
	{  
      return view ('welcome');
    }

     

    public function reviewShow(Request $request){
    	

         $search = $user = Members::where('email', '=', $email = $request['email'])->first();
          $valid_email =is_bool(filter_var('something@something', FILTER_VALIDATE_EMAIL)) ;
          $valid_number = is_numeric($request['noc']);
          if (!$search) {

          	if (!$valid_number) {
          		return redirect()->route('home')->with('error', "No. of Childen should be a number" )->withInput();
          	}
     
          
          $email = $request['email'];
          $bcc = $request['bcc'];
          $lastname = $request['lastName'];
          $firstname = $request['firstName'];
          $gender = $request['gender'];
          $dob = $request['dob'];
          $status = $request['status'];
          $noc = $request['noc'];
          $address = $request['address'];
          $phone = $request['phone'];

         
          return view('review')
          ->with('email', $email)->with('bcc', $bcc)->with('lastname',$lastname)->with('firstname', $firstname)
          ->with('gender', $gender)->with('dob', $dob)->with('status', $status)->with('noc', $noc)
          ->with('address', $address)->with('phone', $phone);
      }
      else {
      	if ($search) {
    			$error = "Email address already exists!! Try another one";
    		}else{
    			$error = "Invalid Email format!!! Try again";
    		}
    		

   		return redirect()->route('home')->with('error', $error )->withInput();
    
      }
       
    }

    public function saveData(Request $request){

        
       
          $email = $request['email'];
          $bcc = $request['bcc'];
          $lastname = $request['lastName'];
          $firstname = $request['firstName'];
          $gender = $request['gender'];
          $date = $request['date'];
          $dob = $request['dob'];
          $status = $request['status'];
          $noc = $request['noc'];
          $address = $request['address'];
          $phone = $request['phone'];

          $search = $user = Members::where('email', '=', $email = $request['email'])->first();
          $valid_email =is_bool(filter_var('something@something', FILTER_VALIDATE_EMAIL)) ;
          if (!$search) {
          

          $member = new Members();

          $member->firstName = $firstname;
          $member->lastName = $lastname;
          $member->email = $email;
          $member->dob = $dob;
          $member->address = $address;
          $member->status = $status;
          $member->noc = $noc;
          $member->gender = $gender;
          $member->bcc = $bcc;
          $member->phone = $phone;


          $member->save();
          
    	return redirect()->route('home')->with('info', "Data saved successfully!");
    }
    else{
    		if ($search) {
    			$error = "Email address already exists!! Try another one";
    		}else{
    			$error = "Invalid Email format!!! Try again";
    		}
    		

    	return redirect()->back()->with('error', $error )->withInput();
    }
    
    }


    public function postRegister(Request $request){

    	$username = $request['username'];
        $password = $request['password'];
        $cpassword = $request['cpassword'];
        $token = $request['token'];
       
        $original_token = "cccc";

         $search = $user = User::where('username', '=', $username)->first();

         if($search){
         	return redirect()->back()->with('error', "username exists")->withInput();
         }

        if (strcmp($password, $cpassword)===0) {
        	
        	$correct_password = $password;
        }
        else{
        	return redirect()->back()->with('error', "password mismatch!!!")->withInput();
        }

        if (strcmp($token,  $original_token)==0) {
        	
        	$user = new User();

        	$user->username = $username;
        	$user->password = bcrypt($password);
        	$user->save();

        	return redirect()->back()->with('info', "Registeration successful");


        }
        return redirect()->back()->with('error', "Invalid Token!!!")->withInput();
    }


    public function getRegister(){

    	return view('register');
    	
    }

    public function getLogin(){

    	return view('login');
    	
    }

    public function postLogin(Request $request){


    	if(Auth::check()){
      return redirect()-> route('home')->with('info', "you are logged in");
    }

    	$username = $request['username'];
        $password = $request['password'];
        
        if(Auth::attempt( ['username' => $request['username'], 'password' => $request['password']])){

        return redirect()->route('home')->with('info', 'you are logged in');
      }else{

      	return redirect()->back()->with('error', 'Invalid username or password');

      }

        
    }


    public function postLogout(){
    

        Auth::logout();

       if(Auth::check()){
      return redirect()-> route('home')->with('info', "you are logged in");     
            }
            else{
            	 return redirect()-> route('home')->with('info', "you are logged out");
            }

        }
   
   public function getList(){

   	$lists = Members::paginate(20);
   

   	return view('list', compact('lists'));
   }

   public function getEdit($id){

    $edit_data = Members::where('id', '=', $id)->first();

   	return view('editlist', compact('edit_data'));
   }


   public function update($id, Request $request){

   	 	$member  = Members::where('id', '=', $id)->first();
          
          $valid_number = is_numeric($request['noc']);
          if ($member) {

          	if (!$valid_number) {
          		return redirect()->route('home')->with('error', "No. of Childen should be a number" )->withInput();
          	}
     
          
          $member->email = $request['email'];
          $member->bcc = $request['bcc'];
          $member->lastname = $request['lastName'];
          $member->firstname = $request['firstName'];
          $member->gender = $request['gender'];
          $member->dob = $request['dob'];
          $member->status = $request['status'];
          $member->noc = $request['noc'];
          $member->address = $request['address'];
          $member->phone = $request['phone'];
          $member->update();
         
          return redirect()->route('getlist')->with('info', 'Data updated successfully!!!' )->withInput();
      }
      else {
      	
   		return redirect()->route('home')->with('error', 'The data does not exist' )->withInput();
    
      }
   }

   public function birthday(){

  

   		$now = Carbon::now();
   		$now_format = $now->format('Y'.'-'.'m'.'-'.'d');
   		
   		$today = Members::whereDay('dob', Carbon::now()->day)
                        ->whereMonth('dob', Carbon::now()->month)
                        ->orderBy('dob')
                        ->get();

   		$dobs = Members::orderBy('dob')->get();
   		$month = $now->format('m');
   		
   		$born_this_month= Members::whereMonth('dob', Carbon::now()->month)
                        ->orderBy('dob')
                        ->get();
		
   		return view('birthdays')->with('today',$today)->with('born_this_month', $born_this_month);
		
   }


   public function getProfile($id, $firstname){


   
    $member  = Members::where('firstName', $firstname)->where('id', $id)->first();

    return view('member', compact('member'));
   }


 
}

