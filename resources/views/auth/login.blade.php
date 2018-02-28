@extends('layouts.app')


@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="card auth-card">
         <h1>Login</h1>

        <form method="POST" action="/login">

        {{-- CSRF Token --}}
        {!! csrf_field() !!}

          {{-- email--}}
          <div class="form-group">
          <label>Email</label>
            <input type="text" name="email" class="form-control" placeholder="email">
          </div>
          {{-- password --}}
          <div class="form-group">
          <label>Password</label>
           <input type="password" name="password" class="form-control" placeholder="password">
          </div>
          {{-- login button --}}
          <div class="form-group">
          <button type="submit" class="btn btn-success btn-lg btn-block">
            Login
          </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
