<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="/font-register/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="font-register/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="font-register/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="font-register/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="font-register/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form method="POST"  action="{{route('re')}}">
                    @csrf
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            @if (session('message1'))
                        <span>{{session('message1')}}</span>
                        @endif
                        <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="text" name="pass">
                                </div>
                            </div>
                            @if (session('message3'))
                        <span>{{session('message3')}}</span>
                        @endif
                        <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Confirm Password</label>
                                    <input class="input--style-4" type="text" name="cofirm">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Name</label>
                                    <input class="input--style-4" type="text" name="name">
                                </div>
                            </div>   
                             <div class="row row-space">              
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="register"> Submit</button>
                        </div>
                      
                    </form>
                    <div class="p-t-15">
                    <a href="{{route('logi')}}">
                    <button class="btn btn--radius-2 btn--blue" type="button" > Login</button>
                    </a>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="font-register/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="font-register/vendor/select2/select2.min.js"></script>
    <script src="font-register/vendor/datepicker/moment.min.js"></script>
    <script src="font-register/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="font-register/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->