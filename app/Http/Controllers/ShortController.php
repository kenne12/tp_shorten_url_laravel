<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Short;

class ShortController extends Controller
{
    //

    public function show(Request $request, Short $short){
        
        $short->increment('number_of_visitors');
        
        return redirect()->to($short->url);
    }

}
