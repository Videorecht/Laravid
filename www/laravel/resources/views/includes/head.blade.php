	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<title>{{ config('app.name', 'Laravel') }} | @yield('title', '')</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    
    <!-- Fonts & Icon-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="icon" href="{{ asset('favicon.ico') }}">   

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
