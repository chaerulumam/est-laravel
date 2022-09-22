@extends('layouts.app')

@section('content')
    <h1>Halo, {{ Auth::user()->name }}</h1>
@endsection