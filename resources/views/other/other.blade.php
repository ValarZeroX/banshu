@extends('layouts.main')
@section('title', __('banshus.other') . ' - Banshu')
@section('description', __('description.health'))
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
    <h2>{{ __('banshus.date_and_time')}}</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    {{ __('other.age_calculator')}}
                </div>
                <div class="card-body">
                    <p>{{ __('description.age')}}</p>
                </div>
                <div class="card-footer text-center">
                    <div class="btn-group">
                        <a href="/{{ app()->getLocale() }}/other/age" class="btn btn-sm btn-outline-secondary"
                            role="button">{{ __('banshus.proceed')}}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    {{ __('other.date_time_calculator')}}
                </div>
                <div class="card-body">
                    <p>{{ __('description.time')}}</p>
                </div>
                <div class="card-footer text-center">
                    <div class="btn-group">
                        <a href="/{{ app()->getLocale() }}/other/time" class="btn btn-sm btn-outline-secondary"
                            role="button">{{ __('banshus.proceed')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection