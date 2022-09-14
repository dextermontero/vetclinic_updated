<nav class="sticky top-0 bg-white h-25 uppercase shadow-lg" id="navbar">
        <div class="flex flex-wrap justify-between items-center lg:p-2 z-50">
            <a href="/" class="">
                <div class="inline-flex items-center ml-5 mt-1 lg:pr-5 lg:ml-14">
                    <img src="img/logo.png" class="h-16 w-16">
                    <span class="hidden lg:block ml-4 text-3xl font-bold">Vet Clinic</span>
                </div>
            </a>
            <div class="cursor-pointer p-5 items-center rounded lg:hidden hover:bg-green-700 transition duration-150" id="menuOptions">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path></svg>
            </div>
            <div class="hidden w-full h-auto mt-0 font-bold rounded lg:block lg:mt-0 lg:w-auto" id="menuLists">
                <x-items></x-items>
            </div>
        </div>
    </nav>