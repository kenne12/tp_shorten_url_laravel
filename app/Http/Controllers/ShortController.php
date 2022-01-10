<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Short;

class ShortController extends Controller
{
    //

    public function show(Request $request, Short $short){
        $short->number_of_visitors +=1;
        $short->save();
        return redirect()->to($short->url);
    }

}
