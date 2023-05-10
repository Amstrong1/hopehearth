<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Requests\StorePartner;
use RealRashid\SweetAlert\Facades\Alert;

class PartnerController extends Controller
{
    public function create()
    {
        return view('app.partner.create');
    }
    public function store(StorePartner $request)
    {
        $partner = new Partner();
        $partner->name = $request->name;
        $partner->email = $request->email;
        $partner->tel = $request->tel;
        $partner->country = $request->country;
        $partner->city = $request->city;
        $partner->adress = $request->adress;
        $partner->motivation = $request->object;

        if ($partner->save()) {
            Alert::toast("La requête a été enregistrée", 'success');
            return redirect()->route('partner.create');
        } else {
            Alert::toast('Une erreur est survenue', 'error');
            return redirect()->back()->withInput($request->input());
        }
    }
}
