<x-guest-layout>
    <div class="">
        <!-- CONTAINER OPEN -->
        <div class="col col-login mx-auto mt-7">
            <div class="text-center">
                <img src="{{ asset('assets/images/brand/logo-white.png') }}" class="header-brand-img m-0" alt="">
            </div>
        </div>
        <div class="container-login100">
            <div class="wrap-login100 p-6">
                <form class="login100-form validate-form" action="{{ route('register') }}" method="post">
                    @csrf
                    <span class="login100-form-title">
                        Registration
                    </span>
                    <div class="wrap-input100 validate-input input-group"
                        data-bs-validate="Valid name is required: abc">
                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                            <i class="mdi mdi-account" aria-hidden="true"></i>
                        </a>
                        <input class="input100 border-start-0 ms-0 form-control" id="name" name="name" value="{{ old('name') }}" type="text" placeholder="User name">
                    </div>
                    <div class="wrap-input100 validate-input input-group"
                        data-bs-validate="Valid email is required: ex@abc.xyz">
                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                            <i class="zmdi zmdi-email" aria-hidden="true"></i>
                        </a>
                        <input class="input100 border-start-0 ms-0 form-control" name="email" value="{{ old('email') }}" type="email" placeholder="Email">
                    </div>
                    <div class="wrap-input100 validate-input input-group"
                        data-bs-validate="Valid email is required: 12345678">
                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                            <i class="zmdi zmdi-phone" aria-hidden="true"></i>
                        </a>
                        <input class="input100 border-start-0 ms-0 form-control" name="contact_number" value="{{ old('contact_number') }}" type="contact_number" placeholder="Phone">
                    </div>
                    <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                            <i class="zmdi zmdi-eye" aria-hidden="true"></i>
                        </a>
                        <input class="input100 border-start-0 ms-0 form-control" name="password" type="password" placeholder="Password">
                    </div>
                    <div class="wrap-input100 validate-input input-group" id="Password-toggle1">
                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                            <i class="zmdi zmdi-eye" aria-hidden="true"></i>
                        </a>
                        <input class="input100 border-start-0 ms-0 form-control" name="password_confirmation" type="password" placeholder="Password">
                    </div>
                    <label class="custom-control custom-checkbox mt-4">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-label">Agree the <a href="terms.html">terms and
                                policy</a></span>
                    </label>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn btn-primary">
                            Register
                        </button>
                    </div>
                    <div class="text-center pt-3">
                        <p class="text-dark mb-0">Already have account?<a href="{{ route('login') }}"
                                class="text-primary ms-1">Sign In</a></p>
                    </div>
                    <label class="login-social-icon"><span>Register with Social</span></label>
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
                </form>
            </div>
        </div>
        <!-- CONTAINER CLOSED -->
    </div>
</x-guest-layout>
