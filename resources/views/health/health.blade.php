@extends('layouts.main')
@section('title', __('banshus.health') . ' - Banshu')
@section('main')
@vite(['resources/js/health.js'])
<div class="container">
    <h1>{{ __('banshus.health')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/{{ App::getLocale() }}">{{ __('banshus.home')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{
                __('banshus.health')}}</li>
        </ol>
    </nav>
    <h2>{{ __('banshus.health_calculators')}}</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    {{ __('banshus.bmi')}}
                </div>
                <div class="card-body">
                    <p>{{ __('description.bmi')}}</p>
                </div>
                <div class="card-footer text-center">
                    <div class="btn-group">
                        <a href="/{{ app()->getLocale() }}/health/bmi" class="btn btn-sm btn-outline-secondary"
                            role="button">{{ __('banshus.proceed')}}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    {{ __('banshus.body_fat')}}
                </div>
                <div class="card-body">
                    <p>{{ __('description.body_fat')}}</p>
                </div>
                <div class="card-footer text-center">
                    <div class="btn-group">
                        <a href="/{{ app()->getLocale() }}/health/body-fat" class="btn btn-sm btn-outline-secondary"
                            role="button">{{ __('banshus.proceed')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection