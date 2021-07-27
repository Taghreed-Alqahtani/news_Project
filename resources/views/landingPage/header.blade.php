<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <head>
        <title>Tuwaiq News</title>
    </head>
    <link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type='text/css' href="{{ asset('css/form.css') }}">
    <link rel="stylesheet" type='text/css' href="{{ asset('css/comments.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i');
        @import 'https://fonts.googleapis.com/css?family=Raleway';
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
        html,
        body {
            margin: 0;
            height: 120%;
            font-family: 'Playfair Display', serif;
        }

        a {
            text-decoration: none
        }

        .header {
            position: relative;
            overflow: hidden;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
            align-content: flex-start;
            height: 50vw;
            min-height: 400px;
            max-height: 550px;
            min-width: 300px;
            color: #eee;
            background-size: cover;
            background-image: url(https://images.unsplash.com/photo-1598784124046-64dc7e92357d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80);
        }

        .header:after {
            content: "";
            width: 100%;
            height: 100%;
            position: absolute;
            bottom: 0;
            left: 0;
            z-index: -1;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.12) 40%, rgba(0, 0, 0, 1) 100%);
        }
        
        .info {
            flex: 0 0 auto;
            font-size: 30px;
            font-weight: bolder;
            width: 50%;
            width: 100%;
            padding: 15% 10% 0 10%;
            text-shadow: 0 2px 3px rgba(0, 0, 0, 0.2)
        }

        .meta {
            font-style: italic;
        }

        @keyframes grow {
            0% {
                transform: scale(1) translateY(0px)
            }

            50% {
                transform: scale(1.2) translateY(-400px)
            }
        }

        .content {
            padding: 5% 10%;
            text-align: justify
        }

        @import url("https://rsms.me/inter/inter.css");

        .bold {
            font-weight: bold;
        }

        .mr-t {
            margin-top: 300px !important;
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
            background-color: rgba(131, 130, 130, 0.9);
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
            background-color: rgba(75, 77, 78, 0.3);
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        div.borderYtoX a:before,
        div.borderYtoX a:after {
            position: absolute;
            opacity: 0.5;
            height: 100%;
            width: 2px;
            content: '';
            background: #FFF;
            transition: all 0.3s;
        }

        div.borderYtoX a:before {
            left: 0px;
            top: 0px;
        }

        div.borderYtoX a:after {
            right: 0px;
            bottom: 0px;
        }

        div.borderYtoX a:hover:before,
        div.borderYtoX a:hover:after {
            opacity: 1;
            height: 2px;
            width: 100%;
        }

        .teal {
            background: rgb(0, 0, 0, 0.70);
            width: -webkit-fill-available;
        }

        div.nav-container {
            font-family: 'Playfair Display', serif;
            margin: 0;
            padding: 2em 3em;
            text-align: center;
            z-index: 1;
        }

        div.nav-container a {
            color: #FFF;
            text-decoration: none;
            font-family: 'Playfair Display', serif;
            font-size: 20px;
            margin: 0px 10px;
            padding: 10px 10px;
            position: relative;
            z-index: 0;
            cursor: pointer;
        }

        .news-section {
            padding-top: 80px;
        }

        a:hover {
            text-decoration: underline;
        }

        .wid-hei {
            width: 500px;
            height: 260px;
        }

        .new_img {
            height: 260px;
            widows: 260px;
        }

        .news_div {
            margin: 20px;
        }
        

        .search {
            justify-content: center;
            width: 100%;
            position: relative;
            display: flex;
            margin-bottom: 100px;
        }

        .searchTerm {
            width: 70%;
            border: 3px solid rgb(0, 0, 0);
            border-right: none;
            padding: 5px;
            border-radius: 5px 0 0 5px;
            outline: none;
            color: #rgb(0, 0, 0);
        }

        .searchTerm:focus {
            color: rgb(0, 0, 0);
        }

        .searchButton {
            padding:10px; 
            border: 1px solid rgb(0, 0, 0);
            background: rgb(0, 0, 0);
            text-align: center;
            color: #fff;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            font-size: 20px;
        }
        .myTitle{
            color: #511c00;
        }

        .search_wrap{
            margin-top: 60px;
        }

    </style>
</head>
