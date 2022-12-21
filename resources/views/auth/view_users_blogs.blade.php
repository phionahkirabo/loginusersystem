@extends('auth.cover')
@section('content')
<?php
use App\Models\blog;
  //$blog_count =blog::find($id);
  //$blog_counts = collect($blog_count)->count();  
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
    <div class="card bg-info">
        <div class="card-header bg-info text-white ">{{$blogs->title}}</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{URL::to('/')}}/images/blog/{{$blogs->image}}" style="width:50px;length:50px;"><br>
                    
                    </div>
                    <div class="col-md-6">
                       {{$blogs->content}}      
                    </div>
               </div>
            </div>
    </div>

 {{-- @endforeach --}}
{{-- </div> --}}

 
@endsection