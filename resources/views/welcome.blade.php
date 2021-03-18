@extends('template.second')

@section('content')
    <H1 class="mt-5 text-sm text-gray-700 underline">Welcome, you can register with the link above</H1>
    @auth
    <div class="card">
        <div class="card-header">
          {{$user->name}}
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <img height="200px" src="{{asset("img/".$user->avatars->src)}}" alt="">
            
          </blockquote>
        </div>
      </div>
    @endauth
    @foreach ($categories as $category)
    <div class="my-4 border rounded p-2">
        <h1>Category {{$category->name}}</h1>
        <hr>
        <div class="row">
            @foreach ($images->where('category_id',$category->id) as $item)
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img class="w-100"  src="{{asset('img/'.$item->src)}}" alt="">
                    </div>
                </div>
                @if ($loop->iteration % 3 == 0)
                    </div>
                    <div class="row">
                @endif
            @endforeach
        </div>
    </div>
@endforeach
@endsection