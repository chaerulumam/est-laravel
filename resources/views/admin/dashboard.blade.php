@extends('layouts.app')

@section('content')
    <h1>Halo, User {{ Auth::user()->name }}</h1>
@endsection