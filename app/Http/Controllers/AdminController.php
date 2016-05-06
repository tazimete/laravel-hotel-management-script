<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\User;
use App\PromotionalTipsModel;
use App\AdminSettingModel;
use App\AmenitiesModel;
use App\HalalRestaurantModel;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;


class AdminController extends Controller
{
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
	
	//Login Admin 
	public function login(Request $request){
		$validator = Validator::make($request->all(), [
            'email' => 'required|email',
			'password' => 'required'
        ]); 

        if ($validator->fails()) { 
            return redirect('/admin_panel')   
                        ->withErrors($validator)
                        ->withInput();  
        }else{ 
			$userData = array( 
                    'email' => trim($request->email),
                    'password' => trim($request->password),
					'is_admin' => 1
                ); 
			//print_r($userData);exit;
			if(Auth::attempt($userData)){
				return redirect('/admin_panel/dashboard')->with('success_message','Login successfully');
			}else{
				return redirect('/admin_panel')->with('failed_message','Login failed!! Please try again with valid information');
			}     
		}   
	}
	
	
	//Load dashdoard 
	public function load_admin_dashboard(){
		return view('admin.index');
	}
	
	//Load Add Hotel Page  
	public function load_add_user_page(){
		return view('admin.user_add');
	}
	
	//Logout 
	/*Logout User*/
	public function logout(){  
		Auth::logout();   
		return redirect('/admin_panel')->with('success_message','You are logged out');
	}
	
