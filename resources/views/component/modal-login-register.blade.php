    <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
            <!--Content-->
            <div class="modal-content">

                <!--Modal cascading tabs-->
                <div class="modal-c-tabs">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link active" data-toggle="tab" href="#panelLogin" role="tab"><i
                                    class="fa fa-user mr-1"></i>
                                Login</a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#panelRegister" role="tab"><i
                                    class="fa fa-user-plus mr-1"></i>
                                Register</a>
                        </li>
                    </ul>

                    <!-- Tab panels -->
                    <div class="tab-content">
                        <!--Panel 7-->
                        <div class="tab-pane fade in show active" id="panelLogin" role="tabpanel">

                            <!--Body-->
                            <form id="form-login" class="modal-body mb-1" method="post" action="{{route('login')}}">
                                @csrf
                                <div class="text-center text-danger">
                                    <label id="error-login-label" class="error text-danger"></label>
                                </div>
                                <div class="md-form form-sm mb-5">
                                    <i class="fa fa-envelope prefix text-dark"></i>
                                    <input type="email" id="login-input-email" name="email"
                                           class="form-control form-control-sm text-dark validate">
                                    <label id="error-login-email" data-error="wrong" class="text-dark" data-success="right" for="login-input-email">Your
                                        email</label>
                                </div>

                                <div class="md-form form-sm mb-4">
                                    <i class="fa fa-lock prefix text-dark"></i>
                                    <input type="password" id="login-input-password" name="password"
                                           class="form-control form-control-sm text-dark validate">
                                    <label id="error-login-password" class="text-dark" data-error="wrong" data-success="right" for="login-input-password">Your
                                        password</label>
                                </div>
                                <div class="text-center mt-2">
                                    <button type="submit" class="btn btn-info">Log in <i class="fa fa-sign-in ml-1"></i></button>
                                </div>
                            </form>
                        </div>
                        <!--/.Panel 7-->

                        <!--Panel 8-->
                        <div class="tab-pane fade" id="panelRegister" role="tabpanel">

                            <!--Body-->
                            <form id="form-register" class="modal-body" method="post" action="{{route('register')}}">
                                @csrf
                                <div class="text-center text-danger">
                                    <label id="error-register-label" class="error text-danger"></label>
                                </div>
                                <div class="md-form form-sm mb-5">
                                    <i class="fa fa-envelope prefix text-dark"></i>
                                    <input type="email" id="register-input-email" name="email"
                                           class="form-control form-control-sm text-dark validate">
                                    <label id="error-login-email" class="text-dark" data-error="wrong" data-success="right" for="register-input-email">Your
                                        email</label>
                                </div>

                                <div class="md-form form-sm mb-5">
                                    <i class="fa fa-lock prefix text-dark"></i>
                                    <input type="password" id="register-input-password" name="password"
                                           class="form-control form-control-sm text-dark validate modal-input">
                                    <label id="error-login-password" class="text-dark" data-error="wrong" data-success="right" for="register-input-password">Your
                                        password</label>
                                </div>

                                <div class="md-form form-sm mb-4">
                                    <i class="fa fa-lock prefix text-dark active"></i>
                                    <input type="password" id="register-input-repeat-password" name="password_confirmation"
                                           class="form-control form-control-sm text-dark validate">
                                    <label data-error="wrong" class="text-dark" data-success="right" for="register-input-repeat-password">Repeat
                                        password</label>
                                </div>

                                <div class="text-center form-sm mt-2">
                                    <button type="submit" class="btn btn-info">Sign up <i class="fa fa-sign-in ml-1"></i></button>
                                </div>

                            </form>
                        </div>
                        <!--/.Panel 8-->
                    </div>

                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
