<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    {{-- include meta --}}
    @include('includes.out.meta')
    
    {{-- include style --}}
    @include('includes.out.style')
  </head>
  <body>
    
  {{-- include navbar --}}
    @include('includes.out.navbar')
    
    {{-- Yield Content --}}
    @yield('content')
    {{-- Akhir Yield Content --}}

    {{-- includes.out Footer --}}
    @include('includes.out.footer')
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    {{-- includes.out Script --}}
    @include('includes.out.script')
    
  </body>
</html>