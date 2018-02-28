@extends('layouts.app')


@section('content')
  <div class="container">
    <article class="card post-single">
      {{-- Image --}}
      <div class="img-container col-xs-12" 
           style="background-image:url('{{ $post->image }}')">
     </div>

      {{-- card-content --}}
      <div class="card-content">
         {{-- title --}}
         <header class="post-header">
            <h1>{{ $post->title }}<h1>

          {{-- byline --}}
          <div class="byline">
            {{ $post->author->name }}
          </div>
        </header>
        
        {{-- TODO: show or hide if premium post --}}

        {{-- content --}}
        {!! $post->content !!}
        
      
      </div>

    </article>
  </div>

@endsection
