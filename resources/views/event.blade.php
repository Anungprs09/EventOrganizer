@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{asset('css/allevent.css')}}">
@endsection

@section('title', 'Event')

@section('header')
@endsection
@section('content')
<div class="jumbotron content2">
        <div class="container text-center">
            <h3>Semua Event menarik bisa kamu lihat disini</h3>
            <p>Nikmati harimu :D</p>
            <hr>
        </div>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
        <br>
            <div class="row row-cols-ms-1 row-cols-md-4">
                @foreach($event as $evnt)
                <div class="col mb-3">
                    <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{$evnt->name}}</h5>
                        <p class="card-text">Date  = {{$evnt->start}} -- {{$evnt->finish}}</p>
                        <p class="card-text">Quota = {{$evnt->quota}}</p>
                    </div>
                        <a href="/user/{{$evnt->id}}" class="btn btn-primary tombol">Detail Event</a>
                    </div>
                </div>
               @endforeach
            </div>
    </div>
@endsection
@section('js')
@endsection