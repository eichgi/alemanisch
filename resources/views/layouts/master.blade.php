<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="img/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>Alemannisch | Aprende Alemán</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <!-- Bootstrap core CSS     -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/paper-kit.css?v=2.1.0" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
{{--<link href="../assets/css/demo.css" rel="stylesheet"/>--}}

<!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/nucleo-icons.css" rel="stylesheet">

</head>
<body>

@yield('content')

<footer class="footer section-dark footer-black">
    <div class="container">
        <div class="row">
            <nav class="footer-nav">
                <ul>
                    <li><a href="https://www.creative-tim.com">Eichgi</a></li>
                    <li><a href="http://blog.creative-tim.com">Github</a></li>
                    {{--<li><a href="https://www.creative-tim.com/license">Licenses</a></li>--}}
                </ul>
            </nav>
            <div class="credits ml-auto">
					<span class="copyright">
						© <script>document.write(new Date().getFullYear())</script>, made {{--with <i
                                class="fa fa-heart heart"></i>--}} by Hiram Guerrero
					</span>
            </div>
        </div>
    </div>
</footer>

</body>

<!-- Core JS Files -->
<script src="js/jquery-3.2.1.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
<script src="js/popper.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<!--  Paper Kit Initialization snd functons -->
{{--<script src="js/paper-kit.js?v=2.1.0"></script>--}}
<script src="js/paper-kit.js"></script>

</html>
