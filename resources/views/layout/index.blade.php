<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="/admin/css/sidebarpro.css">
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
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
         <!-- Postal code library -->
     <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>

     <script src="/admin/js/app.js?v={{rand(10,1000)}}"></script>
     <link rel="stylesheet" href="/admin/css/layout.css?v={{rand(10,1000)}}">
     @yield('stylesheet')
    <title>Dashboard Sidebar Menu</title> 
</head>
<body> 
    <header id="header">
        <div class="navigation">
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
        </div>
    </header>
 
    <nav class="sidebar">
        <div class="menu-bar">
            <i style="right:0" class='bx bx-chevron-right toggle'></i>
            <div class="menu">
                
                {{-- <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li> --}}

                <ul class="menu-links" style="padding-left: 0">
                    <li class="nav-link1">
                        <a href="/admin/CL10" data-target-screen="CL10,CL20,CL30,CL40" class="" aria-current="true">
                            {{-- <i class='bx bx-home-alt icon' ></i> --}}
                            <i class=" fas fa-synagogue icon"><span class="tool">
                                ギルド
                            </span></i>
                            
                            <span class="text nav-text">ギルド</span>
                        </a>
                    </li>
                {{-- --------------------------------------------- --}}
                    <li class="nav-link1">
                        <a href="/admin/JB10" data-target-screen="JB10,JB20,JB30" class="">
                            <i class="fas fa-tasks icon">
                                <span class="tool">
                                    クエスト
                                </span>
                            </i>
                            <span class="text nav-text">クエスト</span>
                        </a>
                    </li>
                {{-- --------------------------------------------- --}}
                    <li class="nav-link1">
                        <a href="/admin/US10" data-target-screen="US10,US20,NE30" class="">
                            <i class="fas fa-users icon">
                                <span class="tool">
                                    ユーザー
                                </span>
                            </i>
                            <span class="text nav-text">ユーザー</span>
                        </a>
                    </li>
                {{-- --------------------------------------------- --}}
                    <li class="nav-link1">
                        <a href="/admin/MG10" data-target-screen="MG10,MG11,AC30" class="">
                            <i class="fas fa-sms icon">
                                <span class="tool">
                                    メッセージ
                                </span>
                            </i>
                            <span class="text nav-text">メッセージ</span>
                        </a>
                    </li>
                {{-- --------------------------------------------- --}}
                    <li class="nav-link1">
                        <a href="AP10" data-target-screen="AP10,AP20" class="">
                            <i class="fas fa-address-card icon">
                                <span class="tool">
                                    応募者管理
                                </span>
                            </i>
                            <span class="text nav-text">応募者管理</span>
                        </a>
                    </li>
                {{-- --------------------------------------------- --}}
                    <li class="nav-link1">
                        <a href="/admin/IN10" data-target-screen="IN10,IN20,IN30" class="">
                        <i class="fas fa-bell icon">
                            <span class="tool">
                                お知らせ
                            </span>
                        </i>
                       <span class="text nav-text">お知らせ</span>
                        </a>
                    </li>
                {{-- --------------------------------------------- --}}    
                    <li class="nav-link1">
                        <a href="#"data-target-screen="" class="">
                        <i class="fas fa-gem icon">
                            <span class="tool">
                                特集ページ
                            </span>
                        </i>
                    <span class="text nav-text">特集ページ</span>
                        </a>
                    </li>
                {{-- --------------------------------------------- --}}    
                    <li class="nav-link1">
                        <a href="#" data-target-screen="" class="">
                                <i class="fas fa-user-tie icon">
                                    <span class="tool">
                                        マスタ管理
                                    </span>
                                </i>
                            <span class="text nav-text">マスタ管理</span>
                        </a>
                    </li>
                {{-- --------------------------------------------- --}}  
               
                    <li class="nav-link1">
                        <a href="/admin/AC10"data-target-screen="AC10,AC20,AC30" class="">
                                <i class="fas fa-address-book icon">
                                    <span class="tool">
                                        アカウント管理
                                    </span>
                                </i>
                            <span class="text nav-text">アカウント管理</span>
                        </a>
                    </li>  
                   
                     {{-- --------------------------------------------- --}}    
                     <li class="nav-link1">
                        <a href="#"data-target-screen="" class="">
                            <i class='bx bx-log-out icon' >
                                <span class="tool">
                                    ログアウト
                                </span>
                            </i>
                    <span class="text nav-text">ログアウト</span>
                        </a>
                    </li>
                    
                </ul>
            </div>

           
        </div>

    </nav>

    <section class="home">
        <div id="page">
        @yield('breadcrumb')
        
        <main id="page-content">
            @yield('content')
        </main>
    </div>
        
    </section> 
    

    <script src="/admin/js/sidebarpro.js"></script>
    <script>
        $(document).ready(function() {
            $('.sidebar li a').each(function(index, element) {
                if (element.dataset && element.dataset.targetScreen) {
                    let targetScreens = element.dataset.targetScreen.split(',');
                    targetScreens.forEach(function(item) {
                        if (window.location.href.search(item) !== -1) {
                            $(element).addClass('active');
                        }
                    });
                }
            });
        });
        </script>
</body>
</html>