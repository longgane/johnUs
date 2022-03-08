<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css"
        integrity="sha512-wJgJNTBBkLit7ymC6vvzM1EcSWeM9mmOu+1USHaRBbHkm6W9EgM0HY27+UtUaprntaYQJF75rc8gjxllKs5OIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"
        integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- Postal code library -->
    <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>

    <script src="/admin/js/app.js?v={{rand(10,1000)}}"></script>
    <link rel="stylesheet" href="/admin/css/layout.css?v={{rand(10,1000)}}">
    


    @yield('stylesheet')
    <title>Fujihousing Admin</title>
</head>

<body>
    <header id="header">
        <nav class="navigation">
            <img id="logo_img" src="./image/logo.svg" alt="logo" width="80px" height="80px"/>

            <li id="user_info_dropdown" class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    鈴木 秀逸
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div id="role_name">アカウント管理</div>

                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">ログアウト</a></li>
                </ul>
            </li>
        </nav>
    </header>

    <div id="warper">
        <div id="sidebar">
            <img class="close-img" id="btn_close" src="./image/close.svg" alt="">
            <div class="open-img"><i id="btn_open" class="fas fa-bars"></i> <i class="far fa-chevron-right"></i></div>
            <div class="list-group">
            
                <a href="/admin/CL10" data-target-screen="CL10,CL20,CL30,CL40" class="list-group-item list-group-item-action list-text" aria-current="true">
                ギルド
                </a>
                    <a href="/admin/CL10" data-target-screen="CL10,CL20,CL30,CL40" class="list-group-item list-group-item-action list-icon" aria-current="true">
                        <i class="fas fa-synagogue"></i>
                        <span class="tooltip">
                            ギルド
                        </span>
                    </a>
                {{-- ----------------- --}}
                <a href="/admin/JB10" data-target-screen="JB10,JB20,JB30" class="list-group-item list-text">クエスト</a>
                    <a href="/admin/JB10" data-target-screen="JB10,JB20,JB30" class="list-group-item list-icon"><i class="fas fa-tasks"></i>
                        <span class="tooltip">
                            クエスト
                        </span>
                    </a>
                {{-- ------------------ --}}
                <a href="/admin/US10" data-target-screen="US10,US20,NE30" class="list-group-item list-text">ユーザー</a>
                    <a href="/admin/NE10" data-target-screen="US10,US20,NE30" class="list-group-item list-icon"><i class="fas fa-users"></i>
                        <span class="tooltip">
                            ユーザー
                        </span>
                    </a>
                {{-- ------------------- --}}
                <a href="/admin/MG10" data-target-screen="MG10,MG11,AC30" class="list-group-item list-text">メッセージ</a>
                    <a href="/admin/MG10" data-target-screen="MG10,MG11,AC30" class="list-group-item list-icon"><i class="fas fa-sms"></i>
                        <span class="tooltip">
                            メッセージ
                        </span>
                    </a>
                {{-- ------------------- --}}    
                <a href="AP10"data-target-screen="AP10,AP20" class="list-group-item list-text">応募者管理</a>
                    <a href="AP10"data-target-screen="AP10,AP20" class="list-group-item list-icon"><i class="fas fa-graduation-cap"></i>
                        <span class="tooltip">
                            応募者管理
                        </span>
                    </a>
                {{-- ------------------- --}}    
                <a href="/admin/IN10"data-target-screen="IN10,IN20,IN30" class="list-group-item list-text">お知らせ</a>
                    <a href="/admin/IN10"data-target-screen="IN10,IN20,IN30" class="list-group-item list-icon"><i class="fas fa-bell"></i>
                        <span class="tooltip">
                            お知らせ
                        </span>
                    </a>
               
                {{-- ------------------- --}}   
                <a href="#"data-target-screen="" class="list-group-item list-text">特集ページ</a>
                    <a href="#"data-target-screen="" class="list-group-item list-icon"><i class="fas fa-gem"></i>
                        <span class="tooltip">
                            特集ページ
                        </span>
                    </a>
                {{-- ------------------- --}}    
                <a href="#"data-target-screen="#" class="list-group-item list-text">マスタ管理</a>
                <a href="#"data-target-screen="# " class="list-group-item list-icon"><img src="/admin/image/admin-menu.png" width="20px" height="20px"  alt="">
                    <span class="tooltip">
                        マスタ管理
                    </span>
                </a>
                {{-- ------------------- --}}    
                <a href="/admin/AC10" data-target-screen="AC10,AC20,AC30" class="list-group-item list-text">アカウント管理</a>
                    <a href="/admin/AC10" data-target-screen="AC10,AC20,AC30" class="list-group-item list-icon"><i class="fas fa-file-invoice"></i>
                        <span class="tooltip">
                            アカウント管理
                        </span>
                    </a>
                {{-- ------------------- --}}    
                <a href="" class="list-group-item list-text">ログアウト</a>
                    <a href="" class="list-group-item list-icon"><i class="fas fa-sign-out-alt"></i>
                        <span class="tooltip">
                            ログアウト
                        </span>
                    </a>
            </div>
        </div>

        <div id="page">
            @yield('breadcrumb')

            <main id="page-content">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="/admin/js/datetime-picker.js?v={{rand(10,1000)}}"></script>
    
    <script>
    $(document).ready(function() {
        $('#sidebar .list-group a').each(function(index, element) {
            if (element.dataset && element.dataset.targetScreen) {
                let targetScreens = element.dataset.targetScreen.split(',');
                targetScreens.forEach(function(item) {
                    if (window.location.href.search(item) !== -1) {
                        $(element).addClass('active');
                    }
                });
            }
        });
        // menu----------------------------------
        let btn_close = document.querySelector("#btn_close");
        let btn_open = document.querySelector("#btn_open");
        let menu = document.querySelector("#sidebar");

        btn_close.onclick = function() {
            menu.classList.toggle("active");
        }
        btn_open.onclick = function() {
            menu.classList.toggle("active");
        }
    });
    </script>
</body>

</html>