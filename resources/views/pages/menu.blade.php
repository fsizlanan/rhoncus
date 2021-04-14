 @extends('layouts.front')

 @section('title')
 Menülerimiz
 @endsection

 @section('css')

 @endsection

 @section('content')

 <!-- Banner Area Starts -->
 <section class="banner-area banner-area2 menu-bg text-center">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <h1><i>Menülerimiz</i></h1>
                 <p class="pt-2"><i>Bir lülük mutluluk</i></p>
             </div>
         </div>
     </div>
 </section>
 <!-- Banner Area End -->

 <!-- Food Area starts -->
 @include('layouts.menu_list')
 <!-- Food Area End -->

 <!-- Table Area Starts -->

@include('layouts.rezervation')

 <!-- Table Area End -->


 @endsection



 @section('js')

 @endsection