@extends('layouts.main_ui')
@section('title', __('other.age_calculator'))
@section('description', __('description.age'))
@section('main')
<div class="container">
    <h1>{{ __('other.age_calculator')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/{{ app()->getLocale() }}">{{ __('banshus.home')}}</a></li>
            <li class="breadcrumb-item"><a href="/{{ app()->getLocale() }}/other">{{
                    __('banshus.other')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('other.age_calculator')}}</li>
        </ol>
    </nav>
    <div class="row row-cols-1">
        <div class="col">
            <p>{{ __('other.age_description')}}</p>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    {{ __('other.age_calculator')}}
                </div>
                <form id="date-form" method="POST"
                    action="{{ route('calculateAge', ['locale' => app()->getLocale()]) }}">
                    @csrf
                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                            <div class="col">
                                <label for="datepicker_start" class="form-label">{{ __('other.birth_date')}}</label>
                                <div class="input-group mb-3">
                                    <input type="text" id="datepicker_start" name="start_date" class="form-control"
                                        value="{{ $start_date ?? '' }}">
                                    <span class="input-group-text"><span
                                            class="material-icons">calendar_month</span></span>
                                </div>
                            </div>
                            <div class="col">
                                <label for="datepicker_end" class="form-label">{{ __('other.current_date')}}</label>
                                <div class="input-group mb-3">
                                    <input type="text" id="datepicker_end" name="end_date" class="form-control"
                                        value="{{ $end_date ?? '' }}">
                                    <span class="input-group-text"><span
                                            class="material-icons">calendar_month</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <div class="btn-group">
                            <button class="btn btn-sm btn-outline-secondary" type="submit">{{
                                __('banshus.calculate')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    {{ __('banshus.result')}}
                </div>
                <div class="card-body">
                    @if($event)
                    <p>{{ __('other.age')}}：{{ $data['years'] }} {{ __('other.years')}} {{ $data['months'] }} {{
                        __('other.months')}} {{ $data['days'] }} {{ __('other.days')}}</p>
                    <p>{{ __('other.total_months')}}：{{ $data['totalMonths'] }} {{ __('other.months')}} {{ $data['days']
                        }} {{ __('other.days')}}</p>
                    <p>{{ __('other.total_weeks')}}：{{ $data['totalWeeks'] }} {{ __('other.weeks')}} {{
                        $data['remainingDays'] }} {{ __('other.days')}}</p>
                    <p>{{ __('other.total_days')}}：{{ $data['totalDays'] }} {{ __('other.days')}}</p>
                    <p>{{ __('other.total_hours')}}：{{ $data['totalHours'] }} {{ __('other.hours')}}</p>
                    <p>{{ __('other.total_minutes')}}：{{ $data['totalMinutes'] }} {{ __('other.minutes')}}</p>
                    <p>{{ __('other.total_seconds')}}：{{ $data['totalSeconds'] }} {{ __('other.seconds')}}</p>
                    @else
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection