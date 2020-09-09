<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        	CURLOPT_URL => "https://community-open-weather-map.p.rapidapi.com/forecast?q=cairo,eg&units=metric&mode=json&lang=ar&cnt=5",
        	CURLOPT_RETURNTRANSFER => true,
        	CURLOPT_FOLLOWLOCATION => true,
        	CURLOPT_ENCODING => "",
        	CURLOPT_MAXREDIRS => 10,
        	CURLOPT_TIMEOUT => 30,
        	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        	CURLOPT_CUSTOMREQUEST => "GET",
        	CURLOPT_HTTPHEADER => array(
        		"x-rapidapi-host: community-open-weather-map.p.rapidapi.com",
        		"x-rapidapi-key: 91b5f13eafmsh68a341471bdd43dp16be19jsn136626c3bb21"
        	),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        	echo "cURL Error #:" . $err;
        } else {
            $result = json_decode($response);
            $list = $result->list;
            //dd($list);
            $forcasting = array(
                'city'     => $result->city->name,
                'coundtry' => $result->city->country,
                'forcast'  => array()
            );
            foreach($list as $key => $value)
            {
                $forcasting["forcast"][$key]["date"]      = date("Y-m-d", strtotime($value->dt_txt));
                $forcasting["forcast"][$key]["date_name"] = date("D", strtotime($value->dt_txt));
                $forcasting["forcast"][$key]["max_temp"]  = $value->main->temp_max;
                $forcasting["forcast"][$key]["min_temp"]  = $value->main->temp_min;
                $forcasting["forcast"][$key]["weather"]   = $value->weather[0]->description;
                $forcasting["forcast"][$key]["icon"]      = "http://openweathermap.org/img/wn/".$value->weather[0]->icon."@2x.png";
                $forcasting["forcast"][$key]["wind"]      = $value->wind->speed;
                if($key > 6) {
                    break;
                }
            }
        }
        return view('home', compact('forcasting'));
    }
}
