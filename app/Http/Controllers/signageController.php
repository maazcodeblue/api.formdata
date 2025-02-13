<?php

namespace App\Http\Controllers;
use App\models\signageModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class signageController extends Controller
{

public function index(){
    return view('signageform');
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

        $store= new signageModel;
        $store->name= $request->name;
        $store->email= $request->email;
        $store->phone= $request->phone;
        $store->indoorPlacement= $request->indoorPlacement;
        $store->outdoorPlacement = $request->outdoorPlacement ;
        $store->bladeMockup = $request->bladeMockup ;
        $store->frontMockup = $request->frontMockup ;
        $store->threeMockup = $request->threeMockup ;
        $store->twoMockup = $request->twoMockup ;
        $store->lettersMockup = $request->lettersMockup ;
        $store->lightboxMockup = $request->lightboxMockup ;
        $store->size= $request->size;
        $store->brandingSolution= $request->brandingSolution;
        $store->installation= $request->installation;
        $store->siteInspection= $request->siteInspection;
        $store->signPermits= $request->signPermits;
        $store->waterProofing= $request->waterProofing;
        $store->ulCertification= $request->ulCertification;
        $store->detail= $request->detail;
        $store->image = $imageName ;

$store->save();
return 'saved successfully';

    }
}
