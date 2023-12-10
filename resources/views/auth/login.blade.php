<x-guest-layout>
    <div class="">

        <!-- CONTAINER OPEN -->
        <div class="col col-login mx-auto mt-7">
            <div class="text-center">
                <img src="../assets/images/brand/logo-white.png" class="header-brand-img" alt="">
            </div>
        </div>

        <div class="container-login100">
            <div class="wrap-login100 p-6">
                <form class="login100-form validate-form" action="{{ route('login') }}" method="POST">
                    @csrf
                    <span class="login100-form-title pb-5">
                        Login
                    </span>
                    <div class="panel panel-primary">
                        <div class="tab-menu-heading">
                            <div class="tabs-menu1">
                                <!-- Tabs -->
                                <ul class="nav panel-tabs">
                                    <li class="mx-0"><a href="#tab5" class="active" data-bs-toggle="tab">Email</a>
                                    </li>
                                    {{-- <li class="mx-0"><a href="#tab6" data-bs-toggle="tab">Mobile</a></li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body tabs-menu-body p-0 pt-5">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab5">
                                    <div class="wrap-input100 validate-input input-group"
                                        data-bs-validate="Valid email is required: ex@abc.xyz">
                                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                            <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                        </a>
                                        <input class="input100 border-start-0 form-control ms-0" name="email" value="{{ old('email') }}" type="email"
                                            placeholder="Email">
                                    </div>
                                    <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                            <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                        </a>
                                        <input class="input100 border-start-0 form-control ms-0" name="password" value="{{ old('password') }}" type="password"
                                            placeholder="Password">
                                    </div>
                                    <div class="text-end pt-4">
                                        <p class="mb-0"><a href="{{ route('password.request') }}"
                                                class="text-primary ms-1">Forgot Password?</a></p>
                                    </div>
                                    <div class="container-login100-form-btn">
                                        <button class="login100-form-btn btn-primary">
                                            Login
                                        </button>
                                    </div>
                                    <div class="text-center pt-3">
                                        <p class="text-dark mb-0">Not a member?<a href="{{ route('register') }}"
                                                class="text-primary ms-1">Sign UP</a></p>
                                    </div>
                                    <label class="login-social-icon"><span>Login with Social</span></label>
                                    <div class="d-flex justify-content-center">
                                        <a href="javascript:void(0)">
                                            <div class="social-login me-4 text-center">
                                                <i class="fa fa-google"></i>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="social-login me-4 text-center">
                                                <i class="fa fa-facebook"></i>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="social-login text-center">
                                                <i class="fa fa-twitter"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab6">
                                    <div id="mobile-num" class="wrap-input100 validate-input input-group mb-4">
                                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                            <span>+91</span>
                                        </a>
                                        <input class="input100 border-start-0 form-control ms-0">
                                    </div>
                                    <div id="login-otp" class="justify-content-around mb-5">
                                        <input class="form-control text-center w-15" id="txt1" maxlength="1">
                                        <input class="form-control text-center w-15" id="txt2" maxlength="1">
                                        <input class="form-control text-center w-15" id="txt3" maxlength="1">
                                        <input class="form-control text-center w-15" id="txt4" maxlength="1">
                                    </div>
                                    <span>Note : Login with registered mobile number to generate OTP.</span>
                                    <div class="container-login100-form-btn ">
                                        <a href="javascript:void(0)" class="login100-form-btn btn-primary"
                                            id="generate-otp">
                                            Proceed
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <!-- CONTAINER CLOSED -->
    </div>
</x-guest-layout>
