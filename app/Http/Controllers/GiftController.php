<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use App\Models\RequestList;
use App\Models\ValidRequest;
use App\Http\Requests\StoreGift;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class GiftController extends Controller
{
    public function index()
    {
        // $lists = ValidRequest::all();
        $lists = DB::table('validrequests')
            ->join('requests', 'validrequests.request_code', '=', 'requests.code')
            ->select('validrequests.*', 'requests.treatment', 'requests.cost')
            ->where('validrequests.valid', 'true')
            ->get();
        return view('app.gift.index', compact('lists'));
    }

    public function show($id)
    {
        $patient = ValidRequest::where('id', $id)->first();
        return view('app.gift.show', compact('patient', 'id'));
    }

    public function create($id, $amount)
    {
        return view('app.gift.create', compact('id', 'amount'));
    }

    public function store(StoreGift $request)
    {
        $gift = new Gift();
        $gift->validrequest_id = $request->validrequest_id;
        $gift->amount = $request->amount;
        $gift->donor_name = $request->donor_name;
        $gift->donor_fname = $request->donor_fname;
        $gift->email = $request->donor_email;
        $gift->tel = $request->donor_tel;
        $gift->msg = $request->msg;
        $gift->anonyme = 'true';

        if ($gift->save()) {
            Alert::toast("Merci de votre générosité", 'success');
            return redirect()->route('gift');
        } else {
            Alert::toast('Une erreur est survenue', 'error');
            return redirect()->back()->withInput($request->input());
        }
    }
}
