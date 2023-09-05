<?php

namespace App\Http\Controllers;

use App\Models\Pay;
use App\Models\RequestList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreRequestCreate;

class AdminController extends Controller
{
    public function req_new()
    {
        return view('app.admin.new_req');
    }

    public function req_store(StoreRequestCreate $request)
    {
        $valid = new RequestList();
        $valid->hospital_id = Auth::user()->hospital->id;
        $valid->name_doctor = $request->doctor_name;
        $valid->fname_doctor = $request->doctor_fname;
        $valid->tel_doctor = $request->doctor_tel;
        $valid->name_patient = $request->name_patient;
        $valid->fname_patient = $request->fname_patient;
        $valid->tel_patient = $request->tel_patient;
        $valid->diagnostic = $request->diagnostic;
        $valid->treatment = $request->treatment;
        $valid->cost = $request->cost;

        $valid->birthday = $request->birthday;
        $valid->sex = $request->sex;
        $valid->career = $request->career;
        $valid->tel = $request->tel;
        $valid->ms = $request->ms;
        $valid->city = $request->city;
        $valid->block = $request->block;
        $valid->square = $request->square;
        $valid->house = $request->house;

        $valid->code = gen_code();

        if ($valid->save()) {
            Alert::toast("La demande a été enregistré", 'success');
            return redirect()->route('dashboard');
        } else {
            Alert::toast('Une erreur est survenue', 'error');
            return redirect()->back()->withInput($request->input());
        }
    }

    public function req_list()
    {
        $lists = RequestList::where('hospital_id', Auth::user()->hospital->id)->get();

        return view('app.admin.req_list', compact('lists'));
    }

    public function pending_list()
    {
        $lists = RequestList::where('valid', 'false')->where('hospital_id', Auth::user()->hospital->id)->get();
        return view('app.admin.pending', compact('lists'));
    }

    public function pay()
    {
        // $lists = Pay::where('hospital_id', Auth::user()->hospital->id)->get();
        $lists = DB::table('pays')
            ->join('requests', 'requests.code', '=', 'pays.validrequest_code')
            ->select('pays.*', 'requests.treatment',  'requests.cost')
            ->where('pays.hospital_id', Auth::user()->hospital->id)
            ->where('pays.status', 'unconfirmed')
            ->get();

        return view('app.admin.pay', compact('lists'));
    }

    public function pay_store(Request $request)
    {
        $pay = Pay::where('validrequest_code', $request->code)
            ->update(['status' => 'confirmed', 'updated_by' => Auth::user()->login]);

        $delete = RequestList::where('code', $request->code)
            ->update(['valid' => 'false']);

        if ($pay && $delete) {
            Alert::toast("La demande a été enregistré", 'success');
            return back();
        } else {
            Alert::toast('Une erreur est survenue', 'error');
            return back();
        }
    }

    public function pay_history()
    {
        $lists = DB::table('pays')
            ->join('requests', 'requests.code', '=', 'pays.validrequest_code')
            ->select('pays.*', 'requests.treatment',  'requests.cost')
            ->where('pays.hospital_id', Auth::user()->hospital->id)
            ->where('pays.status', 'confirmed')
            ->get();

        return view('app.admin.pay_history', compact('lists'));
    }

    public function setting()
    {
        return view('app.admin.setting');
    }
}
