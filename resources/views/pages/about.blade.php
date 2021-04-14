@extends('layouts.front')

@section('title')

    Hakkımızda

@endsection

@section('css')

@endsection

@section('content')

        <!-- Banner Area Starts -->
        <section class="banner-area banner-area2 text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1><i>{{$list->aboutHead}}</i></h1>
                    <p class="pt-2"><i>{{$list->aboutSubHead}}</i></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Welcome Area Starts -->
        @include('layouts.welcome')
    <!-- Welcome Area End -->

    <!-- Deshes Area Starts -->
        @include('layouts.deshes')
    <!-- Deshes Area End -->

    <!-- Testimonial Area Starts -->
    <!-- Testimonial Area End -->

@endsection

@section('js')

@endsection

