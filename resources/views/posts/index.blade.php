<!--

forma 1

<x-app-layout>
    <h1>Estoy en el index</h1>
</x-app-layout>
-->
<!--Forma 2
@ extends('layouts.app')
extendieme una plantilla que se encunetra dentro de la capreta
layout y se va a llamar app
-->

@extends('layouts.app')
<!--
una forma
@ section('title')
Laravel 12 - Plantilla 2
@ endsection
otra forma
-->
@section('title', 'Laravel 12 - Plantilla 2')

@push('css')
    @vite('resources/css/app.css')
@endpush



@section('content')
<h1>Estoy en el index</h1>
@endsection


