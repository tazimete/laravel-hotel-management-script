<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\SettingModel;
use App\User;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class SettingController extends Controller
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
	                    
	//Loading Setting Page 
	public function load_setting_page(){
		$user = Auth::user();
		$propertyOptions = SettingModel::where('user_id',$user->id)->take(1)->get();

		//var_dump($propertyOptions); exit;
		//print_r($propertyOptions); exit;
		
		return view("settings",['property_options' => $propertyOptions, 'user' => $user]);  
	}                         
	
	//Loading Setting Page 
	public function update_property_option(Request $request){
		 $validator = Validator::make($request->all(), [
            'property-name' => 'required',
            'upload' => 'required',
			'twitter-name' => 'required',
			'property-tripadvisor-url' => 'required',
			'legal-property-name' => 'required',
			'street-address' => 'required',   
			'suffix' => 'required',
			'city' => 'required',
			'postal-code' => 'required',
			'state' => 'required',
			'country' => 'required',
			'phone' => 'required',
			'fax' => 'required'     
        ]);                           
		                                                      
		if ($validator->fails()) {
            return redirect('/setting')
                        ->withErrors($validator)
                        ->withInput();    
        }else{       
			$destinationPath = "property-images";     
			$file = $request->file('upload');  
			$filename=$file->getClientOriginalName();   
			$request->file('upload')->move($destinationPath, $filename);
			   
			$user = Auth::user();
			$property['user_id'] = $user->id;    
			$property['property_name'] = trim($request->input('property-name'));
			$property['property_logo'] = $filename;  
			$property['property_twitter_url'] = trim($request->input('twitter-name'));
			$property['property_tripadvisor_url'] = trim($request->input('property-tripadvisor-url'));
			$property['legal_property_name'] = trim($request->input('legal-property-name'));
			$property['street_address'] = trim($request->input('street-address'));
			$property['suffix'] = trim($request->input('suffix'));
			$property['city'] = trim($request->input('city'));                         
			$property['city_lat'] = trim($request->input('city-lat'));            
			$property['city_lng'] = trim($request->input('city-lng'));
			$property['postal_code'] = trim($request->input('postal-code'));
			$property['state_region'] = trim($request->input('state'));
			$property['country'] = trim($request->input('country'));
			$property['phone'] = trim($request->input('phone'));  
			$property['fax'] = trim($request->input('fax'));   
			
			$user = Auth::user();
			$previousValue = SettingModel::where('user_id',$user->id)->count();

			if($previousValue > 0){  
				$result = SettingModel::where('user_id',$user->id)->update($property);   
			}else{
				$result = SettingModel::create($property);  
			}
		
			if($result){
				return redirect('/setting')->with('success_message','Save changes successfully');
			}else{
				return redirect('/setting')->with('failed_message','Failed to save changes');
			}	
		}
	}
	
}
