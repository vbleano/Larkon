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
        if (Auth::user()) {
            // <--------------- start disclosure validation ------------------->
            $validatedDisclosure = $request->validate([
                'Disclosure_Title' => 'required|string|max:255',
                'DisclosureDesc' => 'required|string',
                'Funding_Sources' => 'required|string',
                'University_Facilities' => 'required|string',
                'Plan_To_Commercialize' => 'nullable'
            ]);
            // <--------------- start disclosure Creation ------------------->
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

           // <--------------- start IAC validation ------------------->
           $validatedIAC = $request->validate([
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
            'Department_Institute' => 'required|string|max:255', // Fixed typo
            'Contact_Number' => 'required|string|max:13', // Fixed validation
            'Nature_of_Contribution' => 'required|string|max:255',
            'Percentage_of_Contribution' => 'required|integer|min:0|max:100', // Fixed range
            'Civil_Status' => 'required|in:Single,Married,Divorced,Separated,Widowed', // Fixed enum issue
            'Gender_Sex' => 'required|in:Male,Female,Non_binary,Prefer_not_to_say', // Fixed name & validation
            'Nationality' => 'required|string|max:255',
            ]);

            IAC::create([
                'discID' => $disclosure->discID,
                'Country_of_Citizenship' => $request->Country_of_Citizenship,
                'Last_Name' => $request->Last_Name,
                'First_Name' => $request->First_Name,
                'Middle_Name' => $request->Middle_Name,
                'Email_Address' => $request->Email_Address,
                'Date_of_Birth' => $request->Date_of_Birth,
                'Home_Address' => $request->Home_Address,
                'Work_Address' => $request->Work_Address,
                'Salutatory' => $request->Salutatory,
                'Main_Affiliation' => $request->Main_Affiliation,
                'Sub_Affiliation' => $request->Sub_Affiliation,
                'Constituent_University' => $request->Constituent_University,
                'College_Unit' => $request->College_Unit,
                'Department_Institute' => $request->Department_Institute,
                'Contact_Number' => $request->Contact_Number,
                'Nature_of_Contribution' => $request->Nature_of_Contribution,
                'Percentage_of_Contribution' => $request->Percentage_of_Contribution,
                'Civil_Status' => $request->Civil_Status,
                'Gender_Sex' => $request->Gender_Sex,
                'Nationality' => $request->Nationality,
            ]);

            if($request->has('Patent_Application') == true){
                $validatedPatent = $request->validate([
                    'Type_of_Invention' => 'required|in:Material_Compound,Process_Method,Software_System,Device,Herbal_Medicine_Drugs,Industrial_Design',
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
                    'TRL' => 'required|in:TRL1,TRL2,TRL3,TRL4,TRL5,TRL6,TRL7,TRL8,TRL9',
                ]);
                Patents::create([
                    'discID' => $disclosure->discID,
                    'Type_of_Invention' => $request->Type_of_Invention,
                    'Purpose_of_Invention'=> $request->Purpose_of_Invention,
                    'Background_of_Invention'=> $request->Background_of_Invention,
                    'Potential_Partners' => $request->Potential_Partners,
                    'Key_Novel_Features' => $request-> Key_Novel_Features,
                    'Application_use_of_Invention' => $request->Application_use_of_Invention,
                    'Stage_of_Development' => $request->Stage_of_Development,
                    'R_and_D_Cost' => $request->R_and_D_Cost,
                    'Past_Oral_Disclosure' => $request->Past_Oral_Disclosure,
                    'Past_Oral_Disclosure_Date' => $request->Past_Oral_Disclosure_Date,
                    'Past_Written_Disclosure' => $request->Past_Written_Disclosure,
                    'Past_Written_Disclosure_Date' => $request->Past_Written_Disclosure_Date,
                    'Future_Disclosure_Plans' => $request->Future_Disclosure_Plans,
                    'TRL' => $request->TRL,
            ]);
            }else{
                return redirect()->back(); // Redirect to login page or homepage
            }

            return redirect()->back();
        } else{
            return redirect('/login'); // Redirect to login page or homepage
        }
    }

    // public function CreateDisclosure(Request $request){
    //     $validatedDisclosure = $request->validate([
    //         //Disclosure
    //         'DisclosureTitle' => 'required|string|max:255',
    //         'DisclosureDesc' => 'required|string',
    //         'Funding_Sources' => 'required|string',
    //         'University_Facilities' => 'required|string',
    //         'Plan_To_Commercialize' => 'nullable|boolean'
    //     ]);
    //     Disclosure::create([
    //         'DisclosureTitle' => $request -> Disclosure_Title,
    //         'DisclosureDesc' => $request -> Short_Description,
    //         'Funding_Sources' => $request -> Funding_Sources,
    //         'Plan_To_Commercialize' => $request->Plan_to_Commercialize == true ? 1:0,
    //         'University_Facilities' => $request -> University_Facilities,
    //     ]);
    //     $validatedIAC = $request->validate([
    //         //IAC
    //         'Country_of_Citizenship' => 'required|string|max:255',
    //         'Last_Name' => 'required|string|max:255',
    //         'First_Name' => 'required|string|max:255',
    //         'Middle_Name' => 'nullable|string|max:255',
    //         'Email_Address' => 'required|email|max:255',
    //         'Date_of_Birth' => 'required|date',
    //         'Home_Address' => 'required|string|max:255',
    //         'Work_Address' => 'required|string|max:255',
    //         'Salutatory' => 'required|string|max:50',
    //         'Main_Affiliation' => 'required|string|max:255',
    //         'Sub_Affiliation' => 'nullable|string|max:255',
    //         'Constituent_University' => 'required|string|max:255',
    //         'College_Unit' => 'required|string|max:255',
    //         'Department_Institute' => 'required|string|max:255', // Fixed typo
    //         'Contact_Number' => 'required|integer|max:11', // Fixed validation
    //         'Nature_of_Contribution' => 'required|string|max:255',
    //         'Percentage_of_Contribution' => 'required|integer|min:0|max:100', // Fixed range
    //         'Civil_Status' => 'required|in:Single,Married,Divorced,Separated,Widowed', // Fixed enum issue
    //         'Gender_Sex' => 'required|in:Male,Female,Non_binary,Prefer_not_to_say', // Fixed name & validation
    //         'Nationality' => 'required|string|max:255',
    //     ]);
    //         IAC::create([
    //             'Country_of_Citizenship' => $request->Country_of_Citizenship,
    //             'Last_Name' => $request->Last_Name,
    //             'First_Name' => $request->First_Name,
    //             'Middle_Name' => $request->Middle_Name,
    //             'Email_Address' => $request->Email_Address,
    //             'Date_of_Birth' => $request->Date_of_Birth,
    //             'Home_Address' => $request->Home_Address,
    //             'Work_Address' => $request->Work_Address,
    //             'Salutatory' => $request->Salutatory,
    //             'Main_Affiliation' => $request->Main_Affiliation,
    //             'Sub_Affiliation' => $request->Sub_Affiliation,
    //             'Constituent_University' => $request->Constituent_University,
    //             'College_Unit' => $request->College_Unit,
    //             'Department_Institute' => $request->Department_Institute,
    //             'Contact_Number' => $request->Contact_Number,
    //             'Nature_of_Contribution' => $request->Nature_of_Contribution,
    //             'Percentage_of_Contribution' => $request->Percentage_of_Contribution,
    //             'Civil_Status' => $request->Civil_Status,
    //             'Gender_Sex' => $request->Gender_Sex,
    //             'Nationality' => $request->Nationality,
    //         ]);
        // $validatedPatent = $request->validate([
        // //Patent/UM/ID
        //     'Type_of_Invention' => 'required|in:Material/Compound,Process/Method,Software/System,Device,Herbal Medicine/Drugs,Industrial Design',
        //     'Purpose_of_Invention' => 'required|string',
        //     'Background_of_Invention' => 'required|string',
        //     'Potential_Partners' => 'nullable|string',
        //     'Key_Novel_Features' => 'required|string|max:255',
        //     'Application_use_of_Invention' => 'required|string|max:255',
        //     'Stage_of_Development' => 'required|string|max:255',
        //     'R_and_D_Cost' => 'required|string|max:255',
        //     'Past_Oral_Disclosure' => 'nullable|string',
        //     'Past_Oral_Disclosure_Date' => 'nullable|date',
        //     'Past_Written_Disclosure' => 'nullable|string',
        //     'Past_Written_Disclosure_Date' => 'nullable|date',
        //     'Future_Disclosure_Plans' => 'required|string',
        //     'TRL' => 'required|in:TRL1,TRL2,TRL3,TRL4,TRL5,TRL6,TRL7,TRL8,TRL9',
        // ]);

        // $validatedPatent =  Patents::create([
        //     'Type_of_Invention' => $request->Type_of_Invention,
        //     'Purpose_of_Invention' => $request->Purpose_of_Invention,
        //     'Background_of_Invention' => $request->Background_of_Invention,
        //     'Potential_Partners' => $request->Potential_Partners,
        //     'Key_Novel_Features' => $request->Key_Novel_Features,
        //     'Application_use_of_Invention' => $request->Application_use_of_Invention,
        //     'Stage_of_Development' => $request->Stage_of_Development,
        //     'R_and_D_Cost' => $request->R_and_D_Cost,
        //     'Past_Oral_Disclosure' => $request->Past_Oral_Disclosure,
        //     'Past_Oral_Disclosure_Date' => $request->Past_Oral_Disclosure_Date,
        //     'Past_Written_Disclosure' => $request->Past_Written_Disclosure,
        //     'Past_Written_Disclosure_Date' => $request->Past_Written_Disclosure_Date,
        //     'Future_Disclosure_Plans' => $request->Future_Disclosure_Plans,
        //     'TRL' => $request->TRL,
        // ]);

        // $validatedTM = $request->validate([
        //     //Trademark
        //     'Type_of_Mark' => 'required|in:Word Mark,Figurative Mark,Figurative with Word Mark,3D Mark,Stamped or Marked container of good',
        //     'Description_of_the_Mark' => 'required|string',
        //     'Disclaimer' => 'nullable|string',
        //     'Translation_Transliteration' => 'required|string|max:255',
        //     'Collective_Mark' => 'required|boolean',
        //     'Word_to_be_Trademarked' => 'required|string|max:255',
        //     'Mark_has_any_color' => 'required|boolean',
        //     'Colors_of_the_Mark' => 'nullable|string|max:255',
        //     'List_of_specific_goods_services' => 'required|string',
        //     'Future_Potential_Applications' => 'nullable|string',
        //     'NICE_Classification' => 'required|in:Class 1,Class 2,Class 3,Class 4,Class 5,Class 6,Class 7,Class 8,Class 9,Class 10,Class 11,
        //         Class 12,Class 13,Class 14,Class 15,Class 16,Class 17,Class 18,Class 19,Class 20,Class 21,Class 22,Class 23,Class 24,Class 25,
        //         Class 26,Class 27,Class 28,Class 29,Class 30,Class 31,Class 32,Class 33,Class 34,Class 35,Class 36,Class 37,Class 38,Class 39,
        //         Class 40,Class 41,Class 42,Class 43,Class 44,Class 45'
        // ]);
        // Trademark::create([
        //     'Type_of_Mark' => $request->Type_of_Mark,
        //     'Description_of_the_Mark' => $request->Description_of_the_Mark,
        //     'Disclaimer' => $request->Disclaimer,
        //     'Translation_Transliteration' => $request->Translation_Transliteration,
        //     'Collective_Mark' => $request->Collective_Mark,
        //     'Word_to_be_Trademarked' => $request->Word_to_be_Trademarked,
        //     'Mark_has_any_color' => $request->Mark_has_any_color,
        //     'Colors_of_the_Mark' => $request->Colors_of_the_Mark,
        //     'List_of_specific_goods_services' => $request->List_of_specific_goods_services,
        //     'Future_Potential_Applications' => $request->Future_Potential_Applications,
        //     'NICE_Classification' => $request->NICE_Classifications,
        // ]);

        // $validatedCopyright = $request->validate([
        //     //Copyright
        //     'Date_of_Creation_of_Copyrightable_Material' => 'required|date',
        //     'Place_of_Creation' => 'required|string|max:255',
        //     ]);
        // Copyright::create([
        //     'Date_of_Creation_of_Copyrightable_Material' => $request->Date_of_Creation_of_Copyrightable_Material,
        //     'Place_of_Creation' => $request->Place_of_Creation,
        // ]);

    //         return redirect()->back();
    // }

    public function viewAllDisclosures(){
        if (Auth::user()) {
            $disclosures = Disclosure::all();
            return view('/general/disclosureList')->with('disclosures',$disclosures);
        } else{
            return redirect('/login'); // Redirect to login page or homepage
        }
    }

    public function viewSpecificDisclosurePage($id){
        if (Auth::user()) {
            $disclosure = Disclosure::find($id);
            $IAC = IAC::where('discID','=',$id)->first();
            
            return view('/general/disclosureDetails')->with(['disclosure'=>$disclosure,'IAC'=>$IAC]);
        } else{
            return redirect('/login'); // Redirect to login page or homepage
        }
    }

    public function viewIAC($id){
        if (Auth::user()) {
            $IAC = IAC::find($id);
            $disclosure = Disclosure::where('discID','=',$id)->first();
            
            return view('/general/IACDetails')->with(['disclosure'=>$disclosure,'IAC'=>$IAC]);
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
            return view('/components/ui/modal');
        }else{
            return redirect('/login'); // Redirect to login page or homepage
        }
    }

    public function DestroyDisclosure($id){
        if (Auth::user()) {
            dd($id);
            $disclosure = Disclosure::find($id);
            dd($disclosure->discID);
            $disclosure->delete();
            
            // <--------- DELETE IAC LINKS HERE -------------->
            // <--------- DELETE IP LINKS HERE -------------->
            // <--------- DELETE Partners LINKS HERE -------------->
            // <--------- DELETE Agreements LINKS HERE -------------->
            return redirect()->back();
        } else{
            return redirect('/login'); // Redirect to login page or homepage
        }
    }
}
