@include("partials.header", [$title])
    <div class="flex flex-col ">
        <article id="login" class="py-10 grid grid-cols-1 gap-2">
            <div class="col-span-2">
                <div class="container mx-auto w-10/12 lg:mt-10 mb-16 bg-white shadow-lg rounded">
                    <div class="grid grid-cols-1 lg:grid-cols-1 gap-8">
                        <div class="p-8 px-6 mr-4 lg:px-2 lg:mt-14">
                            <h3 class="text-3xl font-extrabold mb-1">Sign in</h3>
                           
                            <span class="text-gray-500">Doesn't have an account yet? </span><a href="/register" class="text-green-800 font-bold hover:underline">Sign Up</a>
                            @error('login')
                            <div class="flex items-center mt-4 rounded bg-red-700 text-white text-md font-semibold px-4 py-3" role="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                </svg>
                                <p class="ml-2"> {{ $message }}.</p>
                            </div>
                            @enderror()
                            <form action="" method="POST" class="mt-4">
                                @method('PUT')
                                @csrf
                                <div class="relative z-0 w-full mb-5">
                                    <input type="email" name="email" placeholder=" " value="{{ old('email') }}"class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-green-800 border-gray-500" />
                                    <label for="email" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Email Address</label>
                                    @error('email')
                                        <p class="pt-1 text-red-700 font-semibold">{{ $message }}</p>
                                    @enderror()
                                </div>
                                <div class="relative z-0 w-full mb-5" x-data="{ show: true }">
                                    <input :type="show ? 'password' : 'text'" name="password" placeholder=" " class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-green-800 border-gray-500" />
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5 @error('password')-top-5 @enderror">
                                        <svg class="h-5 text-gray-700" fill="none" @click="show = !show" :class="{'hidden': !show, 'block':show }" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512">
                                            <path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                          </path>
                                        </svg>
                                        <svg class="h-5 text-gray-700" fill="none" @click="show = !show" :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 640 512">
                                          <path fill="currentColor" d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z"></path>
                                        </svg>
                                      </div>
                                    <label for="password" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Password</label>
                                    @error('password')
                                        <p class="pt-1 text-red-700 font-semibold">{{ $message }}</p>
                                    @enderror()
                                </div>
                                <div class="relative z-0 w-full mb-5">
                                    <button type="submit" class="bg-green-800 text-white p-3 w-full font-bold hover:dark:bg-green-900">Login</button>
                                </div>
                                <a href="/forgot" class="content-end text-green-800 hover:underline">Forgot Password ?</a>
                                <div class="mt-15 text-justify text-gray-600">
                                    <p>By using this service, you understand and agree to the <strong>{{ $title }}</strong> 
                                        <a href="#terms" class="text-green-800 hover:underline">Services Terms of Use</a> and 
                                        <a href="#privacy" class="text-green-800 hover:underline">Privacy Statement</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
    @include('partials.footer')