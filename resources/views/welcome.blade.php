@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{asset('css/beginning.css')}}">
@endsection

@section('title' , 'Welcome')

@section('header')
<div class="header text-center text-light">
    <h1 class="Judul">Events Organizer</h1>
    <p class="subJudul">Hai, Lihat-lihat event menarik</p>
    <hr color="white" width="60%">
    <a href="user/" class="btn btn-primary">Lihat Semua Event</a>
</div>
@endsection



@section('js')
@endsection('js')