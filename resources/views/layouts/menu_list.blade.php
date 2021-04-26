<section class="food-area section-padding">
     <div class="container">
         <div class="row">
             <div class="col-md-5">
                 <div class="section-top">
                     <h3><span class="style-change">ÜRÜNLERİMİZ</span> <br>Rhoncus Çiğköfte</h3>
                     <p class="pt-3">Bu eşsiz lezzete siz de ortak olun.</p>
                 </div>
             </div>
         </div>
         <div class="row">
             @foreach($list_menu as $item)
             <div class="col-md-4 col-sm-6">
                 <div class="single-food mt-5 mt-sm-0">
                     <div class="food-img">
                         <img src="{{asset($item->image ? 'storage/'.$item->image : 'assets/images/food1.jpg')}}" class="img-fluid" alt="">
                     </div>
                     <div class="food-content">
                         <div class="d-flex justify-content-between">
                             <h5>{{$item->MenuName}}</h5>
                         </div>
                         <p class="pt-3">{{$item->MenuContact}}</p>
                     </div>
                 </div>
             </div>
             @endforeach
         </div>
     </div>
 </section>
