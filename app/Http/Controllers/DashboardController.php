<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use PDF;
use PDF2;
use Carbon\Carbon;
use App\library\PrayTime;
use App\SettingModel;
use App\User;
use Auth;

class DashboardController extends Controller
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

	//Load Dashboard 
	public function load_dashboard(){
		$user = Auth::user();
		$propertyOptions = SettingModel::where('user_id',$user->id)->take(1)->get();
		if(count($propertyOptions) > 0){
			if(!empty($propertyOptions[0]->city_lat)){
				$currentCityLat = $propertyOptions[0]->city_lat;
				$currentCityLng = $propertyOptions[0]->city_lng;
			}else{
				$currentCityLat = 3.139;
				$currentCityLng = 101.6869;
			}
		}else{
			$currentCityLat = 3.139;
			$currentCityLng = 101.6869;
		}
		//print_r($propertyOptions); exit;
		//$distance = $this->get_distance_between_current_place_and_kaba($currentCityLat, $currentCityLng, 21.42, 39.82);
		$distance = $this->distance($currentCityLat, $currentCityLng, 21.42, 39.82); //in km
		$distance = round($distance, 3);
		$direction = $this->get_qiblah_direction($currentCityLat, $currentCityLng, 21.42, 39.82);
		$prayTimeTable = $this->get_pray_time_table();

		//$pdf = PDF2::make();
		//$pdf->addPage('<html><head></head><body><b>Hello World</b></body></html>');
		//$pdf->send();
		
		$data['distanceFromKaba'] = $distance;
		$data['directionOfKaba'] = $direction;
		//$view = \View::make('dashboard', ['distanceFromKaba' => $distance, 'directionOfKaba' => $direction])->render();

		//$pdf = App::make('dompdf.wrapper');
		//$pdf->loadHTML($view);
		//return $pdf->stream('dashboard.pdf');
		
		return view('dashboard', ['distanceFromKaba' => $distance, 'directionOfKaba' => $direction, 'prayTimeTable' => $prayTimeTable, 'property_options' => $propertyOptions]);
	}            
	               
	       
	/**Get distance between hotel and kaba**/
	public function get_distance_between_current_place_and_kaba($currentPlaceLat, $currentPlaceLng, $kabaLat, $kabaLng){
		$base_url = "http://maps.googleapis.com/maps/api/directions/json?sensor=false";
		$mode = 'driving';            
		$units = 'imperial';     
			           
		$locationsUrl = $base_url."&origin=".$currentPlaceLat.",".$currentPlaceLng."&destination=".$kabaLat.",".$kabaLng."&sensor=false&mode=".$mode."&units=".$units;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $locationsUrl);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$distanceData = curl_exec($ch);
		curl_close($ch);   
		$distanceData = json_decode($distanceData, TRUE); 
		
		print_r($distanceData);exit;
		$distance = (float) $distanceData['routes'][0]['legs'][0]['distance']['text'];	
		return $distance;           
		                  	
	}   
	   
	                   
	/*Get distance between from Kaba in km*/
	function distance($latA, $lonA, $latB, $lonB)
	{
        // convert from degrees to radians
        $latA = deg2rad($latA); $lonA = deg2rad($lonA);
        $latB = deg2rad($latB); $lonB = deg2rad($lonB);

        // calculate absolute difference for latitude and longitude
        $dLat = ($latA - $latB); 
        $dLon = ($lonA - $lonB); 

        // do trigonometry magic  
        $d = sin($dLat/2) * sin($dLat/2) + cos($latA) * cos($latB) * sin($dLon/2) *sin($dLon/2);
        $d = 2 * asin(sqrt($d));
        return $d * 6371;
	}   
	
	//Get qiblah direction 
	public function get_qiblah_direction($currentPlaceLat, $currentPlaceLng, $kabaLat, $kabaLng){
		//$currentPlaceLat = $this->coordinate2deg($currentPlaceLat);
		//$currentPlaceLng = $this->coordinate2deg($currentPlaceLng);
		//$kabaLat = $this->coordinate2deg($kabaLat);
		//$kabaLng = $this->coordinate2deg($kabaLng);
		
		$direction = atan(sin(deg2rad($kabaLng -  $currentPlaceLng))/((cos(deg2rad($currentPlaceLat))*tan(deg2rad($kabaLat)))-(sin(deg2rad($currentPlaceLat))*cos(deg2rad($kabaLng -  $currentPlaceLng)))));
		return round($direction,3);
	}
	
	
	//Make coordinate to degree 
	 public function coordinate2deg ($value) {
        $pattern = "/(\d{1,2})Â°((\d{1,2})')?((\d{1,2})\")?([NSEW])/i";
        preg_match($pattern, $value, $matches); 
        $degree = $matches[1] + ($matches[3] / 60) + ($matches[5] /3600);
        $direction = strtoupper($matches[6]);
		
        if ($direction == 'S' || $direction == 'W') {
            $degree = -1 * $degree;
        }
        
        return $degree;
    }
	       
	
	/**Get pray time table **/
	public function get_pray_time_table(){
		$user = Auth::user();
		$propertyOptions = SettingModel::where('user_id',$user->id)->take(1)->get();
		if(count($propertyOptions) > 0){
			if(!empty($propertyOptions[0]->city_lat)){
				$currentCityLat = $propertyOptions[0]->city_lat;
				$currentCityLng = $propertyOptions[0]->city_lng;
			}else{
				$currentCityLat = 3.139;
				$currentCityLng = 101.6869;
			}
		}else{
			$currentCityLat = 3.139;
			$currentCityLng = 101.6869;
		}
		$timeTable = '';
		//print_r($distance);exit;
		
		$timeTable = '<table class="table table-schedule">
					<thead>
						<tr style="width: 100%">
							<th class="first"  style="width: 12%">Date</th>
							<th style="width: 12%">Day</th>
							<th style="width: 12%">Fajr</th>
							<th style="width: 12%">Sunrise</th>
							<th style="width: 12%">Zohor</th>
							<th style="width: 12%">Asar</th>
							<th style="width: 12%">Maghrib</th>
							<th class="last" style="width: 12%">Isya</th>
							</tr> 
							</thead>    
							<tbody>'; 

												
		$startOfMonth = Carbon::now()->startOfMonth()->day;
		$endOfMonth = Carbon::now()->endOfMonth()->day;
		$today = Carbon::now()->day;
		$month = Carbon::now()->month;
		$year = Carbon::now()->year;
															
																		
		$timeTable .= '<tr class="fill"><td colspan="8">&nbsp;</td></tr>';
														                        
		for($i=$startOfMonth; $i<=$endOfMonth; $i++){
			$str = strval($year).'-'.strval($month).'-'.strval($i);
			$date = strtotime($str);
			$prayTime = new PrayTime(4);
			$prayTimes = $prayTime->getPrayerTimes($date, $currentCityLat, $currentCityLng, 8);  /**Previous 43,-80 **/
																
			if($i%2==0){
				$class = 'class="highlight"';     
			}else{
				$class = '';
			}
								     								   
			if($i == $today){
				$class = 'class="active '.$class.'"';
			}else{  
				$class = 'class="'.$class.'"';
			}											
										             				
			$timeTable .= '<tr '.$class.' style="width: 100%;">  
								<td class="first" style="width: 12%">'.$i.'</td>
								<td style="width: 12%;">'.date('l', $date).'</td>
								<td style="width: 12%!important;">'.$prayTimes[0].'</td>
								<td style="width: 12%!important;">'.$prayTimes[1].'</td>    
								<td style="width: 12%;">'.$prayTimes[2].'</td>
								<td style="width: 12%;">'.$prayTimes[3].'</td>
								<td style="width: 12%;">'.$prayTimes[5].'</td>
								<td class="last" style="width: 12%">'.$prayTimes[6].'</td>
							</tr>';
		}
															
		$timeTable .= '<tr class="fill">
							<td colspan="8">&nbsp;</td>
						</tr>
						</tbody>
						</table>'; 
						
		return $timeTable;
	}
	
	
	/*Generate PDF*/
	public function generate_pdf(){
		$prayTimeTable = $this->get_pray_time_table();
		return $this->generate_stream_of_pray_time_table_pdf($prayTimeTable);
		//return $this->download_of_pray_time_table_pdf($prayTimeTable);
	}
	
	/*stream  pray time table pdf*/
	public function generate_stream_of_pray_time_table_pdf($prayTimeTable){
		$monthYear = Carbon::now()->startOfMonth()->formatLocalized('%B, %Y');
		$pdf = PDF::loadHTML($prayTimeTable);
		return $pdf->stream('pray-time-table-'.$monthYear.'.pdf'); 
	}       
                               	
	/*stream  pray time table pdf*/
	public function download_of_pray_time_table_pdf($prayTimeTable){
		$monthYear = Carbon::now()->startOfMonth()->formatLocalized('%B, %Y');
		$pdf = PDF::loadHTML($prayTimeTable);
		return $pdf->download('pray-time-table-'.$monthYear.'.pdf'); 
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
}
