@extends('layouts.app')

@section('content')

@if ($errors->any())

<div class="alert alert-danger">

    <strong>hahaha!</strong> you have an error check your inputs!.<br><br>

    <ul>

        @foreach ($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>

@endif


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Covid Update') }}</div>

                <div class="card-body">
                    <form action="{{ route('covids.update',  $covids->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group col-md-6 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="country" value="{{$covids->country}}">
                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Total Case') }}</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="case" value="{{$covids->case}}">
                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Total Deadth ') }}</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="deadth" value="{{$covids->deadth}}">
                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Recover') }}</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="recover" value="{{$covids->recover}}">
                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Total Active') }}</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="active" value="{{$covids->active}}">
                            </div>
                        </div>

                        <div class="form-group col-md-6 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('New Case') }}</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="new" value="{{$covids->new}}">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-md-6 ">
                                <button type="submit" class="btn btn-lg btn-primary">
                                    {{ __('Update') }}
                                </button>
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
