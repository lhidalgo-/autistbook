<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AutistBook</title>

    <link rel="icon" type="image/ico" href="/img/favicon.ico" />

{{HTML::style('packages/bootstrap/dist/css/bootstrap.min.css') }}
{{HTML::style("packages/font-awesome/css/font-awesome.min.css") }}

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/packages/jquery/dist/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/packages/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>
@yield('content')
</body>
</html>