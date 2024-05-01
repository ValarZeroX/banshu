@extends('layouts.main')
@section('title', __('banshu.conversion_calculator') . ' - Banshu')
@section('main')
<div class="container">
    <h1>{{ __('banshu.conversion_calculator')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/{{ App::getLocale() }}">{{ __('banshu.home')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{
                __('banshu.conversion_calculator')}}</li>
        </ol>
    </nav>
</div>
</div>
@endsection