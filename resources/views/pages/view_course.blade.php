@extends('layouts.default')
@section('content')
            <div class="max-w-full h-[300px] border-1 border-blue-gray-600 rounded-2xl mx-4 my-2 ">
                <img class="object-cover  h-[300px] w-full rounded-2xl  " src="{{ url('public/images/home/pic3.jpg')}}" alt="">
            </div>
            <div class="flex flex-auto gap-5 ">
                @for ($i = 0; $i < 4; $i++)
                    <div class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96  ">
                        <div class="p-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-12 h-12 mb-4 text-gray-900">
                                <path fill-rule="evenodd"
                                    d="M9.315 7.584C12.195 3.883 16.695 1.5 21.75 1.5a.75.75 0 01.75.75c0 5.056-2.383 9.555-6.084 12.436A6.75 6.75 0 019.75 22.5a.75.75 0 01-.75-.75v-4.131A15.838 15.838 0 016.382 15H2.25a.75.75 0 01-.75-.75 6.75 6.75 0 017.815-6.666zM15 6.75a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"
                                    clip-rule="evenodd"></path>
                                <path
                                    d="M5.26 17.242a.75.75 0 10-.897-1.203 5.243 5.243 0 00-2.05 5.022.75.75 0 00.625.627 5.243 5.243 0 005.022-2.051.75.75 0 10-1.202-.897 3.744 3.744 0 01-3.008 1.51c0-1.23.592-2.323 1.51-3.008z">
                                </path>
                            </svg>
                            <h5
                                class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                UI/UX Review Check
                            </h5>
                            <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                Because it's about motivating the doers. Because I'm here to follow my
                                dreams and inspire others.
                            </p>
                        </div>
                        <div class="p-6 pt-0">
                            <a href="#" class="inline-block">
                                <button
                                    class="flex items-center gap-2 px-4 py-2 font-sans text-xs font-bold text-center text-gray-900 uppercase align-middle transition-all rounded-lg select-none disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none hover:bg-gray-900/10 active:bg-gray-900/20"
                                    type="button">
                                    Learn More
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>
                @endfor
            </div>
                    <div class="text-xl font-bold m-5 text-center">Use Keyboard Arrow Keys To Go Left And Right</div>

                    <div class="gallery border-2 rounded mx-auto m-5 bg-white" style="width:750px;">
                        <div class="top flex p-2 border-b select-none">
                            <div class="heading text-gray-800 w-full pl-3 font-semibold my-auto"></div>
                            <div class="buttons ml-auto flex text-gray-600 mr-1">
                                <svg action="prev" class="w-7 border-2 rounded-l-lg p-1 cursor-pointer border-r-0"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path action="prev" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                </svg>
                                <svg action="next" class="w-7 border-2 rounded-r-lg p-1 cursor-pointer"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path action="next" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </div>
                        </div>
                        <div class="content-area w-full h-96 overflow-hidden">
                            <div class="platform shadow-xl h-full flex">
                                <!-- frame start -->
                                <div class="each-frame border-box flex-none h-full" title="Tiger">
                                    <!-- title shows in top -->
                                    <!-- this is full editable area -->
                                    <div class="main flex w-full p-8">
                                        <div class="sub w-4/6 my-auto">
                                            <img class="w-full p-8"
                                                src="https://images-na.ssl-images-amazon.com/images/I/81eJpEEQwYL._AC_SL1500_.jpg"
                                                alt="">
                                        </div>
                                        <div class="sub w-full my-auto">
                                            <div class="head text-3xl font-bold mb-4">The Tiger</div>
                                            <div class="long-text text-lg">(Panthera tigris) is the largest extant cat
                                                species and a member of the genus Panthera. It is most recognisable for
                                                its dark vertical stripes on orange-brown fur with a lighter underside.
                                                It is an apex predator, primarily preying on ungulates such as deer and
                                                wild boar.</div>
                                            <!-- this buttons are usable everywhere inside gallery element -->
                                            <div class="goto border border-gray-400 text-sm font-semibold inline-block mt-2 p-1 px-2 rounded cursor-pointer"
                                                action="goto" goto="2">Goto Third Frame</div>
                                            <!-- add (action="goto" goto="[val]{0 means first frame and so on}") attribute to jump into frames -->
                                            <div class="goto border border-gray-400 text-sm font-semibold inline-block mt-2 p-1 px-2 rounded cursor-pointer"
                                                action="goto" goto="end">Goto Last Frame</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- frame end -->

                                <div class="each-frame border-box flex-none h-full" title="Lion">
                                    <!-- title shows in top -->
                                    <!-- this is full editable area -->
                                    <div class="main flex w-full p-8">
                                        <div class="sub w-4/6 my-auto">
                                            <img class="w-full p-8"
                                                src="https://image.freepik.com/free-vector/cute-lion-cartoon_160606-353.jpg"
                                                alt="">
                                        </div>
                                        <div class="sub w-full my-auto">
                                            <div class="head text-3xl font-bold mb-4">The Lion</div>
                                            <div class="long-text text-lg">The lion is a species in the family Felidae
                                                and a member of the genus Panthera. It has a muscular, deep-chested
                                                body, short, rounded head, round ears, and a hairy tuft at the end of
                                                its tail. It is sexually dimorphic; adult male lions have a prominent
                                                mane.</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- frame end -->

                                <div class="each-frame border-box flex-none h-full" title="Rat">
                                    <!-- title shows in top -->
                                    <!-- this is full editable area -->
                                    <div class="main flex w-full p-8">
                                        <div class="sub w-4/6 my-auto">
                                            <img class="w-full p-8"
                                                src="https://i.pinimg.com/originals/07/1d/d0/071dd09d7b36e49139fe2cf08ff728a8.jpg"
                                                alt="">
                                        </div>
                                        <div class="sub w-full my-auto">
                                            <div class="head text-3xl font-bold mb-4">The Rat</div>
                                            <div class="long-text text-lg">Rats are various medium-sized, long-tailed
                                                rodents. Species of rats are found throughout the order Rodentia, but
                                                stereotypical rats are found in the genus Rattus. Other rat genera
                                                include Neotoma, Bandicota and Dipodomys. Rats are typically
                                                distinguished from</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- frame end -->

                                <div class="each-frame border-box flex-none h-full" title="Owl">
                                    <!-- title shows in top -->
                                    <!-- this is full editable area -->
                                    <div class="main flex w-full p-8">
                                        <div class="sub w-4/6 my-auto">
                                            <img class="w-full p-8"
                                                src="https://image.freepik.com/free-vector/cartoon-owl-tree-branch_194935-43.jpg"
                                                alt="">
                                        </div>
                                        <div class="sub w-full my-auto">
                                            <div class="head text-3xl font-bold mb-4">The Owl</div>
                                            <div class="long-text text-lg">Owls are birds from the order Strigiformes,
                                                which includes over 200 species of mostly solitary and nocturnal birds
                                                of prey typified by an upright stance, a large, broad head, binocular
                                                vision, binaural hearing, sharp talons, and feathers adapted for silent
                                                flight.</div>
                                            <div class="goto border border-gray-400 text-sm font-semibold inline-block mt-2 p-1 px-2 rounded cursor-pointer"
                                                action="goto" goto="0">Goto First Frame</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- frame end -->


                            </div>
                        </div>
                    </div>
                </div>
            </div>
@stop
