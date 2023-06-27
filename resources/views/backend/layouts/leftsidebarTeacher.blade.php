<!-- ======= Sidebar Teacher ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link  {{ 'teacher/dashboard' == request()->path() ? '' : 'collapsed'}}" href="{{ url('/teacher/dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End dashboard Nav -->

        <li class="nav-item ">
            <a class="nav-link {{ 'teacher/subjectProgress' == request()->path() ? '' : 'collapsed'}}" href="{{ url('/teacher/subjectProgress') }}">
                <i class="bi bi-person-fill"></i>
                <span>Subject Progress</span>
            </a>
        </li><!-- End subject progress Nav -->

        <li class="nav-item" >
            <a class="nav-link {{ 'teacher/lecture' == request()->path() ? '' : 'collapsed'}}" href="{{ url('/teacher/lecture') }}">
                <i class="bi bi-journal-bookmark"></i>
                <span>Lecture</span>
            </a>
        </li><!-- End Lecture Nav -->

        <li class="nav-item">
            <a class="nav-link {{ 'teacher/lms' == request()->path() ? '' : 'collapsed'}}" href="{{ url('/teacher/lms') }}">
                <i class="bi bi-collection"></i>
                <span>LMS</span>
            </a>
        </li><!-- End LMS Nav -->

        <li class="nav-item">
            <a class="nav-link {{ 'teacher/exam' == request()->path() ? '' : 'collapsed'}}" href="{{ url('/teacher/exam') }}">
                <i class="bi bi-book"></i>
                <span>Exam</span>
            </a>
        </li><!-- End Exam Nav -->

        <li class="nav-item">
            <a class="nav-link {{ 'teacher/notice' == request()->path() ? '' : 'collapsed'}}" href="{{ url('/teacher/notice') }}">
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
