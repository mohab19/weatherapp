<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
use App\News;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($lang, $city = 'Riyadh')
    {
        $lang = \Lang::locale();
        /*$curl = curl_init();
        curl_setopt_array($curl, array(
        	CURLOPT_URL => "https://api.openweathermap.org/data/2.5/onecall?lat=24.7136&lon=46.6753&exclude=hourly&lang=".$lang."&units=metric&appid=ea9afa67b09d57bb2cecc4756e51e30e",
        	CURLOPT_RETURNTRANSFER => true,
        	CURLOPT_FOLLOWLOCATION => true,
        	CURLOPT_ENCODING => "",
        	CURLOPT_MAXREDIRS => 10,
        	CURLOPT_TIMEOUT => 30,
        	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        	CURLOPT_CUSTOMREQUEST => "GET",
        	CURLOPT_HTTPHEADER => array(),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        	echo "cURL Error #:" . $err;
        } else {
            $result = json_decode($response);
            $list = $result->daily;
            //dd($list);
            $forcasting = array(
                'city'     => $result->timezone,
                'forcast'  => array()
            );
            foreach($list as $key => $value)
            {
                $forcasting["forcast"][$key]["date"]      = gmdate("Y-m-d", $value->dt);
                $forcasting["forcast"][$key]["date_name"] = gmdate("D", $value->dt);
                $forcasting["forcast"][$key]["max_temp"]  = intval($value->temp->max);
                $forcasting["forcast"][$key]["min_temp"]  = intval($value->temp->min);
                $forcasting["forcast"][$key]["weather"]   = $value->weather[0]->description;
                $forcasting["forcast"][$key]["icon"]      = "http://openweathermap.org/img/wn/".$value->weather[0]->icon."@2x.png";
                $forcasting["forcast"][$key]["wind"]      = $value->wind_speed;
                if($key > 6) {
                    break;
                }
            }
        }

        if(request()->ajax()) {
            $view = view('climate', ['forcasting' => $forcasting])->render();
            return \Response::json(['status' => 200, 'view' => $view]);
        }*/

        $cities     = City::all();
        $news       = News::all();
        $categories = Category::all();
        return view('home', compact('cities', 'categories', 'news'));
    }

    public function getLocation($lang, Request $request)
    {
        if(!empty($request->latitude) && !empty($request->longitude)) {
            //send request and receive json data by latitude and longitude
            $url = 'https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyDI2SNijuvKmsjq3b9iVyQuuKppfqOenLQ&latlng='.trim($request->latitude).','.trim($request->longitude).'&sensor=false';
            $json = @file_get_contents($url);
            $data = json_decode($json);
            $status = $data->status;
            //if request status is successful
            if($status == "OK") {
                //get address from json data
                $location = $data->results[0]->formatted_address;
            } else {
                $location =  '';
            }

            //return address to ajax
            return $location;
        }
    }

    public function chooseLocation($lang, Request $request)
    {

    }

    public function searchCity($city)
    {
        $result = City::where('name_ar', 'like', '%'.$city.'%')->
                        orWhere('name_en', 'like', '%'.$city.'%')->
                        get();
        return $result;
    }

    public function side()
    {
        return view('radar.side');
    }

}
