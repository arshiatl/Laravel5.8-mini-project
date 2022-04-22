<!doctype html>
<html lang="en">
<head>
    <title>AK</title>
    <!-- bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<style>
    h2{
        text-align: center;
    }

    h4{
        text-align: center;
        margin-top: 25px;
        color: gold;
    }

    input{
        height: 60px;
    }

    th, td{
        text-align: center;
    }
</style>

<body dir="rtl">

    <div class="container">

        @yield('content')

    </div>

</body>
</html>
