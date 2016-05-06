<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PromotionalTipsModel;

class PromotionalTipsController extends Controller
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
	
	//Load Promotional Tip Page 
	public function load_promo_tip_page(){
		$promoTips = PromotionalTipsModel::all();
		
		foreach($promoTips as $key => $promoTip){
			$promoTips[$key]->description = $this->getExcerpt($promoTip->description, 0, 100);
		}
		
		return view('promo-tips',['promo_tips' => $promoTips]);
	}
	
	//Get promo tip by id 
	public function get_single_promo_tip_by_id($id){
		$promoTip = PromotionalTipsModel::find($id); 
		return view('promo-tip-single', ['promo_tip' => $promoTip]);
	}
	
	//Get previous promo tip by id 
	public function get_prev_single_promo_tip_by_id($id){
		$promoTip = PromotionalTipsModel::find($id-1); 
		return view('promo-tip-single', ['promo_tip' => $promoTip]);
	}
	
	//Get next  promo tip by id 
	public function get_next_single_promo_tip_by_id($id){
		$promoTip = PromotionalTipsModel::find($id+1); 
		return view('promo-tip-single', ['promo_tip' => $promoTip]);
	}
	
	//MAking excerpt 
	function getExcerpt($str, $startPos=0, $maxLength=100) {
		if(strlen($str) > $maxLength) {
			$excerpt   = substr($str, $startPos, $maxLength-3);
			$lastSpace = strrpos($excerpt, ' ');
			$excerpt   = substr($excerpt, 0, $lastSpace);
			$excerpt  .= '...';
		} else {
			$excerpt = $str;
		}
		
		return $excerpt;
	}
}
