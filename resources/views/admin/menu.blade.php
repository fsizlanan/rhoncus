@extends('layouts.admin')

@section('title')
Menü Bilgileri
@endsection

@section('css')
@endsection

@section('content')
<div class="page-header">
  <h3 class="page-title"> Menü Bilgileri Listesi </h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Admin Panel</a></li>
      <li class="breadcrumb-item active" aria-current="page">Menü Bilgileri Listesi</li>
    </ol>
  </nav>
</div>
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-4">
            <a href="{{route('admin.menu.add')}}" class="btb btn-primary btn-block">Yeni Menü Ekle</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <h4 class="card-title">Menü Bilgileri</h4>

        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Düzenle</th>
                <th>Sil</th>
                <th>Sıralama</th>
                <th>Menü Adı</th>
                <th>Resim Adı</th>
                <th>Fiyat</th>
                <th>Menü Açıklama</th>
                <th>Status</th>
                <th>Eklenme Tarihi</th>
                <th>Güncellenme Tarihi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($list as $item)

              <tr id="{{$item->id}}">
                <td><a href="{{route('admin.menu.add', ['menuID'=>$item->id])}}" class="btn btn-warning editMenu">Düzenle <i class="fa fa-edit"></i></a></td>
                <td><a data-id="{{$item->id}}" href="javascript:void(0)" class="btn btn-danger deleteMenu">Sil <i class="fa fa-trash"></i></a></td>

                <td>{{$item->order}}. Sırada</td>
                <td>{{$item->MenuName}}</td>
                <td>{{$item->image}}</td>
                <td>{{$item->MenuPrice}}</td>
                <td>{{$item->MenuContact}}</td>
                <td>
                  @if($item->status)
                  <a data-id="{{$item->id}}" href="javascript:void(0)" class="btn btn-success changeStatus">Aktif</a>
                  @else
                  <a data-id="{{$item->id}}" href="javascript:void(0)" class="btn btn-danger changeStatus">Pasif</a>
                  @endif

                </td>
                <td>{{\Carbon\Carbon::parse($item->created_at)->format("d-m-Y H:i:s")}}</td>
                <td>{{\Carbon\Carbon::parse($item->updated_at)->format("d-m-Y H:i:s")}}</td>
              </tr>

              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')

<script>
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr("content") //meta tag ının içinde csrf token adında content attr sini değişkene ata
    }


  });


  $('.changeStatus').click(function() {

    let menuID = $(this).attr('data-id'); //data-id den gelen id değeri educationID değerine atandı.
    let self = $(this); //basılı olan elementin elemanları atanmış oldu

    $.ajax({

      url: "{{route('admin.menu.changeStatus') }}", //ajax için bir route belirttik
      //method : "POST" bu şekilde de gönderilerilebilir.
      type: "POST",
      async: false, //Async:false olarak ayarladığında öncelikle işleminin tamamlanması beklenir ve sonraki işleme o şekilde geçilir. true olarak ayarladığında ise işlemin tamamlanıp tamamlanmadığını kontrol etmez.
      data: {
        menuID: menuID
      },
      success: function(response) //success'i succes yazdığım için 2 saat hata aradım
      { //bu fonksiyon ile veri karşılandı  

        Swal.fire({
          icon: 'success',
          title: 'Başarılı !',
          text: response.MenuID + " ID'li kayıt durumu " + response.newStatus + " olarak güncellenmiştir.",
          confirmButtonText: 'Tamam',
        });

        if (response.status == 1) {
          self[0].innerHTML = "Aktif"; //değişen butonun yazısı değiştirildi, dizi döndüğünden 0.elemanı olan text kısmı alındı
          self.removeClass("btn-danger"); //danger clasını sil
          self.addClass("btn-success"); //succes clasını ekle


        } else if (response.status == 0) {
          self[0].innerHTML = "Pasif";
          self.removeClass("btn-success"); //danger clasını sil
          self.addClass("btn-danger"); //succes clasını ekle
        }
      },
      error: function() {}
    });
    //.done(function(){   bu yöntemle yukarıda kullanılan succes ve error parametreleri yöntemi aynı işlevi görür.
    //  }).fail(function(){
    //  });
  });

  $('.deleteMenu').click(function() {

    let menuID = $(this).attr('data-id'); //attr('data.id'); şeklinde de alınabilir.
    let self = $(this); //basılı olan elementin elemanları atanmış oldu


    Swal.fire({
      title: "Emin misiniz?",
      text:'Seçtiğiniz menü bilgisini silmek istediğinizden emin misin?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Evet, Sil!',
      canselButtonText: 'Hayır, Silme'
    }).then((result) => { //gelen cevap olumlu ise  

      if (result.isConfirmed) {
        $.ajax({
          url: "{{route('admin.menu.delete') }}", //ajax için bir delete route belirttik
          //method : "POST" bu şekilde de gönderilerilebilir.
          type: "POST",
          async: false, //Async:false olarak ayarladığında öncelikle işleminin tamamlanması beklenir ve sonraki işleme o şekilde geçilir. true olarak ayarladığında ise işlemin tamamlanıp tamamlanmadığını kontrol etmez.
          data: {
            menuID: menuID
          },
          success: function(response) //success'i succes yazdığım için 2 saat hata aradım
          { //bu fonksiyon ile veri karşılandı  

            Swal.fire({
              icon: 'success',
              title: 'Başarılı !',
              text: "Silme işlemi başarılı",
              confirmButtonText: 'Tamam',
            });  

            $("tr#" + menuID).remove();

          },
          error: function() {}
        });
      }
    })
  });
</script>
@endsection