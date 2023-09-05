<?php

namespace App\Http\Controllers;

use App\Models\Pay;
use App\Models\Gift;
use App\Models\RequestList;
use App\Models\ValidRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreValidRequest;
use RealRashid\SweetAlert\Facades\Alert;

class RequestController extends Controller
{
    public function create()
    {
        return view('app.request.create');
    }
    
    public function store(StoreValidRequest $request)
    {
        $check = RequestList::where('code', $request->code)->first();

        if ($check !== null) {

            $code = gen_code();
            $request->session()->put('code_demande', $code);

            $new_request = new ValidRequest();
            $new_request->nom = $request->name;
            $new_request->prenom = $request->fname;
            $new_request->birthday = $request->birthday;
            $new_request->sex = $request->sex;
            $new_request->career = $request->career;
            $new_request->tel = $request->tel;
            $new_request->ms = $request->ms;
            $new_request->city = $request->city;
            $new_request->block = $request->block;
            $new_request->square = $request->square;
            $new_request->house = $request->house;
            $new_request->request_code = $request->code;
            $new_request->code = $request->session()->get('code_demande');

            $update_request = RequestList::where('code', '=', $request->code)->update([
                'valid' => 'true'
            ]);
        } else {
            Alert::toast('Vérifiez le code', 'error');
            return redirect()->back()->withInput($request->input());
        }

        if ($new_request->save() && $update_request) {
            Alert::toast("La requête a été enregistrée", 'success');
            return redirect()->route('request.code');
        } else {
            Alert::toast('Une erreur est survenue', 'error');
            return redirect()->back()->withInput($request->input());
        }
    }

    public function show(Request $request)
    {
        $req_valid = ValidRequest::where('code', $request->code)->first();
        $req = RequestList::where('code', $req_valid->request_code)->first();
        $gift_sum = DB::table('gifts')
            ->select(DB::raw('SUM(amount) as total'))
            ->where('validrequest_id', $req_valid->id)
            ->first();
        $gifts = Gift::where('validrequest_id', $req_valid->id)->get();
        $gift_count = Gift::where('validrequest_id', $req_valid->id)->count();
        return view('app.request.show', compact('req', 'req_valid', 'gift_sum', 'gifts', 'gift_count'));
    }

    public function auth()
    {
        return view('app.request.auth');
    }

    public function code(Request $request)
    {
        $code = $request->session()->get('code_demande');
        return view('app.request.code', compact('code'));
    }

    public function end(Request $request)
    {
        $pay = new Pay;
        $pay->validrequest_code = $request->code;
        $pay->hospital_id = $request->hospital;
        $pay->amount = $request->amount;

        $end = ValidRequest::where('code', $request->code)
            ->update(['transmis' => 'true']);

        if ($pay->save() && $end) {
            Alert::toast("La requête a été enregistrée", 'success');
            return view('app.request.end');
        } else {
            Alert::toast('Une erreur est survenue', 'error');
            return redirect()->back();
        }
    }
}
