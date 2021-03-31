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
                    <h1><i>Our Menu</i></h1>
                    <p class="pt-2"><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Food Area starts -->
    <section class="food-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-top">
                        <h3><span class="style-change">we serve</span> <br>delicious food</h3>
                        <p class="pt-3">They're fill divide i their yielding our after have him fish on there for greater man moveth, moved Won't together isn't for fly divide mids fish firmament on net.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-food">
                        <div class="food-img">
                            <img src="assets/images/food1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>Mexican Eggrolls</h5>
                                <span class="style-change">$14.50</span>
                            </div>
                            <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5 mt-sm-0">
                        <div class="food-img">
                            <img src="assets/images/food2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>chicken burger</h5>
                                <span class="style-change">$9.50</span>
                            </div>
                            <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5 mt-md-0">
                        <div class="food-img">
                            <img src="assets/images/food3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>topu lasange</h5>
                                <span class="style-change">$12.50</span>
                            </div>
                            <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="assets/images/food4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>pepper potatoas</h5>
                                <span class="style-change">$14.50</span>
                            </div>
                            <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="assets/images/food5.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>bean salad</h5>
                                <span class="style-change">$8.50</span>
                            </div>
                            <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="assets/images/food6.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>beatball hoagie</h5>
                                <span class="style-change">$11.50</span>
                            </div>
                            <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Food Area End -->

    <!-- Table Area Starts -->
    <section class="table-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3>Book <span>your</span> table</h3>
                        <p><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="#">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                            <input type="text" id="datepicker">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                            </div>
                            <input type="text" id="datepicker2">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-user-o"></i></span>
                            </div>
                            <input type="text">
                        </div>
                        <div class="table-btn text-center">
                            <a href="#" class="template-btn template-btn2 mt-4">book a table</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Table Area End -->


 @endsection



@section('js')

@endsection