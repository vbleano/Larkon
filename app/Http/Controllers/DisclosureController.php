<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Disclosure;
use App\Models\IAC;

class DisclosureController extends Controller{
    public function discPage(){
        if (Auth::user()) {
            return view('/components/forms/DiscForm');
        } else{
            return redirect('/login'); // Redirect to login page or homepage
        }
    }

    public function CreateDisclosure(Request $request){
        if (Auth::user()) {
            $disclosure = new Disclosure();
            $disclosure->user_id = Auth::user()->id;
            $disclosure->Disclosure_Title = request('DisclosureTitle');
            $disclosure->Short_Description = request('DisclosureDesc');
            $disclosure->Funding_Sources = request('Funding_Sources');
            $disclosure->Year_Submitted = date('Y');
            $disclosure->Month_Submitted = date('M');
            $disclosure->Date_Submitted = date('d');
            $disclosure->Status = 1;
            if($disclosure->Plan_To_Commercialize == null){
                $disclosure->Plan_To_Commercialize = 0;    
            } else { $disclosure->Plan_To_Commercialize = 1; }
            $disclosure->University_Facilities = request('University_Facilities');
            // dd($disclosure->Funding_Sources);
            $disclosure->save();
            return redirect('/');
        } else{
            return redirect('/login'); // Redirect to login page or homepage
        }

            // $request->validate([
            //     'DisclosureTitle' => 'required|string',
            // ]);
            


            // return redirect()->back()->with('success', 'Profile saved successfully!');
    }

    public function viewAllDisclosures(){

    }
}
