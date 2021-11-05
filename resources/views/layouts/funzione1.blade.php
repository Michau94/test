@extends('layouts.app')

@section('content')
    <div class="container">

        <h1 class="text-center">Ho fame per questo sviluppo col mio Team Deliveboo</h1>

        {{-- in laravel per passare dati a componenti usare props --}}
        <example-component data="ciaone"></example-component>
    </div>

@endsection
