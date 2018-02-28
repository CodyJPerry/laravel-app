@extends('layouts.app')


@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="card auth-card">
         <h1>Register</h1>

        <form method="POST" action="/register">

        {{-- CSRF Token --}}
        {!! csrf_field() !!}

        {{-- Name --}}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" required placeholder="name" class="form-control">
        </div>


          {{-- email--}}
          <div class="form-group">
          <label for="email">Email</label>
            <input type="text" name="email" class="form-control" required placeholder="email">
          </div>
          {{-- password --}}
          <div class="form-group">
          <label for="password">Password</label>
           <input type="password" name="password" class="form-control" required placeholder="password">
          </div>

          {{-- Confirm password --}}
          <div class="form-group">
          <label for="password_confirmation">Confirm Password</label>
           <input type="password" name="password_confirmation" class="form-control" required placeholder="password">
          </div>

          {{-- Register button --}}
          <div class="form-group">
          <button type="submit" class="btn btn-success btn-lg btn-block">
            Register
          </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
