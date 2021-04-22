@extends('layouts.front')

@section('title')
Franchising
@endsection

@section('css')
<link rel="stylesheet" href="assets/css/nice-select.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">

@endsection

@section('content')

<section class="banner-area banner-area2 blog-page text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1><i>Franchising</i></h1>
        <a href="{{route('index')}}">Ana Sayfa</a>
        <span class="mx-2">/</span>
        <a href="{{Route('franchising')}}">Franchising</a>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Bayimiz olmak için formu doldurup bize gönderin</h4>
        <p class="card-description"> Biz sizi arayalım </p>
        <form class="forms-sample" method="POST" id="SubmitForm">
          @csrf
          <div class="form-group">
            <label for="name">İsim ve Soyisim</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Adınız">
          </div>
          <div class="form-group">
            <label for="email">Email adresi</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="tel">Telefon Numarası</label>
            <input type="text" class="form-control" id="tel" name="tel" placeholder="Telefon">
          </div>
          <div class="form-group">
            <label for="sellerCity">Bayilik Talep Edilen İl</label>
            <input type="text" class="form-control" id="sellerCity" name="sellerCity" placeholder="Bayilik Talep Edilen İl">
          </div>
          <div class="form-group">
            <label for="sellerDistrict">Bayilik Talep Edilen İlçe</label>
            <input type="text" class="form-control" id="sellerDistrict" name="sellerDistrict" placeholder="Bayilik Talep Edilen İlçe">
          </div>
          <div class="form-group">
            <label for="message">Mesajınız</label>
            <textarea class="form-control" id="message" name="message" rows="4"></textarea>
          </div>
          <button type="button" id="franchisingButton" class="btn btn-primary mr-2">Gönder</button>
        </form>
      </div>
    </div>
  </div>

</section>

@endsection


@section('js')

<script>
  let franchisingButton = $('#franchisingButton');
  let email = document.querySelector('#email').value;


  franchisingButton.click(function() {

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
    }
    /*
    else if (!emailControl(email)) {
      Swal.fire({
        icon: 'info',
        title: 'Uyarı !',
        text: 'E-mail Adresinizi Geçerli Olsun !',
        confirmButtonText: 'Tamam',
      })
    } 
    */
   else if ($('#tel').val().trim() == '') {
      Swal.fire({
        icon: 'info',
        title: 'Uyarı !',
        text: 'Lütfen Telefon Numaranızı Giriniz!',
        confirmButtonText: 'Tamam',

      });
    } else if ($('#sellerCity').val().trim() == '') {
      Swal.fire({
        icon: 'info',
        title: 'Uyarı !',
        text: 'Lütfen Bayilik istediğiniz İli Giriniz!',
        confirmButtonText: 'Tamam',

      });
    } else if ($('#sellerDistrict').val().trim() == '') {
      Swal.fire({
        icon: 'info',
        title: 'Uyarı !',
        text: 'Lütfen Bayilik İstediğiniz İlçeyi Giriniz!',
        confirmButtonText: 'Tamam',

      });
    } else {
      Swal.fire({
        title: 'Bilgileriniz doğru ise; formu bize gönderin',
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
          setTimeout(()=>{
          $('#SubmitForm').submit(); 
        },2000)

        }
      })

    }
  });

  /* 
  function emailControl(email) {
     var re = /^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i;
     return re.test(email);
   }
   */
</script>

@endsection