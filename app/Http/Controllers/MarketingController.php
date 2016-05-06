<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\SettingModel;
use App\AmenitiesModel;
use App\AdminSettingModel;
use App\User;
use App\URL;
use Auth;  
use Response;               

class MarketingController extends Controller
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
	
	//Load marketing page 
	public function load_marketing_page(){
		$user = Auth::user();
		$data = AdminSettingModel::find(1);
		$propertyOptions = SettingModel::where('user_id',$user->id)->take(1)->get();
		return view('marketing', ['property_options' => $propertyOptions, 'admin_setting_data' => $data]);
	} 
	
	//Download marketing file 
	public function download_marketing_file(){
		$rowNo = AdminSettingModel::count();
		$data = AdminSettingModel::find(1);
		//return response()->download(public_path().'/'.$data->file_marketing);
		
		$file= public_path().'/'. $data->file_marketing;
        $headers = array(
              'Content-Type: image/jpg',
            );
        return Response::download($file, 'filename.jpg', $headers);
	}
}
