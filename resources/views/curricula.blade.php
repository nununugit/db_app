@extends('layouts.app')

@section('content')
<div id="app">
    <curriculum-component></curriculum-component>
  </div>
  <!-- Scripts -->
  <script src="{{ mix('/js/app.js') }}" defer></script>
@endsection