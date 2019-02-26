<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class IndexController extends Controller
{
    public $url = 'http://api.openweathermap.org/data/2.5/weather';

    public function home() {
      return view("index");
    }
    public function getWeather(Request $request) {
        $query_array = array(
            'q' => $request->city,
            'appid' => '68305f1a128485dde3d9108fc3feaa69'
        );
        $query = http_build_query($query_array);

        $res = file_get_contents(htmlspecialchars_decode($this->url . '?' . $query));
        echo '<pre>';
        print_r($res);
        echo '</pre>';
        return view("index");
    }
}
