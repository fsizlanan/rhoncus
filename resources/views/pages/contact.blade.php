@extends('layouts.front')
 
 @section('title')
        İletişim
 @endsection

 @section('css')

 @endsection

 @section('content')

            <!-- Banner Area Starts -->
    <section class="banner-area banner-area2 contact-bg text-center"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1><i>{{$list ? $list->ContactHead : ''}}</i></h1>
                    <p class="pt-2"><i>{{$list ? $list->ContactHeadText : ''}}</i></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Map Area Starts -->
    <section class="map-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="mapBox" class="mapBox" 
                        data-lat="40.701083" 
                        data-lon="-74.1522848" 
                        data-zoom="13" 
                        data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                        data-mlat="40.701083"
                        data-mlon="-74.1522848">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Map Area End -->


    <!-- Contact Form Starts -->
    <section class="contact-form section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="info-text">
                            <h5>{{$list ? $list->ContactAdressHead : ''}}</h5>
                            <p>{{$list ? $list->ContactAdressHeadSub : ''}}</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="info-text">
                            <h5>{{$list ? $list->ContactTelHead : ''}}</h5>
                            <p>{{$list ? $list->ContactTelHeadSub : ''}}</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="info-text">
                            <h5>{{$list ? $list->ContactMailHead : ''}}</h5>
                            <p>{{$list ? $list->ContactMailHeadSub : ''}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form action="" method="POST">
                    @csrf
                        <div class="left">
                            <input type="text" placeholder="Ad & Soyad" name="MassageName" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" required>
                            <input type="email" placeholder="E-mail Adresi" name="MessageEmail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" required>
                            <input type="text" placeholder="Konu Başlığı" name="MessageSubject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" required>
                        </div>
                        <div class="right">
                            <textarea name="message" cols="20" rows="7"  placeholder="Detaylı Mesaj" id="MessajeText" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" required></textarea>
                        </div>
                        <button type="submit" class="template-btn">Gönder</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form End -->



 @endsection


 @section('js')

     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I"></script>
    <script src="{{asset('assets/js/vendor/gmaps.min.js')}}"></script>


 @endsection