	/*Create user or hotel*/
	public function add_hotel_or_user(Request $request){
		$validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users|max:255',
            'first-name' => 'required',
            'last-name' => 'required',
			'password' => 'required',
			'confirm-password' => 'required|same:password'
        ]); 
 
        if ($validator->fails()) {                                               
            return redirect('/admin_panel/add_user_page')
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
				return redirect('/admin_panel/add_user_page')->with('success_message','User created successfully');
			}else{
				return redirect('/admin_panel/add_user_page')->with('failed_message','Failed to create user');
			}
		}
	}
	
	/*User List*/
	public function user_list(){
		$userList = User::paginate(5);
		return view('admin.user_list',['user_list' => $userList]);
	}
	
	/*List Promotional Tip in Admin Panel*/
	public function list_promo_tip(){
		$promoTips = PromotionalTipsModel::paginate(5);
		return view('admin.promo_tip_list', ['promo_tips' => $promoTips]);
	}
	
	/*Add Promotional Tip in Admin Panel*/
	public function add_promo_tip(){
		return view('admin.promo_tip_add');
	}
	
	/*Create Promotional Tip in Admin Panel*/
	public function create_promo_tip(Request $request){
		$validator = Validator::make($request->all(), [
            'promo-tip-title' => 'required',
            'promo-tip-description' => 'required',
            'propmo-tip-picture' => 'required'
        ]);   
 
        if ($validator->fails()) {                                               
            return redirect('/admin_panel/add_promo_tip')
                        ->withErrors($validator)      
                        ->withInput(); 
        }else{     
			$destinationPath = "promo-tips-images";     
			$file = $request->file('propmo-tip-picture');  
			$filename = $file->getClientOriginalName();   
			$request->file('propmo-tip-picture')->move($destinationPath, $filename);
			
			$user = Auth::user();      
			
			$promoData['user_id'] = $user->id;
			$promoData['title'] = trim($request->input('promo-tip-title'));
			$promoData['description'] = trim($request->input('promo-tip-description'));
			$promoData['image_url'] = $filename; 
			
			$promoTip = PromotionalTipsModel::create($promoData);
			     
			if($promoTip){  
				return redirect('/admin_panel/add_promo_tip')->with('success_message','Promotional tip created successfully');
			}else{
				return redirect('/admin_panel/add_promo_tip')->with('failed_message','Failed to create promotional tip');
			}
		}
	}                   
	
	//Load Add Restaurant Page 
	public function load_add_restaurant_page(){
		return view('admin.halal_restaurant_add');
	}
	
	//Create Restaurant 
	public function create_restaurant(Request $request){
		$validator = Validator::make($request->all(), [
            'restaurant-name' => 'required',
            'restaurant-cuisine' => 'required',
            'restaurant-address' => 'required',
            'restaurant-picture' => 'required'
        ]);   
 
        if ($validator->fails()) {                                               
            return redirect('/admin_panel/add_promo_tip')
                        ->withErrors($validator)      
                        ->withInput(); 
        }else{     
			$destinationPath = "restaurant-images";     
			$file = $request->file('restaurant-picture');  
			$filename = $file->getClientOriginalName();   
			$request->file('restaurant-picture')->move($destinationPath, $filename);
			
			$user = Auth::user();      
			
			$restaurant['name'] = trim($request->input('restaurant-name'));
			$restaurant['address'] = trim($request->input('restaurant-address'));
			$restaurant['cuisine'] = trim($request->input('restaurant-cuisine'));
			$restaurant['picture'] = $destinationPath.'/'.$filename; 
			
			$halalRestaurant = HalalRestaurantModel::create($restaurant);
			     
			if($halalRestaurant){  
				return redirect('/admin_panel/halal_restaurant_list')->with('success_message','Promotional tip created successfully');
			}else{
				return redirect('/admin_panel/halal_restaurant_list')->with('failed_message','Failed to create promotional tip');
			}
		}
	}
	
	
	//List all halal restaurant 
	public function halal_restaurant_list(){
		$resturants = HalalRestaurantModel::paginate(5);
		return view('admin.halal_restaurant_list', ['resturants' => $resturants]);
	}
	
	//Load Admin Settings Page 
	public function load_admin_settings_page(){
		$rowNo = AdminSettingModel::count();
		$data = AdminSettingModel::find(1);
		return view('admin.setting',['setting_data' => $data]);
	}
	
	//Update settings         
	public function update_settings(Request $request){     
		$user = Auth::user();
		$adminSettings['user_id'] = $user->id;
		$adminSettings['email_marketing_page'] = trim($request->input('email-marketing-page'));
		$adminSettings['email_request_certificate'] = trim($request->input('email-request-certificate'));
			
		$rowNo = AdminSettingModel::count();
		
		if($rowNo > 0){      
			$data = AdminSettingModel::find(1);
			$data->user_id = $adminSettings['user_id'];
			$data->email_marketing_page = $adminSettings['email_marketing_page'];
			$data->email_request_certificate = $adminSettings['email_request_certificate'];
			
			//Check if file is uploaded or not                
			if($request->hasFile('file-marketing-page')){
				if($request->file('file-marketing-page')->isValid()){
					$destinationPath = "attachment_admin";     
					$file = $request->file('file-marketing-page');  
					$filename = $file->getClientOriginalName();   
					$request->file('file-marketing-page')->move($destinationPath, $filename);
					$adminSettings['file_marketing'] = $destinationPath.'/'.$filename;
					$data->file_marketing = $adminSettings['file_marketing'];
				}
			} 
		
			$result = $data->save();
		}else{
			$result = AdminSettingModel::create($adminSettings);
		}
			     
		if($result){  
			return redirect('/admin_panel/setting_page')->with('success_message','Settings updated successfully');
		}else{
			return redirect('/admin_panel/setting_page')->with('failed_message','Failed to update settings');
		}  
	}
	
	
	//Amenities Review Page 
	public function amenities_review_page(){
		$amenities = AmenitiesModel::all();
		return view('admin/amenities-review',['amenities' => $amenities]);
	}
	
	//Amenities Review Page details 
	public function view_amenities_details($amenities_id){ 
		$amenities = AmenitiesModel::find($amenities_id);
		return view('admin/amenities-review-single',['amenities' => $amenities]);
	}
	
	//Approve Amenities By ID
	public function approve_amenities_by_id($amenities_id){ 
		$amenities = AmenitiesModel::find($amenities_id);
		$amenities->status = 1;
		$result = $amenities->save();
		
		if($result){  
			return redirect('/admin_panel/amenities_review')->with('success_message','Amenities approved successfully');
		}else{
			return redirect('/admin_panel/amenities_review')->with('failed_message','Failed to approve amenities');
		}  
	}
	
	//Hold Amenities By ID
	public function hold_amenities_by_id($amenities_id){ 
		$amenities = AmenitiesModel::find($amenities_id);
		$amenities->status = 0;
		$result = $amenities->save();
		
		if($result){  
			return redirect('/admin_panel/amenities_review')->with('success_message','Amenities hold successfully');
		}else{
			return redirect('/admin_panel/amenities_review')->with('failed_message','Failed to hold amenities');
		}  
	}
	
	//Delete Amenities By ID
	public function delete_amenities_by_id($amenities_id){ 
		$amenities = AmenitiesModel::find($amenities_id);
		$result = $amenities->delete();
		
		if($result){  
			return redirect('/admin_panel/amenities_review')->with('success_message','Amenities deleted successfully');
		}else{
			return redirect('/admin_panel/amenities_review')->with('failed_message','Failed to delete amenities');
		}  
	}
}
