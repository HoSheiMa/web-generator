<?php

namespace App\Core\Classes\API;

use Illuminate\Support\Facades\Http;

class Pexels
{

    public function getImage($content, $max = 3, $random = true)
    {
        $headers = [
            'Authorization' => env('PEXEL_KEY', 'INH79N82TcKoocpMwNH47OGk2lxm6L3q7K9dslqjHaTP1MbfzUa0aW5t'),
        ];
        $color = '';
        if ($random) $color = "&color=" . collect(["red", "orange", "yellow", "green", "turquoise", "blue", "violet", "pink", "brown", "black", "gray", "white"])->random();
        $request = Http::withHeaders($headers)->get("https://api.pexels.com/v1/search?query=$content&per_page=$max" . "$color");
        return $request->json();
    }
}
