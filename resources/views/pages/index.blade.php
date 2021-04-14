 @extends('layouts.front')
 
 @section('title')
        Ana Sayfa
 @endsection

 @section('css')

 @endsection 

 @section('content')
   
    <!-- Banner Area Starts -->
    <section class="banner-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>Bir lülük mutluluk</h6>
                    <h1>Rhoncus <span class="prime-color">Çiğköfte</span><br>  
                    <span class="style-change"> <span class="prime-color"></span></span></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Welcome Area Starts -->
        @include('layouts.welcome')
    <!-- Welcome Area End -->

    <!-- Food Area starts -->

        @include('layouts.menu_list')

    <!-- Food Area End -->

    <!-- Reservation Area Starts -->
    <div class="reservation-area section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Rhoncus Çiğköfte Bayiliği</h2>
                    <h4 class="mt-4">Formu doldurun biz sizi arayalım</h4>
                    <a href="{{Route('franchising')}}" class="template-btn template-btn2 mt-4">Forma git</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation Area End -->
    
    <!-- Deshes Area Starts -->
        @include('layouts.deshes')
    <!-- Deshes Area End -->
    
    <!-- Table Area Starts -->

    @include('layouts.rezervation')

    <!-- Table Area End -->

@endsection


@section('js')

@endsection