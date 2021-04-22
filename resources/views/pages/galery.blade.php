@extends('layouts.front')

@section('title')
Basında Biz
@endsection

@section('css')
<link rel="stylesheet" href="assets/css/nice-select.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">


<style>
  body {
    background-color: #eee;
  }

  .hello {
    opacity: 1 !important;
  }

  .full {
    position: fixed;
    left: 0 ; 
    top: 0;
    width: auto;
    height: 100%;
    z-index: 1;
  }

  .full .content {
    background-color: rgba(0, 0, 0, 0.75) !important;
    height: 100%;
    width: 100%;
    display: grid;
  }

  .full .content img {
    left: 50%;
    transform: translate3d(0, 0, 0);
    animation: zoomin 1s ease;
    max-width: 100%;
    max-height: 100%;
    margin: auto;
  }

  .byebye {
    opacity: 0;
  }

  .byebye:hover {
    transform: scale(0.2) !important;
  }

  .gallery {
    display: grid;
    grid-column-gap: 8px;
    grid-row-gap: 8px;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    grid-auto-rows: 8px;
  }

  .gallery img {
    max-width: 100%;
    border-radius: 8px;
    box-shadow: 0 0 16px #333;
    transition: all 1.5s ease;
  }

  .gallery img:hover {
    box-shadow: 0 0 32px #333;
  }

  .gallery .content {
    padding: 4px;
  }

  .gallery .gallery-item {
    transition: grid-row-start 300ms linear;
    transition: transform 300ms ease;
    transition: all 0.5s ease;
    cursor: pointer;
  }

  .gallery .gallery-item:hover {
    transform: scale(1.025);
  }

  @media (max-width: 600px) {
    .gallery {
      grid-template-columns: repeat(auto-fill, minmax(30%, 1fr));
    }
  }

  @media (max-width: 400px) {
    .gallery {
      grid-template-columns: repeat(auto-fill, minmax(50%, 1fr));
    }
  }

  @-moz-keyframes zoomin {
    0% {
      max-width: 50%;
      transform: rotate(-30deg);
      filter: blur(4px);
    }

    30% {
      filter: blur(4px);
      transform: rotate(-80deg);
    }

    70% {
      max-width: 50%;
      transform: rotate(45deg);
    }

    100% {
      max-width: 100%;
      transform: rotate(0deg);
    }
  }

  @-webkit-keyframes zoomin {
    0% {
      max-width: 50%;
      transform: rotate(-30deg);
      filter: blur(4px);
    }

    30% {
      filter: blur(4px);
      transform: rotate(-80deg);
    }

    70% {
      max-width: 50%;
      transform: rotate(45deg);
    }

    100% {
      max-width: 100%;
      transform: rotate(0deg);
    }
  }

  @-o-keyframes zoomin {
    0% {
      max-width: 50%;
      transform: rotate(-30deg);
      filter: blur(4px);
    }

    30% {
      filter: blur(4px);
      transform: rotate(-80deg);
    }

    70% {
      max-width: 50%;
      transform: rotate(45deg);
    }

    100% {
      max-width: 100%;
      transform: rotate(0deg);
    }
  }

  @keyframes zoomin {
    0% {
      max-width: 50%;
      transform: rotate(-30deg);
      filter: blur(4px);
    }

    30% {
      filter: blur(4px);
      transform: rotate(-80deg);
    }

    70% {
      max-width: 50%;
      transform: rotate(45deg);
    }

    100% {
      max-width: 100%;
      transform: rotate(0deg);
    }
  }
</style>
@endsection

@section('content')

<section class="banner-area banner-area2 blog-page text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1><i>Basında Biz</i></h1>
        <a href="{{route('index')}}">Ana Sayfa</a>
        <span class="mx-2">/</span>
        <a href="{{Route('galery')}}">Basında Biz</a>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="gallery" id="gallery">
  <div class="gallery-item">
      <div class="content"><img src="{{asset('images/rhoncus1.jpeg')}}" alt=""></div>
    </div>
    <div class="gallery-item">
      <div class="content"><img src="{{asset('images/rhoncus2.jpeg')}}" alt=""></div>
    </div>
    <div class="gallery-item">
      <div class="content"><img src="{{asset('images/rhoncus3.jpeg')}}" alt=""></div>
    </div>
    <div class="gallery-item">
      <div class="content"><img src="{{asset('images/rhoncus4.jpeg')}}" alt=""></div>
    </div>
    <div class="gallery-item">
      <div class="content"><img src="{{asset('images/rhoncus5.jpeg')}}" alt=""></div>
    </div>
    <div class="gallery-item">
      <div class="content"><img src="{{asset('images/rhoncus6.jpeg')}}" alt=""></div>
    </div>
    <div class="gallery-item">
      <div class="content"><img src="{{asset('images/rhoncus7.jpeg')}}" alt=""></div>
    </div>
    <div class="gallery-item">
      <div class="content"><img src="{{asset('images/rhoncus8.jpeg')}}" alt=""></div>
    </div>
    <div class="gallery-item">
      <div class="content"><img src="{{asset('images/rhoncus9.jpeg')}}" alt=""></div>
    </div>
    <div class="gallery-item">
      <div class="content"><img src="{{asset('images/rhoncus10.jpeg')}}" alt=""></div>
    </div>
    <div class="gallery-item">
      <div class="content"><img src="{{asset('images/rhoncus11.jpeg')}}" alt=""></div>
    </div>
    <div class="gallery-item">
      <div class="content"><img src="{{asset('images/rhoncus12.jpeg')}}" alt=""></div>
    </div>
 
  </div>
</section>

@endsection


@section('js')

<script>
  var gallery = document.querySelector('#gallery');
  var getVal = function(elem, style) {
    return parseInt(window.getComputedStyle(elem).getPropertyValue(style));
  };
  var getHeight = function(item) {
    return item.querySelector('.content').getBoundingClientRect().height;
  };
  var resizeAll = function() {
    var altura = getVal(gallery, 'grid-auto-rows');
    var gap = getVal(gallery, 'grid-row-gap');
    gallery.querySelectorAll('.gallery-item').forEach(function(item) {
      var el = item;
      el.style.gridRowEnd = "span " + Math.ceil((getHeight(item) + gap) / (altura + gap));
    });
  };
  gallery.querySelectorAll('img').forEach(function(item) {
    item.classList.add('byebye');
    if (item.complete) {
      console.log(item.src);
    } else {
      item.addEventListener('load', function() {
        var altura = getVal(gallery, 'grid-auto-rows');
        var gap = getVal(gallery, 'grid-row-gap');
        var gitem = item.parentElement.parentElement;
        gitem.style.gridRowEnd = "span " + Math.ceil((getHeight(gitem) + gap) / (altura + gap));
        item.classList.remove('byebye');
      });
    }
  });
  window.addEventListener('resize', resizeAll);
  gallery.querySelectorAll('.gallery-item').forEach(function(item) {
    item.addEventListener('click', function() {
      item.classList.toggle('full');
    });
  });
</script>
@endsection