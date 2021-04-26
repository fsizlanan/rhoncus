@extends('layouts.admin')

@php
if($menu){
$educationText = "Menü Düzenle";
}else{
$educationText = "Yeni Menü Ekleme";
}
@endphp


@section('title')

{{$educationText}}

@endsection

@section('css')
@endsection

@section('content')
<div class="page-header">
    <h3 class="page-title">{{$educationText}} </h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Admin Panel</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin.menu')}}">Menü Bilgileri Listesi</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$educationText}}</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" id="createEducationForm" method="POST" action="" enctype="multipart/form-data">
                    @csrf

                    @if ($menu)
                    <input type="hidden" name="menuID" value="{{$menu->id}}">
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="MenuName">Menü Adı</label>
                        <input type="text" class="form-control" name="MenuName" id="MenuName" placeholder="Menü Adı" value="{{$menu ? $menu->MenuName : ''}}">

                        @error('MenuName')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    @php if($menu){ @endphp
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="image">Resim Değiştir</label>
                                <input type="file" class="form-control" name="image" placeholder="Resim" value="{{$menu ? $menu->image : ''}}">
                                @error('image')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <img width="30%" src="{{asset($menu->image ? 'storage/'.$menu->image : 'assets/images/faces/face15.jpg')}}" alt="">
                            </div>

                        </div>
                    </div>
                    @php } else{ @endphp

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="image">Resim Ekle</label>
                                <input type="file" class="form-control" name="image" id="image" placeholder="Resim">
                                @error('image')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    @php } @endphp
              <!--      <div class="form-group">
                        <label for="MenuPrice">Menü Fiyatı</label>
                        <input type="text" class="form-control" name="MenuPrice" id="MenuPrice" placeholder="Menü Fiyatı" value="{{$menu ? $menu->MenuPrice : ''}}">
                        @error('MenuPrice')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                    </div>
                    -->
                    <div class="form-group">
                        <label for="MenuContact">Menü Açıklaması</label>
                        <textarea class="form-control" name="MenuContact" id="MenuContact" cols="30" rows="7" placeholder="Menü Açıklaması" value="{{$menu ? $menu->MenuContact : ''}}">{{$menu ? $menu->MenuContact : ''}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="order">Görüntülenecek Menü Sırası</label>
                        <input type="text" class="form-control" name="order" id="order" placeholder="Bu menü gösterilirken kaçıncı sırada gösterilsin?" value="{{$menu ? $menu->order : ''}}">
                        @error('order')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                    </div>

                    <div class="form-group">
                        <div class="form-check form-check-success">
                            <label class="form-check-label" for="status">

                                <?php
                                if ($menu) {

                                    $checStatus   =   $menu->status ? "checked" : '';
                                } else {

                                    $checStatus   =   '';
                                }

                                ?>

                                <input type="checkbox" name="status" id="status" class="form-check-input" {{$checStatus}}> Menü Sitede Gösterilsin mi?</label>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary mr-2" id="createButton" name="createButton">Kaydet</button>
                    <!--      <button class="btn btn-dark">Cancel</button>  -->
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    let createButton = $("#createButton");

    createButton.click(function() {

        if ($('#image').val() == '') {

            Swal.fire({
                icon: 'info',
                title: 'Uyarı !',
                text: 'Lütfen Resim Giriniz!',
                confirmButtonText: 'Tamam',
            })

        } else {
            $('#createEducationForm').submit();

        }


    });
</script>
@endsection