@extends('layouts.app')


@section('content') 

<div class="hero">
  <div class="hero-content">
    <h1>Welcome to the kool Cats!</h1>
    <h2>We can't wait to purr the cuteness on you!</h2>
  </div>
</div>

<section class="container">
  <div class="card card-padded">

    <form id="subscribe-form" action="/subscribe" method="POST">

    {{-- CSRF Token --}}
    {!! csrf_field() !!}

    @if (Auth::guest())
    {{--ONLY SHOW IF NOT LOGGED IN --}}
    {{--USER INFORMATION--}}
    <div class="section-header">
      <h2>User Info</h2>
    </div>

    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" placeholder="name" class="form-control">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" placeholder="email" class="form-control">
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" name="password" placeholder="password" class="form-control">
    </div>
  @endif

    {{--SUBSCRIPTION INFORMATION--}}
    <div class="section-header">
      <h2>Subcription Info</h2>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-xs-4 col-md-4">
          <div class="subscription-option">
            <input type="radio" id="plan_bronze" name="plan" value="bronze" checked>
            <label for="plan_bronze">
              <span class="plan-price">$5 <small>/mo</small></span>
              <span class="plan name">Bronze</span>
            </label>
          </div>
        </div>

        <div class="col-xs-4 col-md-4">
          <div class="subscription-option">
            <input type="radio" id="plan_silver" name="plan" value="silver">
            <label for="plan_silver">
              <span class="plan-price">$10 <small>/mo</small></span>
              <span class="plan name">Silver</span>
            </label>
          </div>
        </div>

        <div class="col-xs-4 col-md-4">
          <div class="subscription-option">
            <input type="radio" id="plan_gold" name="plan" value="gold">
            <label for="plan_gold">
              <span class="plan-price">$15 <small>/mo</small></span>
              <span class="plan name">Gold</span>
            </label>
          </div>
        </div>
      </div>
      </div>

    {{--CREDIT CARD INFORMATION--}}
    <div class="section-header">
      <h2>Credit Card Info</h2>
    </div>

      <div class="form-group row">
      {{--CREDIT CARD NUMBER--}}
        <div class="col-xs-8 col-md-8">
          <label>Credit Card Number</label>
          <input type="text" class="form-control" placeholder="5555 5555 7777 7777" data-stripe="number">
        </div>
        <div class="col-xs-4 col-md-4">
          {{--CVC--}}
          <label>CVC</label>
          <input type="number" class="form-control" placeholder="123" data-stripe="cvc">
        </div>
      </div>

      <div class="form-group row">
          <div class="col-xs-3 col-md-3">
            {{--EXP MONTH--}}
            <label>Expriation Month</label>
            <input type="text" class="form-control" placeholder="08" data-stripe="exp-month">
          </div>
           {{--EXP YEAR--}}
          <div class="col-xs-3 col-md-3">
            <label>Expriation Year</label>
            <input type="text" class="form-control" placeholder="2022" data-stripe="exp-year">
          </div>
      </div>

      <div class="stripe-errors"></div>

      @if (count($errors) > 0)
        <div class="alert alert-danger">
          @foreach($errors->all() as $error)
            {{ $error }}<br>
          @endforeach
        </div>

      @endif

      <div class="form-group text-center">
        <button type="submit" class="btn btn-success btn-lg btn-block">Join</button>
      </div>

</form>
    
  </div>
</section>

@endsection
