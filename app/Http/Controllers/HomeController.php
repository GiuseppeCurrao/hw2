<?php

    use Illuminate\Routing\Controller as BaseController;

    class HomeController extends BaseController{

        public function view(){
            return view('home');
        }

        public function notizie(){
            $json=Http::get("http://api.mediastack.com/v1/news",
            [
                "access_key" => env("MEDIA_APIKEY"),
                'keyword' => 'covid',
                'language' => 'it',
                'sources' => 'ilfattoquotidiano',
            ]);
            if($json->failed()) abort(500);
            $newjson = array();
            for($i=0; $i<4; $i++){
                $newjson[]= array(
                    'title' => $json['data'][$i]['title'],
                    'image' => $json['data'][$i]['image'],
                    'url' => $json['data'][$i]['url']
                );
            }
            return response()->json($newjson);
        }
    }
?>