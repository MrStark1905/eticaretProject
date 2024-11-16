<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ContentFormRequest;

class AjaxController extends Controller
{
    public function iletisimkaydet(ContentFormRequest $request) {



        $data = $request->all();
        $data["ip"] = request()->ip();

        $lastsave = Contact::create($data);
        return back()->withSuccess("Gönderim Başarılı");
    }

    public function logout() {
        Auth::logout();
        return redirect()->route("anasayfa");
    }
}
