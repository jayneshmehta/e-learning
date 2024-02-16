@extends('layouts.default')
@section('content')
@if(session('Alldata'))
<script>
    window.location = "/home";
</script>
@endif
@if(session('status'))
<div id="alert-border-2" class="flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800" role="alert">
    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <div class="ms-3 text-sm font-medium">
      {{ session('status')}}
    </div>
    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-2" aria-label="Close">
      <span class="sr-only">Dismiss</span>
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
      </svg>
    </button>
</div>
@endif
<div class="grid min-h-[140px] w-full place-items-center  rounded-lg p-6 lg:overflow-visible">
    <div class="-m-6 max-h-[768px] w-[calc(100%+48px)] ">
        <!-- component -->

        <div class="container flex flex-col mx-auto bg-white rounded-lg pt-12 my-5">
            <div class="flex justify-center w-full h-full my-auto xl:gap-14 lg:justify-normal md:gap-5 draggable">
                <div class="flex items-center justify-center w-full lg:p-12">
                    <div class="flex items-center xl:p-10 shadow-xl rounded-lg">
                        <form class="flex flex-col w-full h-full pb-6 text-center bg-white rounded-3xl" action="forceLogout-user" method="post">
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