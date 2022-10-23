@include("partials.userpanel.components.header", [$title])
        <div class="bg-neutral-200 absolute lg:left-64 mt-4 ml-4 mr-4 w-fit">
            <div class="mb-5">
                <h3 class="font-bold text-3xl">Dashboard</h3>
            </div>
            <div class="mb-5 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 2xl:grid-cols-4 gap-0 sm:gap-4">
                <div class="bg-white p-4 mb-5 rounded shadow-sm max-w-full">
                    <div class="grid grid-cols-2 break-all items-center">
                        <div class="flex justify-center items-center ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                            </svg>
                        </div>
                        <div class="font-bold">
                            <p class="text-3xl">{{ number_format(100000000)}}</p>
                            <span class="text-gray-500 text-lg">Pets</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4 mb-5 rounded shadow-sm max-w-full">
                    <div class="grid grid-cols-2 break-all items-center">
                        <div class="flex justify-center items-center ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                            </svg>
                        </div>
                        <div class="font-bold">
                            <p class="text-3xl">{{ number_format(100000000)}}</p>
                            <span class="text-gray-500 text-lg">Pets</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4 mb-5 rounded shadow-sm max-w-full">
                    <div class="grid grid-cols-2 break-all items-center">
                        <div class="flex justify-center items-center ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                            </svg>
                        </div>
                        <div class="font-bold">
                            <p class="text-3xl">{{ number_format(100000000)}}</p>
                            <span class="text-gray-500 text-lg">Pets</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4 mb-5 rounded shadow-sm max-w-full">
                    <div class="grid grid-cols-2 break-all items-center">
                        <div class="flex justify-center items-center ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                            </svg>
                        </div>
                        <div class="font-bold">
                            <p class="text-3xl">{{ number_format(100000000)}}</p>
                            <span class="text-gray-500 text-lg">Pets</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <h3 class="font-bold text-xl">All Appointments</h3>
            </div>
            <div class="bg-white p-4 mb-5 rounded shadow-sm max-w-full">
                <table class="table-fixed w-full text-left p-2">
                    <thead class="border-b dark:border-gray-900">
                        <tr>
                            <th class="text-lg p-4 pr-4 px-3 py-2 font-extrabold">Date</th>
                            <th class="text-lg p-4 pr-4 px-3 py-2 font-extrabold">Service</th>
                            <th class="text-lg p-4 pr-4 px-3 py-2 font-extrabold">Time</th>
                            <th class="text-lg p-4 pr-4 px-3 py-2 font-extrabold">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-100">
                            <td class="text-md p-4 pr-4 px-3 py-2 font-semibold">May 05, 2021</td>
                            <td class="text-md p-4 pr-4 px-3 py-2 font-semibold">Spay & Neuter (Kapon)</td>
                            <td class="text-md p-4 pr-4 px-3 py-2 font-semibold">2:00 PM</td>
                            <td class="text-md p-4 pr-4 px-3 py-2 font-bold">Scheduled</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="text-md p-4 pr-4 px-3 py-2 font-semibold">May 05, 2021</td>
                            <td class="text-md p-4 pr-4 px-3 py-2 font-semibold">Spay & Neuter (Kapon)</td>
                            <td class="text-md p-4 pr-4 px-3 py-2 font-semibold">2:00 PM</td>
                            <td class="text-md p-4 pr-4 px-3 py-2 font-bold">Scheduled</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="text-md p-4 pr-4 px-3 py-2 font-semibold">May 05, 2021</td>
                            <td class="text-md p-4 pr-4 px-3 py-2 font-semibold">Spay & Neuter (Kapon)</td>
                            <td class="text-md p-4 pr-4 px-3 py-2 font-semibold">2:00 PM</td>
                            <td class="text-md p-4 pr-4 px-3 py-2 font-bold">Scheduled</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="text-md p-4 pr-4 px-3 py-2 font-semibold">May 05, 2021</td>
                            <td class="text-md p-4 pr-4 px-3 py-2 font-semibold">Spay & Neuter (Kapon)</td>
                            <td class="text-md p-4 pr-4 px-3 py-2 font-semibold">2:00 PM</td>
                            <td class="text-md p-4 pr-4 px-3 py-2 font-bold">Scheduled</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="text-md p-4 pr-4 px-3 py-2 font-semibold">May 05, 2021</td>
                            <td class="text-md p-4 pr-4 px-3 py-2 font-semibold">Spay & Neuter (Kapon)</td>
                            <td class="text-md p-4 pr-4 px-3 py-2 font-semibold">2:00 PM</td>
                            <td class="text-md p-4 pr-4 px-3 py-2 font-bold">Scheduled</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="text-md p-4 pr-4 px-3 py-2 font-semibold">May 05, 2021</td>
                            <td class="text-md p-4 pr-4 px-3 py-2 font-semibold">Spay & Neuter (Kapon)</td>
                            <td class="text-md p-4 pr-4 px-3 py-2 font-semibold">2:00 PM</td>
                            <td class="text-md p-4 pr-4 px-3 py-2 font-bold">Scheduled</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="text-md p-4 pr-4 px-3 py-2 font-semibold">May 05, 2021</td>
                            <td class="text-md p-4 pr-4 px-3 py-2 font-semibold">Spay & Neuter (Kapon)</td>
                            <td class="text-md p-4 pr-4 px-3 py-2 font-semibold">2:00 PM</td>
                            <td class="text-md p-4 pr-4 px-3 py-2 font-bold">Scheduled</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="text-md p-4 pr-4 px-3 py-2 font-semibold">May 05, 2021</td>
                            <td class="text-md p-4 pr-4 px-3 py-2 font-semibold">Spay & Neuter (Kapon)</td>
                            <td class="text-md p-4 pr-4 px-3 py-2 font-semibold">2:00 PM</td>
                            <td class="text-md p-4 pr-4 px-3 py-2 font-bold">Scheduled</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mb-5 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 2xl:grid-cols-2 gap-4 break-all">
                <div class="bg-white p-4 rounded shadow-sm max-w-full">
                    asdasdasdasd;lasdl;askd;lsakd;l;alksd;laskd;laskd;lask ;la;skld;askd;aslk;laksd;lsakd;lsakdl;sak;lkasdl;askdl;askd;laskd;laskd;laskd;laskd;lsakd;lsa
                </div>
                <div class="bg-white p-4 rounded shadow-sm max-w-full">
                </div>
            </div>
        </div>
@include("partials.userpanel.components.footer")

