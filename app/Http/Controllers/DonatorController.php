<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use App\Models\RequestList;
use App\Models\ValidRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonatorController extends Controller
{
    public function follow_auth()
    {
        return view('app.donator.follow_auth');
    }


    public function follow(Request $request)
    {
        $req_valid = ValidRequest::where('code', $request->code)->first();
        
        $req = RequestList::where('code', $req_valid->request_code)->first();

        $gift = DB::table('gifts')
                ->select(DB::raw('SUM(amount) as total'))
                ->where('validrequest_id', $req_valid->id)
                ->first();

        $gift_count = Gift::where('validrequest_id', $req_valid->id)->count();
                
        return view('app.donator.follow', compact('req', 'req_valid', 'gift', 'gift_count'));
    }
}
