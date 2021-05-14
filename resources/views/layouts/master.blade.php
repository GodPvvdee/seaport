<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2c69c40f96.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
            box-sizing: border-box;
            font-family: "Roboto", sans-serif;
        }

        body {
            background: #fff;
        }

        .wrapper .header {
            z-index: 1;
            background: #22242a;
            position: fixed;
            width: calc(100% - 0%);
            height: 70px;
            display: flex;
            top: 0;
        }

        .wrapper .header .header-menu {
            width: calc(100% - 0%);
            height: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .wrapper .header .header-menu .title {
            color: #fff;
            font-size: 25px;
            text-transform: uppercase;
            font-weight: 900;
        }

        .wrapper .header .header-menu .title span {
            color: #4ccee8;
        }

        .wrapper .header .header-menu .sidebar-btn {
            color: #fff;
            position: absolute;
            margin-left: 240px;
            font-size: 22px;
            font-weight: 900;
            cursor: pointer;
            transition: 0.3s;
            transition-property: color;
        }

        .wrapper .header .header-menu .sidebar-btn:hover {
            color: #4ccee8;
        }

        .wrapper .header .header-menu ul {
            display: flex;
        }

        .wrapper .header .header-menu ul li img {
            background: #fff;
            color: #000;
            display: block;
            margin: 0 10px;
            font-size: 18px;
            width: 34px;
            height: 34px;
            line-height: 35px;
            text-align: center;
            border-radius: 50%;
            transition: 0.3s;
            transition-property: background, color;

        }

        .wrapper .header .header-menu ul li p {
            color: #888888;
            margin: 5px;
        }

        .wrapper .sidebar {
            z-index: 1;
            background: #22242a;
            position: fixed;
            top: 70px;
            width: 250px;
            height: calc(100%);
            padding-top: 100px;
            overflow: auto;
        }

        .wrapper .sidebar .sidebar-menu {
            overflow: hidden;
        }
        .wrapper .sidebar .sidebar-menu .item p{
            margin-left: 15px;
            color: grey;
            font-size: 15px;
        }
        .wrapper .sidebar .sidebar-menu .item {
            width: 250px;
            overflow: hidden;
        }

        .wrapper .sidebar .sidebar-menu .item .menu-btn {
            display: block;
            color: #fff;
            position: relative;
            padding: 25px 20px;
            transition: 0.3s;
            transition-property: color;
        }

        .wrapper .sidebar .sidebar-menu .item .menu-btn:hover {
            color: #4ccee8;
        }
        .bcsi{
            background: red;
        }
        .wrapper .sidebar .sidebar-menu .item .menu-btn i {
            margin-right: 20px;
        }

        .wrapper .sidebar .sidebar-menu .item .menu-btn i:before {
            color: grey;
        }

        .wrapper.collapse1 .sidebar {
            width: 70px;
        }

        .wrapper.collapse1 .sidebar .profile p,
        .wrapper.collapse1 .sidebar a span {
            display: none;
        }

        .wrapper.collapse1 .sidebar .sidebar-menu .item .menu-btn {
            font-size: 23px;
        }
        .wrapper .main-container{
            width: calc(100% - 310px);
            margin-left: 290px;
            margin-top: 100px;
            background: grey;
        }
        .wrapper.collapse1 .main-container {
            width: calc(100% - 130px);
            margin-left: 100px;
            margin-top: 100px;
        }
    </style>
</head>

<body>
<!-- wrapper start -->
<div class="wrapper">
    <!-- header menu start -->
    <div class="header">
        <div class="header-menu">
            <div class="title"> <span></span></div>
            <div class="sidebar-btn">
                <i class="fas fa-bars"></i>
            </div>
            <ul>
                <li>
                    <p>Сайн байна уу</p>
                </li>
                <li>
                    <img src="https://cdn1.iconfinder.com/data/icons/female-avatars-vol-1/256/female-portrait-avatar-profile-woman-sexy-afro-2-512.png"
                         alt="">
                </li>
            </ul>
        </div>
    </div>
    <!-- header menu end -->
    <div class="sidebar">
        <div class="sidebar-menu">
            <li class="item"><p>Бүртгэх</p></li>
            <li class="item" id="profile">
                <a href="sailor" class="menu-btn btn-2">
                    <i class="fas fa-user">
                        <span>ажилтан бүртгэх</span>
                    </i>
                </a>
            </li>
            <li class="item" id="profile">
                <a href="company" class="menu-btn btn-2">
                    <i class="fas fa-user">
                        <span>компани бүртгэх</span>
                    </i>
                </a>
            </li>
            
            
        </div>
    </div>
    <div class="main-container">
        <div class="card">
            <div class="card-header">
                @yield('title')
            </div>
            <div class="card-body">
                @yield('content')

            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $(".sidebar-btn").click(function () {
            $(".wrapper").toggleClass("collapse1");

        });
        $(".menu-btn").click(function (){
            // $(".btn-1").toggleClass("bcsi");
        });
    });
</script>
</body>

</html>
