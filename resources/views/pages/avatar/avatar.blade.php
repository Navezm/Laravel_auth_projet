@extends('template.main')

@section('content')
    @if (count($avatars) < 5)
        @include('partials.avatar.formCreate')
    @endif
    @include('partials.avatar.table')
@endsection