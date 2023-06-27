<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link  {{ 'dashboard' == request()->path() ? '' : 'collapsed'}}" href="{{ url('/dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item" >
            <a class="nav-link {{ 'student' == request()->path() ? '' : 'collapsed'}}" href="{{ url('/student') }}">
                <i class="bi bi-person"></i>
                <span>Student</span>
            </a>
        </li><!-- End Student Nav -->

        <li class="nav-item ">
            <a class="nav-link {{ 'professor' == request()->path() ? '' : 'collapsed'}}" href="{{ url('/professor') }}">
                <i class="bi bi-person-fill"></i>
                <span>Professor</span>
            </a>
        </li><!-- End Professor Nav -->

        <li class="nav-item" >
            <a class="nav-link {{ 'subject' == request()->path() ? '' : 'collapsed'}}" href="{{ url('/subject') }}">
                <i class="bi bi-journal-bookmark"></i>
                <span>Subject</span>
            </a>
        </li><!-- End Subject Nav -->

        <li class="nav-item">
            <a class="nav-link {{ 'lms' == request()->path() ? '' : 'collapsed'}}" href="{{ url('/lms') }}">
                <i class="bi bi-collection"></i>
                <span>LMS</span>
            </a>
        </li><!-- End LMS Nav -->

        <li class="nav-item">
            <a class="nav-link {{ 'course' == request()->path() ? '' : 'collapsed'}}" href="{{ url('/course') }}">
                <i class="bi bi-book"></i>
                <span>Course</span>
            </a>
        </li><!-- End course Nav -->

        <li class="nav-item">
            <a class="nav-link {{ 'exam' == request()->path() ? '' : 'collapsed'}}" href="{{ url('/exam') }}">
                <i class="bi bi-pen"></i>
                <span>Exam</span>
            </a>
        </li><!-- End Exam Nav -->

        <li class="nav-item">
            <a class="nav-link {{ 'notice' == request()->path() ? '' : 'collapsed'}}" href="{{ url('/notice') }}">
                <i class="bi bi-bell"></i>
                <span>NOTICE</span>
            </a>
        </li><!-- End Notice Nav -->

        <li class="nav-item">
            <a class="nav-link {{ '#' == request()->path() ? '' : 'collapsed'}}" href="#">
                <i class="bi bi-gear"></i>
                <span>SETTING</span>
            </a>
        </li><!-- End Setting Nav -->

    </ul>

</aside><!-- End Sidebar-->
