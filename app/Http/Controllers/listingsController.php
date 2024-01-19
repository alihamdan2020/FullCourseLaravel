<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\User;

class listingsController extends Controller
{
//show all listings
    public function index(){
        // $listings=Listing::latest()->filter(request(['tag','sort','search']))->simplePaginate(2);
        //simplepaginate(2) mean hide number of pages, just show previous and next button
        $listings=Listing::latest()->filter(request(['tag','sort','search']))->Paginate(6);
        return view('listenings',['heading'=>'main title','topics' => $listings]);
    }

//show single listing based on its ID
    public function show($id){
        $listings=Listing::findorfail($id);
        return view('show',['onetopic' => $listings]);
    }

//show create jobs page
    public function create(){
        return view('create');
    }
    
    public function store(request $req){
        $userId = session('id');
        //the value of this session is coming from user|Controler
        $formFields= $req->validate([
                'title' =>'required',
                'company' => 'required|unique:listings',
                'location' => 'required',
                'email' => 'required|email',
                'description' => 'required',
                'website' => 'required',
                'tag' => 'required',
            ]);
            $formFields['user_id']=$userId;
           
            if($req->hasFile('logo')){
                $formFields['logo']=$req->file('logo')->store('logos','public');
                //code above store file under public/logos
            }
            Listing::create($formFields);
        //     //methode above make same functioanlity of below
        //     //which i can replace just listing::create() by all instructions below
        //     //let say i want use above instead of below
        //     //ut in case you want use Listing::create you should return
        //     //to Listing model and add one line protectd $fillable ...
        //     // $list=new Listing();
        //     // $list->title=request('title');
        //     // $list->company=request('company');
        //     // $list->email=request('email');
        //     // $list->website=request('website');
        //     // $list->tag=request('tag');
        //     // $list->location=request('location');
        //     // $list->description=request('description');
            
        //     // $list->save();
        //     //this with you can see it in flas.blade.php
        //     //when it redirect to /listings it create a session named message with
        //     //that message your listings has b.....
            return redirect('/listings')->with('message','your listings has been added succefully');
    }

    public function edit($id){
        $singleListing=Listing::findorfail($id);
        return view('edit',['onetopic' => $singleListing]);
    }

    public function update(Listing $listing,Request $req){
        $formFields= $req->validate([
            'title' =>'required',
            'company' => 'required',
            'location' => 'required',
            'email' => 'required|email',
            'description' => 'required',
            'website' => 'required',
            'tag' => 'required',
        ]);
               
        if($req->hasFile('logo')){
            $formFields['logo']=$req->file('logo')->store('logos','public');
            //code above store file under public/logos
        }
        $listing->update($formFields);
        return redirect('/listings');
    }
    
    public function destroy(Listing $abs){
        $abs->delete();
        return redirect('/listings')->with('message','lisitngs has bedd deleted succefully');
    }
    

    // select listings of specific user
    public function manage($id){
        $userlisrtigs=Listing::all()->where('user_id','=',$id);
        return view('userlistings',['test'=>$userlisrtigs]);
    }
    
    
    
    
    
    
    
    
    
    public function testComponents(){
        $listings=Listing::all();
        $allusers=User::all();
        return view ('components',['alltopics' => $listings,'allmyuser'=>$allusers]);
    }
}
