@extends('layouts.app')

@section('title', "manga's")
@section('content')
<div class="content">
    @include('components.filter')
    <ul class="items">@include('components.listitems', $products)</ul></div>

@endsection
