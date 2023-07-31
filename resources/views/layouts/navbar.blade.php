<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main_nav">

        <ul class="navbar-nav">
            <li class="nav-item"> <a class="nav-link" href="#"> داشبورد</a> </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> آموزش </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('center') }}"> مراکز  </a></li>
                    <li><a class="dropdown-item" href="{{ route('category') }}">دوره ها</a></li>
                    <li><a class="dropdown-item" href="{{ route('group') }}">گروه ها</a></li>
                    <li><a class="dropdown-item" href="{{ route('level') }}">سطح ها</a></li>
                    <li><a class="dropdown-item" href="{{ route('hour') }}">ساعت ها</a></li>
                    <li><a class="dropdown-item" href="{{ route('classState') }}">وضعیت کلاس ها</a></li>
                    <li><a class="dropdown-item" href="{{ route('termState') }}">انواع ترم ها</a></li>
                    <li><a class="dropdown-item" href="{{ route('locate') }}">محل برگزاری کلاس ها</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> حسابداری </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('bank') }}">بانک ها</a></li>
                    <li><a class="dropdown-item" href="{{ route('bankAccount') }}">حساب های بانکی</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> دانشجو </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('student') }}">مشخصات دانشجو</a></li>
                    <li><a class="dropdown-item" href="{{ route('bankAccount') }}">حساب های بانکی</a></li>
                </ul>
            </li>
        </ul>

    </div> <!-- navbar-collapse.// -->
</nav>
