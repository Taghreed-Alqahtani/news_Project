@include('dashboardPage.header')

<body class="text-blueGray-700 antialiased">
    <div id="root">

        @include('dashboardPage.sidenav')
        
        <div class="relative md:ml-64 bg-blueGray-50">
            <nav
                class="absolute z-10 md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
                <h1 class="uppercase font-semibold">Dashboard</h1>
            </nav>
            <div style=" background-color: #FFF;" class="relative md:pt-32 pb-32 pt-12">
                <div class="px-4 md:px-10 mx-auto w-full">
                     @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>

</html>
