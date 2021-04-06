@extends('layouts.admin')

@section('css')

@endsection

@section('content')

<div class="page-header">
    <h3 class="page-title"> Mesajlar </h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Admin Panel</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Mesajlar </li>
        </ol>
    </nav>
</div>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Sosyal Medya Hesap Bilgileri</h4>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sil</th>
                                <th>#</th>
                                <th>Ad & Soyad</th>
                                <th>E-mail</th>
                                <th>Konu Başlığı</th>
                                <th>Mesaj İçeriği</th>
                                <th>Gönderilme Tarihi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $item)
                            <!-- Döngü Başlangıcı / liste veritabanından çekiliyor-->

                            <tr id=" {{$item->id}}">
                                <td><a data-id="{{$item->id}}" href="javascript:void(0)" class="btn btn-danger deleteMessage">Sil <i class="fa fa-trash"></i></a></td>

                                <td>{{$item->id}}</td>
                                <td>{{$item->MassageName}}</td>
                                <td>{{$item->MessageEmail}}</td>
                                <td>{{$item->MessageSubject}}</td>
                                <td>{{$item->MessajeText}}</td>
                                <td>{{\Carbon\Carbon::parse($item->created_at)->format("d-m-Y H:i:s")}}</td>
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

    $('.deleteMessage').click(function() {

        var MessageID = $(this).attr('data-id'); //attr('data.id'); şeklinde de alınabilir.

        Swal.fire({
            title: "Emin misiniz?",
            text: "ID'si " + MessageID + ' olan mesajı silmek istediğinizden emin misin?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet, Sil!',
            canselButtonText: 'Hayır, Silme'
        }).then((result) =>

            { //gelen cevap olumlu ise  

                if (result.isConfirmed) {

                    $.ajax({

                        url: "{{route('admin.message.delete') }}", //ajax için bir delete route belirttik

                        //method : "POST" bu şekilde de gönderilerilebilir.

                        type: "POST",
                        async: false, //Async:false olarak ayarladığında öncelikle işleminin tamamlanması beklenir ve sonraki işleme o şekilde geçilir. true olarak ayarladığında ise işlemin tamamlanıp tamamlanmadığını kontrol etmez.
                        data: {
                            MessageID: MessageID
                        },
                        success: function(response) //success'i succes yazdığım için 2 saat hata aradım
                        { //bu fonksiyon ile veri karşılandı  

                            Swal.fire({
                                icon: 'success',
                                title: 'Başarılı !',
                                text: "Silme işlemi başarılı",
                                confirmButtonText: 'Tamam',
                            });

                            $('tr#' + MessageID).remove(); //tr satırı id'si socialMediaID olan, bu admin panelinden siler. 

                        },

                        error: function() {

                        }

                    });


                }
            })



    });
</script>

@endsection