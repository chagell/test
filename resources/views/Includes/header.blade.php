
<header class="stick-top forsticky">
    <div class="menu-sec">
        <div class="container">
            <div class="logo">
                <a href="index.html" title=""><img class="hidesticky" src="http://placehold.it/178x40" alt="" /><img class="showsticky" src="http://placehold.it/178x40" alt="" /></a>
            </div>
            <!-- Logo -->
            <div class="btn-extars">
{{--
                <a href="#" title="" class="post-job-btn"><i class="la la-plus"></i>Post Jobs</a>
--}}
                <ul class="account-btns">
                    <li ><a href="recruiter/recRegistration" title=""><i class="la la-key"></i> Sign Up</a></li>
                    <li>
                        <a href="{{route('login')}}" > <i class="la la-external-link-square"> </i> Login</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();" >
                            <i class="fas fa-sign-out-alt"> </i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div><!-- Btn Extras -->
            <nav>
                <ul>
                    <li class="menu-item-has-children">
                        <a href="#" title="">Home</a>
                        <ul>
                            <li><a href="#" title="">Home Grid</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- Menus -->
        </div>
    </div>
</header>
