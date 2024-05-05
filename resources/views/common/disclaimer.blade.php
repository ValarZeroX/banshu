@extends('layouts.main')
@section('title', __('banshus.disclaimer'))
@section('description', __('description.disclaimer_5'))
@section('main')
<div class="container">
    <h1>{{ __('banshus.disclaimer')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/{{ App::getLocale() }}">{{ __('banshus.home')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{
                __('banshus.disclaimer')}}</li>
        </ol>
    </nav>
    <div>
        <p>{{ __('description.disclaimer_1')}}</p>
        <ul>
            <li>{{ __('description.disclaimer_2')}}</li>
            <li>{{ __('description.disclaimer_3')}}</li>
            <li>{{ __('description.disclaimer_4')}}</li>
            <li>{{ __('description.disclaimer_5')}}</li>
        </ul>
    </div>
</div>
@endsection