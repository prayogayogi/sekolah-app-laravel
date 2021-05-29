@extends('layouts.app')

@section('title')
    Tentang
@endsection

@section('content')

<div class="hero-wrap hero-wrap-2" style="background-image: url('{{url('templates/images/bg_2.jpg')}}'); background-attachment:fixed;">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-8 ftco-animate text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Tentang</span></p>
        <h1 class="mb-3 bread">Tentang</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-6 d-flex ftco-animate">
        <div class="img img-about align-self-stretch" style="background-image: url({{url('templates/images/bg_3.jpg')}}); width: 100%;"></div>
      </div>
      <div class="col-md-6 pl-md-5 ftco-animate">
        <h2 class="mb-4">Selamat Datang di Smp Negri 02 Kaur Provinsi Bengkulu</h2>
        <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
        <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section testimony-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Kata Alumni Siswa Kami</h2>
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
</section>
@endsection