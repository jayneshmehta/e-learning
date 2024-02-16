@extends('layouts.default')
@section('content')
@if(session('Alldata'))
@php
 $usrData = session('Alldata'); 
@endphp
@endif
   <div class="max-w-full h-[300px] border-1 border-blue-gray-600 rounded-2xl mx-4 my-2 ">
        <img class="object-cover  h-[300px] w-full rounded-2xl  " src="{{ url('public/images/home/pic1.jpg') }}"
            alt="">
    </div>
    <div class="flex mt-5">
        <div class="container mx-auto px-8">
            <div class="flex px-10">
                <div class="w-1/4">
                    <div class=" mb-4">
                        <div class="relative">
                            <img class="w-full rounded-lg" src="{{ url('public/images/home/pic2.jpg') }}" alt="progile-image">
                            <i class="fa-solid  fa-pen-fancy cursor-pointer absolute top-2 left-60 bg-blue-gray-400  rounded-full bg-blue-gray-400 text-orange-300 ml-1  p-2 hover:shadow-outline"></i>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="text-3xl font-medium text-grey-darkest">
                            {{ $usrData['username'] }}
                        </div>
                        <div class="text-xl text-grey-dark font-light">
                            james
                        </div>
                    </div>
                    <div class="pb-6 border-b">
                        <div class="relative">
                            <input type="text" id="bio" name='bio' aria-describedby="floating_helper_text" class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-teal-200 focus:outline-none focus:ring-0 focus:border-teal-200 peer" placeholder=" " />
                            <label for="bio" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-teal-200 peer-focus:dark:text-teal-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Add a bio</label>
                        </div>
                    </div>
                    <div class="pb-6 border-b">
                        <div class="relative">
                            <input type="text" id="email" name='email' value="{{ $usrData['email'] }}" aria-describedby="floating_helper_text" class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-teal-200 focus:outline-none focus:ring-0 focus:border-teal-200 peer" placeholder=" " />
                            <label for="email" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-teal-200 peer-focus:dark:text-teal-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                                    <i class="fa-solid fa-at mr-2 mt-1.5"></i><span class='mt-0'>E-mail</span>
                            </label>
                        </div>

                    </div>
                    <div class="">
                        <div class="font-medium text-grey-darkest">
                            Organizations
                        </div>
                        <div class="flex items-center mt-2">
                            <div class="mr-1">
                                <a href="https://github.com/cogitools">
                                    <i class="fa-brands fa-github text-2xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-3/4 ml-6 mt-2">
                    <div class=" border-b border-gray-200 dark:border-gray-700">
                        <ul class="flex flex-wrap text-sm font-medium text-center" id="default-tab"
                            data-tabs-toggle="#default-tab-content" role="tablist">
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                                    data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                                    aria-selected="false">
                                    <a class="p-4 flex items-center">
                                        <div>
                                            Overview
                                        </div>
                                    </a>
                                </button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button
                                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                    id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                                    aria-controls="dashboard" aria-selected="false">
                                    <a class="p-4 flex items-center text-black">
                                        <div>
                                            Repositories
                                        </div>
                                        <div class="rounded-lg bg-blue-gray-400 text-black ml-1 px-2">
                                            41
                                        </div>
                                    </a>
                                </button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button
                                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                    id="stars-tab" data-tabs-target="#stars" type="button" role="tab"
                                    aria-controls="stars" aria-selected="false">
                                    <a class="p-4 flex items-center text-black">
                                        <div>
                                            Stars
                                        </div>
                                        <div class="rounded-lg bg-blue-gray-400 text-black ml-1 px-2">
                                            06
                                        </div>
                                    </a>
                                </button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button
                                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                    id="followers-tab" data-tabs-target="#followers" type="button" role="tab"
                                    aria-controls="followers" aria-selected="false">
                                    <a class="p-4 flex items-center text-black">
                                        <div>
                                            Followers
                                        </div>
                                        <div class="rounded-lg bg-blue-gray-400 text-black ml-1 px-2">
                                            16
                                        </div>
                                    </a>
                                </button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button
                                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                    id="following-tab" data-tabs-target="#following" type="button" role="tab"
                                    aria-controls="following" aria-selected="false">
                                    <a class="p-4 flex items-center text-black">
                                        <div>
                                            Following
                                        </div>
                                        <div class="rounded-lg bg-blue-gray-400 text-black ml-1 px-2">
                                            23
                                        </div>
                                    </a>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div id="default-tab-content">
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            <div>
                                <div class="flex items-center">
                                    <div class="w-1/2 pt-6 pb-2 font-normal text-grey-darkest">
                                        Pinned repositories
                                    </div>
                                    <div class="w-1/2 justify-end text-right text-grey-dark text-sm font-light pt-6 pb-2">
                                        Customize your pinned repositories
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="w-1/2 border px-4 py-4 mb-4 ml-4 rounded text-sm">
                                        <div class="flex">
                                            <div class="mr-2">
                                                <i class="fa-solid fa-bars"></i>

                                            </div>
                                            <div>
                                                <a href="#" class="no-underline">
                                                    laravel/framework
                                                </a>
                                            </div>
                                        </div>
                                        <div class="flex text-sm mt-6">
                                            <div class="mr-4 font-thin text-xs">
                                                PHP
                                            </div>
                                            <div class="mr-4 font-thin text-xs">
                                                8.8k
                                            </div>
                                            <div class="mr-4 font-thin text-xs">
                                                5k
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center">
                                    <div class="w-1/2 pt-6 pb-2 font-normal text-grey-darkest">
                                        1,438 contributions in the last year
                                    </div>
                                    <div
                                        class="w-1/2 pt-6 pb-2 justify-end text-right text-grey-dark text-sm font-light flex">
                                        <div>
                                            Contribution settings
                                        </div>
                                        <div class="">
                                            <svg class="fill-current text-grey-dark h-4 w-4"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border p-4 rounded">
                                <img
                                    src="https://user-images.githubusercontent.com/1791228/34055423-1e71e608-e19d-11e7-87f9-49d2cbb08c50.png">
                            </div>
                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel"
                            aria-labelledby="dashboard-tab">
                            Tab2

                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="stars" role="tabpanel"
                            aria-labelledby="stars-tab">
                            Tab3

                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="followers" role="tabpanel"
                            aria-labelledby="followers-tab">
                            Tab4

                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="following" role="tabpanel"
                            aria-labelledby="following-tab">
                            Tab5
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
