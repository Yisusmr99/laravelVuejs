<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VueJs</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header text-center">Laravel y VueJs </h1>
            </div>

            @yield('content')
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
     <!-- Vue.js @2.5.1 -->
     {{-- <script type="text/javascript" src="js/vue.js"></script> --}}

     <!-- Add this after vue.js -->
     <script src="//unpkg.com/babel-polyfill@latest/dist/polyfill.min.js"></script>
     <script src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js"></script>
    
    @yield("scripts")
    </body>
</body>
</html>