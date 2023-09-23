@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4"></div>
            <div class="col-md-4">
            <h3 class="pt-3 pb-3 pl-2 pr-2">Municipality Of Beitbridge</h3>
            <section class="form-control p-4">
                <div class="login-form-bd">
                <div class="form-wrapper">
                    <h4><p>Register Portal</p></h4>
                    <div class="form-container">
                    <form method="post" autocomplete="off">
                        <div class="form-control-section mt-3">
                        <input class="form-control" type="text" name="account_num" id="account_num" placeholder="Account Number" autocomplete="off" required>
                        </div>

                        <div class="form-control-section mt-4">
                        <input class="form-control" type="password" name="password" id="password" placeholder="Password" autocomplete="off" required>
                        </div>

                        <div class="form-control-section mt-4">
                        <input class="form-control" type="password" name="checkpassword" id="checkPassword" placeholder="Confirm Password" autocomplete="off" required>
                        </div>
                        <div class="form-control-section mt-4">
                            <p id="alertPassword"></p>
                        </div>
                        <button id="btn-reg" class="btn btn-warning mt-2">Register</button>
                        <p class="text mt-3">Have an account? <a href="#" class="link-primary text-decoration-none"> Login</a></p>
                    </form>
                    </div>
                </div>
                </div>
            </section>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    
@endsection