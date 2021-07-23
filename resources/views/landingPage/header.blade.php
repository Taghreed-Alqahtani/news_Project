<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Landing page</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Font Awesome if you need it
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
  -->
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css" rel="stylesheet" />
    <!--Tailwind Custom Forms - use to standardise form fields - https://github.com/tailwindcss/custom-forms-->

    <style>
        @import url("https://rsms.me/inter/inter.css");

        html {
            font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif,
                "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
                "Noto Color Emoji";
        }
        .bold{
            font-weight: bold;
        }
        .gradient {
            background-image: linear-gradient(-225deg, #cbbacc 0%, #2580b3 100%);
        }

        .mr-t {
            margin-top: 300px !important;
        }

        button,
        .gradient2 {
            background-color: #f39f86;
            background-image: linear-gradient(315deg, #f39f86 0%, #f9d976 74%);
        }

        .dropbtn {
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: rgba(231, 226, 226, 0.90);
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: rgba(192, 221, 249, 0.3);
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .nav-fixed{
            position: fixed;
            background-color: #f39f86;
        }

    </style>
</head>

<body class="gradient leading-relaxed tracking-wide flex flex-col">
