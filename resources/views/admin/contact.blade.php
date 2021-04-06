@extends('layouts.admin')

@section('css')

@endsection



@section('content')

<div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">İletişim Bilgilerini Düzenle</h4>
                    <p class="card-description"> Aşağıda bulunan iletişim bilgilerini düzenleyip 'Tamam' butonuna tıklayınız. </p>
                    <form action="" method="POST" class="forms-sample">
                        @csrf
                      <div class="form-group">
                        <label for="ContactHead">İletişim Başlığı</label>
                        <input type="text" class="form-control" id="ContactHead" name="ContactHead" placeholder="İletişim Başlığı" value="{{$list ? $list->ContactHead : ''}}">
                      </div>
                      <div class="form-group">
                        <label for="ContactHeadText">İletişim Alt Başlığı</label>
                        <textarea class="form-control" name="ContactHeadText" id="ContactHeadText" cols="30" rows="10" placeholder="İletişim İçeriği">{{$list ? $list->ContactHeadText : ''}}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="ContactAdressHead">İletişim Adres Başlığı</label>
                        <input type="text" class="form-control" id="ContactAdressHead" name="ContactAdressHead" placeholder="İletişim Adres Başlığı" value="{{$list ? $list->ContactAdressHead : ''}}">
                      </div>
                      <div class="form-group">
                        <label for="ContactAdressHeadSub">İletişim Adres Alt Başlığı</label>
                        <input type="text" class="form-control" id="ContactAdressHeadSub" name="ContactAdressHeadSub" placeholder="İletişim Adres Alt Başlığı" value="{{$list ? $list->ContactAdressHeadSub : ''}}">
                      </div>
                      <div class="form-group">
                        <label for="ContactTelHead">İletişim Telefon Başlığı</label>
                        <input type="text" class="form-control" id="ContactTelHead" name="ContactTelHead" placeholder="İletişim Telefon Başlığı" value="{{$list ? $list->ContactTelHead : ''}}">
                      </div>
                      <div class="form-group">
                        <label for="ContactTelHeadSub">İletişim Telefon Alt Başlığı</label>
                        <input type="text" class="form-control" id="ContactTelHeadSub" name="ContactTelHeadSub" placeholder="İletişim Telefon Alt Başlığı" value="{{$list ? $list->ContactTelHeadSub : ''}}">
                      </div>
                      <div class="form-group">
                        <label for="ContactMailHead">İletişim Mail Başlığı</label>
                        <input type="text" class="form-control" id="ContactMailHead" name="ContactMailHead" placeholder="İletişim Mail Başlığı" value="{{$list ? $list->ContactMailHead : ''}}">
                      </div>
                      <div class="form-group">
                        <label for="ContactMailHeadSub">İletişim Mail Alt Başlığı</label>
                        <input type="text" class="form-control" id="ContactMailHeadSub" name="ContactMailHeadSub" placeholder="İletişim Mail Alt Başlığı" value="{{$list ? $list->ContactMailHeadSub : ''}}">
                      </div>

            <!--      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input"> Remember me </label>
                      </div>
            -->
                      <button type="submit" class="btn btn-primary mr-2 updatemessage">Tamam</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>


@endsection



@section('js')


@endsection