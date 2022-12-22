{{-- @extends('auth.cover')
@section('content')
<?php
// use App\Models\blog;
//   $blog_count =blog::all()->where('id',$id);
//   $blog_counts = collect($blog_count)->count();  
//   if( $blog_counts ==0){
//     echo 'zero blogs';
//   }else {
//     echo $blog_counts;
//   }
?>

{{-- <div class="card " style="background-color: teal"> --}}
 {{-- @foreach($blogs as $data) --}}
 
    {{-- <div class="card-header">
        {{ $data->title }}
    </div>
    <div class="card-body bg-info">
        <div class="col-md-4">
            <img src ="{{ URL::to('/') }}/images/blog/{{ $data->image }}" style="width: 100px;height: 120px;">
        </div>
        <div class="col-md-8">
            <p>{{ $data->content }}</p>
    
        </div>
    </div>

 
    <br> --}}
    {{-- <div class="card bg-info">
        <div class="card-header bg-info text-white ">{{$data->title}}</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{URL::to('/')}}/images/blog/{{$data->image}}" style="width:50px;length:50px;"><br>
                    
                    </div>
                    <div class="col-md-6">
                       {{$data->content}}      
                    </div>
               </div>
            </div>
            <div class="card-header bg-info text-white ">{{$data->title}}</div>
            <div class="card-header bg-info text-white ">{{$data->title}}</div>
    </div>

 @endforeach --}}
{{-- </div> --}}

 
{{-- @endsection --}} 

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
  @if(session('delete'))
  <span style="color: blue">{{ session('delete') }}</span>
@endif
<h2>view my blog</h2>
{{-- <button style="margin-right:5%;float: right;">logout</button> --}}
<button style="margin-right:5%;float: right;"><a href="{{url('home')}}" class="btn btn-dange">Back</a></button>
<div style="margin-right:10%;float: right;">
    {{-- <a href="{{url('add-student')}}">view my blog</a> --}}
    {{-- <a href="{{url('/view_my_blog/{id}')}}">view my blog</a> --}}
</div>
<table>
  <tr>
    <th>#</th>
    <th>title</th>
    <th>image</th>
    <th>content</th>
    
    <th>Action</th>
  </tr>
{{-- @foreach($blogs as $i=> $blog) --}}
@foreach($blogs as $i=> $blog)
      
  
  <tr>
    <td>{{ $i+= 1}}</td>  
     
    <td>{{ $blog->title }}</td>
    <td><img src="{{URL::to('/')}}/images/blog/{{$blog->image}}" style="width:50px;length:50px;"></td>
    <td>{{ $blog->content}}</td>
    <td> <a href="{{ url('/edit_blog')}}/{{ $blog->id }}">edit</a> | <td><a href="{{ url('/delete_blog')}}/{{ $blog->id }}">delete</a> </td>
    
  </tr>
  
  @endforeach
</table>

</body>
</html>

