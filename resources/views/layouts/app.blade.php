<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    {{-- include meta --}}
    @include('includes.meta')
    
    {{-- include style --}}
    @include('includes.style')
  </head>
  <body>
    
  {{-- include navbar --}}
    @include('includes.navbar')
    
    {{-- Yield Content --}}
    @yield('content')
    {{-- Akhir Yield Content --}}

    {{-- includes Footer --}}
    @include('includes.footer')
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    {{-- includes Script --}}
    @include('includes.script')
    
  </body>
</html>