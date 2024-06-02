@extends('layouts.main_ui')
@section('title', __('other.date_time_calculator'))
@section('description', __('description.time'))
@section('main')
<div class="container">
    <h1>{{ __('other.date_time_calculator')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/{{ app()->getLocale() }}">{{ __('banshus.home')}}</a></li>
            <li class="breadcrumb-item"><a href="/{{ app()->getLocale() }}/other">{{
                    __('banshus.other')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('other.date_time_calculator')}}</li>
        </ol>
    </nav>
    <div class="row row-cols-1">
        <div class="col">
            <p>{{ __('other.date_time_description')}}</p>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    {{ __('other.date_time_calculator')}}
                </div>
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                        <div class="col">
                            <label for="datepicker_start" class="form-label">{{ __('other.date_time')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" id="datetime" name="start_date" class="form-control"
                                    autocomplete="off">
                                <span class="input-group-text"><span class="material-icons">calendar_month</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1">
                        <div class="col">
                            <label class="form-label">{{ __('other.formula')}}</label>
                            <div class="w-100"></div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input add" type="radio" name="action" id="add" checked>
                                <label class="form-check-label" for="add">
                                    {{ __('other.add')}}
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input subtract" type="radio" name="action" id="subtract">
                                <label class="form-check-label" for="subtract">
                                    {{ __('other.subtract')}}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-2 row-cols-sm-4 row-cols-md-4 row-cols-lg-4">
                        <div class="col">
                            <label for="days" class="form-label">{{ __('other.days')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" id="days" name="days" class="form-control days" autocomplete="off"
                                    value="0">
                            </div>
                        </div>
                        <div class="col">
                            <label for="hours" class="form-label">{{ __('other.hours')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" id="hours" name="hours" class="form-control hours" autocomplete="off"
                                    value="0">
                            </div>
                        </div>
                        <div class="col">
                            <label for="minutes" class="form-label">{{ __('other.minutes')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" id="minutes" name="minutes" class="form-control minutes" autocomplete="off"
                                    value="0">
                            </div>
                        </div>
                        <div class="col">
                            <label for="seconds" class="form-label">{{ __('other.seconds')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" id="seconds" name="seconds" class="form-control seconds" autocomplete="off"
                                    value="0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <div class="btn-group">
                        <button class="btn btn-sm btn-outline-secondary calculateDatetime" type="submit">{{
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
                    <p class="fs-2 fw-bold"><span class="result"></span></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection