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

            return redirect('/');
        } else{
            return redirect('/login'); // Redirect to login page or homepage
        }

            // $request->validate([
            //     'DisclosureTitle' => 'required|string',
            // ]);



            // return redirect()->back()->with('success', 'Profile saved successfully!');
    }

    public function iacPage(Request $request){

        $request->validate([ //Need Ayusin yung mga required fields.
            'Country_of_Citizenship' => 'required|string',
            'First_Name' => 'required|string|max:255',
            'Last_Name' => 'required|string|max:255',
            'Middle_Name' => 'required|string|max:255',
            'Work_Address' => 'required|string|max:255',
            'Home_Address' => 'required|string|max:255',
            'Constituent_University' => 'required|string|max:255',
            'College_Unit' => 'required|string|max:255',
            'Deparment/Institutions' => 'required|string|max:255',
            'Salutatory' => 'required|string|max:255',
            'Main_Affiliation' => 'required|string|max:255',
            'Sub_Affiliation' => 'required|string|max:255',
            'Nature_of_Contribution' => 'required|string|max:255',
            'Percentage_of_Contribution' => 'required|integer|max:20',
            'Email_Address' => 'required|email|unique:User,email',
            'Contact_Number' => 'required|integer|max:11',
            'Date_of_Birth' => 'required|dateTime',
            'Gender/Sex' => 'required|enum',
            'Civil_Status' => 'required|enum',
            'Nationality' => 'required|string|max:255',
        ]);

        IAC::create($request->all());

        return redirect()->back()->with('success', 'Profile saved successfully!');
    }
}
