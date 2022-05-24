@extends('adminlte::page')

@section('title', 'Corsch')

@section('content_header')
   <h1> @yield('title_page')</h1>
@stop

@section('content')
    @yield('content_page')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
    
@section('js')
    <script> console.log('Hi!'); </script>
@stop