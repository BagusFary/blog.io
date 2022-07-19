@extends('layouts.main')


@section('container')
    


    <h1 class="text-light display-4 text-align-center">About Me : </h1>


        <h3 class="text-light display-6 text-align-center">{{ $name }}</h3>
        <h3 class="text-light display-6 text-align-center">Student From SMKN 11 Malang</h3>
        <p class="text-light display-6 text-align-center">contact me : </p>
        <p class="text-light display-6 text-align-center">{{  $email }}</p>
        <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle rounded mx-auto d-block">

       

@endsection

        
