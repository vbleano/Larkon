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
                'Disclosure_Title' => 'required|string|max:255',
                'Type_of_IP' => 'required|in:1,2,3,4,5',
                'DisclosureDesc' => 'required|string',
                'Funding_Sources' => 'required|string',
                'University_Facilities' => 'required|string',
                'Plan_To_Commercialize' => 'nullable'
           ]);
           
           $disclosure = Disclosure::create([
                'user_id' => Auth::user()->id,
                'Disclosure_Title' => $request->input('Disclosure_Title'),
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

           $request->validate([
            'Country_of_Citizenship' => 'required|string|max:255',
            'Last_Name' => 'required|string|max:255',
            'First_Name' => 'required|string|max:255',
            'Middle_Name' => 'nullable|string|max:255',
            'Email_Address' => 'required|email|max:255',
            'Date_of_Birth' => 'required|date',
            'Home_Address' => 'required|string|max:255',
            'Work_Address' => 'required|string|max:255',
            'Salutatory' => 'required|string|max:50',
            'Main_Affiliation' => 'required|string|max:255',
            'Sub_Affiliation' => 'nullable|string|max:255',
            'Constituent_University' => 'required|string|max:255',
            'College_Unit' => 'required|string|max:255',
            'Department_Institute' => 'required|string|max:255',
            'Contact_Number' => 'required|max:13',
            'Nature_of_Contribution_Role' => 'required|string|max:255',
            'Percentage_of_Contribution' => 'required|integer|min:0|max:100',
            'Civil_Status' => 'required|in:1,2,3,4,5',
            'Gender_Sex' => 'required|in:1,2,3,4',
            'Nationality' => 'required|string|max:255',
        ]);

            $IAC = new IAC();
            $IAC->DiscID = $disclosure->discID;
            $IAC->Country_of_Citizenship = request('Country_of_Citizenship');
            $IAC->Last_Name = request('Last_Name');
            $IAC->First_Name = request('First_Name');
            $IAC->Middle_Name = request('Middle_Name');
            $IAC->Home_Address = request('Home_Address');
            $IAC->Work_Address = request('Work_Address');
            $IAC->Email_Address = request('Email_Address');
            $IAC->Salutatory = request('Salutatory');
            $IAC->Main_Affiliation = request('Main_Affiliation');
            $IAC->Sub_Affiliation = request('Sub_Affiliation');
            $IAC->Constituent_University = request('Constituent_University');
            $IAC->College_Unit = request('College_Unit');
            $IAC->Department_Institute = request('Department_Institute');
            $IAC->Contact_Number = request('Contact_Number');
            $IAC->Nature_of_Contribution_Role = request('Nature_of_Contribution_Role');
            $IAC->Percentage_of_Contribution = request('Percentage_of_Contribution');
            $IAC->Date_of_Birth = date('Y-m-d', strtotime(request('Date_of_Birth')));
            $IAC->Civil_Status = request('Civil_Status');
            $IAC->Gender_Sex = request('Gender_Sex');
            $IAC->Nationality = request('Nationality');
            $IAC->save();


        // dd(Disclosure::where('discID', $disclosure->discID)->first());
        // $iac = IAC::create([

        //     'discID' => Disclosure::where('discID', $disclosure->discID)->first(),
        //     // 'Country_of_Citizenship' => $request->input(key: 'Country_of_Citizenship'),
        //     // 'Last_Name' => $request->input('Last_Name'),
        //     // 'First_Name' => $request->input('First_Name'),
        //     // 'Middle_Name' => $request->input('Middle_Name'),
        //     // 'Home_Address' => $request ->input('Home_Address'),
        //     // 'Work_Address' => $request->input('Work_Address'),
        //     // 'Email_Address' => $request->input('Email_Address'),
        //     // 'Salutatory' => $request->input('Salutatory'),
        //     // 'Main_Affiliation' => $request->input('Main_Affiliation'),
        //     // 'Sub_Affiliation' => $request->input('Sub_Affiliation'),
        //     // 'Constituent_University' => $request->input('Constituent_University'),
        //     // 'College_Unit' => $request->input('College_Unit'),
        //     // 'Deparment_Institute' => $request->input('Department_Institute'),
        //     // 'Contact_Number' => $request->input('Contact_Number'),
        //     // 'Nature_of_Contribution_Role' => $request->input('Nature_of_Contribution_Role'),
        //     // 'Percentage_of_Contribution' => $request->input('Percentage_of_Contribution'),
        //     // 'Date_of_Birth' => $request->input('Date_of_Birth'),
        //     // 'Civil_Status' => $request->input('Civil_Status'),
        //     // 'Gender_Sex' => $request->input('Gender_Sex'),
        //     // 'Nationality' => $request->input('Nationality'),
        // ]);
           
        }else{
            return redirect('/login'); // Redirect to login page or homepage
        }
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
            dd("here");
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


    public function test(){
        if (Auth::user()) {
            return view('/components/ui/avatar');
        }else{
            return redirect('/login'); // Redirect to login page or homepage
        }
    }

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
