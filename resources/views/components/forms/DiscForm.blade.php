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
                        <form>
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

                                <div class="tab-content mb-0">
                                    <div class="tab-pane active show" id="basictab1" role="tabpanel">
                                        <h4 class="fs-16 fw-semibold mb-1">Disclosure Form</h4>
                                        <p class="text-muted">Please fill in the form with Disclosure information</p>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicUser" class="form-label">Disclosure Title</label>
                                                    <input id="basicUser" type="text" class="form-control" placeholder="Enter Disclosure Title">
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicUser" class="form-label">Type of IP</label>
                                                    <div class="w-80 mb-3">
                                                        <select class="form-control" id="choices-multiple-remove-button" data-choices data-choices-removeItem name="choices-multiple-remove-button" multiple>
                                                            <option value="Choice 1" selected>Patent</option>
                                                            <option value="Choice 2">Utility Model</option>
                                                            <option value="Choice 3">Industrial Design</option>
                                                            <option value="Choice 4">Trademark</option>
                                                            <option value="Choice 5">Copyright</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="example-textarea" class="form-label">Disclosure Description</label>
                                                    <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <div>
                                                        <label for="choices-text-remove-button" class="form-label text-muted">University Facilities and Equipments Used</label>
                                                        <input class="form-control" id="choices-text-remove-button" data-choices data-choices-limit="10" data-choices-removeItem type="text" />
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <div class="form-check form-check-inline">
                                                        <input type="checkbox" class="form-check-input" id="customCheck3">
                                                        <label class="form-check-label" for="customCheck3">Check this if you plan to Commercialize</label>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <div class="mb-3">  
                                                        <label class="form-check-label" for="customCheck3">Upload MOA/ Research Agreements/ Research Funding Agreements</label>
                                                    </div>    
                                                    <div class="dropzone">
                                                        <div class="fallback">
                                                            <input name="file" type="file" multiple="multiple">
                                                        </div>
                                                        <div class="dz-message needsclick">
                                                            <i class="h1 bx bx-cloud-upload"></i>
                                                            <h3>Drop files here or click to upload.</h3>
                                                            <span class="text-muted fs-13">
                                                                (This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div><!-- end tab-pane -->

                                    <div class="tab-pane" id="basictab2" role="tabpanel">
                                        <h4 class="fs-16 fw-semibold mb-1">Profile Information</h4>
                                        <p class="text-muted">Setup your profile information</p>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="avatar-lg mb-3">
                                                    <div class="avatar-title bg-body rounded-circle border border-3 border-dashed-light position-relative">
                                                        <label for="imageInput" class="position-absolute end-0 bottom-0">
                                                            <div class="avatar-xs cursor-pointer">
                                                                <span class="avatar-title bg-light text-dark rounded-circle"><i class="bx bx-camera"></i></span>
                                                            </div>
                                                        </label>
                                                        <input class="hidden" type="file" id="imageInput" accept="image/*" onchange="previewImage(event)">

                                                        <img id="preview" src="/images/users/dummy-avatar.jpg" alt="Preview Image" class="rounded-circle img-fluid">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicFname">First Name</label>
                                                            <input type="text" id="basicFname" class="form-control" placeholder="Chris">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicLname">Last Name</label>
                                                            <input type="text" id="basicLname" class="form-control" placeholder="Keller">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicMnumber">Number</label>
                                                            <input type="number" id="basicMnumber" class="form-control" placeholder="Mobile Number">
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basicCountry">Country</label>
                                                            <select id="basicCountry" class="form-select">
                                                                <option value="United States">United States</option>
                                                                <option value="Canada">Canada</option>
                                                                <option value="Australia">Australia</option>
                                                                <option value="Germany">Germany</option>
                                                                <option value="Bangladesh">Bangladesh</option>
                                                                <option value="China">China</option>
                                                                <option value="Argentina">Argentina</option>
                                                                <option value="Bharat">Bharat</option>
                                                                <option value="Afghanistan">Afghanistan</option>
                                                                <option value="France">France</option>
                                                                <option value="Brazil">Brazil</option>
                                                                <option value="Belgium">Belgium</option>
                                                                <option value="Colombia">Colombia</option>
                                                                <option value="Albania">Albania</option>
                                                            </select>
                                                        </div>
                                                    </div><!-- end col -->
                                                </div><!-- end row -->
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div><!-- end tab-pane -->


        <!-- SPECIFIC IP FORMS -->

                                    <div class="tab-pane" id="basictab3" role="tabpanel">
                                        <h4 class="fs-16 fw-semibold mb-1">Specific IP Forms</h4>
                                        <p class="text-muted">Please fill the forms under which IP type you are applying for</p>

                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Patent / Industrial Design / Utility Model
                                                        
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <div>
                                                                        <label for="choices-text-remove-button" class="form-label text-muted">Type/s of Invention</label>
                                                                        <input class="form-control" id="choices-text-remove-button" data-choices data-choices-limit="10" data-choices-removeItem type="text" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicUser" class="form-label">Key / Novel features of the Invention</label>
                                                                    <input id="basicUser" type="text" class="form-control" placeholder="">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="example-textarea" class="form-label"> Background of the Invention</label>
                                                                    <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicUser" class="form-label">Application or Use of Invention</label>
                                                                    <input id="basicUser" type="text" class="form-control" placeholder="">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicUser" class="form-label"> Stage of Development </label>
                                                                    <input id="basicUser" type="text" class="form-control" placeholder="Technology Status (Prototyping, clinical trial phase 1, etc.)">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicUser" class="form-label"> R&D Cost </label>
                                                                    <input id="basicUser" type="text" class="form-control" placeholder="Please provide a range (e.g. 1000 - 2000)">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <div>
                                                                        <label for="choices-text-remove-button" class="form-label text-muted">Potential Partners</label>
                                                                        <input class="form-control" id="choices-text-remove-button" data-choices data-choices-limit="10" data-choices-removeItem type="text" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                <label for="example-select" class="form-label">TRL</label>
                                                                    <select class="form-select" id="example-select">
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="example-select" class="form-label">Past Oral Disclosure Date</label>
                                                                    <input type="text" id="basic-datepicker" class="form-control" placeholder="Basic datepicker">
                                                                </div>
                                                            </div>    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Accordion Item #2
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until
                                                        the collapse
                                                        plugin adds the appropriate classes that we use to style each element. These classes control
                                                        the overall
                                                        appearance, as well as the showing and hiding via CSS transitions. You can modify any of
                                                        this with
                                                        custom CSS or overriding our default variables. It's also worth noting that just about any
                                                        HTML can go
                                                        within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Accordion Item #3
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                                                        collapse
                                                        plugin adds the appropriate classes that we use to style each element. These classes control
                                                        the overall
                                                        appearance, as well as the showing and hiding via CSS transitions. You can modify any of
                                                        this with
                                                        custom CSS or overriding our default variables. It's also worth noting that just about any
                                                        HTML can go
                                                        within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>        
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
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div><!-- end tab-pane -->

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