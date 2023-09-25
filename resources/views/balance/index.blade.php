@extends('layouts.balance')
@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h3 class="pt-3 pb-3 pl-2 pr-2" style="color:white;">Municipality Of Beitbridge</h3>
                <section class="form-control p-4">
                    <div class="login-form-bd">
                    <div class="form-wrapper">
                        <h4><p>Login Portal</p></h4>
                        <div class="form-container">
                        <form action="" method="post" autocomplete="off">
                            <div class="form-control-section pt-3">
                            <input class="form-control" type="text" name= "acc_num" id="account_num" placeholder="Account Number"autocomplete="off" required>
                            </div>

                            <div class="form-control-section mt-4">
                            <input class="form-control" type="password" name="password" id="password" placeholder="Password" autocomplete="off" required>
                            </div>
                            <div class="form-control-section mt-4">
                                <p id="alertLoginMsg"></p>
                            </div>
                            <button name="submit" id='btn-login' class="btn btn-warning" >Login</button>
                            <p class="text mt-4">Don't have an account? <a href="#" class="link-primary text-decoration-none">Register</a></p>
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