<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto">Portal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5 mb-0">
        </center>
        <div class="form-control p-4">
            <div class="row">

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

                                    </form>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-md-6 mt-3">
                    <h3>PayNow</h3>
                    <iframe src="https://www.topup.co.zw/billpay/widget/municipality-of-beitbridge?iframe=true"
                        style="background:#F7F7F7; width: 100%;height:356px;"></iframe>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
</body>

</html>
