<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\SettingModel;
use App\AmenitiesModel;
use App\User;
use Auth;

class AmenitiesController extends Controller
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
	
	//Load Amenities Page    
	public function load_amenities_page(){ 
		$user = Auth::user();
		$propertyOptions = SettingModel::where('user_id',$user->id)->take(1)->get();
		$amenities = AmenitiesModel::where('user_id', $user->id)->take(1)->get();
		//print_r($amenities); exit;
		//return view('amenities', ['amenities' => $amenities, 'property_options' => $propertyOptions]);
		
		if(count($amenities) > 0){
			$amenities = AmenitiesModel::where('user_id',$user->id)->where('status',1)->take(1)->get();
			return view('amenities-download', ['amenities' => $amenities, 'property_options' => $propertyOptions]);
		}else{
			return $this->load_amenities_questionnaire_page();
		}
		
	}         
	
	//Load Amenities Questionnaire Page 
	public function load_amenities_questionnaire_page(){ 
		$user = Auth::user();
		$propertyOptions = SettingModel::where('user_id',$user->id)->take(1)->get();
		$amenities = AmenitiesModel::where('user_id',$user->id)->take(1)->get();
		//print_r($amenities); exit;
		//return view('amenities', ['amenities' => $amenities, 'property_options' => $propertyOptions]);
		return view('amenities-questionnaire', ['amenities' => $amenities, 'property_options' => $propertyOptions]);
	}
	
	//Update  Amenities ()Review)
	public function update_amenities(Request $request){    
		$validator = Validator::make($request->all(), [
			'muslim_prayer_mat'=> 'required',
			'qibla_direction'=> 'required',
			'quran_in_room'=> 'required',
			'praying_direction_from_hotel_staff'=> 'required',
			'local_prayer_time_table'=> 'required',
			'halal_restaurant_list'=> 'required',
			'mosque_or_suraus_list'=> 'required',
			'alcoholic_beverages'=> 'required',
			'halal_food'=> 'required'
		]);
		
		if($validator->fails()){        
			return redirect('/amenities')->withErrors($validator)->withInput();
		}else{
			$user = Auth::user();
			$propertyOptions = SettingModel::where('user_id',$user->id)->take(1)->get();
			
			$amenities['user_id'] = $user->id;
			//$amenities['property_id'] = $propertyOptions[0]->id;
			$amenities['muslim_prayer_mat'] = $request->input('muslim_prayer_mat');
			$amenities['qibla_direction'] = $request->input('qibla_direction');
			$amenities['quran_in_room'] = $request->input('quran_in_room');
			$amenities['praying_direction_from_hotel_staff'] = $request->input('praying_direction_from_hotel_staff');
			$amenities['local_prayer_time_table'] = $request->input('local_prayer_time_table');
			$amenities['halal_restaurant_list'] = $request->input('halal_restaurant_list');
			$amenities['mosque_or_suraus_list'] = $request->input('mosque_or_suraus_list');
			$amenities['alcoholic_beverages'] = $request->input('alcoholic_beverages');
			$amenities['halal_food'] = $request->input('halal_food');
			$amenities['status'] = 0;
			
			/**
			$previousRecord = AmenitiesModel::where('user_id', $user->id)->count();
			
			if($previousRecord > 0){
				$result = AmenitiesModel::where('user_id', $user->id)->update($amenities);
			}else{
				$result = AmenitiesModel::create($amenities);
			}     
			
			if($result){             
				return redirect('/amenities')->with('success_message','Save changes');
			}else{
				return redirect('/amenities')->with('failed_message','Failed to save changes');
			}**/
			
			return view('amenities-view',['amenities' => $amenities]);
		}
	}
	
	//Update  Amenities (Submit)
	public function submit_amenities(Request $request){    
			$user = Auth::user();
			$propertyOptions = SettingModel::where('user_id',$user->id)->take(1)->get();
			
			$amenities['user_id'] = $user->id;
			//$amenities['property_id'] = $propertyOptions[0]->id;
			$amenities['muslim_prayer_mat'] = $request->input('muslim_prayer_mat');
			$amenities['qibla_direction'] = $request->input('qibla_direction');
			$amenities['quran_in_room'] = $request->input('quran_in_room');
			$amenities['praying_direction_from_hotel_staff'] = $request->input('praying_direction_from_hotel_staff');
			$amenities['local_prayer_time_table'] = $request->input('local_prayer_time_table');
			$amenities['halal_restaurant_list'] = $request->input('halal_restaurant_list');
			$amenities['mosque_or_suraus_list'] = $request->input('mosque_or_suraus_list');
			$amenities['alcoholic_beverages'] = $request->input('alcoholic_beverages');
			$amenities['halal_food'] = $request->input('halal_food');
			$amenities['status'] = 0;
			
			$previousRecord = AmenitiesModel::where('user_id', $user->id)->count();
			
			if($previousRecord > 0){
				$result = AmenitiesModel::where('user_id', $user->id)->update($amenities);
			}else{
				$result = AmenitiesModel::create($amenities);
			}     
			
			if($result){             
				return redirect('/amenities')->with('success_message','Save changes');
			}else{
				return redirect('/amenities')->with('failed_message','Failed to save changes');
			}
	}
	
	//Commit Update  Amenities 
	public function commit_update_amenities(Request $request){    
		$validator = Validator::make($request->all(), [
			'muslim_prayer_mat'=> 'required',
			'qibla_direction'=> 'required',
			'quran_in_room'=> 'required',
			'praying_direction_from_hotel_staff'=> 'required',
			'local_prayer_time_table'=> 'required',
			'halal_restaurant_list'=> 'required',
			'mosque_or_suraus_list'=> 'required',
			'alcoholic_beverages'=> 'required',
			'halal_food'=> 'required'
		]);
		
		if($validator->fails()){        
			return redirect('/amenities')->withErrors($validator)->withInput();
		}else{
			$user = Auth::user();
			$propertyOptions = SettingModel::where('user_id',$user->id)->take(1)->get();
			
			$amenities['user_id'] = $user->id;
			//$amenities['property_id'] = $propertyOptions[0]->id;
			$amenities['muslim_prayer_mat'] = $request->input('muslim_prayer_mat');
			$amenities['qibla_direction'] = $request->input('qibla_direction');
			$amenities['quran_in_room'] = $request->input('quran_in_room');
			$amenities['praying_direction_from_hotel_staff'] = $request->input('praying_direction_from_hotel_staff');
			$amenities['local_prayer_time_table'] = $request->input('local_prayer_time_table');
			$amenities['halal_restaurant_list'] = $request->input('halal_restaurant_list');
			$amenities['mosque_or_suraus_list'] = $request->input('mosque_or_suraus_list');
			$amenities['alcoholic_beverages'] = $request->input('alcoholic_beverages');
			$amenities['halal_food'] = $request->input('halal_food');
			$amenities['status'] = 0;
			
			$previousRecord = AmenitiesModel::where('user_id', $user->id)->count();
			
			if($previousRecord > 0){
				$result = AmenitiesModel::where('user_id', $user->id)->update($amenities);
			}else{
				$result = AmenitiesModel::create($amenities);
			}     
			
			if($result){             
				return redirect('/amenities')->with('success_message','Save changes');
			}else{
				return redirect('/amenities')->with('failed_message','Failed to save changes');
			}
		}
	}
		
		
	//Edit Amenities By ID 
	public function edit_amenities_page($id){
		$user = Auth::user();
		$propertyOptions = SettingModel::where('user_id',$user->id)->take(1)->get();
		$amenities = AmenitiesModel::where('user_id', $user->id)->get();
		return view('amenities-edit',['amenities' => $amenities, 'id' => $id]);
	}
	
	//Edit Amenities First Section 
	public function edit_amenities_first_section(Request $request){
		$user = Auth::user();
		$propertyOptions = SettingModel::where('user_id',$user->id)->take(1)->get();
			
		$amenities['user_id'] = $user->id;
		//$amenities['property_id'] = $propertyOptions[0]->id;
		$amenities['muslim_prayer_mat'] = $request->input('muslim_prayer_mat');
		$amenities['qibla_direction'] = $request->input('qibla_direction');
		$amenities['quran_in_room'] = $request->input('quran_in_room');
		
		$result = AmenitiesModel::where('user_id', $user->id)->update($amenities);
		
		if($result){             
			return redirect('/amenities')->with('success_message','Saved changes');
		}else{
			return redirect('/amenities')->with('failed_message','Failed to save changes');
		}
		
	}
	
	
	//Edit Amenities Second Section 
	public function edit_amenities_second_section(Request $request){
		$user = Auth::user();
		$propertyOptions = SettingModel::where('user_id',$user->id)->take(1)->get();
			
		$amenities['user_id'] = $user->id;
		$amenities['praying_direction_from_hotel_staff'] = $request->input('praying_direction_from_hotel_staff');
		$amenities['local_prayer_time_table'] = $request->input('local_prayer_time_table');
		$amenities['halal_restaurant_list'] = $request->input('halal_restaurant_list');
		$amenities['mosque_or_suraus_list'] = $request->input('mosque_or_suraus_list');
		
		$result = AmenitiesModel::where('user_id', $user->id)->update($amenities);
		
		if($result){             
			return redirect('/amenities')->with('success_message','Saved changes');
		}else{
			return redirect('/amenities')->with('failed_message','Failed to save changes');
		}
		
	}
	
	//Edit Amenities Third Section 
	public function edit_amenities_third_section(Request $request){
		$user = Auth::user();
		$propertyOptions = SettingModel::where('user_id',$user->id)->take(1)->get();
			
		$amenities['user_id'] = $user->id;
		//$amenities['property_id'] = $propertyOptions[0]->id;
		$amenities['alcoholic_beverages'] = $request->input('alcoholic_beverages');
		$amenities['halal_food'] = $request->input('halal_food');
		
		$result = AmenitiesModel::where('user_id', $user->id)->update($amenities);
		
		if($result){             
			return redirect('/amenities')->with('success_message','Saved changes');
		}else{
			return redirect('/amenities')->with('failed_message','Failed to save changes');
		}
		
	}
}
