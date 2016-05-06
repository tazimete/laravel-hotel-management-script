<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\User;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class UserController extends Controller
{
	
	/*Constructor*/
	public function __construct(){
		//$this->middleware('auth');
	}
	 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */   
    public function create()
    {
        //
    }
	  
	//Create User 
	public function create_user(Request $request){
       $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users|max:255',
            'first-name' => 'required',
            'last-name' => 'required',
			'password' => 'required',
			'confirm-password' => 'required|same:password'
        ]);
 
        if ($validator->fails()) {                                             
            return redirect('/register/user')
                        ->withErrors($validator)
                        ->withInput(); 
        }else{
			$userData['title'] = trim($request->input('title'));
			$userData['first_name'] = trim($request->input('first-name'));
			$userData['last_name'] = trim($request->input('last-name'));
			$userData['email'] = trim($request->input('email'));
			$userData['password'] = bcrypt(trim($request->password));
			$userData['is_admin'] = 0;
			$user = User::create($userData);
			     
			if($user){  
				return redirect('/register/user')->with('success_message','Registration completed successfully');
			}else{
				return redirect('/register/user')->with('failed_message','Registration failed');
			}
		}
    }
	      
		  
	//Update User 
	public function update_user(Request $request){
		$validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'first-name' => 'required',
            'last-name' => 'required'
        ]);
 
        if ($validator->fails()) {                                                
            return redirect('/register')
                        ->withErrors($validator)    
                        ->withInput();      
        }else{
			$userData['title'] = trim($request->input('title'));
			$userData['first_name'] = trim($request->input('first-name'));
			$userData['last_name'] = trim($request->input('last-name'));
			$userData['email'] = trim($request->input('email'));
			
			//$user = User::create($userData);
			$user = Auth::user();
			$user->title = $userData['title'];
			$user->first_name = $userData['first_name'];
			$user->last_name = $userData['last_name'];
			$user->email = $userData['email'];
			
			if(!empty(trim($request->password))){
				$userData['password'] = bcrypt(trim($request->password));
				$user->password = $userData['password'];
			}
			
			$user->save();
			     
			if($user){  
				return redirect('/setting')->with('success_message','Save changes successfully');
			}else{
				return redirect('/setting')->with('failed_message','Failed to save changes');
			}
		}
	}
	
	/**Login User**/  
	public function login(Request $request){
		$validator = Validator::make($request->all(), [
            'email' => 'required|email',
			'password' => 'required'
        ]); 

        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();  
        }else{ 
			$userData = array( 
                    'email' => trim($request->email),
                    'password' => trim($request->password),
					'is_admin' => 0
                ); 
			//print_r($userData);exit;
			if(Auth::attempt($userData)){
				return redirect('/dashboard')->with('success_message','Login successfully');
			}else{
				return redirect('/')->with('failed_message','Login failed!! Please try again with valid information');
			}   
		}
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
	
	
	/*Logout User*/
	public function logout(){
		Auth::logout();
		return redirect('/')->with('success_message','You are logged out');
	}
}
