
<ul class="lg:flex lg:justify-end">
                    <li class="{{ (request()->is('')) ? 'border-b-4 border-green-800' : '' }}">
                        <a href="/" class="block p-5 rounded-t-lg hover:bg-green-700 hover:text-gray-50 lg:hover:border-green-700 lg:hover:text-white transition duration-300">
                            HOME
                        </a>
                    </li>
                    <li class="{{ (request()->is('about')) ? 'border-b-4 border-green-800' : '' }}">
                        <a href="/about"  class="block p-5 rounded-t-lg hover:bg-green-700 hover:text-gray-50 lg:hover:border-green-700 lg:hover:text-white transition duration-300">
                            ABOUT
                        </a>
                    </li>
                    <li class="{{ (request()->is('services')) ? 'border-b-4 border-green-800' : '' }}">
                        <a href="/services"  class="block p-5 rounded-t-lg hover:bg-green-700 hover:text-gray-50 lg:hover:border-green-700 lg:hover:text-white transition duration-300">
                            SERVICES
                        </a>
                    </li>
                    <li class="{{ (request()->is('blogs')) ? 'border-b-4 border-green-800' : '' }}">
                        <a href="/blogs"  class="block p-5 rounded-t-lg hover:bg-green-700 hover:text-gray-50 lg:hover:border-green-700 lg:hover:text-white transition duration-300">
                            BLOGS
                        </a>
                    </li>
                    <li>
                        <a href="/login"  class="block p-5 rounded-t-lg hover:bg-green-700 hover:text-gray-50 lg:hover:border-green-700 lg:hover:text-white transition duration-300">
                            LOGIN
                        </a>
                    </li>
                </ul>
