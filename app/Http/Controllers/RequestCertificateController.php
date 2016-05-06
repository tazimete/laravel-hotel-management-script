<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\SettingModel;
use App\AmenitiesModel;
use App\RequestCertificateModel;
use App\User;
use Auth;

class RequestCertificateController extends Controller
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
	
	//Load Request Certificate Page 
	public function load_request_certificate_page(){
		$user = Auth::user();
		$propertyOptions = SettingModel::where('user_id',$user->id)->take(1)->get();
		return view('certificate-request', ['property_options' => $propertyOptions]);
	}
	
	//Add Request Certificate 
	public function add_request_certificate(Request $request){
		$user = Auth::user();
		$propertyOptions = SettingModel::where('user_id',$user->id)->take(1)->get();
		
		$validator = Validator::make($request->all(), [
            'name' => 'required',
            'business_name' => 'required',
			'language' => 'required',
			'buiness_phone' => 'required',
			'email_address' => 'required',
			'street_address' => 'required',
			'city' => 'required',
			'state' => 'required',
			'postal_code' => 'required',
			'country' => 'required'    
        ]);                           
		                                                      
		if ($validator->fails()) {
            return redirect('/request-certificate')
                        ->withErrors($validator)
                        ->withInput();    
        }else{       		   
			$user = Auth::user();
			$certificate['user_id'] = $user->id;    
			$certificate['name'] = trim($request->input('name'));   
			$certificate['business_name'] = trim($request->input('business_name'));   
			$certificate['language'] = trim($request->input('languge'));   
			$certificate['buiness_phone'] = trim($request->input('buiness_phone'));   
			$certificate['email_address'] = trim($request->input('email_address'));   
			$certificate['street_address'] = trim($request->input('street_address'));   
			$certificate['city'] = trim($request->input('city'));   
			$certificate['state'] = trim($request->input('state'));   
			$certificate['postal_code'] = trim($request->input('postal_code'));   
			$certificate['country'] = trim($request->input('country'));   
		
			$result = RequestCertificateModel::create($certificate);
			
			if($result){
				return redirect('/request-certificate')->with('success_message','Request sent successfully');
			}else{
				return redirect('/request-certificate')->with('failed_message','Failed to sent request');
			}	
		}
	}
}
