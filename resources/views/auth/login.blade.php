@extends('layouts.auth', ['title' => 'Login'])

@section('content')
    <div class="d-flex flex-column h-100 p-3">
        <div class="d-flex flex-column flex-grow-1">
            <div class="row h-100">
                <div class="col-xxl-7">
                    <div class="row justify-content-center h-100">
                        <div class="col-lg-6 py-lg-5">
                            <div class="d-flex flex-column h-100 justify-content-center">
                                <div class="auth-logo mb-4">
                                        <img src="images/SEAL.png" height="150" alt="logo dark">
                                </div>
                                <h2 class="fw-bold fs-24">Sign In</h2>
                                <p class="text-muted mt-1 mb-4">Login Through Google Sign in.</p>
                                <div class="mb-5">
                                    <div class="d-grid gap-2">
                                        <a href="{{route('redirect.google')}}" class="btn btn-soft-red"><i
                                        class="bx bxl-google fs-20 me-1"></i> Sign in with Google Account</a>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-5 d-none d-xxl-flex">
                    <div class="card h-100 mb-0 overflow-hidden">
                        <div class="d-flex flex-column h-100">
                            <img src="/images/small/img-10.jpg" alt="" class="w-100 h-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
