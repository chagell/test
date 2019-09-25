<!DOCTYPE html>
<html lang="en-us">
<head>
    @include('Includes.head')
</head>
<body>
{{-- Loading --}}
<div class="page-loading">
    <img src="images/loader.gif" alt="" />
</div>
<div class="theme-layout" id="scrollup">
    @include('includes.resonsiveHeader')
    @include('includes.recruiter.recruiterHeader')
    @include('Includes.recruiter.recruiterbanner')
    <section>
        <div class="block no-padding">
            <div class="container">
                <div class="row no-gape">
                    @include('Includes.recruiter.sideMenu')
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
    @include('includes.footer')
</div>
<!-- SIGNUP POPUP -->
@include('includes.tail')
@stack('BottomExtraScripts')
</body>
</html>
