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



            $request->validate([
                'DisclosureTitle' => 'required|string',
            ]);
            
            Disclosure::create();

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
