@extends('layouts.app')
@section('title', 'light novels')
@section('content')
<div class="content">
    @include('components.filter')
    <ul class="items">@include('components.listitems', $products)</ul></div>

@endsection
