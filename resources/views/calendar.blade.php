@extends('layout.main')

@section('title','Calendar')

@section('content')
    {!! $calendar->calendar() !!}
    {!! $calendar->script() !!}
@endsection