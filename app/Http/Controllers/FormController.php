<?php

namespace App\Http\Controllers;
use App\models\myForms;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //

public function index(){
    return view('form2');
}

public function store(Request $request){




$imageName= null;
    if ($request->has('image')) {
        $image = $request->file('image');
        $originalName = $image->getClientOriginalName();
        $imageName = Str::slug(pathinfo($originalName, PATHINFO_FILENAME)) . '.' . $image->getClientOriginalExtension();
        $image->move('public/images', $imageName);
    } elseif ($request->filled('imageUrl')) {
        $imageUrl = $request->input('imageUrl');
        // Set imageName to the provided URL
        $imageName = $imageUrl;
    }
    $store= new myForms;
    $store->name= $request->name;
    $store->email= $request->email;
    $store->phone= $request->phone;
    $store->indoorPlacement= $request->indoor;
    $store->outdoorPlacement = $request->outdoor ;
    $store->bladeMockup = $request->bladeMockup ;
    $store->frontMockup = $request->frontMockup ;
    $store->threeMockup = $request->threeMockup ;
    $store->twoMockup = $request->twoMockup ;
    $store->lettersMockup = $request->lettersMockup ;
    $store->lightboxMockup = $request->lightboxMockup ;
    $store->detail= $request->detail;
    $store->image = $imageName ;
   
    
    $store->save();
    return 'saved successfully';


   
}

}
