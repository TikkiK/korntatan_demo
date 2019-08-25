@extends('layout.homelayout')

@section('title', 'Korntatan Showcase')

@section('homeNav')
<li class="nav-item active">
    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span> </a>
</li>
@endsection


@section('showcase')
<li class="nav-item">
    <a class="nav-link" href="/showcase">Show Case</a>
</li>
@endsection