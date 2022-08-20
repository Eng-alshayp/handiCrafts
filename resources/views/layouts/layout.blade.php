<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
<!--    google font link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<!--   font awesom & css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>

    <nav>
        <a class="nav_logo" href="/">وتي للديكور</a>
        <ul class="nav_links">
            <li><a href="/doors">أبواب</a></li>
            <li><a href="/kitchens">مطابخ</a></li>
            <li><a href="/woods">خشبيات</a></li>
            <li><a href="/otherwoods">المزيد</a></li>
        </ul>
        <a class="nav_contact" href="#contact"><button>للتواصل معنا</button></a>
    </nav>


        @yield('header')
</header>

    <footer id="contact">
        <h2 class="title">للتواصل معنا </h2>
        <div class="content">
                {{-- ------------card1               --}}
            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="info">
                    <h3>phone number</h3>
                    <h5>أبو هشام</h5>
                    <p>00905541779932</p>
                    <h5>حسين وتي</h5>
                    <p>00905541779932</p>
                </div>
            </div>
                    {{-- --------- card2 -------------}}
            <div class="card">
                <div class="icon">
                    <i class="fa-brands fa-facebook"></i>
                </div>
                <div class="info">
                    <h3>Facebook Account</h3>
                    <h4><a target="_blank" href="https://www.facebook.com/profile.php?id=100009124647822">أبو هشام</a></h4>

                    <h4><a target="_blank" href="https://www.facebook.com/housainwetti/">وتي للديكور</a></h4>
                </div>
            </div>
        </div>
        <br>
        <div class="copyfooter">
            <p class="footer-title"><i class="fa-solid fa-user-tie"></i> Copyrights @<span><a target="_blank" href="https://www.facebook.com/jamilshayp">Jamil Shayp</a></span></p>
        </div>

    </footer>



</body>
</html>
