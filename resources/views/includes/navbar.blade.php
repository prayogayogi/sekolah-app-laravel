<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="/"><img src="{{asset('logo.jpg')}}" alt=""> SMAN 01 Mukomuko <br><small>Bengkulu</small></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item {{request()->is('/') ? 'active' : ''}}"><a href="/" class="nav-link">Home</a></li>
        <li class="nav-item {{request()->is("dashboard/about") ? 'active' : ''}}"><a href="{{route('about')}}" class="nav-link">Tentang</a></li>
        <li class="nav-item {{request()->is('dashboard/teacher') ? 'active' : ''}}"><a href="{{route('teacher')}}" class="nav-link">Guru</a></li>
        <li class="nav-item {{request()->is('dashboard/berita') ? 'active' : ''}}"><a href="{{route('berita')}}" class="nav-link">Berita</a></li>
        <li class="nav-item {{request()->is('dashboard/kegiatan') ? 'active' : ''}}"><a href="{{route('kegiatan')}}" class="nav-link">Kegiatan</a></li>
        <li class="nav-item {{request()->is('dashboard/kontak') ? 'active' : ''}}"><a href="{{route('kontak')}}" class="nav-link">Kontak</a></li>
        <li class="nav-item cta{{request()->is('auth/login') ? 'active' : ''}}"><a href="{{route('login')}}" class="nav-link"><span>Login</span></a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- END nav -->