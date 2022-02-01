@extends('layouts.app')

@section('content')
    <div class="container">
      <h1>ciao</h1>
      <slider :data-list="{{ json_encode($sliderMovies) }}"></slider>
    </div>
@endsection