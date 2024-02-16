@extends('layouts.default')
@section('content')
@if(session('adminData'))
<script>
    window.location = "/home";
</script>
@endif

<div class="grid min-h-[140px] w-full place-items-center  rounded-lg p-6 lg:overflow-visible">
    <div class="-m-6 max-h-[768px] w-[calc(100%+48px)] ">
        <!-- component -->

        <div class="container flex flex-col mx-auto bg-white rounded-lg pt-12 my-5">
            <div class="flex justify-center w-full h-full my-auto xl:gap-14 lg:justify-normal md:gap-5 draggable">
                <div class="flex items-center justify-center w-full lg:p-12">
                    <div class="flex items-center xl:p-10 shadow-xl rounded-lg">
                        <form class="flex flex-col w-full h-full pb-6 text-center bg-white rounded-3xl" action="forceLogout-admin" method="post">
                            @method('post')
                            @csrf
                            <h3 class="mb-3 text-4xl font-extrabold text-dark-grey-900 ">Force Logout</h3>
                            <input type="hidden" name="prev_token" value="{{ Request::get('ID') }}">
                            
                            <button
                                class="flex items-center justify-center w-full mt-5 py-4 text-sm font-medium transition duration-300 rounded-2xl text-grey-900 bg-grey-300 hover:bg-grey-400 focus:ring-4 focus:ring-grey-300">
                                <span class="font-semibold">Continue Login</span>
                                <i class="fa-solid fa-right-from-bracket ml-2"></i>
                            </button>
                            <div class="flex items-center mb-3">
                                <hr class="h-0 border-b border-solid border-grey-500 grow">
                                <p class="mx-4 text-grey-600">or</p>
                                <hr class="h-0 border-b border-solid border-grey-500 grow">
                            </div>
                            <a href="{{ url("/login") }}"
                            class="flex items-center justify-center w-full py-4 text-sm font-medium transition duration-300 rounded-2xl text-grey-900 bg-grey-300 hover:bg-grey-400 focus:ring-4 focus:ring-grey-300">
                            <i class="fa-solid fa-circle-left mr-2"></i> <span class="font-semibold">Go Back</span> 
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop