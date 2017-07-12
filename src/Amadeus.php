<?php
namespace AmadeusNonymous\Amadeus;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\ServiceProvider;


class Amadeus extends Controller
{
	  public static $apikey;
	  public static $origin;
	  public static $sandboxlink;
	  public static $livelink;
	  public static $sandbox;
	  public static $timeout;
	  public static $RETURNTRANSFER;
	  public static $MAXREDIRS = 10;

	 public function __construct()
	 {
	 	self::$apikey      			= config('amadeus.apikey');
	 	self::$origin      			= config('amadeus.origin');
	 	self::$sandboxlink 			= config('amadeus.sandboxlink');
	 	self::$livelink    			= config('amadeus.livelink');
	 	self::$sandbox     			= config('amadeus.sandbox');
	 	self::$timeout     			= config('amadeus.timeout');
	 	self::$RETURNTRANSFER       = config('amadeus.RETURNTRANSFER');
	 }


	 public static function make(array $data,$service,$type='POST')
	 {
 		
	 	$parameters  = self::$sandbox == true ?  self::$sandboxlink : self::$livelink;
	 	$parameters .= '/'.$service;
	 	$parameters .= '?apikey='.self::$apikey;


	 	foreach($data as $k => $v)
	 	{
	 		$parameters .= '&'.$k.'='.$v;
	 	}

		  $curl = curl_init();
		  curl_setopt_array($curl, array(
		  CURLOPT_URL => $parameters,
		  CURLOPT_RETURNTRANSFER => self::$RETURNTRANSFER,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => self::$MAXREDIRS,
		  CURLOPT_TIMEOUT => self::$timeout,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => $type,
		  CURLOPT_HTTPHEADER => array("cache-control: no-cache"),
		  ));
		$response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);
		if ($err) {
		  return response()->json(['errors'=>$err]);
		} else {
		  return $response;
		}
	 }

}