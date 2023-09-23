@extends('layouts.app')
@section('content')

    <div class="container mt-5 mb-5">
        <h3 class="pt-3 pb-3 pl-2 pr-2"">Municipality Of Beitbridge</h3></center>
        <div class="form-control p-4">
            <div class="row">
                <div class="col-md-6 mt-3">
                    <h3>PayNow</h3>
                    <iframe src="https://www.topup.co.zw/billpay/widget/municipality-of-beitbridge?iframe=true" style="background:#F7F7F7; width: 100%;height:356px;"></iframe>
                </div>
                <div class="col-md-6 mt-3">
                    <section>
                        <h3>Account Details</h3>
                        <div class="login-form-bd">
                            <div class="form-wrapper">
                                <div class="form-container">
                                    <form method='post' action="">
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <td>Name</td>
                                                    <td>: Akim Nyoni</td>
                                                </tr>
                                                <tr>
                                                    <td>Phone Number</td>
                                                    <td>: 0780998987</td>
                                                </tr>
                                                <tr>
                                                    <td>House Number</td>
                                                    <td>: 2028</td>
                                                </tr>
                                                <tr>
                                                    <td>Location</td>
                                                    <td>: Dulivhadzimu</td>
                                                </tr>
                                                <tr>
                                                    <td>Town</td>
                                                    <td>: Beitbridge</td>
                                                </tr>
                                                <tr>
                                                    <td>Account Number</td>
                                                    <td>: 11002028</td>
                                                </tr>
                                                <tr>
                                                    <td>Balance</td>
                                                    <td>: ZWL50</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <button class="btn btn-warning mt-3" type="submit" value="Logout" name="logout">Logout</button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    
@endsection