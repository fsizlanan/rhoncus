@extends('layouts.front')

@section('title')
İletişim
@endsection

@section('css')
<style>

</style>
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
                <!--
                <div id="mapBox" class="mapBox" data-lat="40.701083" data-lon="-74.1522848" data-zoom="13" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia." data-mlat="40.701083" data-mlon="-74.1522848">
             -->
                <iframe class="map-responsive" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3124.216769549554!2d27.209480515629526!3d38.45955658023759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b97d8db57390f1%3A0xb888b4d3b2a36eb0!2zUmhvbmN1cyDDp2nEn2vDtmZ0ZQ!5e0!3m2!1str!2str!4v1618428505471!5m2!1str!2str" width="100%" height="150%" style="border:0; position :relative; padding-bottom :300px;" allowfullscreen="" loading="lazy"></iframe>
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
                <form action="" method="POST" id="SubmitForm">
                    @csrf
                    <div class="left">
                        <input id="name" type="text" placeholder="Ad & Soyad" name="MassageName" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ad & Soyad'" required>
                        <input id="email" type="email" placeholder="E-mail Adresi" name="MessageEmail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'" required>
                        <input id="messageHead" type="text" placeholder="Konu Başlığı" name="MessageSubject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mesaj Başlığı'" required>
                    </div>
                    <div class="right">
                        <textarea id="message" name="message" cols="20" rows="7" placeholder="Detaylı Mesaj" id="MessajeText" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mesajınız'" required></textarea>
                    </div>
                    <button type="button" id="sendMessage" class="template-btn">Gönder</button>
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

<script>
    let sendMessage = $('#sendMessage');

    sendMessage.click(function() {

        if ($('#name').val().trim() == '') {

            Swal.fire({
                icon: 'info',
                title: 'Uyarı !',
                text: 'Lütfen İsim ve Soyisim Giriniz!',
                confirmButtonText: 'Tamam',

            });
        } else if ($('#email').val().trim() == '') {
            Swal.fire({
                icon: 'info',
                title: 'Uyarı !',
                text: 'Lütfen E-mail Adresi Giriniz!',
                confirmButtonText: 'Tamam',

            });
        } else if ($('#messageHead').val().trim() == '') {
            Swal.fire({
                icon: 'info',
                title: 'Uyarı !',
                text: 'Lütfen Konu Başlığını Giriniz!',
                confirmButtonText: 'Tamam',

            });
        } else if ($('#message').val().trim() == '') {
            Swal.fire({
                icon: 'info',
                title: 'Uyarı !',
                text: 'Lütfen Mesajınızın İçeriğini Giriniz!',
                confirmButtonText: 'Tamam',

            });
        } else {
            Swal.fire({

                    
                
                title: 'Bilgileriniz doğru ise; mesajı bize gönderin',
                text: "Formu tekrar gözden geçirmek ve düzenlemek için 'CANCEL''a tıklayınız.",
                icon: 'success',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Evet, Gönder '

            }).then((result) => {
             if (result.isConfirmed) {
                    Swal.fire(
                        'Gönderildi!',
                        'Formunuz gönderildi.',
                        'success'
                    )
                    
                    setTimeout(() => {
                    $('#SubmitForm').submit();
                }, 2000)
                
                }
            })

        }

    });
</script>

@endsection