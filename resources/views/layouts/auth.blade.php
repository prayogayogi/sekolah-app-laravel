<!DOCTYPE html>
<html lang="en">

<head>
  {{-- Meta --}}
  @include('includes.auth.meta')

  <title>@yield('title')</title>

  {{-- Style --}}
  @include('includes.auth.style')

</head>

<body class="bg-gradient-primary">

  @yield('content')

  <!-- Bootstrap core JavaScript-->
  @include('includes.auth.script');

</body>

</html>
