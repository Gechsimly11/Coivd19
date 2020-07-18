@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Covid Detail') }}</div>

                <div class="card-body">
                        <div class="form-group col-md-6 row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                            <div class="col-md-8">
                                <strong>{{$covids->country ?? 'country'}}</strong>
                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Total Case') }}</label>

                            <div class="col-md-8">
                                <strong>{{$covids->case ?? 'case'}}</strong>
                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Total Deadth') }}</label>

                            <div class="col-md-8">
                                <strong>{{$covids->deadth ?? 'deadth'}}</strong>
                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Recover') }}</label>

                            <div class="col-md-8">
                                <strong>{{$covids->recover ?? 'recover'}}</strong>
                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Total Active') }}</label>

                            <div class="col-md-8">
                                <strong>{{$covids->active ?? 'active'}}</strong>
                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('New Case') }}</label>

                            <div class="col-md-8">
                                <strong>{{$covids->new ?? 'new'}}</strong>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-md-6 ">
                                <a href="{{route('covids.index')}}" class="btn btn-lg btn-warning">Return</a>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
