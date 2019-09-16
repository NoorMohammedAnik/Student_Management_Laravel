<!DOCTYPE html>
<html>
<head>


    <meta charset="utf-8">
    <title>Student Management Database</title>

    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
</head>

<body>

<div class="container">




    <!-- Static navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Student Management</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('create')}}">Create</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>

            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>

    <div class="container">

        @yield('content')

    </div>

</div>


<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>