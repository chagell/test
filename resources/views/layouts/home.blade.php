<!DOCTYPE html>
<html lang="en-us">
<head>
    @include('Includes.head')
    @stack('jsScripts')

</head>
<body>
    {{-- Loading --}}
    <div class="page-loading">
        <img src="images/loader.gif" alt="" />
    </div>
    <div class="theme-layout" id="scrollup">
        @include('includes.resonsiveHeader')
        @include('includes.header')
        @yield('content')
        @include('includes.footer')
    </div>
    @include('includes.tail')
    @stack('bottomScripts')
    @stack('BottomExtraScripts')
</body>
</html>
