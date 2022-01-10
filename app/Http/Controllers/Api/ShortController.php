<?php

namespace App\Http\Controllers\Api;
use App\Models\Short;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShortController extends Controller
{
    public function store(Request $request)
    {
      $validated = $request->validate([
        'url' => ['required', 'url'],
      ]);

      $short = new Short();
      $short->short_code = Short::randomShortCode();
      $short->url = $validated['url'];
      $short->number_of_visitors = 0;
      $short->save();

      return $short;
    }

    public function get(Request $request , $short_code){

        //return "Short url ".$short_code;

        return Short::getByShortCode($short_code);
    }

}
