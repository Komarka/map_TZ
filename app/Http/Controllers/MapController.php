<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GMaps;

class MapController extends Controller
{
    public function index(){
    	$config['center']='Kiev,Ukraine';
        $config['zoom']='14';
        $config['map_height']='500px';
        $config['scrollwheel']=false;
        GMaps::initialize($config);
        $map = GMaps::create_map();
    	return view('map',['map'=>$map]);
    }

    public function addMarker(Request $req){
    	
    	if($req->has('place') && $req->method('post')){
    	$config['center']='Kiev,Ukraine';
        $config['zoom']='14';
        $config['map_height']='500px';
        $config['scrollwheel']=false;
        GMaps::initialize($config);
    	$marker['position']=$req->input('place');
    	$marker['infowindow_content']=explode(',',$req->input('place'))[0];
    	GMaps::add_marker($marker);
    	$map = GMaps::create_map();
    	return view('map',['map'=>$map]);
    	}
    }
}
