@extends('layouts.main')
@section('title', 'Banshu')
@section('main')
<div class="container">
    <h1>{{ __('banshus.conversion_calculator')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">{{ __('banshus.home')}}</li>
        </ol>
    </nav>
</div>
@endsection