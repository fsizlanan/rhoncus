@extends('layouts.admin')

@section('css')

@endsection



@section('content')

<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Hakkımızda Bilgilerini Düzenle</h4>
      <p class="card-description"> Aşağıda bulunan <b>HAKKIMIZDA</b> bilgilerini düzenleyip 'Tamam' butonuna tıklayınız. </p>
      <form action="" method="POST" class="forms-sample" id="aboutForm">
        @csrf
        <div class="form-group">
          <label for="aboutHead">Hakkımızda Başlığı</label>
          <input type="text" class="form-control" id="aboutHead" name="aboutHead" placeholder="Hakkımızda Başlığı" value="{{$list ? $list->aboutHead : ''}}">
          @error('aboutHead')
          <div class="alert alert-danger">{{$message}}</div>
          @enderror

        </div>
        <div class="form-group">
          <label for="aboutSubHead">Hakkımızda Alt Başlığı</label>
          <input type="text" class="form-control" id="aboutSubHead" name="aboutSubHead" placeholder="Hakkımızda Alt Başlığı" value="{{$list ? $list->aboutSubHead : ''}}">
          @error('aboutSubHead')
          <div class="alert alert-danger">{{$message}}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="aboutTextArea">Hoşgeldiniz İçerik Alanı</label>
          <textarea class="form-control" name="aboutTextArea" id="aboutTextArea" cols="30" rows="10" placeholder="Hoşgeldiniz İçerik Alanı">{{$list ? $list->aboutTextArea : ''}}</textarea>
          @error('aboutTextArea')
          <div class="alert alert-danger">{{$message}}</div>
          @enderror

        </div>
        <div class="form-group">
          <label for="specialSubHead">Special Rhoncus Alt Başlık</label>
          <input type="text" class="form-control" id="specialSubHead" name="specialSubHead" placeholder="Special Ürün 1 Turuncu Başlık" value="{{$list ? $list->specialSubHead : ''}}">
          @error('specialSubHead')
          <div class="alert alert-danger">{{$message}}</div>
          @enderror

        </div>
        <div class="form-group">
          <label for="special11">Special Ürün 1 Turuncu Başlık</label>
          <input type="text" class="form-control" id="special11" name="special11" placeholder="Special Ürün 1 Turuncu Başlık" value="{{$list ? $list->special11 : ''}}">
          @error('special11')
          <div class="alert alert-danger">{{$message}}</div>
          @enderror

        </div>
        <div class="form-group">
          <label for="special12">Special Ürün 1 Siyah Başlık</label>
          <input type="text" class="form-control" id="special12" name="special12" placeholder="Special Ürün 1 Siyah Başlık" value="{{$list ? $list->special12 : ''}}">
          @error('special12')
          <div class="alert alert-danger">{{$message}}</div>
          @enderror

        </div>
        <div class="form-group">
          <label for="special1About">Special Ürün 1 Hakkında İçeriği</label>
          <input type="text" class="form-control" id="special1About" name="special1About" placeholder="Special Ürün 1 Hakkında İçeriği" value="{{$list ? $list->special1About : ''}}">
          @error('special1About')
          <div class="alert alert-danger">{{$message}}</div>
          @enderror

        </div>
        <div class="form-group">
          <label for="special1Price">Special Ürün 1 Fiyat Bilgisi</label>
          <input type="text" class="form-control" id="special1Price" name="special1Price" placeholder="Special Ürün 1 Fiyat Bilgisi" value="{{$list ? $list->special1Price : ''}}">
          @error('special1Price')
          <div class="alert alert-danger">{{$message}}</div>
          @enderror

        </div>
        <div class="form-group">
          <label for="special21">Special Ürün 2 Turuncu Başlık</label>
          <input type="text" class="form-control" id="special21" name="special21" placeholder="Special Ürün 2 Turuncu Başlık" value="{{$list ? $list->special21 : ''}}">
          @error('special21')
          <div class="alert alert-danger">{{$message}}</div>
          @enderror

        </div>
        <div class="form-group">
          <label for="special22">Special Ürün 2 Siyah Başlık</label>
          <input type="text" class="form-control" id="special22" name="special22" placeholder="Special Ürün 2 Siyah Başlık" value="{{$list ? $list->special22 : ''}}">
          @error('special22')
          <div class="alert alert-danger">{{$message}}</div>
          @enderror

        </div>
        <div class="form-group">
          <label for="special2About">Special Ürün 2 Hakkında İçeriği</label>
          <input type="text" class="form-control" id="special2About" name="special2About" placeholder="Special Ürün 2 Hakkında İçeriği" value="{{$list ? $list->special2About : ''}}">
          @error('special2About')
          <div class="alert alert-danger">{{$message}}</div>
          @enderror

        </div>
        <div class="form-group">
          <label for="special2Price">Special Ürün 2 Fiyat Bilgisi</label>
          <input type="text" class="form-control" id="special2Price" name="special2Price" placeholder="Special Ürün 2 Fiyat Bilgisi" value="{{$list ? $list->special2Price : ''}}">
          @error('special2Price')
          <div class="alert alert-danger">{{$message}}</div>
          @enderror

        </div>

        <!--      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input"> Remember me </label>
                      </div>
            -->
        <button id="aboutButton" type="button" class="btn btn-primary mr-2">Tamam</button>
        <button class="btn btn-dark">Cancel</button>
      </form>
    </div>
  </div>
</div>


@endsection



@section('js')

<script>
  $aboutButton = $('#aboutButton');

  $aboutButton.click(function() {

    $('#aboutForm').submit();

  });
</script>

@endsection