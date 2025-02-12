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
            $disclosure->save();

            $IAC = new IAC();
            $IAC->IACid = $disclosure->uniqueIds;
            $IAC->DiscID = $disclosure->id;
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

            $patent = new Patents();
            $patent->PatentID = $disclosure->uniqueIds;
            $patent->DiscID = $disclosure ->id;
            $patent->Type_of_Invention = request('Type_of_Invention');
            $patent->Purpose_of_Invention = request('Purpose_of_Invention');
            $patent->Background_of_Invention = request('Background_of_Invention');
            $patent->Potential_Partners = request('Potential_Partners');
            $patent->Key_Novel_Features = request('Key_Novel_Features');
            $patent->Application_use_of_Invention = request('Application_use_of_Invention');
            $patent->Stage_of_Development = request('Stage_of_Development');
            $patent->R_and_D_Cost = request('R_and_D_Cost');
            $patent->Past_Oral_Disclosure = request('Past_Oral_Disclosure');
            $patent->Past_Oral_Disclosure_Date = date('Y-m-d', strtotime(request('Past_Oral_Disclosure_Date')));
            $patent->Past_Written_Disclosure = request('Past_Written_Disclosure');
            $patent->Past_Written_Disclosure_Date = date('Y-m-d', strtotime(request('Past_Written_Disclosure_Date')));
            $patent->Future_Disclosure_Plans = request('Future_Disclosure_Plans');
            $patent->TRL = request('TRL');
            $patent->save();

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
        if (Auth::user()) {
            $disclosures = Disclosure::all();
            return view('/general/disclosureList')->with('disclosures',$disclosures);
        } else{
            return redirect('/login'); // Redirect to login page or homepage
        }
    }
}
