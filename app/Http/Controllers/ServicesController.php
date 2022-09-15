<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    //
    public function showAll(){
        $services = Services::where('status', 1)->where('archive', 0)->get();
        return view('pages.service', ['services' => $services])->with('title', 'Services | Vet Clinic and Petcare System');
    }

    public function getServiceId($id){
        $services = Services::FindOrFail($id);
        return view('pages.subpages.services', ['services' => $services]);
    }
}
