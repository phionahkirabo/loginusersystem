@extends('auth.cover')
@section('content')
@if(session('success'))
    <span style="color: blue">{{ session('success') }}</span>
@endif
<h2>Add blog</h2>
 
<form action ="{{url('update-blog',$blogs->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <table>
       <tr><td>Title: </td><td><input type="text" name="title" value = "{{$blogs->title }}"></td></tr>
       <tr><td>Image: </td><td><input type="file" name="image" value = "{{$blogs->image }}"></td></tr>
       <tr><td>Content:</td><td> <input type="text" name="content" rows="5" value = "{{$blogs->content}}"></td></tr><br><br>
    </table>
<button type="submit" class="btn btn-primary">Submit</button>




</form>
@endsection