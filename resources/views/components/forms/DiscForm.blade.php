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
                                                <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-1 anchor" id="default">
                        Dropzone File Upload<a class="anchor-link" href="#default">#</a>
                    </h5>
                    <p class="text-muted">
                        DropzoneJS is an open source library that provides drag’n’drop file uploads with image previews.
                    </p>
                    <div class="mb-3">

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

                        <ul class="list-unstyled mb-0" id="dropzone-preview">
                            <li class="mt-2" id="dropzone-preview-list">
                                <!-- This is used as the file preview template -->
                                <div class="border rounded">
                                    <div class="d-flex align-items-center p-2">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-sm bg-light rounded">
                                                <img data-dz-thumbnail class="img-fluid rounded d-block" src="#" alt="Dropzone-Image" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="pt-1">
                                                <h5 class="fs-14 mb-1" data-dz-name>&nbsp;</h5>
                                                <p class="fs-13 text-muted mb-0" data-dz-size></p>
                                                <strong class="error text-danger" data-dz-errormessage></strong>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 ms-3">
                                            <button data-dz-remove class="btn btn-sm btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- end dropzon-preview -->
                    </div>
                    <div class="highlight">
                        <div class="highlight-toolbar">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a href="#homePill" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                        <span class="fs-12 text-uppercase">html</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#profilePill" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                        <span class="fs-12 text-uppercase">javascript</span>
                                    </a>
                                </li>
                            </ul>
                            <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="homePill">
                                <div class="code" data-simplebar>
                                    <pre class="language-html">
                                                                      <code>
                                                                           &lt;div class=&quot;dropzone&quot;&gt;
                                                                                &lt;div class=&quot;fallback&quot;&gt;
                                                                                     &lt;input name=&quot;file&quot; type=&quot;file&quot; multiple=&quot;multiple&quot;&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;div class=&quot;dz-message needsclick&quot;&gt;
                                                                                     &lt;i class=&quot;h1 bx bx-cloud-upload&quot;&gt;&lt;/i&gt;
                                                                                     &lt;h3&gt;Drop files here or click to upload.&lt;/h3&gt;
                                                                                     &lt;span class=&quot;text-muted fs-13&quot;&gt;
                                                                                          (This is just a demo dropzone. Selected files are &lt;strong&gt;not&lt;/strong&gt; actually uploaded.)
                                                                                     &lt;/span&gt;
                                                                                &lt;/div&gt;
                                                                           &lt;/div&gt;

                                                                           &lt;ul class=&quot;list-unstyled mb-0&quot; id=&quot;dropzone-preview&quot;&gt;
                                                                                &lt;li class=&quot;mt-2&quot; id=&quot;dropzone-preview-list&quot;&gt;
                                                                                     &lt;!-- This is used as the file preview template --&gt;
                                                                                     &lt;div class=&quot;border rounded&quot;&gt;
                                                                                          &lt;div class=&quot;d-flex p-2&quot;&gt;
                                                                                               &lt;div class=&quot;flex-shrink-0 me-3&quot;&gt;
                                                                                                    &lt;div class=&quot;avatar-sm bg-light rounded&quot;&gt;
                                                                                                    &lt;img data-dz-thumbnail class=&quot;img-fluid rounded d-block&quot; src=&quot;#&quot; alt=&quot;Dropzone-Image&quot; /&gt;
                                                                                                    &lt;/div&gt;
                                                                                               &lt;/div&gt;
                                                                                               &lt;div class=&quot;flex-grow-1&quot;&gt;
                                                                                                    &lt;div class=&quot;pt-1&quot;&gt;
                                                                                                    &lt;h5 class=&quot;fs-14 mb-1&quot; data-dz-name&gt;&amp;nbsp;&lt;/h5&gt;
                                                                                                    &lt;p class=&quot;fs-13 text-muted mb-0&quot; data-dz-size&gt;&lt;/p&gt;
                                                                                                    &lt;strong class=&quot;error text-danger&quot; data-dz-errormessage&gt;&lt;/strong&gt;
                                                                                                    &lt;/div&gt;
                                                                                               &lt;/div&gt;
                                                                                               &lt;div class=&quot;flex-shrink-0 ms-3&quot;&gt;
                                                                                                    &lt;button data-dz-remove class=&quot;btn btn-sm btn-danger&quot;&gt;Delete&lt;/button&gt;
                                                                                               &lt;/div&gt;
                                                                                          &lt;/div&gt;
                                                                                     &lt;/div&gt;
                                                                                &lt;/li&gt;
                                                                           &lt;/ul&gt;
                                                                           &lt;!-- end dropzon-preview --&gt;
                                                                      </code>
                                                                 </pre>
                                </div>
                            </div>
                            <div class="tab-pane" id="profilePill">
                                <div class="code" data-simplebar>
                                    <pre class="language-javascript">
                                                                      <code>
                                                                           // Dropzone
                                                                           var dropzonePreviewNode = document.querySelector("#dropzone-preview-list");
                                                                           dropzonePreviewNode.id = "";
                                                                           if (dropzonePreviewNode) {
                                                                                var previewTemplate = dropzonePreviewNode.parentNode.innerHTML;
                                                                                dropzonePreviewNode.parentNode.removeChild(dropzonePreviewNode);
                                                                                var dropzone = new Dropzone(".dropzone", {
                                                                                     url: 'https://httpbin.org/post',
                                                                                     method: "post",
                                                                                     previewTemplate: previewTemplate,
                                                                                     previewsContainer: "#dropzone-preview",
                                                                                });
                                                                           }
                                                                      </code>
                                                                 </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card body -->
            </div> <!-- end card -->
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

                                    <div class="tab-pane" id="basictab3" role="tabpanel">
                                        <h4 class="fs-16 fw-semibold mb-1">Social Media Links</h4>
                                        <p class="text-muted">Fill your social media links</p>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicGitLink" class="form-label">GitHub</label>
                                                    <input id="basicGitLink" type="text" class="form-control" placeholder="GitHub Link">
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicGoogleLink" class="form-label">Google</label>
                                                    <input id="basicGoogleLink" type="text" class="form-control" placeholder="Google Link">
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicInstagramLink" class="form-label">Instagram</label>
                                                    <input id="basicInstagramLink" type="text" class="form-control" placeholder="Instagram Link">
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicSkypeLink" class="form-label">Skype</label>
                                                    <input id="basicSkypeLink" type="text" class="form-control" placeholder="Skype Link">
                                                </div>
                                            </div> <!-- end col -->
                                        </div><!-- end row -->
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