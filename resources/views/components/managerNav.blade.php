
<div class="navbar-header" id="navbarNavDropdown">
    <ul class="nav navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle hover" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sinh viên
            </a>

            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                    <a class="dropdown-item" href="{{ route('admin.import.StudentInfo') }}">Danh sách sinh viên</a>
                    <a class="dropdown-item" href="{{ route('admin.import.StudentAccount') }}">Danh sách tài khoản</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Môn thi
            </a>

            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                    <a class="dropdown-item" href="{{ route('admin.import.StudentListOfSubject') }}">Môn học</a>
                    <a class="dropdown-item" href="#">Học phần</a>

                </li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Kỳ thi
            </a>

            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                    <a class="dropdown-item" href="#">Tạo kỳ thi</a>
                    <a class="dropdown-item" href="#">Lập lịch</a>

                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">Địa điểm</a>
        </li>
    </ul>
</div>