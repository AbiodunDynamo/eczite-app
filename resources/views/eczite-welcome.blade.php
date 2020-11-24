@extends('eczite_layouts.app')

@push('css')
    <link rel="stylesheet" href="{{asset('eczite/style.css', true)}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endpush
@push('header')
    <header>
        <h1>Eczite</h1>
    </header>
@endpush

@section('content')
    <main>
        <x-section-one/>
        <div style="margin-bottom: 30px">
            <x-section-four/>
        </div>
        <x-section-three/>
        <x-section-two/>
    </main>
@endsection
