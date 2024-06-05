@extends('layouts.main_ui')
@section('title', __('other.days_between_dates_calculator'))
@section('description', __('description.date'))
@section('main')
<div class="container">
    <h1>{{ __('other.days_between_dates_calculator')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/{{ app()->getLocale() }}">{{ __('banshus.home')}}</a></li>
            <li class="breadcrumb-item"><a href="/{{ app()->getLocale() }}/other">{{
                    __('banshus.other')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('other.days_between_dates_calculator')}}</li>
        </ol>
    </nav>
    <div class="row row-cols-1">
        <div class="col">
            <p>{{ __('other.days_between_dates_description')}}</p>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    {{ __('other.days_between_dates_calculator')}}
                </div>
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                        <div class="col">
                            <label for="date_start" class="form-label">{{ __('other.start_date')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" id="date_start" name="start_date" class="form-control"
                                    autocomplete="off">
                                <span class="input-group-text"><span class="material-icons">calendar_month</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                        <div class="col">
                            <label for="date_end" class="form-label">{{ __('other.end_date')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" id="date_end" name="end_date" class="form-control"
                                    autocomplete="off">
                                <span class="input-group-text"><span class="material-icons">calendar_month</span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <div class="btn-group">
                        <button class="btn btn-sm btn-outline-secondary calculateDateBetween" type="submit">{{
                            __('banshus.calculate')}}</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    {{ __('banshus.result')}}
                </div>
                <div class="card-body">
                    <p class="fs-2 fw-bold"><span class="result_day"></span></p>
                    <p class="fs-2 fw-bold"><span class="result_week"></span></p>
                    <p class="fs-2 fw-bold"><span class="result_month"></span></p>
                    <p class="fs-2 fw-bold"><span class="result_year"></span></p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.other = {!! json_encode(trans('other')) !!};
</script>
@endsection