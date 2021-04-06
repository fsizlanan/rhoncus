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
    <section class="welcome-area section-padding2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="welcome-img">
                        <img src="assets/images/welcome-bg.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="welcome-text mt-5 mt-md-0">
                        <h3><span class="style-change">HOŞGELDİNİZ</span> <br>RHONCUS ÇİĞKÖFTE</h3>
                        <p class="pt-3">{{$list->aboutTextArea}}</p>
                        <a href="#" class="template-btn mt-3">Menülere Git</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->
    
    <!-- Deshes Area Starts -->
    <div class="deshes-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3>Rhoncus <span>SPECİAL</span> Ürünleri</h3>
                        <p><i>{{$list->specialSubHead}}}}</i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-6 align-self-center">
                    <h1>01.</h1>
                    <div class="deshes-text">
                        <h3><span>{{$list->special11}}</span><br> {{$list->special12}}</h3>
                        <p class="pt-3">{{$list->special1About}}</p>
                        <span class="style-change">₺ {{$list->special1Price}}</span>
                        <a href="#" class="template-btn3 mt-3">Menülere Git <span><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="assets/images/deshes1.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                    <img src="assets/images/deshes2.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2">
                    <h1>02.</h1>
                    <div class="deshes-text">
                        <h3><span>{{$list->special21}}</span><br> {{$list->special22}}</h3>
                        <p class="pt-3">{{$list->special2About}}</p>
                        <span class="style-change">₺ {{$list->special2Price	}}</span>
                        <a href="#" class="template-btn3 mt-3">Menülere Git <span><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deshes Area End -->

    <!-- Testimonial Area Starts -->
    <!-- Testimonial Area End -->

@endsection

@section('js')

@endsection

