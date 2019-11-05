<!DOCTYPE html>

<html lang="zh-cn">

<head>

    <meta charset="UTF-8">
    <title> @yield('title') - {{ env("APP_NAME") }} </title>

    <meta name="viewport" content="width=device-width">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link href="{{ asset("/favicon.ico") }}" rel="icon">
    <link href="https://cdn.bootcss.com/mdui/0.4.3/css/mdui.min.css" rel="stylesheet">

    <style>
        html {
            height: 100%;
        }

        body {
            font-family: 'Noto Sans SC', sans-serif;
            height: 100%;

            background-repeat: no-repeat;
            background-size: cover;
        }

        a {
            text-decoration: none;
        }

        ::-webkit-scrollbar {
            width: 4px;
        }

        ::-webkit-scrollbar-thumb {
            background: #1396FF;
        }


        .form-cover {
            background-color: rgba(255, 255, 255, 1);
            opacity: 0.95;

            float: right;

            height: calc(100% - 2px);
            width: 360px;

            border-top: 2px solid #448AFF;
        }

        .form-cover .form {
            padding-top: 120px;
            width: 80%;
        }

        .form-cover .form .form-title {
            text-align: center;
            font-size: 34px;
        }

        .form-cover .form .submit {
            margin-top: 24px;
            border-radius: 4px;
        }

        .triangle {

            float: right;

            opacity: 0.95;
            border-bottom: 1200px solid rgba(255, 255, 255, 1);
            border-left: 140px solid transparent;
        }
    </style>

    @yield('head')

</head>


<body>

<div class="form-cover">

    <div class="form mdui-center">
        <div class="form-title"> @yield('form-title') </div>

        <form>
            @yield("form")
        </form>
    </div>

</div>

<div class="triangle"></div>

<script src="https://cdn.bootcss.com/mdui/0.4.3/js/mdui.min.js"></script>

</body>

</html>