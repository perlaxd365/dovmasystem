@extends('adminlte::page')

@section('title', 'Dovma')

@section('content_header')
   <h2> @yield('title_page')</h2>
@stop

@section('content')
    @yield('content_page')
@stop

@section('css')
@livewireStyles
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
    
@section('js')
@livewireScripts
    <script> console.log('Hi!'); </script>
@stop
