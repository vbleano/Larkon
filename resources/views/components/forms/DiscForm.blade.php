@extends('layouts.vertical', ['title' => 'Disclosure Creation Form'])
@section('css')
@vite(['node_modules/choices.js/public/assets/styles/choices.min.css'])
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="mb-5">

                        <form action="{{route('CreateDisclosure')}}" method="POST">
                            @csrf
                            <div id="horizontalwizard">
                                <ul class="nav nav-pills nav-justified icon-wizard form-wizard-header bg-light p-1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a href="#basictab1" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2 active" aria-selected="true" role="tab">
                                            <iconify-icon icon="iconamoon:profile-circle-duotone" class="fs-26"></iconify-icon>
                                            Basic Disclosure Form
                                        </a><!-- end nav-link -->
                                    </li><!-- end nav-item -->
                                    <li class="nav-item" role="presentation">
                                        <a href="#basictab2" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2" aria-selected="false" role="tab" tabindex="-1">
                                            <iconify-icon icon="iconamoon:profile-duotone" class="fs-26"></iconify-icon>
                                            IAC Profile
                                        </a><!-- end nav-link -->


                                    </li><!-- end nav-item -->
                                    <li class="nav-item" role="presentation">
                                        <a href="#basictab3" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2" aria-selected="false" tabindex="-1" role="tab">
                                            <iconify-icon icon="iconamoon:link-fill" class="fs-26"></iconify-icon>
                                            Type of IP
                                        </a><!-- end nav-link -->
                                    </li><!-- end nav-item -->
                                    <li class="nav-item" role="presentation">
                                        <a href="#basictab4" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2" aria-selected="false" tabindex="-1" role="tab">
                                            <iconify-icon icon="iconamoon:check-circle-1-duotone" class="fs-26"></iconify-icon>
                                            Finish
                                        </a><!-- end nav-link -->
                                    </li><!-- end nav-item -->
                                </ul>

                    <!------------------------- START DISCLOSURE FORM   ------------------------->
                                <div class="tab-content mb-0">
                                    <div class="tab-pane active show" id="basictab1" role="tabpanel">
                                        <h4 class="fs-16 fw-semibold mb-1">Disclosure Form</h4>
                                        <p class="text-muted">Please fill in the form with Disclosure information</p>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicUser" class="form-label fw-bold">Disclosure Title</label>
                                                    <input id="DisclosureTitle" type="text" name="Disclosure_Title" class="form-control" placeholder="Enter Disclosure Title">
                                                    @error('Disclosure_Title')
                                                        <span class="text-danger ">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicUser" class="form-label fw-bold">Type of IP</label>
                                                    <div class="w-80 mb-3">
                                                        <select name="Type_of_IP" class="form-control mb-1" id="choices-multiple-remove-button" data-choices data-choices-removeItem name="choices-multiple-remove-button" multiple>
                                                            <option value="1" selected>Patent</option>
                                                            <option value="2">Utility Model</option>
                                                            <option value="3">Industrial Design</option>
                                                            <option value="4">Trademark</option>
                                                            <option value="5">Copyright</option>
                                                        </select>
                                                        @error('Type_of_IP')
                                                            <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="example-textarea" class="form-label fw-bold">Disclosure Description</label>
                                                    <textarea name="DisclosureDesc" class="form-control" id="example-textarea" rows="5"></textarea>
                                                    @error('DisclosureDesc')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <div>
                                                        <label for="choices-text-remove-button" class="form-label text-muted fw-bold">Funding Sources</label>
                                                        <input name="Funding_Sources" class="form-control" id="choices-text-remove-button" data-choices data-choices-limit="10" data-choices-removeItem type="text" />
                                                    </div>
                                                    @error('Funding_Sources')
                                                        <span class="text-danger mt-2">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <div>
                                                        <label for="choices-text-remove-button" class="form-label text-muted fw-bold">University Facilities and Equipments Used</label>
                                                        <input name="University_Facilities" class="form-control" id="choices-text-remove-button" data-choices data-choices-limit="10" data-choices-removeItem type="text" />
                                                    </div>
                                                    @error('University_Facilities')
                                                        <span class="text-danger mt-2">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <div>
                                                        <label for="choices-text-remove-button" class="form-label text-muted">Implementing Agency</label>
                                                        <input name="Implementing_Agency" class="form-control" id="choices-text-remove-button" data-choices data-choices-limit="10" data-choices-removeItem type="text" />
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Do you Plan to Commercialize your Invention?</label>
                                                    <div>
                                                        <label class="me-3 mb-1">
                                                            <input class="form-label fw-bold" type="radio" name="Plan_To_Commercialize" value="1" onclick="toggleRadio(this)"> Yes
                                                        </label>
                                                        <label>
                                                            <input class="form-label fw-bold" type="radio" name="Plan_To_Commercialize" value="0" onclick="toggleRadio(this)"> No
                                                        </label>
                                                        @error('Plan_To_Commercialize')
                                                            <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                            <script>
                                                function toggleRadio(radio) {
                                                    if (radio.checked) {
                                                        if (radio.previousChecked) {
                                                            radio.checked = false; // Uncheck if clicked again
                                                        }
                                                        radio.previousChecked = radio.checked;
                                                    }
                                                }
                                            </script>
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <div class="mb-3">
                                                        <label class="form-check-label fw-bold" for="customCheck3">Upload MOA/ Research Agreements/ Research Funding Agreements</label>
                                                    </div>
                                                    <div class="dropzone">
                                                        <div class="fallback">
                                                            <input name="file" type="file" multiple="multiple">
                                                        </div>
                                                        <div class="dz-message needsclick">
                                                            <i class="h1 bx bx-cloud-upload"></i>
                                                            <h3>Drop files here or click to upload.</h3>
                                                            <span class="text-muted fs-13">
                                                                Selected / Dropped files are <strong>not</strong> actually uploaded.
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div><!-- end tab-pane -->




                                    <div class="tab-pane" id="basictab4" role="tabpanel">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <div class="avatar-md mx-auto mb-3">
                                                        <div class="avatar-title bg-primary bg-opacity-10 text-primary rounded-circle"><iconify-icon icon="iconamoon:like-duotone" class="fs-36"></iconify-icon></div>
                                                    </div>
                                                    <h3 class="mt-0">Finished !</h3>

                                                    <p class="w-75 mb-2 mx-auto">Filled Data Successfully.</p>

                                                    <div class="mb-3">
                                                        <div class="form-check d-inline-block">
                                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                                            <label class="form-check-label" for="customCheck1">I agree with the Terms and Conditions</label>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="submit">
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                                                SUBMIT APPLICATION
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Confirm Submission</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>Are you sure you like to submit your application?</p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit" href="javascript:void(0);" class="btn btn-primary">
                                                                                SUBMIT APPLICATION<i ></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div><!-- end tab-pane -->
                    <!------------------------- END DISCLOSURE FORM   ------------------------->
                    <!---------------------------- START IAC FORM   --------------------------->
                                    <div class="tab-pane" id="basictab2" role="tabpanel">
                                        <h4 class="fs-16 fw-semibold mb-1">Profile Information</h4>
                                        <p class="text-muted">Setup your profile information</p>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="basicCountry">Country of Citizenship</label>
                                                            <select id="basicCountry" name="Country_of_Citizenship" class="form-select">
                                                                <option value="" disabled selected>Select a Country of Citizenship</option>
                                                                <option value="Philippines">Philippines</option>
                                                                <option value="United States">United States</option>
                                                                <option value="Canada">Canada</option>
                                                                <option value="Australia">Australia</option>
                                                                <option value="Germany">Germany</option>
                                                                <option value="Bangladesh">Bangladesh</option>
                                                                <option value="China">China</option>
                                                                <option value="Argentina">Argentina</option>
                                                                <option value="Afghanistan">Afghanistan</option>
                                                                <option value="France">France</option>
                                                                <option value="Brazil">Brazil</option>
                                                                <option value="Belgium">Belgium</option>
                                                                <option value="Colombia">Colombia</option>
                                                                <option value="Albania">Albania</option>
                                                            </select>
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="lastName">Last Name</label>
                                                            <input type="text" id="lastName" name="Last_Name" class="form-control" placeholder="Doe">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="firstName">First Name</label>
                                                            <input type="text" id="firstName" name="First_Name" class="form-control" placeholder="John">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="middleName">Middle Initial</label>
                                                            <input type="text" id="middleName" name="Middle_Name" class="form-control" placeholder="Z">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="homeAddress">Home Address</label>
                                                            <input type="text" id="homeAddress" name="Home_Address" class="form-control" placeholder="Santa Mesa Manila">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="workAddress">Work Address</label>
                                                            <input type="text" id="workAddress" name="Work_Address" class="form-control" placeholder="Taft Avenue Ermita">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="constituentUniversity">Constituent University</label>
                                                            <input type="text" id="constituentUniversity" name="Constituent_University" class="form-control" placeholder="UP - Manila">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="department">Department / Institute</label>
                                                            <input type="text" id="Department_Institute" name="Department_Institute" class="form-control" placeholder="TTBDO">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="collegeUnit">College Unit</label>
                                                            <input type="text" id="collegeUnit" name="College_Unit" class="form-control" placeholder="College of Nursing">
                                                        </div>
                                                    </div><!-- end col -->

                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="salutatory">Salutatory</label>
                                                            <input type="text" id="salutatory" name="Salutatory" class="form-control" placeholder="Job Title">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="mainAffiliation">Main Affiliation</label>
                                                            <input type="text" id="mainAffiliation" name="Main_Affiliation" class="form-control" placeholder="Main Affiliation">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="subAffiliation">Sub Affiliation</label>
                                                            <input type="text" id="subAffiliation" name="Sub_Affiliation" class="form-control" placeholder="Sub Affiliation">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="nature">Nature of Contribution</label>
                                                            <input type="text" id="Nature_of_Contribution" name="Nature_of_Contribution" class="form-control" placeholder="Role in the Invention">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="percent">Percentage of Contribution</label>
                                                            <div class="d-flex align-items-center">
                                                                <!-- Text Input -->
                                                                <input type="number" id="percent" name="Percentage_of_Contribution"
                                                                       class="form-control me-3" placeholder="Rate 1 - 100"
                                                                       min="1" max="100" value="50" style="width: 80px;"
                                                                       oninput="syncSlider(this.value)">

                                                                <!-- Slider Input -->
                                                                <input type="range" id="percent_slider" min="1" max="100" value="50"
                                                                       class="form-range flex-grow-1" oninput="syncInput(this.value)">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <script>
                                                    function syncInput(value) {
                                                        document.getElementById('percent').value = value;
                                                    }

                                                    function syncSlider(value) {
                                                        document.getElementById('percent_slider').value = value;
                                                    }
                                                    </script>

                                                     <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="emailAddress">Email Address</label>
                                                            <input type="email" id="emailAddress" name="Email_Address" class="form-control" placeholder="@up.edu.ph">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="phoneNumber">Phone Number</label>
                                                            <input type="" id="phoneNumber" name="Contact_Number" class="form-control" placeholder="09*********">
                                                        </div>
                                                    </div><!--end col -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="birthday">Date of Birth</label>
                                                            <input type="date" id="birthday" name="Date_of_Birth" class="form-control" placeholder="">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="gender">Gender / Sex</label>
                                                            <select id="gender" name="Gender_Sex" class="form-select" >
                                                                <option value="" disabled selected>Select a Gender / Sex</option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                                <option value="Non_binary">Non-Binary</option>
                                                                <option value="Prefer_not_to_say">Refuse to Say</option>
                                                            </select>
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="civilStatus">Civil Status</label>
                                                            <select id="civilStatus" name="Civil_Status" class="form-select">
                                                                <option value="" disabled selected>Select a Civil Status</option>
                                                                <option value="Single">Single</option>
                                                                <option value="Married">Married</option>
                                                                <option value="Divorced">Divorced</option>
                                                                <option value="Separated">Separated</option>
                                                                <option value="Widowed">Widowed</option>
                                                            </select>
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" for="nationality">Nationality</label>
                                                            <input type="text" id="nationality" name="Nationality" class="form-control" placeholder="Filipino">
                                                        </div>
                                                    </div><!-- end col -->
                                                </div><!-- end row -->
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div><!-- end tab-pane -->

                        <!---------------------------- END IAC FORM   ---------------------------->
                        <!---------------------------- START IP FORM   --------------------------->
                                    <div class="tab-pane" id="basictab3" role="tabpanel">
                                        <h4 class="fs-16 fw-semibold mb-1">Specific IP Forms</h4>
                                        <p class="text-muted">Please fill the forms under which IP type you are applying for</p>
                        <!---------------------------- START PATENT FORM   --------------------------->
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                        Patent / Industrial Design / Utility Model
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="row">
                                                            <div class="mb-3">
                                                                <div class="form-check d-inline-block">
                                                                    <input name="Patent_Application" type="checkbox" class="form-check-input" id="customCheck1">
                                                                    <label class="form-check-label text-danger fw-bold" for="customCheck1">CHECK THIS IF YOU ARE APPLYING FOR PATENT PROTECTION</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <div>
                                                                        <label for="choices-text-remove-button" class="form-label text-muted fw-bold">Type/s of Invention</label>
                                                                        {{-- <input class="form-control" id="choices-text-remove-button" name="Type of Invention" data-choices data-choices-limit="10" data-choices-removeItem type="text" /> --}}
                                                                        <select id="choices-text-remove-button" name="Type_of_Invention" class="form-select">
                                                                            <option value="" disabled selected>Select a Type of Invention</option>
                                                                            <option value="Material_PCompound">Material/Compound</option>
                                                                            <option value="Process_Method">Process/Method</option>
                                                                            <option value="Software_System">Software/System</option>
                                                                            <option value="Device">Device</option>
                                                                            <option value="Herbal_Medicine_Drugs">Herbal Medicine/Drugs</option>
                                                                            <option value="Industrial_Design">Industrial Design</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicUser" class="form-label fw-bold">Purpose of Invention</label>
                                                                    <input name="Purpose_of_Invention" id="basicUser" type="text" class="form-control" placeholder="">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="basicUser" class="form-label fw-bold">Key / Novel features of the Invention</label>
                                                                    <input name="Key_Novel_Features" id="basicUser" type="text" class="form-control" placeholder="">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="example-textarea" class="form-label fw-bold"> Background of the Invention</label>
                                                                    <textarea name="Background_of_Invention" class="form-control" id="example-textarea" rows="5"></textarea>
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicUser" class="form-label fw-bold">Application or Use of Invention</label>
                                                                    <input name="Application_use_of_Invention" id="basicUser" type="text" class="form-control" placeholder="">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicUser" class="form-label fw-bold"> Stage of Development </label>
                                                                    <input name="Stage_of_Development" id="basicUser" type="text" class="form-control" placeholder="Technology Status (Prototyping, clinical trial phase 1, etc.)">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicUser" class="form-label fw-bold"> R&D Cost </label>
                                                                    <input name="R_and_D_Cost" id="basicUser" type="text" class="form-control" placeholder="Please provide a range (e.g. 1000 - 2000)">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <div>
                                                                        <label for="choices-text-remove-button" class="form-label text-muted fw-bold">Potential Partners</label>
                                                                        <input name="Potential_Partners" class="form-control" id="choices-text-remove-button" data-choices data-choices-limit="10" data-choices-removeItem type="text" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                <label for="example-select" class="form-label fw-bold">Technology Readiness Level (TRL)</label>
                                                                    <select name="TRL" class="form-select" id="example-select">
                                                                        <option value="" disabled selected>Select a TRL </option>
                                                                        <option value="TRL1">TRL1</option>
                                                                        <option value="TRL2">TRL2</option>
                                                                        <option value="TRL3">TRL3</option>
                                                                        <option value="TRL4">TRL4</option>
                                                                        <option value="TRL5">TRL5</option>
                                                                        <option value="TRL6">TRL6</option>
                                                                        <option value="TRL7">TRL7</option>
                                                                        <option value="TRL8">TRL8</option>
                                                                        <option value="TRL9">TRL9</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="example-select" class="form-label fw-bold">Past Oral Disclosure Date</label>
                                                                    <input name="Past_Oral_Disclosure_Date" type="date" id="basic-datepicker" class="form-control" placeholder="Basic datepicker">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="example-select" class="form-label fw-bold">Past Oral Disclosure Description</label>
                                                                    <textarea name="Past_Oral_Disclosure" class="form-control" id="example-textarea" rows="2"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="example-select" class="form-label fw-bold">Past Written Disclosure Date</label>
                                                                    <input name="Past_Written_Disclosure_Date" type="date" id="basic-datepicker" class="form-control" placeholder="Basic datepicker">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="example-select" class="form-label fw-bold">Past Written Disclosure Description</label>
                                                                    <textarea name="Past_Written_Disclosure" class="form-control" id="example-textarea" rows="2"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="example-select" class="form-label fw-bold">Future Disclosure Plans</label>
                                                                    <textarea name="Future_Disclosure_Plans" class="form-control" id="example-textarea" rows="2"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <div class="mb-2">
                                                                    <label class="form-check-label fw-bold" for="customCheck3">Manuscript / Technical Description / Terminal Report</label>
                                                                </div>
                                                                <div class="dropzone">
                                                                    <div class="fallback">
                                                                        <input name="file" type="file" multiple="multiple">
                                                                    </div>
                                                                    <div class="dz-message needsclick">
                                                                        <i class="h1 bx bx-cloud-upload"></i>
                                                                        <h3>Drop files here or click to upload.</h3>
                                                                        <span class="text-muted fs-13">
                                                                            Selected / Dropped files are <strong>not</strong> actually uploaded.
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> <!-- end col -->
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <div class="mb-2">
                                                                    <label class="form-check-label fw-bold" for="customCheck3">Drawings, Flowcharts, Processes</label>
                                                                </div>
                                                                <div class="dropzone">
                                                                    <div class="fallback">
                                                                        <input name="file" type="file" multiple="multiple">
                                                                    </div>
                                                                    <div class="dz-message needsclick">
                                                                        <i class="h1 bx bx-cloud-upload"></i>
                                                                        <h3>Drop files here or click to upload.</h3>
                                                                        <span class="text-muted fs-13">
                                                                            Selected / Dropped files are <strong>not</strong> actually uploaded.
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> <!-- end col -->
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <div class="mb-2">
                                                                    <label class="form-check-label fw-bold" for="customCheck3">Related Literature or Patents</label>
                                                                </div>
                                                                <div class="dropzone">
                                                                    <div class="fallback">
                                                                        <input name="file" type="file" multiple="multiple">
                                                                    </div>
                                                                    <div class="dz-message needsclick">
                                                                        <i class="h1 bx bx-cloud-upload"></i>
                                                                        <h3>Drop files here or click to upload.</h3>
                                                                        <span class="text-muted fs-13">
                                                                            Selected / Dropped files are <strong>not</strong> actually uploaded.
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> <!-- end col -->
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <div class="mb-2">
                                                                    <label class="form-check-label fw-bold" for="customCheck3">Financial Report</label>
                                                                </div>
                                                                <div class="dropzone">
                                                                    <div class="fallback">
                                                                        <input name="file" type="file" multiple="multiple">
                                                                    </div>
                                                                    <div class="dz-message needsclick">
                                                                        <i class="h1 bx bx-cloud-upload"></i>
                                                                        <h3>Drop files here or click to upload.</h3>
                                                                        <span class="text-muted fs-13">
                                                                            Selected / Dropped files are <strong>not</strong> actually uploaded.
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- START of Trademark accordion -->
                                        <div class="accordion" id="accordionExample">
                                            <!-- Trademark Accordion Item -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Trademark
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="row">
                                                            <div class="mb-3">
                                                                <div class="form-check d-inline-block">
                                                                    <input name="Trademark_Application" type="checkbox" class="form-check-input" id="customCheck1">
                                                                    <label class="form-check-label text-danger fw-bold" for="customCheck1">
                                                                        CHECK THIS IF YOU ARE APPLYING FOR TRADEMARK PROTECTION
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                <label for="example-select" class="form-label fw-bold">Type of Mark</label>
                                                                    <select name="Type_of_Mark" class="form-select" id="example-select">
                                                                        <option value="" disabled selected>Select a Type of Mark </option>
                                                                        <option value="Word_Mark">Word Mark</option>
                                                                        <option value="Figurative_Mark">Figurative Mark</option>
                                                                        <option value="Figurative_with_Word_Mark">Figurative with Word Mark</option>
                                                                        <option value="3D_Mark">3D Mark</option>
                                                                        <option value="Stamped_or_Marked_container_of_good">Stamped or Marked container of good</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicUser" class="form-label fw-bold">Description of the Mark </label>
                                                                    <input name="Description_of_the_Mark" id="basicUser" type="text" class="form-control" placeholder="">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="basicUser" class="form-label fw-bold">Disclaimer (Explanation)</label>
                                                                    <input name="Disclaimer" id="basicUser" type="text" class="form-control" placeholder="">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="basicUser" class="form-label fw-bold">Translation or Transliteration</label>
                                                                    <input name="Translation_Transliteration" id="basicUser" type="text" class="form-control" placeholder="">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label fw-bold">Collective Mark</label>
                                                                    <div>
                                                                        <label class="me-3">
                                                                            <input class="form-label fw-bold" type="radio" name="Collective_Mark" value="1" onclick="toggleRadio(this)"> Yes
                                                                        </label>
                                                                        <label>
                                                                            <input class="form-label fw-bold" type="radio" name="Collective_Mark" value="0" onclick="toggleRadio(this)"> No
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <script>
                                                                function toggleRadio(radio) {
                                                                    if (radio.checked) {
                                                                        if (radio.previousChecked) {
                                                                            radio.checked = false; // Uncheck if clicked again
                                                                        }
                                                                        radio.previousChecked = radio.checked;
                                                                    }
                                                                }
                                                            </script>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label fw-bold">Does your trademark have any color?</label>
                                                                    <div>
                                                                        <label class="me-3">
                                                                            <input class="form-label fw-bold" type="radio" name="Mark_has_any_color" value="1" onclick="toggleRadio(this)"> Yes
                                                                        </label>
                                                                        <label>
                                                                            <input class="form-label fw-bold" type="radio" name="Mark_has_any_color" value="0" onclick="toggleRadio(this)"> No
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <script>
                                                                function toggleRadio(radio) {
                                                                    if (radio.checked) {
                                                                        if (radio.previousChecked) {
                                                                            radio.checked = false; // Uncheck if clicked again
                                                                        }
                                                                        radio.previousChecked = radio.checked;
                                                                    }
                                                                }
                                                            </script>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicUser" class="form-label fw-bold">Work to be Trademarked</label>
                                                                    <input name="Word_to_be_Trademarked" id="basicUser" type="text" class="form-control" placeholder="For Work Mark Only">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicUser" class="form-label fw-bold">Color/s of the Mark</label>
                                                                    <input name="Colors_of_the_Mark" id="basicUser" type="text" class="form-control" placeholder="">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicUser" class="form-label fw-bold">Purpose of the Mark</label>
                                                                    <input name="Purpose_of_the_Mark" id="basicUser" type="text" class="form-control" placeholder="">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicUser" class="form-label fw-bold">List of Specific Goods or Services</label>
                                                                    <input name="List_of_specific_goods_services" id="basicUser" type="text" class="form-control" placeholder="">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                <label for="example-select" class="form-label fw-bold">NICE Classification</label>
                                                                    <select name="NICE_Classification" class="form-select" id="example-select">
                                                                        <option value="" disabled selected>Select a NICE Classification </option>
                                                                        <option value="Class_1">Class 1</option>
                                                                        <option value="Class_2">Class 2</option>
                                                                        <option value="Class_3">Class 3</option>
                                                                        <option value="Class_4">Class 4</option>
                                                                        <option value="Class_5">Class 5</option>
                                                                        <option value="Class_6">Class 6</option>
                                                                        <option value="Class_7">Class 7</option>
                                                                        <option value="Class_8">Class 8</option>
                                                                        <option value="Class_9">Class 9</option>
                                                                        <option value="Class_10">Class 10</option>
                                                                        <option value="Class_11">Class 11</option>
                                                                        <option value="Class_12">Class 12</option>
                                                                        <option value="Class_13">Class 13</option>
                                                                        <option value="Class_14">Class 14</option>
                                                                        <option value="Class_15">Class 15</option>
                                                                        <option value="Class_16">Class 16</option>
                                                                        <option value="Class_17">Class 17</option>
                                                                        <option value="Class_18">Class 18</option>
                                                                        <option value="Class_19">Class 19</option>
                                                                        <option value="Class_20">Class 20</option>
                                                                        <option value="Class_21">Class 21</option>
                                                                        <option value="Class_22">Class 22</option>
                                                                        <option value="Class_23">Class 23</option>
                                                                        <option value="Class_24">Class 24</option>
                                                                        <option value="Class_25">Class 25</option>
                                                                        <option value="Class_26">Class 26</option>
                                                                        <option value="Class_27">Class 27</option>
                                                                        <option value="Class_28">Class 28</option>
                                                                        <option value="Class_29">Class 29</option>
                                                                        <option value="Class_30">Class 30</option>
                                                                        <option value="Class_31">Class 31</option>
                                                                        <option value="Class_32">Class 32</option>
                                                                        <option value="Class_33">Class 33</option>
                                                                        <option value="Class_34">Class 34</option>
                                                                        <option value="Class_35">Class 35</option>
                                                                        <option value="Class_36">Class 36</option>
                                                                        <option value="Class_37">Class 37</option>
                                                                        <option value="Class_38">Class 38</option>
                                                                        <option value="Class_39">Class 39</option>
                                                                        <option value="Class_40">Class 40</option>
                                                                        <option value="Class_41">Class 41</option>
                                                                        <option value="Class_42">Class 42</option>
                                                                        <option value="Class_43">Class 43</option>
                                                                        <option value="Class_44">Class 44</option>
                                                                        <option value="Class_45">Class 45</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="example-select" class="form-label fw-bold">Future/Potential Application</label>
                                                                    <textarea name="Future_Potential_Applications" class="form-control" id="example-textarea" rows="2"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <div class="mb-2">
                                                                        <label class="form-check-label fw-bold" for="customCheck3">Copy of the Mark</label>
                                                                    </div>
                                                                    <div class="dropzone">
                                                                        <div class="fallback">
                                                                            <input name="file" type="file" multiple="multiple">
                                                                        </div>
                                                                        <div class="dz-message needsclick">
                                                                            <i class="h1 bx bx-cloud-upload"></i>
                                                                            <h3>Drop files here or click to upload.</h3>
                                                                            <span class="text-muted fs-13">
                                                                                Selected / Dropped files are <strong>not</strong> actually uploaded.
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <div class="mb-2">
                                                                        <label class="form-check-label fw-bold" for="customCheck3">Proof of Actual Use</label>
                                                                    </div>
                                                                    <div class="dropzone">
                                                                        <div class="fallback">
                                                                            <input name="file" type="file" multiple="multiple">
                                                                        </div>
                                                                        <div class="dz-message needsclick">
                                                                            <i class="h1 bx bx-cloud-upload"></i>
                                                                            <h3>Drop files here or click to upload.</h3>
                                                                            <span class="text-muted fs-13">
                                                                                Selected / Dropped files are <strong>not</strong> actually uploaded.
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end col -->
                                                        </div><!--end row -->
                                                    </div><!--end accordion body -->
                                                </div><!--end accordion collapse -->
                                            </div><!--end accordion item -->
                                        </div>
                                            <!-- Copyright Accordion Item -->
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item ">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Copyright
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="row">
                                                            <div class="mb-3">
                                                                <div class="form-check d-inline-block">
                                                                    <input name="Copyright_Application" type="checkbox" class="form-check-input" id="customCheck2">
                                                                    <label class="form-check-label text-danger fw-bold" for="customCheck2">
                                                                        CHECK THIS IF YOU ARE APPLYING FOR COPYRIGHT PROTECTION
                                                                    </label>
                                                                </div>
                                                            </div><!--end col -->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="example-select" class="form-label fw-bold">Date of Creation of Copyrightable Material</label>
                                                                    <input name="Date_of_Creation_of_Copyrightable_Material" type="date" id="basic-datepicker" class="form-control" placeholder="Basic datepicker">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicUser" class="form-label fw-bold">Place of Creation</label>
                                                                    <input name="Place_of_Creation" id="basicUser" type="text" class="form-control" placeholder="">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <div class="mb-2">
                                                                        <label class="form-check-label fw-bold" for="customCheck3">Publication</label>
                                                                    </div>
                                                                    <div class="dropzone">
                                                                        <div class="fallback">
                                                                            <input name="file" type="file" multiple="multiple">
                                                                        </div>
                                                                        <div class="dz-message needsclick">
                                                                            <i class="h1 bx bx-cloud-upload"></i>
                                                                            <h3>Drop files here or click to upload.</h3>
                                                                            <span class="text-muted fs-13">
                                                                                Selected / Dropped files are <strong>not</strong> actually uploaded.
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <div class="mb-2">
                                                                        <label class="form-check-label fw-bold" for="customCheck3">Copy of the Copyrightable Material</label>
                                                                    </div>
                                                                    <div class="dropzone">
                                                                        <div class="fallback">
                                                                            <input name="file" type="file" multiple="multiple">
                                                                        </div>
                                                                        <div class="dz-message needsclick">
                                                                            <i class="h1 bx bx-cloud-upload"></i>
                                                                            <h3>Drop files here or click to upload.</h3>
                                                                            <span class="text-muted fs-13">
                                                                                Selected / Dropped files are <strong>not</strong> actually uploaded.
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <div class="mb-2">
                                                                        <label class="form-check-label fw-bold" for="customCheck3">ID's of the Authors</label>
                                                                    </div>
                                                                    <div class="dropzone">
                                                                        <div class="fallback">
                                                                            <input name="file" type="file" multiple="multiple">
                                                                        </div>
                                                                        <div class="dz-message needsclick">
                                                                            <i class="h1 bx bx-cloud-upload"></i>
                                                                            <h3>Drop files here or click to upload.</h3>
                                                                            <span class="text-muted fs-13">
                                                                                Selected / Dropped files are <strong>not</strong> actually uploaded.
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end col -->
                                                        </div><!--end row -->
                                                    </div> <!--end accordion body -->
                                                </div><!--end accordion collapse -->
                                            </div><!--end accordion item -->
                                        </div><!--end accordion -->
                                    </div>
                                <!---------------------------- END IP FORM   --------------------------->

                                    <div class="d-flex flex-wrap align-items-center wizard justify-content-between gap-3 mt-3">
                                        <div class="first">
                                            <a href="javascript:void(0);" class="btn btn-soft-primary">
                                                First
                                            </a>
                                        </div>
                                        <div class="d-flex gap-2">
                                            <div class="previous">
                                                <a href="javascript:void(0);" class="btn btn-primary disabled">
                                                    <i class="bx bx-left-arrow-alt me-2"></i>Back To Previous
                                                </a>
                                            </div>
                                            <div class="next">
                                                <a href="javascript:void(0);" class="btn btn-primary">
                                                    Next Step<i class="bx bx-right-arrow-alt ms-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="last">
                                            <a href="javascript:void(0);" class="btn btn-soft-primary">
                                                Finish
                                            </a>
                                        </div>
                                    </div>
                                </div> <!-- tab-content -->
                            </div> <!-- end #horizontal wizard-->
                        </form>
                        @if ($errors->any())
                        <div class="mb-3">
                            @foreach ($errors->all() as $error)
                                <li class="text-red-500 list-none">
                                    {{$error}}
                                </li>
                            @endforeach
                            </div>
                        @endif
                    </div>
                </div> <!-- end card body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div> <!-- end row -->
</div>

@endsection

@section('script-bottom')
@vite(['resources/js/components/form-wizard.js'])
@endsection
