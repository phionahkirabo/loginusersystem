<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    
    <form action="/logout" method="POST" style="margin-top:10px"> 
        @csrf
        <button style="margin-right:5%;float: right;">logout</button>

    </form>
    
    <h1>
        {{ auth()->user()->name }}
        
       
    </h1>

    <hr>
    <div class="row">
      <div class="col-md-4"></div>
        <div class="col-md-4"> 

        
   
        <a href="{{url('/home')}}">Users</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{route('add')}}">Add a blog</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('/view_my_blog/{id}')}}">View my blogs</a>
        <br> <br> <br> <br> 
      
       @yield('content')
        {{-- it helps to call content that are in another page --}}
        </div>
       <div class="col-md-4"></div>
    </div>

</body>
</html>