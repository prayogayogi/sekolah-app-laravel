@extends('layouts.dashboard')

@section('title')
    Home
@endsection

@section('content')
    
<div class="hero-wrap" style="background-image: url('{{url('templates/images/bg_1.jpg')}}'); background-attachment:fixed;">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-8 ftco-animate text-center">
        <h1 class="mb-4">
          Tidak Ada Bangsa Yang Bisa Makmur Dalam Hidup Tanpa Pendidikan</h1>
        <p>
          <a href="#" class="btn btn-secondary px-4 py-3">Daftar Sekarang</a> 
          {{-- <a href="#" class="btn btn-secondary px-4 py-3">View Courses</a> --}}
        </p>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services p-3 py-4 d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-exam"></span></div>
          <div class="media-body px-3">
            <h3 class="heading">
              Penerimaan</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>      
      </div>
      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services p-3 py-4 d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-blackboard"></span></div>
          <div class="media-body px-3">
            <h3 class="heading">Pengumuman</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>      
      </div>
      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services p-3 py-4 d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-books"></span></div>
          <div class="media-body px-3">
            <h3 class="heading">
              Perpustakaan</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>    
      </div>
    </div>
  </div>
</section>


@include('includes.jumlah')

{{-- <section class="ftco-section testimony-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Kata Alumni Kami</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 ftco-animate">
        <div class="carousel-testimony owl-carousel">
          <div class="item">
            <div class="testimony-wrap text-center">
              <div class="user-img mb-5" style="background-image: url({{url('templates/images/person_1.jpg')}})">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
              </div>
              <div class="text">
                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p class="name">Dennis Green</p>
                <span class="position">CSE Student</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap text-center">
              <div class="user-img mb-5" style="background-image: url({{url('templates/images/person_2.jpg')}})">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
              </div>
              <div class="text">
                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p class="name">Dennis Green</p>
                <span class="position">Math Student</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap text-center">
              <div class="user-img mb-5" style="background-image: url({{url('templates/images/person_3.jpg')}})">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
              </div>
              <div class="text">
                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p class="name">Dennis Green</p>
                <span class="position">Science Students</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap text-center">
              <div class="user-img mb-5" style="background-image: url({{url('templates/images/person_3.jpg')}})">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
              </div>
              <div class="text">
                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p class="name">Dennis Green</p>
                <span class="position">English Student</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Pimpinan Sekolah</h2>
      </div>
    </div>
    <div div class="row">
{{-- 
      @foreach ($headmaster as $headmasters)
      <div class="col-lg-6 mb-sm-4 ftco-animate">
        <div class="staff">
          <div class="d-flex mb-4">
            <div class="img" style="background-image: url({{ url('dataGambarKepsek/'. $headmasters->gambar) }});"></div>
            <div class="info ml-4">
              <h3><a href="teacher-single.html">{{ $headmasters->nama }}</a></h3>
              <span class="position font-weight-bold">Guru : {{ $headmasters->mapel }}</span>
              <p class="ftco-social d-flex">
                <a href="{{ $headmasters->watsapp }}" target="blank" class="d-flex justify-content-center align-items-center"><span class="icon-whatsapp"></span></a>
                <a href="{{ $headmasters->facebook }}" target="blank" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
                <a href="{{ $headmasters->instagram }}" target="blank" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
              </p>
            </div>
          </div>
          <div class="text"><p>{{ $headmasters->deskripsi }}</p>
          </div>
        </div>
      </div>
      @endforeach --}}

    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Jurusan Yang Dapat Anda Pilih</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 d-flex ftco-animate">
        <div class="course align-self-stretch">
          <a href="#" class="img" style="background-image: url({{url('templates/images/course-2.jpg')}})"></a>
          <div class="text p-4">
            <p class="category"><span>IPS</span></p>
            <h3 class="mb-3"><a href="#">Jurusan Ips</a></h3>
            <p>Jurusan Ips Merupaka jurusan salah satu yang ada di sma n o3 mukomuko, jurusan ini cocok untuk bagi anda yang senang menghafal atau pun berbicara didepan umum.</p>
            <p><a href="#" class="btn btn-primary">Selengkapnya</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 d-flex ftco-animate">
        <div class="course align-self-stretch">
          <a href="#" class="img" style="background-image: url({{url('templates/images/course-3.jpg')}})"></a>
          <div class="text p-4">
            <p class="category"><span>IPA</span></p>
            <h3 class="mb-3"><a href="#">Jurusan Ipa</a></h3>
            <p>Jurusan Ipa Merupakan salah satu jurusan yang ada di sma n 03 mukomuko, Jurusan ini sanggat cocok bagi anda yang senang berhidung dan bereksperimen dalam dunia matematika.</p>
            <p><a href="#" class="btn btn-primary">Selengkapnya</a></p>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="row justify-content-center mt-5">
      <div class="col-md-10 ftco-animate">
        <p><strong>Jurusan yang ada dismpn 02 kaur</strong> ini merupakan jurusan-jurusan yang sanggat pas untuk anda calon-calon siswa, karena jurusan kami di fokuskan di dunia kerja.</p>
        <p><span>Just Browsing?</span><a href="course.html"> View All Courses</a></p>
      </div>
    </div> -->
  </div>
</section>

{{-- <section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Berita Terbaru</h2>
      </div>
    </div>
    <div class="row d-flex">
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('{{url('templates/images/image_1.jpg')}}');">
          </a>
          <div class="text p-4 d-block">
            <div class="meta mb-3">
              <div><a href="#">August 12, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mt-3"><a href="#">How to standout at start of your UX Career</a></h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('{{url('templates/images/image_2.jpg')}}');">
          </a>
          <div class="text p-4 d-block">
            <div class="meta mb-3">
              <div><a href="#">August 12, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mt-3"><a href="#">How to standout at start of your UX Career</a></h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('{{url('templates/images/image_3.jpg')}}');">
          </a>
          <div class="text p-4 d-block">
            <div class="meta mb-3">
              <div><a href="#">August 12, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mt-3"><a href="#">How to standout at start of your UX Career</a></h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Kegiatan Ekstrakurikuler</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('{{url('templates/images/event-1.jpg')}}');">
          </a>
          <div class="text p-4 d-block">
            <div class="meta mb-3">
              <div><a href="#">Sep. 10, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mb-4"><a href="#">Intern Bootcamp Meetup 2018</a></h3>
            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry d-flex align-self-stretch flex-column-reverse">
          <a href="blog-single.html" class="block-20" style="background-image: url('{{url('templates/images/event-2.jpg')}}');">
          </a>
          <div class="text p-4 d-block">
            <div class="meta mb-3">
              <div><a href="#">Sep. 10, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mb-4"><a href="#">Intern Bootcamp Meetup 2018</a></h3>
            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('{{url('templates/images/event-3.jpg')}}');">
          </a>
          <div class="text p-4 d-block">
            <div class="meta mb-3">
              <div><a href="#">Sep. 10, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mb-4"><a href="#">Intern Bootcamp Meetup 2018</a></h3>
            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <section class="ftco-section-parallax">
  <div class="parallax-img d-flex align-items-center">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          <h2>Subcribe to our Newsletter</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          <div class="row d-flex justify-content-center mt-5">
            <div class="col-md-8">
              <form action="#" class="subscribe-form">
                <div class="form-group d-flex">
                  <input type="text" class="form-control" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
@endsection