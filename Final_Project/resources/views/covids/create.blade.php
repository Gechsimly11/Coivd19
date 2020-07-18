@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register Country') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('covids.store') }}">
                        @csrf

                        <div class="form-group col-md-10 row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="country">
                            </div>
                        </div>

                        <div class="form-group col-md-10 row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Total Case') }}</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="case">
                            </div>
                        </div>

                        <div class="form-group col-md-10 row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Total Deadth') }}</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="deadth">
                            </div>
                        </div>

                        <div class="form-group col-md-10 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Recover') }}</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="recover" >
                            </div>
                        </div>

                        <div class="form-group col-md-10 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Total Active') }}</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="active" >
                            </div>
                        </div>

                        <div class="form-group col-md-10 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('New Case') }}</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="new" >
                            </div>
                        </div>

                        <div class="form-group col-md-10 row ">
                                <button type="submit" class=" col-md-4 btn btn-lg btn-primary">
                                    {{ __('Register') }}
                                </button>
                            <div class="col-md-8 ">
                                <a href="{{route('covids.index')}}" class="btn btn-lg btn-warning">Return</a>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
