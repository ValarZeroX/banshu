@extends('layouts.main')
@section('title', 'Banshu')
@section('main')
<div class="container">
    <h1>{{ __('banshu.conversion_calculator')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">{{ __('banshu.home')}}</li>
        </ol>
    </nav>
</div>
@endsection