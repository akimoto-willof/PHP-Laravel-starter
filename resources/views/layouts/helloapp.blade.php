<html>
<link rel="stylesheet" href="/css/style.css">
<head>
   <title>@yield('title')</title>
</head>
<body>
   <h1 class="title">@yield('title')</h1>
   @section('menubar')
   <ul>
       <li>@show</li>
   </ul>
   <div class="content">
   @yield('content')
   </div>
   <div class="footer">
   @yield('footer')
   </div>
</body>
</html>
