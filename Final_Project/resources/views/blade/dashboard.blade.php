@extends('layouts.app')

@section('content')
<main id="main">

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered table-dark">
        <tr>
            <th style="width: 5%;">#</th>
            <th style="width: 28%;">Country</th>
            <th style="width: 10%;">Total Case</th>
            <th style="width: 10%;">Total Death</th>
            <th style="width: 10%;">Recover</th>
            <th style="width: 10%;">Total Active</th>
            <th style="width: 10%;">New Case</th>
            <th style="width: 17%;">Action</th>
        </tr>
        @foreach($covids as $covid)
        <tr>
            <td >{{ $covid->id  }}</td>
            <td >{{ $covid->country }}</td>
            <td >{{ $covid->case }}</td>
            <td >{{ $covid->deadth }}</td>
            <td >{{ $covid->recover }}</td>
            <td >{{ $covid->active }}</td>
            <td >{{ $covid->new }}</td>
            <td>
                    <form action="{{route('covids.destroy',$covid->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <a href="{{route('covids.show', $covid->id)}}" class="btn btn-warning">Show</a>
                        <a href="{{route('covids.edit', $covid->id)}}" class="btn btn-info">Edit</a>
                    </form>
            </td>
        </tr>
        
        @endforeach





    </table>


    <div class="row">
        <div class="col-ml-12">
            <div class="form-group pull-right">
            <a href="{{ route ('covids.create') }}" class="btn btn-lg btn-success">Register New Country</a>
            </div>
        </div>
    </div>
    



</main>
@endsection