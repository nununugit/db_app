@extends('layouts.app')

@section('content')
<div id="app">
    <laboratory-component></laboratory-component>
  </div>
  <!-- Scripts -->
  <script src="{{ mix('/js/app.js') }}" defer></script>
@endsection