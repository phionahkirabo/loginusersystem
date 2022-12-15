@extends('auth.cover')
@section('content')
@if(session('success'))
    <span style="color: blue">{{ session('success') }}</span>
@endif
<h2>Add blog</h2>
 
<form action ="{{ route('add_blog') }}" method="post" enctype="multipart/form-data">
    @csrf
    <table>
       <tr><td>Title: </td><td><input type="text" name="title"></td></tr>
       <tr><td>Image: </td><td><input type="file" name="image"></td></tr>
       <tr><td>Content:</td><td> <textarea type="text" name="content" rows="5"></textarea></td></tr><br><br>
    </table>
<button type="submit" class="btn btn-primary">Submit</button>




</form>
@endsection