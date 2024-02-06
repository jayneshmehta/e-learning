@include('includes.header')
<body>
    <div class="grid min-h-[140px] w-full place-items-center  rounded-lg p-6 lg:overflow-visible">
        <div class="-m-6 max-h-[768px] w-[calc(100%+48px)] ">

@include('includes.navbar')

@yield('content')

        </div>
    </div>    
@include('includes.footer')
