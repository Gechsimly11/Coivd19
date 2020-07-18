@extends('layouts.app')

@section('content')
<main id="main">
  <div class="jumbotron">

    <div class="col-lg-6 ">
        <form method="POST" action="{{ route('messages.store') }}">
            @csrf
              <div class="row">
                <div class="form-group col-md-10 row">
                  <label for="name">{{ __('Name') }}</label>
                  <input type="text" name="name" class="form-control" placeholder="Your Name"/>
                </div>
                <div class="form-group col-md-10 row">
                  <label for="name">{{ __('Rate Our Website') }}</label>
                  <input type="text" class="form-control" name="rate" placeholder="Good Or Bad" />
                </div>
                <div class="form-group col-md-10 row">
                  <label for="name">{{ __('Drop Your Message Here!!!') }}</label>
                  <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                </div>
                <div class="form-group col-md-10 row ">
                  <button class="btn btn-lg btn-primary" type="submit">Send Message</button>
                </div>
            </form>
          </div>

        </div>

</main>
@endsection