<nav class="bg-gray-200 dark:bg-gray-900 shadow">
    <div class="flex justify-between items-center gap-4 px-5 h-16">
        <div class="flex items-center gap-4">
            <div class="font-bold text-blue-600 dark:text-blue-500 text-2xl">
                <img src="/../public/images/logo/Php_light.svg" class="dark:hidden" alt="logo" width="50" height="50">
                <img src="/../public/images/logo/Php_dark.svg" class="hidden dark:block" alt="logo" width="50" height="50">
                <span class="lg:hidden text-red-500 dark:text-red-400 text-xs italic text-nowrap">Hotline: 0987654321</span>
            </div>
            <div class="hidden lg:flex items-center gap-4">
                <ul class="flex gap-4 font-bold text-blue-600 dark:text-blue-500 text-lg text-nowrap">
                    <li data-lang="vi" class="hover:text-blue-700 dark:hover:text-blue-600"> <a href="">Danh mục sản phẩm</a></li>
                    <li data-lang="en" class="hidden hover:text-blue-700 dark:hover:text-blue-600"><a href="">Product category</a></li>
                    <li data-lang="vi" class="hover:text-blue-700 dark:hover:text-blue-600"> <a href="">Sản phẩm nổi bật</a></li>
                    <li data-lang="en" class="hidden hover:text-blue-700 dark:hover:text-blue-600"><a href="">Highlighted</a></li>
                    <li data-lang="vi" class="hover:text-blue-700 dark:hover:text-blue-600"> <a href="">Mức giá ưu đãi</a></li>
                    <li data-lang="en" class="hidden hover:text-blue-700 dark:hover:text-blue-600"><a href="">Hot deals</a></li>
                </ul>
            </div>
        </div>

        <!-- * search -->
        <form
            action=""
            class="hidden sm:flex bg-gray-100 dark:bg-gray-800 shadow border-2 border-blue-600 rounded-xl text-md">
            <button
                aria-disabled="true"
                class="place-content-center grid w-10 text-blue-500 cursor-pointer">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <path d="m21 21-4.3-4.3"></path>
                </svg>
            </button>
            <input
                type="text"
                spellcheck="false"
                name="search"
                class="py-1.5 outline-none w-20 focus:w-48 dark:placeholder:text-gray-300 dark:text-gray-300 placeholder:text-black transition-all"
                placeholder="Search..." />
            <button
                class="place-content-center grid w-10 text-blue-500 cursor-pointer"
                aria-label="Clear input button"
                type="reset">
                <svg
                    stroke-linejoin="round"
                    stroke-linecap="round"
                    stroke-width="2"
                    stroke="currentColor"
                    fill="none"
                    viewBox="0 0 24 24"
                    height="25"
                    width="25"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
            </button>
        </form>

        <div class="flex items-center text-gray-900 dark:text-gray-200">
            <!-- * hamburger -->
            <button class="sm:hidden block cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                </svg>
            </button>

            <ul class="hidden sm:flex items-center gap-4">
                <!-- cart -->
                <li class="relative">
                    <a href="">
                        <svg class="transition-all duration-300 ease-in-out" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                        </svg>
                    </a>
                    <span class="-top-1.5 -right-1.5 absolute flex justify-center items-center bg-red-500 rounded-full ring-2 ring-gray-200 w-4 h-4 text-white text-xs select-none">
                        0
                    </span>
                </li>
                <!-- dark light mode -->
                <li id="toggle-theme" class="active:scale-95 transition-all duration-300 cursor-pointer">
                    <svg class="dark:hidden block" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" id="sun" viewBox="0 0 16 16">
                        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6m0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708" />
                    </svg>
                    <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" id="moon" viewBox="0 0 16 16">
                        <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278M4.858 1.311A7.27 7.27 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.32 7.32 0 0 0 5.205-2.162q-.506.063-1.029.063c-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286" />
                        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.73 1.73 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.73 1.73 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.73 1.73 0 0 0 1.097-1.097zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z" />
                    </svg>
                </li>
                <!-- lang -->
                <li id="toggle-lang" class="relative">
                    <button class="flex focus:text-blue-600 dark:focus:text-blue-500 hover:scale-102 active:scale-95 transition-all duration-300 ease-in-out cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855q-.215.403-.395.872c.705.157 1.472.257 2.282.287zM4.249 3.539q.214-.577.481-1.078a7 7 0 0 1 .597-.933A7 7 0 0 0 3.051 3.05q.544.277 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9 9 0 0 1-1.565-.667A6.96 6.96 0 0 0 1.018 7.5zm1.4-2.741a12.3 12.3 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332M8.5 5.09V7.5h2.99a12.3 12.3 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.6 13.6 0 0 1 7.5 10.91V8.5zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741zm-3.282 3.696q.18.469.395.872c.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a7 7 0 0 1-.598-.933 9 9 0 0 1-.481-1.079 8.4 8.4 0 0 0-1.198.49 7 7 0 0 0 2.276 1.522zm-1.383-2.964A13.4 13.4 0 0 1 3.508 8.5h-2.49a6.96 6.96 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667m6.728 2.964a7 7 0 0 0 2.275-1.521 8.4 8.4 0 0 0-1.197-.49 9 9 0 0 1-.481 1.078 7 7 0 0 1-.597.933M8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855q.216-.403.395-.872A12.6 12.6 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.96 6.96 0 0 0 14.982 8.5h-2.49a13.4 13.4 0 0 1-.437 3.008M14.982 7.5a6.96 6.96 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008zM11.27 2.461q.266.502.482 1.078a8.4 8.4 0 0 0 1.196-.49 7 7 0 0 0-2.275-1.52c.218.283.418.597.597.932m-.488 1.343a8 8 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z" />
                        </svg>
                    </button>

                    <ul id="dropdown-lang" class="hidden top-10 right-0 z-50 absolute space-y-1 bg-white dark:bg-gray-700 shadow-lg p-1 rounded-lg w-fit font-bold text-black dark:text-gray-200">
                        <li data-lang="vi" class="hover:bg-gray-100 dark:hover:bg-gray-600 px-4 py-2 rounded-md text-nowrap">Vietnamese</li>
                        <li data-lang="en" class="hover:bg-gray-100 dark:hover:bg-gray-600 px-4 py-2 rounded-md text-nowrap">English</li>
                    </ul>
                </li>
                <!-- login -->
                <li class="relative">
                    <button id="login-icon" class="flex focus:text-blue-600 dark:focus:text-blue-500 hover:scale-102 active:scale-95 transition-all duration-300 ease-in-out cursor-pointer">
                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <ul
                        id="login-link"
                        class="hidden top-10 right-0 z-50 absolute space-y-1 bg-white dark:bg-gray-700 shadow-lg p-1 rounded-lg w-fit font-bold text-black dark:text-gray-200">
                        <li>
                            <a href="/../app/Views/login.php" class="block hover:bg-gray-100 dark:hover:bg-gray-600 px-4 py-2 rounded-md">Login</a>
                        </li>
                        <li>
                            <button class="hover:bg-red-100 dark:hover:bg-red-500 px-4 py-2 rounded-md text-red-500 hover:dark:text-red-100 hover:text-red-600 dark:text-red-400">Logout</button>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>