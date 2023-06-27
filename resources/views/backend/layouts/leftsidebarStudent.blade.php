<!-- ======= Sidebar Student ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link  {{ 'student/dashboard' == request()->path() ? '' : 'collapsed'}}" href="{{ url('/student/dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End dashboard Nav -->

        <li class="nav-item ">
            <a class="nav-link {{ 'student/subject' == request()->path() ? '' : 'collapsed'}}" href="{{ url('/student/subject') }}">
                <i class="bi bi-person-fill"></i>
                <span>My Subject</span>
            </a>
        </li><!-- End my subject Nav -->

        <li class="nav-item" >
            <a class="nav-link {{ 'student/schedule' == request()->path() ? '' : 'collapsed'}}" href="{{ url('/student/schedule') }}">
                <i class="bi bi-journal-bookmark"></i>
                <span>Schedule</span>
            </a>
        </li><!-- End Schedule Nav -->

        <li class="nav-item">
            <a class="nav-link {{ 'student/assignment' == request()->path() ? '' : 'collapsed'}}" href="{{ url('/student/assignment') }}">
                <i class="bi bi-collection"></i>
                <span>Assignment</span>
            </a>
        </li><!-- End Assignment Nav -->

        <li class="nav-item">
            <a class="nav-link {{ 'student/result' == request()->path() ? '' : 'collapsed'}}" href="{{ url('/student/result') }}">
                <i class="bi bi-book"></i>
                <span>Semester Result</span>
            </a>
        </li><!-- End Result Nav -->

        <li class="nav-item">
            <a class="nav-link {{ 'student/exam' == request()->path() ? '' : 'collapsed'}}" href="{{ url('/student/exam') }}">
                <i class="bi bi-pen"></i>
                <span>Exam</span>
            </a>
        </li><!-- End Exam Nav -->

        <li class="nav-item">
            <a class="nav-link {{ 'student/notice' == request()->path() ? '' : 'collapsed'}}" href="{{ url('/student/notice') }}">
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
