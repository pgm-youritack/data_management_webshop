@extends('layouts.dashboard')
@section('title', 'new admin')
@section('content')

<div class="newAdmin">
    <form method="POST" class="RegisterAdmin">
        @csrf
        
        <label class="RegisterAdmin__input">
            First Name: <input type="text" name="first_name" >
        </label>
        <label class="RegisterAdmin__input">
            Last Name: <input type="text" name="last_name" >
        </label>
        <label class="RegisterAdmin__input">
            Email Address: <input type="email" name="email" >
        </label>
        <label class="RegisterAdmin__input">
            adres: <input type="text" name="adres" >
        </label>
        <label class="RegisterAdmin__input">
            postcode: <input type="text" name="postcode">
        </label>
        <label class="RegisterAdmin__input">
            Country: <input type="text" name="country" >
        </label>
        <label class="RegisterAdmin__input">
            password: <input type="password" name="password">
        </label>
        <input type="submit" value="Add admin">
    </form>
</div>
@endsection