@extends('layouts.main')
@section('title', __('banshus.conversion_calculator') . ' - Banshu')
@section('main')
<div class="container">
    <h1>{{ __('banshus.other')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/{{ App::getLocale() }}">{{ __('banshus.home')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{
                __('banshus.other')}}</li>
        </ol>
    </nav>
    <h2>{{ __('banshus.unit_conversion')}}</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    {{ __('banshus.length_conversion')}}
                </div>
                <div class="card-body">
                    <p>{{ __('description.length')}}</p>
                </div>
                <div class="card-footer text-center">
                    <div class="btn-group">
                        <a href="/{{ app()->getLocale() }}/conversion/length" class="btn btn-sm btn-outline-secondary"
                            role="button">{{ __('banshus.proceed')}}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    {{ __('banshus.weight_conversion')}}
                </div>
                <div class="card-body">
                    <p>{{ __('description.weight')}}</p>
                </div>
                <div class="card-footer text-center">
                    <div class="btn-group">
                        <a href="/{{ app()->getLocale() }}/conversion/weight" class="btn btn-sm btn-outline-secondary"
                            role="button">{{ __('banshus.proceed')}}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    {{ __('banshus.temperature_conversion')}}
                </div>
                <div class="card-body">
                    <p>{{ __('description.temperature')}}</p>
                </div>
                <div class="card-footer text-center">
                    <div class="btn-group">
                        <a href="/{{ app()->getLocale() }}/conversion/temperature" class="btn btn-sm btn-outline-secondary"
                            role="button">{{ __('banshus.proceed')}}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    {{ __('banshus.area_conversion')}}
                </div>
                <div class="card-body">
                    <p>{{ __('description.area')}}</p>
                </div>
                <div class="card-footer text-center">
                    <div class="btn-group">
                        <a href="/{{ app()->getLocale() }}/conversion/area" class="btn btn-sm btn-outline-secondary"
                            role="button">{{ __('banshus.proceed')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection