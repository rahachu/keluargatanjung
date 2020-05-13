<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    {{ HTML::style('css/style.css') }}
    {{ HTML::style('css/imageUploader.css') }}

    <title>Selamat Datang Anak Indie!!</title>
    <nav id="main-navbar" class="navbar navbar-light bg-light fixed-top">
      <a class="navbar-brand" href="#">Keluarga Tanjung</a>
      <ul class="nav nav-pills mr-auto" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link text-danger active" href="#index" role="tab">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger" href="#anggota" role="tab">Anggota</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger" href="#registrasi" role="tab">Daftar</a>
        </li>
      </ul>
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </nav>
  </head>
  <body>
  <div id="skrol" data-spy="scroll" data-target="#main-navbar">
    <div id="index" class="w-100 vh-100 d-flex align-items-center">
      <!---  Spacer buat navbar  -->
      <div class="container mx-auto row p-5">
        <div class="col">
          <img class="float-right img-fluid" alt="Responsive image" src="https://media.giphy.com/media/l2A4ew7M55cWu1USYB/giphy.gif">
        </div>
        <div class="col-6 align-self-end blockquote">
          <h1 class="text-danger" style="font-size: 4vw">Keluarga Tanjung</h1>
          <p class="pr-5" style="font-size: 1.3vw">Keluarga Tanjung adalah keluarga mahasiswa Teknik Informatika dan Sistem Teknologi Informasi Institut Teknologi Bandung yang memiliki ikatan pada suatu tempat yaitu area merokok dibawah pohon tanjung Labtek 5.</p>
        </div>
        <div class="col-1"></div>
      </div>
    </div>
    <hr id="anggota">

    <div class="container p-5 min-vh-100">
      <div class="rounded shadow-sm p-5">
        <h1 class="text-danger">Daftar Anggota</h1>
        <hr>
        <div class="row">
          <div class="col-md-4 col-6 mt-4">
            <div class="card">
              <img src="https://cdn-brilio-net.akamaized.net/news/2019/04/30/163186/1029234-transformasi-afiqah-jkt48.jpg" class="card-img-top" alt="Foto Profil">
              <div class="card-body">
                <h3 class="card-text" style="font-size: 2.1vw">Afiqaaaaah</h3>
                <p class="card-text text-truncate text-nowrap" style="margin-bottom: 0; font-size: 1.5vw">Amanina Afiqah Ibrahim</p>
                <p class="card-text text-secondary" style="font-size: 1.1vw">SMP Muhammadiyah</p>
              </div>
            </div>
          </div>
          @foreach($anggota as $a)
          <div class="col-md-4 col-6 mt-4">
            <div class="card">
              <div class="card-img-top">
                <img src={{url('/avatar').'/'.$a->panggilan.'.png'}} alt="Foto Profil" style="height:{{$avatars[$a->panggilan]['newHeight']}}%; width:{{$avatars[$a->panggilan]['newWidth']}}%; margin-top: {{$avatars[$a->panggilan]['y']}}%; margin-left: {{$avatars[$a->panggilan]['x']}}%">
              </div>
              <div class="card-body">
                <h3 class="card-text" style="font-size: 2.1vw">{{$a->panggilan}}</h3>
                <p class="card-text text-truncate text-nowrap" style="margin-bottom: 0; font-size: 1.5vw">{{$a->nama}}</p>
                <p class="card-text text-secondary" style="font-size: 1.1vw">{{$a->prodi}}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <hr id="registrasi">

    <div class="container vh-100 p-5 d-flex align-items-center">
      <div class="row row-cols-2 w-100 mx-auto rounded shadow-sm">
        <div class="col-5"><img src="https://media.giphy.com/media/l3V0mPdlu7hJUqWlO/giphy.gif" class="img-fluid float-right" alt="Responsive image"></img></div>
        <div class="col-7 container pb-4">
        <h2 class="text-danger" style="font-size: 4.2vw">Belum terdaftar sebagai anggota?</h2>
        <!-- Button trigger form registrasi -->
        <button type="button" class="btn btn-sm btn-outline-danger ml-1 mt-3" data-toggle="modal" data-target="#form-registrasi">
          Registrasi
        </button>
        </div>
      </div>
    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="form-registrasi" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger">Daftar Sekarang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row container">
        <div class="profile mx-auto col-md-6">
            <div class="photo">
                <input type="file" accept="image/*">
                <div class="photo__helper">
                    <div class="photo__frame photo__frame--circle">
                        <canvas class="photo__canvas"></canvas>
                        <div class="message is-empty">
                            <p class="message--desktop">Drop your photo here or browse your computer.</p>
                            <p class="message--mobile">Tap here to select your picture.</p>
                        </div>
                        <div class="message is-loading">
                            <i class="fa fa-2x fa-spin fa-spinner"></i>
                        </div>
                        <div class="message is-dragover">
                            <i class="fa fa-2x fa-cloud-upload"></i>
                            <p>Drop your photo</p>
                        </div>
                        <div class="message is-wrong-file-type">
                            <p>Only images allowed.</p>
                            <p class="message--desktop">Drop your photo here or browse your computer.</p>
                            <p class="message--mobile">Tap here to select your picture.</p>
                        </div>
                        <div class="message is-wrong-image-size text-danger">
                            <p>Your photo must be larger than 350px.</p>
                        </div>
                    </div>
                </div>

                <div class="photo__options hide">
                    <div class="photo__zoom">
                        <input type="range" class="zoom-handler">
                    </div><a href="javascript:;" class="remove"><i class="fa fa-trash"></i></a>
                </div>
            </div>
        </div>
          <div class="col-md-6">
            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
            <br>
            <input type="text" name="panggilan" class="form-control" placeholder="Nama Panggilan">
            <br>
            <select class="form-control" id="prodi">
              <option>Teknik Informatika</option>
              <option>Sistem dan Teknologi Informasi</option>
            </select>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
        <button id="submitdaftar" type="button" class="btn btn-outline-danger">Daftar</button>
      </div>
    </div>
  </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Image Uploader JavaSript-->
    {{ HTML::script('js/imageUploader.js') }}
    <!-- Scroll Spy-->
    <script type="text/javascript">
      $('body').scrollspy({ target: '#main-navbar',offset: window.innerHeight*0.5})
      $('body').scrollspy('refresh')
      $('[data-spy="scroll"]').each(function () {
        var $spy = $(this).scrollspy('refresh')
      })
    </script>
    <script type="text/javascript">
      var cw = $('.card-img-top').width();
      $('.card-img-top').css({'height':cw+'px'});
    $(window).resize(function(){
      var cw = $('.card-img-top').width();
      $('.card-img-top').css({'height':cw+'px'});
    })
    </script>
  </body>
</html>