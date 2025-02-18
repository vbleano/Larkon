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
use App\Enum\Type_of_IP;
use Illuminate\Support\Facades\DB;


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

            $iac = IAC::create([
                'discID' => $disclosure->discID,
                'Country_of_Citizenship' => $request->input(key: 'Country_of_Citizenship'),
                'Last_Name' => $request->input('Last_Name'),
                'First_Name' => $request->input('First_Name'),
                'Middle_Name' => $request->input('Middle_Name'),
                'Home_Address' => $request ->input('Home_Address'),
                'Work_Address' => $request->input('Work_Address'),
                'Email_Address' => $request->input('Email_Address'),
                'Salutatory' => $request->input('Salutatory'),
                'Main_Affiliation' => $request->input('Main_Affiliation'),
                'Sub_Affiliation' => $request->input('Sub_Affiliation'),
                'Constituent_University' => $request->input('Constituent_University'),
                'College_Unit' => $request->input('College_Unit'),
                'Deparment_Institute' => $request->input('Department_Institute'),
                'Contact_Number' => $request->input('Contact_Number'),
                'Nature_of_Contribution_Role' => $request->input('Nature_of_Contribution_Role'),
                'Percentage_of_Contribution' => $request->input('Percentage_of_Contribution'),
                'Date_of_Birth' => $request->input('Date_of_Birth'),
                'Civil_Status' => $request->input('Civil_Status'),
                'Gender_Sex' => $request->input('Gender_Sex'),
                'Nationality' => $request->input('Nationality'),
            ]);

            $patent = $request->validate([
                'Type_of_Invention' => 'required|in:1,2,3,4,5,6',
                'Purpose_of_Invention' => 'required|string',
                'Background_of_Invention' => 'required|string',
                'Potential_Partners' => 'nullable|string',
                'Key_Novel_Features' => 'required|string|max:255',
                'Application_use_of_Invention' => 'required|string|max:255',
                'Stage_of_Development' => 'required|string|max:255',
                'R_and_D_Cost' => 'required|string|max:255',
                'Past_Oral_Disclosure' => 'nullable|string',
                'Past_Oral_Disclosure_Date' => 'nullable|date',
                'Past_Written_Disclosure' => 'nullable|string',
                'Past_Written_Disclosure_Date' => 'nullable|date',
                'Future_Disclosure_Plans' => 'required|string',
                'TRL' => 'required|in:1,2,3,4,5,6,7,8,9',
            ]);

            // $trademark = $request->validate([
            //     'Type_of_Mark' => 'required|in:1,2,3,4',
            //     'Description_of_the_Mark' => 'required|string',
            //     'Disclaimer' => 'nullable|string',
            //     'Translation_Transliteration' => 'required|string|max:255',
            //     'Collective_Mark' => 'required|boolean',
            //     'Word_to_be_Trademarked' => 'required|string|max:255',
            //     'Mark_has_any_color' => 'required|boolean',
            //     'Colors_of_the_Mark' => 'nullable|string|max:255',
            //     'List_of_specific_goods_services' => 'required|string',
            //     'Future_Potential_Applications' => 'nullable|string',
            //     'NICE_Classification' => 'required|in:1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,
            //                                         16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,
            //                                         31,32,33,34,35,36,37,38,39,40,41,42,43,44,45'
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
