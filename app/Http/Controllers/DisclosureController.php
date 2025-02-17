<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Disclosure;
use App\Models\IAC;
use App\Models\Patents;
use App\Models\Copyright;
use App\Models\Trademark;
use Illuminate\Support\Facades\DB;
use App\Enum\Type_of_IP;
use App\Http\Controllers\Rule;

class DisclosureController extends Controller{
    public function discPage(){
        if (Auth::user()) {
            return view('/components/forms/DiscForm');
        } else{
            return redirect('/login'); // Redirect to login page or homepage
        }
    }

    public function validateDisc(Request $request){
        if(Auth::user()){
            
           $request->validate([
            
                'DisclosureTitle' => 'required|string|max:255',
                'Type_of_IP' => 'required|in:1,2,3,4,5',
                'DisclosureDesc' => 'required|string',
                'Funding_Sources' => 'required|string',
                'University_Facilities' => 'required|string',
                'Plan_To_Commercialize' => 'required|boolean'
           ]);
           
           $disclosure = Disclosure::create([
                'user_id' => Auth::user()->id,
                'Disclosure_Title' => $request->input('DisclosureTitle'),
                'Type_of_IP' => $request->input('Type_of_IP'),
                'Short_Description' => $request->input('DisclosureDesc'),
                'Funding_Sources' => $request->input('Funding_Sources'),
                'Year_Submitted' => date('Y'),
                'Month_Submitted' => date('M'),
                'Date_Submitted' => date('d'),
                'Status' => '1',
                'Plan_To_Commercialize' => $request->Plan_to_Commercialize == true ? 1:0,
                'University_Facilities' => $request->input('University_Facilities'),

           ]);
           
        }else{
            return redirect('/login'); // Redirect to login page or homepage
        }
    }

    public function viewDisclosure($id){
        if (Auth::user()) {
            $disclosures = Disclosure::find($id);
            return view('/general/disclosureList')->with('disclosures',$disclosures);
        } else{
            return redirect('/login'); // Redirect to login page or homepage
        }
    }

    // public function updateDisclosure(Request $request, $id){
    //     if (Auth::user()) {
    //         $disclosures = Disclosure::find($id);


    //         return view('/general/disclosureList')->with('disclosures',$disclosures);
    //     } else{
    //         return redirect('/login'); // Redirect to login page or homepage
    //     }
    // }


    public function DestroyDisclosure($id){
        if (Auth::user()) {
            $disclosure = Disclosure::where('discId','=',$id)->get();
            $disclosure->each->delete();
            // <--------- DELETE IAC LINKS HERE -------------->
            // <--------- DELETE IP LINKS HERE -------------->
            // <--------- DELETE Partners LINKS HERE -------------->
            // <--------- DELETE Agreements LINKS HERE -------------->
            // return redirect('/ViewAllDisclosures');
        } else{
            return redirect('/login'); // Redirect to login page or homepage
        }
    }
}
