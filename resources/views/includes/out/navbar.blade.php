<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="/"><img src="{{asset('logo.png')}}" alt=""> SMAN 01 Mukomuko <br><small>Bengkulu</small></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item {{request()->is('/') ? 'active' : ''}}"><a href="/" class="nav-link">Home</a></li>
        <li class="nav-item {{request()->is("dashboard/about") ? 'active' : ''}}"><a href="{{route('view-about')}}" class="nav-link">Tentang</a></li>
        <li class="nav-item {{request()->is('dashboard/teacher') ? 'active' : ''}}"><a href="{{route('view-teacher')}}" class="nav-link">Guru</a></li>
        <li class="nav-item {{request()->is('dashboard/news') ? 'active' : ''}}"><a href="{{route('view-news')}}" class="nav-link">Berita</a></li>
        <li class="nav-item {{request()->is('dashboard/event') ? 'active' : ''}}"><a href="{{route('view-event')}}" class="nav-link">Kegiatan</a></li>
        <li class="nav-item {{request()->is('dashboard/contact') ? 'active' : ''}}"><a href="{{route('view-contact')}}" class="nav-link">Kontak</a></li>
        <li class="nav-item cta{{request()->is('auth/login') ? 'active' : ''}}"><a href="{{ route('auth.index') }}" class="nav-link"><span>Login</span></a></li>
      </ul>
    </div>
  </div>
</nav>