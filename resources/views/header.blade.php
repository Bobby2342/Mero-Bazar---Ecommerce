<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{

$total= ProductController::cartItem();
}

?>



<!doctype html>
<html lang="en">
    <head>
        <title>Ecommerce</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous">
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">


       <a href="/"> <h1> MERO BAZAR</h1> </a>
        </head>

        <body>

            <!-- Nav tabs -->
            <ul
                class="nav nav-tabs"
                id="navId"
                role="tablist">


                <li class="nav-item">
                    <a
                        href="/"
                        class="nav-link active"
                        data-bs-toggle="tab"
                        aria-current="page"
                        >Home</a
                    >
                </li>

                <li>
                <form action="/search" class="navbar-form navbar-left">

                <input type="text" name="query" class="search"   placeholder="search here" style="width: 500px; margin-left:20px">

                <button class="btn btn-dark" type="submit">Search</button>
                </form></li>




                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        data-bs-toggle="dropdown"
                        href="#"
                        role="button"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >Categories</a
                    >
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#tab2Id">Fashions Men</a>
                        <a class="dropdown-item" href="#tab3Id">Electric Appliances</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#tab4Id">Music Instruments</a>
                    </div>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#tab5Id" class="nav-link" data-bs-toggle="tab"
                        > Orders</a
                    >
                </li>
                <li class="nav-item" role="presentation">
                    <a href="/" class="nav-link " data-bs-toggle="tab"
                        >Login </a
                    >
                </li>
                <li class="nav-item" role="presentation">
                    <a href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                        </svg>
                        <i class="bi bi-cart">{{$total}}</i>
                    </a>
                </li>

                @if (Session::has('user'))
                <li class="dropdown" role="presentation">

                    <div class="dropdown openc" >
                        <button
                            class="btn btn-secondary right "
                            type="button"
                            id="triggerId"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded=""
                        >
                            {{Session::get('user')['name']}}
                        </button>
                        <div class="dropdown-menu ml-5" >
                            <a class="dropdown-item " href="/logout">
                                    Logout</a>
                            </button>
                        </div>
                    </div>


                </li>
                @else
                <li> <a href="/login">Login</a></li>
                @endif

            </ul>






            <!-- (Optional) - Place this js code after initializing bootstrap.min.js or bootstrap.bundle.min.js -->
            <script>
                var triggerEl = document.querySelector("#navId a");
                bootstrap.Tab.getInstance(triggerEl).show(); // Select tab by name
            </script>


        </body>
        <br>
        <br>

