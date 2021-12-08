
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>産業技術高等専門学校AIシステム工学コース</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-custom">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html">Aiシステム工学コース</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="{{url('home')}}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{url('teachers')}}">教員一覧</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{url('curricula')}}">授業一覧</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{url('laboratories')}}">研究室一覧</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{url('admissions')}}">受験生へ</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{url('students')}}">在校生へ</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{url('faq')}}">FAQ</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{url('news')}}">NEWS</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            @yield('content')
        <!-- Footer-->
            <footer class="bg-custom py-4 mt-auto footer">
                <div class="container px-5">
                    <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                        <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Arai Asuma 2021</div></div>
                        <div class="col-auto">
                            <a class="link-light small" href="">Privacy</a>
                            <span class="text-white mx-1">&middot;</span>
                            <a class="link-light small" href="">Terms</a>
                            <span class="text-white mx-1">&middot;</span>
                            <a class="link-light small" href="">Contact</a>
                        </div>
                    </div>
                </div> 
            </footer>
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
        </body>
    </html>
    
    