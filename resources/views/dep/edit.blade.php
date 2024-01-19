@extends('layouts.app')

@section('content')
    @include('components.form',['task'=>$task])
@endsection 