@extends('layouts.main')
@section('title', 'Banshu')
@section('main')
<div class="container">
    <h1>Banshus</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">{{ __('banshus.home')}}</li>
        </ol>
    </nav>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    {{ __('banshus.conversion_calculator')}}
                </div>
                <div class="card-body">
                    <p>{{ __('description.conversion_calculator')}}</p>
                </div>
                <div class="card-footer text-center">
                    <div class="btn-group">
                        <a href="/{{ app()->getLocale() }}/conversion" class="btn btn-sm btn-outline-secondary"
                            role="button">{{ __('banshus.proceed')}}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    {{ __('banshus.health')}}
                </div>
                <div class="card-body">
                    <p>{{ __('description.health')}}</p>
                </div>
                <div class="card-footer text-center">
                    <div class="btn-group">
                        <a href="/{{ app()->getLocale() }}/health" class="btn btn-sm btn-outline-secondary"
                            role="button">{{ __('banshus.proceed')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection