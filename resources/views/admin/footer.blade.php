@extends('layouts.admin')

@section('css')

@endsection



@section('content')

<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Footer Bilgilerini Düzenle</h4>
      <p class="card-description"> Aşağıda bulunan footer bilgilerini düzenleyip 'Tamam' butonuna tıklayınız. </p>
      <form action="" method="POST" class="forms-sample" id="footerForm">
        @csrf
        <div class="form-group">
          <label for="facebook">Facebook</label>
          <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook" value="{{$footer ? $footer->facebook : ''}}">
          @error('facebook')
          <div class="alert alert-danger">{{$message}}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="twitter">Twitter</label>
          <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Twitter" value="{{$footer ? $footer->twitter : ''}}">
          @error('twitter')
          <div class="alert alert-danger">{{$message}}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="googleplus">Google Plus</label>
          <input type="text" class="form-control" id="googleplus" name="googleplus" placeholder="Google Plus" value="{{$footer ? $footer->googleplus : ''}}">
          @error('googleplus')
          <div class="alert alert-danger">{{$message}}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="pinterest">Pinterest</label>
          <input type="text" class="form-control" id="pinterest" name="pinterest" placeholder="Pinterest" value="{{$footer ? $footer->pinterest : ''}}">
          @error('pinterest')
          <div class="alert alert-danger">{{$message}}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="instagram">İnstagram</label>
          <input type="text" class="form-control" id="instagram" name="instagram" placeholder="İnstagram" value="{{$footer ? $footer->instagram : ''}}">
          @error('instagram')
          <div class="alert alert-danger">{{$message}}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="footertext">Footer Text</label>
          <input type="text" class="form-control" id="footertext" name="footertext" placeholder="Footer Text" value="{{$footer ? $footer->footertext : ''}}">
          @error('footertext')
          <div class="alert alert-danger">{{$message}}</div>
          @enderror
        </div>
        <button id="footerID" type="button" class="btn btn-primary mr-2 updatemessage">Tamam</button>
        <button class="btn btn-dark">Cancel</button>
      </form>
    </div>
  </div>
</div>


@endsection



@section('js')

<script>
  let footerID = $('#footerID');

  footerID.click(function() {

/*    Swal.fire({
      icon: 'success',
      title: 'Başarılı !',
      text: "Güncellendi.",
      confirmButtonText: 'Tamam',
    }); */
  $('#footerForm').submit();


  });
</script>

@endsection