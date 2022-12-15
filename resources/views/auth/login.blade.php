<html>
    <head><title> Login</title></head>
<body>
<div class="container" >  
    @if(session('loginfailed'))
        <span style="color:red;">{{session('loginfailed')}}</span>


    @endif
    
<form action="/login" method="post">
    @csrf
    {{-- <div class="imgcontainer">
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div> --}}
  
   
    
      <label for="uname"><b>email</b></label>
      <input type="email" placeholder="Enter email" name="email"><br>
      <span style="color:red;">@error('email') {{$message}} @enderror</span>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password"><br>
      <span style="color:red;">@error('password') {{$message}} @enderror</span>
  
      <button type="submit">Login</button>
      
    
  </form>
  
</div>
  
<div class="container" style="background-color:#f1f1f1"> 
   <a href="registration">A new user!! Register here</a>
 {{-- <button type="button" class="cancelbtn">Cancel</button> --}}
 {{-- <span class="psw">Forgot <a href="#">password?</a></span> --}}
</div> 
  </body>
  </html>