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
                'Plan_To_Commercialize' => 'required|boolean'
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
                'Plan_To_Commercialize' => $request->Plan_To_Commercialize,
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
            'Contact_Number' => 'required|string|max:11', // Fixed validation
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
            }elseif($request->has('Trademark_Application') == true){
                $validatedTM = $request->validate([
                    'Type_of_Mark' => 'required|in:Word_Mark,Figurative_Mark,Figurative_with_Word_Mark,3D_Mark,Stamped_or_Marked_container_of_good',
                    'Description_of_the_Mark' => 'required|string',
                    'Disclaimer' => 'nullable|string',
                    'Translation_Transliteration' => 'required|string|max:255',
                    'Collective_Mark' => 'required|boolean',
                    'Word_to_be_Trademarked' => 'required|string|max:255',
                    'Mark_has_any_color' => 'required|boolean',
                    'Colors_of_the_Mark' => 'nullable|string|max:255',
                    'List_of_specific_goods_services' => 'required|string',
                    'Future_Potential_Applications' => 'nullable|string',
                    'NICE_Classification' => 'required|in:Class_1,Class_2,Class_3,Class_4,Class_5,Class_6,Class_7,Class_8,Class_9,Class_10,Class_11,
                                            Class_12,Class_13,Class_14,Class_15,Class_16,Class_17,Class_18,Class_19,Class_20,Class_21,Class_22,Class_23,Class_24,Class_25,
                                            Class_26,Class_27,Class_28,Class_29,Class_30,Class_31,Class_32,Class_33,Class_34,Class_35,Class_36,Class_37,Class_38,Class_39,
                                            Class_40,Class_41,Class_42,Class_43,Class_44,Class_45'
                    ]);
                Trademark::create([
                    'discID' => $disclosure->discID,
                    'Type_of_Mark' => $request->Type_of_Mark,
                    'Description_of_the_Mark' => $request->Description_of_the_Mark,
                    'Disclaimer' => $request->Disclaimer,
                    'Translation_Transliteration' => $request->Translation_Transliteration,
                    'Collective_Mark' => $request->Collective_Mark,
                    'Word_to_be_Trademarked' => $request->Word_to_be_Trademarked,
                    'Mark_has_any_color' => $request->Mark_has_any_color,
                    'Colors_of_the_Mark' => $request->Colors_of_the_Mark,
                    'List_of_specific_goods_services' => $request->List_of_specific_goods_services,
                    'Future_Potential_Applications' => $request->Future_Potential_Applications,
                    'NICE_Classification' => $request->NICE_Classification,
                    ]);
            }else if($request->has('Copyright_Application') == true){
                $validatedCopyright = $request->validate([
                    'Date_of_Creation_of_Copyrightable_Material' => 'required|date',
                    'Place_of_Creation' => 'required|string|max:255',
                    ]);
                Copyright::create([
                    'discID' => $disclosure->discID,
                    'Date_of_Creation_of_Copyrightable_Material' => $request->Date_of_Creation_of_Copyrightable_Material,
                    'Place_of_Creation' => $request->Place_of_Creation,
                    ]);
            }else{
                return redirect()->back(); // Redirect to login page or homepage
            }

        } else{
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

    public function editDisclosure($id){
        if (Auth::user()) {
            $disclosure = Disclosure::where('discID','=',$id)->first();
            return view('/general/updateWhole')->with(['disclosure'=>$disclosure]);
        } else{
            return redirect('/login'); // Redirect to login page or homepage
        }
    }

    public function updateDisclosure(Request $request, $id){
        if (Auth::user()) {

            $validatedDisclosure = $request->validate([
                'Disclosure_Title' => 'required|string|max:255',
                'DisclosureDesc' => 'required|string',
                'Funding_Sources' => 'required|string',
                'University_Facilities' => 'required|string',
                'Plan_To_Commercialize' => 'nullable'
            ]);

            $disclosure = Disclosure::where('discID','=',$id)->first();
            $disclosure->Disclosure_Title = $request->input('Disclosure_Title');
            $disclosure->Type_of_IP = $request->input('Type_of_IP');
            $disclosure->Short_Description = $request->input('DisclosureDesc');
            $disclosure->Funding_Sources = $request->input('Funding_Sources');
            $disclosure->Plan_To_Commercialize = $request->Plan_to_Commercialize == true ? 1:0;
            $disclosure->University_Facilities = $request->input('University_Facilities');
            $disclosure->save();

            return redirect('/ViewAllDisclosures');
        } else{
            return redirect('/login'); // Redirect to login page or homepage
        }
    }


    public function test(){
        if (Auth::user()) {
            return view('/components/ui/modal');
        }else{
            return redirect('/login'); // Redirect to login page or homepage
        }
    }

    public function DestroyDisclosure($id){
        if (Auth::user()) {
            $disclosure = Disclosure::find($id);
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
