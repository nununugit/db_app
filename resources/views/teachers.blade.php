@extends('layouts.app')

@section('content')
<div id="app">
    <teacher-component></teacher-component>
  </div>
  <!-- Scripts -->
  <script src="{{ mix('/js/app.js') }}" defer></script>
@endsection