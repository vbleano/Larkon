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
            dd(request('Plan_To_Commercialize'));
           $request->validate([
                'DisclosureTitle' => 'required|string|max:255',
                'DisclosureDesc' => 'required|string',
                'Funding_Sources' => 'required|string',
                'University_Facilities' => 'required|string',
                'Plan_To_Commercialize' => 'nullable|boolean'
           ]);
           dd('here');
           
           $disclosure = Disclosure::create([
                'user_id' => Auth::user()->id,
                'Disclosure_Title' => $request->input('DisclosureTitle'),
                'Type_of_IP' => $requst->input('Type_if_IP'),
                'Short_Description' => $requst->input('DisclosureDesc'),
                'Funding_Sources' => $requst->input('Funding_Sources'),
                'Year_Submitted' => date('Y'),
                'Month_Submitted' => date('M'),
                'Date_Submitted' => date('d'),
                'Status' => '1',
                'Plan_To_Commercialize' => $request->Plan_to_Commercialize == true ? 1:0,
                'University_Facilities' => $requst->input('University_Facilities'),

           ]);
        }else{
            return redirect('/login'); // Redirect to login page or homepage
        }
    }

    public function CreateDisclosure(Request $request){
        if (Auth::user()) {
            
            
            // $disclosure = new Disclosure();
            // $disclosure->user_id = Auth::user()->id;
            // $disclosure->Disclosure_Title = request('DisclosureTitle');
            // $disclosure->Type_of_IP = request('Type_of_IP');
            // $disclosure->Short_Description = request('DisclosureDesc');
            // $disclosure->Funding_Sources = request('Funding_Sources');
            // $disclosure->Year_Submitted = date('Y');
            // $disclosure->Month_Submitted = date('M');
            // $disclosure->Date_Submitted = date('d');
            // $disclosure->Status = 1;
            // if($disclosure->Plan_To_Commercialize == null){
            //     $disclosure->Plan_To_Commercialize = 0;
            // } else { $disclosure->Plan_To_Commercialize = 1; }
            // $disclosure->University_Facilities = request('University_Facilities');
            // $disclosure->save();

            if($disclosure->Type_of_IP == 1 || $disclosure->Type_of_IP == 2 || $disclosure->Type_of_IP == 3){
                
                
            } elseif($disclosure->Type_of_IP == 4){

            } elseif($disclosure->Type_of_IP == 5){
                
            }else{
                return Redirect::back();
            }

            return redirect('/');

            // $request->validate([
            //     'DisclosureTitle' => 'required|string',
            // ]);



            // return redirect()->back()->with('success', 'Profile saved successfully!');
    }

    public function viewAllDisclosures(){
        if (Auth::user()) {
            $disclosures = Disclosure::all();
            return view('/general/disclosureList')->with('disclosures',$disclosures);
        } else{
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
            echo("here");
            // $disclosure = Disclosure::find($id);
            // $disclosure->delete();
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
