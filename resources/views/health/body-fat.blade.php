@extends('layouts.main')
@section('title', __('banshus.body_fat_calculator'))
@section('description', __('description.body_fat'))
@section('main')
@vite(['resources/js/health.js'])
<div class="container">
    <h1>{{ __('banshus.body_fat_calculator')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/{{ app()->getLocale() }}">{{ __('banshus.home')}}</a></li>
            <li class="breadcrumb-item"><a href="/{{ app()->getLocale() }}/health">{{
                    __('banshus.health')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('banshus.body_fat_calculator')}}</li>
        </ol>
    </nav>
    <p>{{ __('description.body_fat')}}</p>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <span class="metric_units">{{ __('banshus.metric_units')}}</span>
                    <span class="imperial_units hidden">{{ __('banshus.imperial_units')}}</span>
                </div>
                <div class="card-body">
                    <div class="row row-cols-1">
                        <div class="col">
                            <label class="form-label">{{ __('banshus.gender')}}</label>
                            <div class="w-100"></div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input gender" type="radio" name="gender" id="male" checked>
                                <label class="form-check-label" for="male">
                                    {{ __('banshus.male')}}
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input gender" type="radio" name="gender" id="female">
                                <label class="form-check-label" for="female">
                                    {{ __('banshus.female')}}
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <label for="age" class="form-label">{{ __('banshus.age')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly"
                                    placeholder="{{ __('banshus.required')}}" id="age">
                            </div>
                        </div>
                    </div>
                    <div class="metric_units">
                        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                            <div class="col">
                                <label for="height" class="form-label">{{ __('banshus.height')}}</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.required')}}" id="height">
                                    <span class="input-group-text">cm</span>
                                </div>
                            </div>
                            <div class="col">
                                <label for="weight" class="form-label">{{ __('banshus.weight')}}</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.required')}}" id="weight">
                                    <span class="input-group-text">kg</span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-cols-1">
                            <div class="alert alert-info" role="alert">
                                <span class="material-icons">info</span>
                                {{ __('health.body_fat_4')}}
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                            <div class="col">
                                <label for="neck" class="form-label">{{ __('banshus.neck_circumference')}}</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.optional')}}" id="neck">
                                    <span class="input-group-text">cm</span>
                                </div>
                            </div>
                            <div class="col">
                                <label for="waist" class="form-label">{{ __('banshus.waist_circumference')}}</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.optional')}}" id="waist">
                                    <span class="input-group-text">cm</span>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-1 hip_metric hidden">
                            <div class="col">
                                <label for="hip" class="form-label">{{ __('banshus.hip_circumference')}}</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.optional')}}" id="hip">
                                    <span class="input-group-text">cm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="imperial_units hidden">
                        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">
                            <div class="col">
                                <label for="foot" class="form-label">{{ __('banshus.height')}}</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.required')}}" id="foot">
                                    <span class="input-group-text">ft</span>
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.required')}}" id="inch">
                                    <span class="input-group-text">in</span>
                                </div>
                            </div>
                            <div class="col">
                                <label for="pound" class="form-label">{{ __('banshus.weight')}}</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.required')}}" id="pound">
                                    <span class="input-group-text">lb</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row row-cols-1">
                                <div class="col">
                                    <div class="alert alert-info" role="alert">
                                        <span class="material-icons">info</span>
                                        {{ __('health.body_fat_4')}}
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="neck_foot" class="form-label">{{ __('banshus.neck_circumference')}}</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.optional')}}" id="neck_foot">
                                    <span class="input-group-text">ft</span>
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.optional')}}" id="neck_inch">
                                    <span class="input-group-text">in</span>
                                </div>
                            </div>
                            <div class="col">
                                <label for="waist_foot" class="form-label">{{
                                    __('banshus.waist_circumference')}}</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.optional')}}" id="waist_foot">
                                    <span class="input-group-text">ft</span>
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.optional')}}" id="waist_inch">
                                    <span class="input-group-text">in</span>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-1 hip_imperial hidden">
                            <div class="col">
                                <label for="hip_foot" class="form-label">{{ __('banshus.hip_circumference')}}</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.optional')}}" id="hip_foot">
                                    <span class="input-group-text">ft</span>
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.optional')}}" id="hip_inch">
                                    <span class="input-group-text">in</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">
                        <div class="col">
                            <span class="metric_units"><button type="button"
                                    class="btn btn-outline-success change_imperial">{{
                                    __('banshus.switch_to_imperial_units')}}</button></span>
                            <span class="imperial_units hidden"><button type="button"
                                    class="btn btn-outline-success change_metric">{{
                                    __('banshus.switch_to_metric_units')}}</button></span>
                            <button type="submit" class="btn btn-success calculateBodyFat">{{
                                __('banshus.calculate')}}</button>
                        </div>
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
                    <p class="fs-2 fw-bold">{{ __('health.body_fat')}} = <span class="result"></span></p>
                    <p class="fs-2 fw-bold">{{ __('health.body_fat_category')}} = <span class="result_1"></span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">
        <div class="col">
            <p>{{ __('health.body_fat_1')}}</p>
            <p>{{ __('health.body_fat_2')}}</p>
            <p>{{ __('health.body_fat_3')}}</p>
        </div>
        <div class="col">
            <h2>{{ __('health.healthy_body_fat_ranges_for_adults')}}</h2>
            <p>{{ __('health.body_fat_23')}}</p>
            <h3>{{ __('health.men')}}</h3>
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>{{ __('banshus.age')}}</th>
                        <th>18 - 39</th>
                        <th>40 - 59</th>
                        <th>60+</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ __('health.underfat')}}</td>
                        <td>0 - 10%</td>
                        <td>0 - 11%</td>
                        <td>0 - 13%</td>
                    </tr>
                    <tr>
                        <td>{{ __('health.healthy')}}</td>
                        <td>11 - 21%</td>
                        <td>12 - 22%</td>
                        <td>14 - 24%</td>
                    </tr>
                    <tr>
                        <td>{{ __('health.overfat')}}</td>
                        <td>22 - 26%</td>
                        <td>23 - 27%</td>
                        <td>25 - 29%</td>
                    </tr>
                    <tr>
                        <td>{{ __('health.obese')}}</td>
                        <td>27 - 45%+</td>
                        <td>28 - 45%+</td>
                        <td>30 - 45%+</td>
                    </tr>
                </tbody>
              </table>
        </div>
        <div class="col">
            <h3>{{ __('health.women')}}</h3>
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>{{ __('banshus.age')}}</th>
                        <th>18 - 39</th>
                        <th>40 - 59</th>
                        <th>60+</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ __('health.underfat')}}</td>
                        <td>0 - 20%</td>
                        <td>0 - 21%</td>
                        <td>0 - 22%</td>
                    </tr>
                    <tr>
                        <td>{{ __('health.healthy')}}</td>
                        <td>21 - 34%</td>
                        <td>22 - 35%</td>
                        <td>23 - 29%</td>
                    </tr>
                    <tr>
                        <td>{{ __('health.overfat')}}</td>
                        <td>35 - 39%</td>
                        <td>36 - 40%</td>
                        <td>30 - 36%</td>
                    </tr>
                    <tr>
                        <td>{{ __('health.obese')}}</td>
                        <td>40 - 45%+</td>
                        <td>41 - 45%+</td>
                        <td>37 - 45%+</td>
                    </tr>
                </tbody>
              </table>
        </div>
        <div class="col">
            <h2>{{ __('health.american_body_fat_categorization')}}</h2>
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>{{ __('health.description')}}</th>
                        <th>{{ __('health.women')}}</th>
                        <th>{{ __('health.men')}}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ __('health.essential_fat')}}</td>
                        <td>10 - 13%</td>
                        <td>2 - 5%</td>
                    </tr>
                    <tr>
                        <td>{{ __('health.athletes')}}</td>
                        <td>14 - 20%</td>
                        <td>6 - 3%</td>
                    </tr>
                    <tr>
                        <td>{{ __('health.fitness')}}</td>
                        <td>21 - 24%</td>
                        <td>14 - 17%</td>
                    </tr>
                    <tr>
                        <td>{{ __('health.average')}}</td>
                        <td>25 - 31%</td>
                        <td>18 - 24%</td>
                    </tr>
                    <tr>
                        <td>{{ __('health.obese')}}</td>
                        <td>32%+</td>
                        <td>25%+</td>
                    </tr>
                </tbody>
              </table>
        </div>
        <div class="col">
            <h2>{{ __('health.body_fat_5')}}</h2>
            <ul>
                <li>{{ __('health.body_fat_6')}}</li>
                <li>{{ __('health.body_fat_7')}}</li>
                <li>{{ __('health.body_fat_8')}}</li>
                <li>{{ __('health.body_fat_9')}}</li>
                <li>{{ __('health.body_fat_10')}}</li>
                <li>{{ __('health.body_fat_11')}}</li>
                <li>{{ __('health.body_fat_12')}}</li>
                <li>{{ __('health.body_fat_13')}}</li>
            </ul>
        </div>
        <div class="col">
            <h2>{{ __('health.body_fat_14')}}</h2>
            <ul>
                <li>{{ __('health.body_fat_15')}}</li>
                <li>{{ __('health.body_fat_16')}}</li>
                <li>{{ __('health.body_fat_17')}}</li>
                <li>{{ __('health.body_fat_18')}}</li>
                <li>{{ __('health.body_fat_19')}}</li>
                <li>{{ __('health.body_fat_20')}}</li>
                <li>{{ __('health.body_fat_21')}}</li>
                <li>{{ __('health.body_fat_22')}}</li>
            </ul>
        </div>
    </div>
</div>
<script>
    window.health = {!! json_encode(trans('health')) !!};
</script>
@endsection