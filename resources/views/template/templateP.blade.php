<title>Labs - Design Studio</title>
<meta charset="UTF-8">
<meta name="description" content="Labs - Design Studio">
<meta name="keywords" content="lab, onepage, creative, html">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Favicon -->
<link href="{{asset('img/favicon.ico')}}" rel="shortcut icon"/>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

<!-- Stylesheets -->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
<link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}"/>
<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
<link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>

    <!-- Page Preloder -->

    <div id="preloder">
        <div class="loader">
            <img src="{{asset('img/logo.png')}}" alt="">
            <h2>Loading.....</h2>
        </div>
    </div>

    @yield('content')

    @include('components.footer')

    <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
</body>
</html>