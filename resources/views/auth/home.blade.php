
@extends('auth.cover')
@section('content')
   
    
    <table class="table table-bordered table-striped">
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          
          <th>Action</th>
        </tr>
      @foreach ($data as $i=> $stu)
            
        
        <tr>
          <td>{{ $i+= 1}}</td>
          <td>{{ $stu->name }}</td>
          <td>{{ $stu->email }}</td>
          
        <td> <a href="/view_blog/{{ $stu->id }}">View blog</a></td>
          
        </tr>
        
        @endforeach
      </table>
  @endsection