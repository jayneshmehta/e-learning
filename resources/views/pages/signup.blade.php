@extends('layouts.default')
@section('content')
    <div class="grid min-h-[140px] w-full place-items-center  rounded-lg p-2 lg:overflow-visible">
        <div class=" max-h-[768px] w-[calc(100%+48px)] ">
            <!-- component -->
            <section class="bg-gray-50 dark:bg-gray-900">
                <div class="flex flex-col items-center justify-center mx-auto md:h-screen ">
                    <a href="{{ url('/home') }}" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                        {{-- <img class="w-8 h-8 mr-2" src="#" alt="logo"> --}}
                        Company_Name    
                    </a>
                    <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md  dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                            <h1 class="mb-3 text-3xl font-extrabold text-dark-grey-900">
                                Create and account
                            </h1>
                            <form class="space-y-4 md:space-y-6" action="#">
                                <div>
                                    <label for="email" class="mb-2 text-sm text-start text-grey-900">Your email</label>
                                    <input type="email" name="email" id="email" class="flex items-center w-full px-5 py-4 mb-5 mr-2 text-sm font-medium outline-none focus:bg-grey-400 placeholder:text-grey-700 bg-grey-200 text-dark-grey-900 rounded-2xl" placeholder="name@company.com" required="">
                                </div>
                                <div>
                                    <label for="password" class="mb-2 text-sm text-start text-grey-900">Password</label>
                                    <input type="password" name="password" id="password" placeholder="••••••••" class="flex items-center w-full px-5 py-4 mb-5 mr-2 text-sm font-medium outline-none focus:bg-grey-400 placeholder:text-grey-700 bg-grey-200 text-dark-grey-900 rounded-2xl" required="">
                                </div>
                                <div>
                                    <label for="confirm-password" class="mb-2 text-sm text-start text-grey-900">Confirm password</label>
                                    <input type="confirm-password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="flex items-center w-full px-5 py-4 mb-5 mr-2 text-sm font-medium outline-none focus:bg-grey-400 placeholder:text-grey-700 bg-grey-200 text-dark-grey-900 rounded-2xl" required="">
                                </div>
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                      <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                                    </div>
                                    <div class="ml-3 text-sm">
                                      <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
                                    </div>
                                </div>
                                <button
                                    class="w-full px-6 py-5 mb-5 text-sm font-bold leading-none text-white transition duration-300 md:w-96 rounded-2xl hover:bg-purple-blue-600 focus:ring-4 focus:ring-purple-blue-100 bg-purple-blue-500">Sign
                                    In</button>
                                <p class="text-sm leading-relaxed text-grey-900">Already have an account? <a
                                        href="{{ url('/login') }}" class="font-bold text-grey-700">Login here</a>
                                </p>
                                
                            </form>
                        </div>
                    </div>
                </div>
              </section>
        </div>
    </div>
@stop