<header class="stick-top">
    <div class="menu-sec">
        <div class="container">
            <div class="logo">
                <a href="index.html" title=""><img src="/storage/{{$user->companyLogo}}" width="50" height="50" alt="companyLogo" /></a>
            </div><!-- Logo -->
            <div class="btns-profiles-sec">
                <span><img src="/storage/{{$user->companyLogo}}" alt="" width="50" height="50" /> {{$user->name}}<i class="la la-angle-down"></i></span>
                <ul>
                    <li><a href="recruiterProfile" title=""><i class="la la-file-text"></i>Company Profile</a></li>
                    <li><a href="activeJobs" title=""><i class="la la-briefcase"></i>Manage Jobs</a></li>
                    <li><a href="#" title=""><i class="la la-money"></i>Transactions</a></li>
                    <li><a href="#" title=""><i class="la la-paper-plane"></i>Resumes</a></li>
                    <li><a href="#" title=""><i class="la la-user"></i>Packages</a></li>
                    <li><a href="newjob" title=""><i class="la la-file-text"></i>Post a New Job</a></li>
                    <li><a href="#" title=""><i class="la la-flash"></i>Job Alerts</a></li>
                    <li><a href="#" title=""><i class="la la-lock"></i>Change Password</a></li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"> </i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
{{--                    <li><a href="#" title=""><i class="la la-unlink"></i>Logout</a></li>--}}
                </ul>
            </div>
            <nav>
                <ul>
                    <li class="menu-item-has-children">
                        <a href="#" title="">Home</a>
                        <ul>
                            <li><a href="#" title="">Home Layout 1</a></li>
                            <li><a href="#" title="">Home Layout 2</a></li>
                            <li><a href="#" title="">Home Layout 3</a></li>
                            <li><a href="#" title="">Home Layout 4</a></li>
                            <li><a href="#" title="">Home Layout 5</a></li>
                            <li><a href="#" title="">Home Layout 6</a></li>
                            <li><a href="#" title="">Home Layout 7</a></li>
                            <li><a href="#" title="">Home Layout 8</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" title="">Employers</a>
                        <ul>
                            <li><a href="#" title=""> Employer List 1</a></li>
                            <li><a href="#" title="">Employer List 2</a></li>
                            <li><a href="#" title="">Employer List 3</a></li>
                            <li><a href="#" title="">Employer List 4</a></li>
                            <li><a href="#" title="">Employer Single 1</a></li>
                            <li><a href="#" title="">Employer Single 2</a></li>
                            <li class="menu-item-has-children">
                                <a href="#" title="">Employer Dashboard</a>
                                <ul>
                                    <li><a href="#" title="">Employer Job Manager</a></li>
                                    <li><a href="#" title="">Employer Packages</a></li>
                                    <li><a href="#" title="">Employer Post New</a></li>
                                    <li><a href="#" title="">Employer Profile</a></li>
                                    <li><a href="#" title="">Employer Resume</a></li>
                                    <li><a href="#" title="">Employer Transaction</a></li>
                                    <li><a href="#" title="">Employer Job Alert</a></li>
                                    <li><a href="#" title="">Employer Change Password</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" title="">Candidates</a>
                        <ul>
                            <li><a href="#" title="">Candidates List 1</a></li>
                            <li><a href="#" title="">Candidates List 2</a></li>
                            <li><a href="#" title="">Candidates List 3</a></li>
                            <li><a href="#" title="">Candidates Single 1</a></li>
                            <li><a href="#" title="">Candidates Single 2</a></li>
                            <li class="menu-item-has-children">
                                <a href="#" title="">Candidates Dashboard</a>
                                <ul>
                                    <li><a href="#" title="">Candidates Resume</a></li>
                                    <li><a href="#" title="">Candidates Resume new</a></li>
                                    <li><a href="#" title="">Candidates Profile</a></li>
                                    <li><a href="#" title="">Candidates Shortlist</a></li>
                                    <li><a href="#" title="">Candidates Job Alert</a></li>
                                    <li><a href="#" title="">Candidates Dashboard</a></li>
                                    <li><a href="#" title="">CV Cover Letter</a></li>
                                    <li><a href="#" title="">Change Password</a></li>
                                    <li><a href="#" title="">Candidates Applied Jobs</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" title="">Blog</a>
                        <ul>
                            <li><a href="#"> Blog List 1</a></li>
                            <li><a href="#">Blog List 2</a></li>
                            <li><a href="#">Blog List 3</a></li>
                            <li><a href="#">Blog Single</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" title="">Job</a>
                        <ul>
                            <li><a href="#">Job List Classic</a></li>
                            <li><a href="#">Job List Grid</a></li>
                            <li><a href="#">Job List Modern</a></li>
                            <li><a href="#">Job Single 1</a></li>
                            <li><a href="#">Job Single 2</a></li>
                            <li><a href="#">Job Single 3</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" title="">Pages</a>
                        <ul>
                            <li><a href="#" title="">About Us</a></li>
                            <li><a href="#" title="">404 Error</a></li>
                            <li><a href="#" title="">Contact Us 1</a></li>
                            <li><a href="#" title="">Contact Us 2</a></li>
                            <li><a href="#" title="">FAQ's</a></li>
                            <li><a href="#" title="">How it works</a></li>
{{--                            <li><a href="login.html" title="">Login</a></li>--}}
                            <li><a href="#" title="">Pricing Plans</a></li>
{{--                            <li><a href="register.html" title="">Register</a></li>--}}
                            <li><a href="#" title="">Terms & Condition</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- Menus -->
        </div>
    </div>
</header>
