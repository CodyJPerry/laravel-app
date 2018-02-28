<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cashier-App</title>

  {{-- CSS --}}
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link rel="stylesheet" href="css/app.css">
</head>
<body>
  {{-- HEADER --}}
    <div id="site-header">
      @include('partials.header')
    </div>

    {{-- MAIN --}}
    <main id="site-main">
      @yield('content')
    </main>


    {{-- FOOTER --}}
    <div id="site-footer">
      @include('partials.footer')
    </div>


     {{-- JS --}}
     <script src="js/app.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <!-- has to be loaded with https -->
    <script src="https://js.stripe.com/v2/"></script>
    <script>
      Stripe.setPublishableKey("{{ env('STRIPE_KEY') }}")
    </script>
</body>
</html>
