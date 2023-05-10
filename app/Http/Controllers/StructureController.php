<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Hospital;
use App\Http\Requests\StructureStore;
use RealRashid\SweetAlert\Facades\Alert;

class StructureController extends Controller
{
    public function create()
    {
        return view('app.structure.create');
    }
    public function store(StructureStore $request)
    {

        $user = new User();
        $user->login = $request->login;
        $user->password = $request->password;

        if ($user->save()) {
            $user_id = User::where('login', $request->login)->first();
            $structure = new Hospital();
            $structure->user_id = $user_id->id;
            $structure->name = $request->login;
            $structure->city = $request->city;
            $structure->adress = $request->adress;
            $structure->country = $request->country;

            if ($structure->save()) {
                Alert::toast("Structure ajoutée", 'success');
                return redirect()->route('login');
            }
        } else {
            Alert::toast('Une erreur est survenue', 'error');
            return redirect()->back()->withInput($request->input());
        }
    }
}
