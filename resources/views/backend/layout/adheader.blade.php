<!DOCTYPE html>
<html>
<head>
    <title>تأجير سيارات حديثة</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link href=  "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"  rel="stylesheet">
    <link href=    " https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css"  rel="stylesheet">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script src=  "https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src= "https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src= "https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>


</head>
<body>

<nav>
<ul>
<li><a class="nav-link" style="color:red" href="{{route('admin.dash')}}">الرئيسية</a></li>

<button onclick="window.print();" class="noPrint">
Print Me
</button>
</ul>
</nav>

  <br> 


     