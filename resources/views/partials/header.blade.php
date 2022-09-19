<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}"/>   --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title !== "" ? $title : $webtitle}}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>
</head>
<body class="bg-gray-200 text-gray-700" id="body">    
    <x-nav></x-nav>
{{--     <div class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="modal">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">Deactivate account</h3>
                                <div class="mt-2">
                                <p class="text-sm text-gray-500">Are you sure you want to deactivate your account? All of your data will be permanently removed. This action cannot be undone.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div id="modal" tabindex="-1" aria-hidden="true" class="loginModal hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
        <div class="relative top-40 left-0 container mx-auto p-4 w-full max-w-6xl h-screen md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex justify-between items-start p-3 rounded-t">
                    {{-- <h3 class="text-xl font-semibold text-green-900 dark:text-green-900">
                        Sign In
                    </h3> --}}
                    <button type="button" id="close-modal-login" class="text-green-900 bg-transparent hover:bg-green-800 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-green-800 dark:hover:text-white" data-modal-toggle="defaultModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-0 space-y-6">
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        <div class="bg-cover bg-center hidden lg:block">
                            <img src="{{ asset('img/services/default.png'); }}" alt="Company Logo" class="h-98 w-full">
                        </div>
                        <div class="p-4 px-8">
                            <h3 class="text-3xl font-extrabold mb-1">Sign in</h3>
                            <span class="text-gray-500">Doesn't have an account yet? </span><div class="text-green-800 font-bold hover:underline inline-flex cursor-pointer" id="registerBtn">Sign Up</div>
                            <form action="/login" method="POST" class="mt-8">
                                @csrf
                                <div class="relative z-0 w-full mb-5">
                                    <input type="email" name="email" placeholder=" " required class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-green-800 border-gray-500" autocomplete="off"/>
                                    @error('email')
                                        <span class="text-red-500 text-md p2">{{ $message }}</span>
                                    @enderror
                                    <label for="email" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Email Address</label>
                                    
                                </div>
                                <div class="relative z-0 w-full mb-5" x-data="{ show: true }">
                                    <input :type="show ? 'password' : 'text'" name="password" placeholder=" " required class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-green-800 border-gray-500" />
                                    @error('password')
                                        <span class="text-red-500 text-md p2">{{ $message }}</span>
                                    @enderror
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                    
                                        <svg class="h-5 text-gray-700" fill="none" @click="show = !show"
                                          :class="{'hidden': !show, 'block':show }" xmlns="http://www.w3.org/2000/svg"
                                          viewbox="0 0 576 512">
                                          <path fill="currentColor"
                                            d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                          </path>
                                        </svg>
                    
                                        <svg class="h-5 text-gray-700" fill="none" @click="show = !show"
                                          :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg"
                                          viewbox="0 0 640 512">
                                          <path fill="currentColor"
                                            d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                          </path>
                                        </svg>
                    
                                      </div>
                                    <label for="password" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Password</label>
                                </div>
                                <div class="relative z-0 w-full mb-5">
                                    <button type="submit" class="bg-green-800 text-white p-3 w-full font-bold hover:dark:bg-green-900">Login</button>
                                </div>
                                <span class="float-right text-green-800 hover:underline"><a href="#">Forgot Password ?</a></span>
                                <div class="mt-15 text-justify">
                                    <p>By using this service, you understand and agree to the <strong>{{ $title }}</strong> 
                                        <a href="#" class="text-green-800 hover:underline">Services Terms of Use</a> and 
                                        <a href="#" class="text-green-800 hover:underline">Privacy Statement</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal" tabindex="-1" aria-hidden="true" class="registerModal hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
        <div class="relative top-40 left-0 container mx-auto p-4 w-full max-w-6xl h-screen md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex justify-between items-start p-3 rounded-t">
                    {{-- <h3 class="text-xl font-semibold text-green-900 dark:text-green-900">
                        Sign In
                    </h3> --}}
                    <button type="button" id="close-modal-register" class="text-green-900 bg-transparent hover:bg-green-800 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-green-800 dark:hover:text-white" data-modal-toggle="defaultModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-0 space-y-6">
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        <div class="bg-cover bg-center hidden lg:block">
                            <img src="{{ asset('img/services/default.png'); }}" alt="Company Logo" class="h-98 w-full">
                        </div>
                        <div class="p-4 px-8">
                            <h3 class="text-3xl font-extrabold mb-1">Register</h3>
                            <span class="text-gray-500">Already have an account? </span><div class="text-green-800 font-bold hover:underline inline-flex cursor-pointer" id="signBtn">Sign in</div>
                            <form action="/login" method="POST" class="mt-8">
                                @csrf
                                <div class="relative z-0 w-full mb-5">
                                    <input type="email" name="email" placeholder=" " required class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-green-800 border-gray-500" autocomplete="off"/>
                                    @error('email')
                                        <span class="text-red-500 text-md p2">{{ $message }}</span>
                                    @enderror
                                    <label for="email" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Email Address</label>
                                    
                                </div>
                                <div class="relative z-0 w-full mb-5" x-data="{ show: true }">
                                    <input :type="show ? 'password' : 'text'" name="password" placeholder=" " required class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-green-800 border-gray-500" />
                                    @error('password')
                                        <span class="text-red-500 text-md p2">{{ $message }}</span>
                                    @enderror
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                    
                                        <svg class="h-5 text-gray-700" fill="none" @click="show = !show"
                                          :class="{'hidden': !show, 'block':show }" xmlns="http://www.w3.org/2000/svg"
                                          viewbox="0 0 576 512">
                                          <path fill="currentColor"
                                            d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                          </path>
                                        </svg>
                    
                                        <svg class="h-5 text-gray-700" fill="none" @click="show = !show"
                                          :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg"
                                          viewbox="0 0 640 512">
                                          <path fill="currentColor"
                                            d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                          </path>
                                        </svg>
                    
                                      </div>
                                    <label for="password" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Password</label>
                                </div>
                                <div class="relative z-0 w-full mb-5">
                                    <button type="submit" class="bg-green-800 text-white p-3 w-full font-bold hover:dark:bg-green-900">Login</button>
                                </div>
                                <div class="mt-15 text-justify">
                                    <p>By using this service, you understand and agree to the <strong>{{ $title }}</strong> 
                                        <a href="#" class="text-green-800 hover:underline">Services Terms of Use</a> and 
                                        <a href="#" class="text-green-800 hover:underline">Privacy Statement</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>