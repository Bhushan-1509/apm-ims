<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Managment - Dashboard</title>
    <!--TailwindCSS-->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!--custom CSS-->
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>
<!--Body wrapper-->
<div class="bg-white min-h-screen overflow-y-scroll overflow-x-hidden block relative w-full h-full">

    <!--Side Navigation-->
    <div class="overflow-y-scroll fixed top-0 bottom-0 left-0 h-full min-h-screen w-72 bg-white px-6 py-3 shadow-sm hidden lg:block z-50" id="sidenav">
        <div class="relative">
            <div class="absolute top-2 right-0 text-lg text-gray-500 cursor-pointer block lg:hidden" id="closeNav">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
        </div>

        <div class="h-16 items-center pl-4">
            <div class=" mt-1 logo_area text-xl font-bold uppercase text-gray-600 flex items-center justify-start">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                </svg>
                <span class="ml-2">inventory</span>
            </div>
        </div>



        <div id="sidenav_menu_wrap">
            <ul class="pl-0 m-0 list-none" id="sidenav_menu">
                <li>
                    <a href="#" class="capitalize flex items-center justify-start py-4 pl-4 text-lg rounded-xl hover:bg-green-500 hover:text-white transition text-green-500 font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                        <span class="ml-2">dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="capitalize flex items-center justify-start py-4 pl-4 text-lg rounded-xl hover:bg-green-500 hover:text-white transition text-gray-500 font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                        <span class="ml-2">inventory</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="capitalize flex items-center justify-start py-4 pl-4 text-lg rounded-xl hover:bg-green-500 hover:text-white transition text-gray-500 font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                        <span class="ml-2">purchase</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="capitalize flex items-center justify-start py-4 pl-4 text-lg rounded-xl hover:bg-green-500 hover:text-white transition text-gray-500 font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                        </svg>
                        <span class="ml-2">suppliers return</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="capitalize flex items-center justify-start py-4 pl-4 text-lg rounded-xl hover:bg-green-500 hover:text-white transition text-gray-500 font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <span class="ml-2">invoice</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="capitalize flex items-center justify-start py-4 pl-4 text-lg rounded-xl hover:bg-green-500 hover:text-white transition text-gray-500 font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="ml-2">sales</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="capitalize flex items-center justify-start py-4 pl-4 text-lg rounded-xl hover:bg-green-500 hover:text-white transition text-gray-500 font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="ml-2">bill</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="capitalize flex items-center justify-start py-4 pl-4 text-lg rounded-xl hover:bg-green-500 hover:text-white transition text-gray-500 font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="ml-2">customers</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="capitalize flex items-center justify-start py-4 pl-4 text-lg rounded-xl hover:bg-green-500 hover:text-white transition text-gray-500 font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <span class="ml-2">suppliers</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!--/Side Navigation-->


    <!--Navbar-->
    <div class="flex fixed top-0 left-0 items-center justify-between w-full h-16  px-8 py-0 shadow-sm lg:pl-72 z-30 bg-white" id="navbar">
        <div id="searchbar" class="flex items-center justify-items-start h-10 lg:ml-16 md:ml-8">
            <div class="relative text-sm text-gray-400 ml-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="hidden md:block w-6 absolute top-2 left-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input type="text" placeholder="Search anything" class="hidden md:block outline-none pl-10 h-10 w-72 pb-1 rounded-xl bg-white text-gray-400" />
            </div>

        </div>
        <span class="absolute top-5 lg:left-80 md:left-8 cursor-pointer text-gray-600 block lg:hidden" id="sideBtn">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
              </svg>
            </span>

        <div id="navbtns" class="flex items-center justify-end ml-0">
            <a href="#" class="relative text-xl text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
                <span class="absolute w-3 h-3 rounded-full bg-red-400 top-0 right-0"></span>
            </a>

            <div class="text-xl text-gray-600 ml-2 md:ml-8 relative">
                <div class="cursor-pointer flex items-center justify-between gap-1"  id="usr_btn">
                    <div class="img  relative">
                        <img src="https://ui-avatars.com/api/?name=Mahabub" class="w-10 h-10 object-cover rounded-full" />
                        <span class="absolute w-2 h-2 rounded-full bg-green-400 bottom-1 right-1 animate-ping"></span>
                        <span class="absolute w-2 h-2 rounded-full bg-green-400 bottom-1 right-1"></span>
                    </div>

                    <p class="text-sm hidden md:block">Md. Mahabub</p>
                    <span class="flex items-center justify-center">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden md:block" viewBox="0 0 20 20" fill="currentColor">
                                 <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                             </svg>
                         </span>
                </div>

                <!--dropdown menu of user-->
                <div id="usr_menu" class="hidden absolute top-full z-90 rounded-lg shadow-lg w-48 right-0 mt-2">
                    <p class="px-4 py-2 text-xs text-gray-400">Manage Account</p>
                    <div class="border borer-t border-gray-200"></div>
                    <a href="#" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-blue-400 hover:text-white transition">Profile</a>
                    <div class="border borer-t border-gray-200"></div>
                    <a href="#" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-blue-400 hover:text-white transition">Logout</a>
                </div>
                <!--/dropdown menu of user-->
            </div>

            <a href="#" class="relative text-xl text-gray-600 ml-2 md:ml-8">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <!-- <span class="absolute w-2 h-2 rounded-full bg-red-400 top-1 right-1"></span> -->
            </a>
        </div>
    </div>
    <!--/Navbar-->

    <!--page content-->
    <div class="absolute top-20 pr-8 left-0 lg:left-80 z-0 px-4 h-full w-full md:w-4/5">
        <!--overview-->
        <div class="flex flex-col lg:flex-row lg:justify-between gap-2 w-full">
            <div class="w-full lg:w-1/2 mt-5 lg:pl-0 mb-20 lg:mb-0">
                <div class="flex items-center justify-between w-full cursor-pointer">
                    <h3 class="capitalize text-2xl font-semibold block text-gray-600">sales overview</h3>
                    <span class="text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </span>
                </div>
                <div class="grid grid-cols-1 grid-rows-1 lg:grid-cols-2 lg:grid-rows-2 mt-8 gap-y-5 lg:gap-x-10">
                    <div class="group flex flex-col md:flex-row items-center justify-between gap-1 shadow-xl px-4 py-2 rounded-xl bg-white hover:bg-green-500 transition cursor-pointer hover:text-white">
                            <span class="text-green-300 group-hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 md:w-16 md:h-16 lg:h-20 lg:w-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                </svg>
                            </span>
                        <div class="flex flex-col gap-2 items-start mr-auto ml-2 lg:mr-0">
                            <p class="capitalize text-gray-400 group-hover:text-white text-lg">total sales</p>
                            <p class="text-gray-800 font-bold text-2xl  lg:text-3xl group-hover:text-white">786</p>
                        </div>
                    </div>

                    <div class="group flex flex-col md:flex-row items-center justify-between gap-1 shadow-xl px-4 py-2 rounded-xl bg-white hover:bg-green-500 transition cursor-pointer hover:text-white">
                            <span class="text-yellow-300 group-hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 md:w-16 md:h-16 lg:h-20 lg:w-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </span>
                        <div class="flex flex-col gap-2 items-start mr-auto ml-2 lg:mr-0">
                            <p class="capitalize text-gray-400 group-hover:text-white text-lg">revenue</p>
                            <p class="text-gray-800 font-bold text-2xl  lg:text-3xl group-hover:text-white">17584</p>
                        </div>
                    </div>

                    <div class="group flex flex-col md:flex-row items-center justify-between gap-1 shadow-xl px-4 py-2 rounded-xl bg-white hover:bg-green-500 transition cursor-pointer hover:text-white">
                            <span class="text-indigo-300 group-hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 md:w-16 md:h-16 lg:h-20 lg:w-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </span>
                        <div class="flex flex-col gap-2 items-start mr-auto ml-2 lg:mr-0">
                            <p class="capitalize text-gray-400 group-hover:text-white text-lg">cost</p>
                            <p class="text-gray-800 font-bold text-2xl  lg:text-3xl group-hover:text-white">12468</p>
                        </div>
                    </div>

                    <div class="group flex flex-col md:flex-row items-center justify-between gap-1 shadow-xl px-4 py-2 rounded-xl bg-white hover:bg-green-500 transition cursor-pointer hover:text-white">
                            <span class="text-pink-300 group-hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 md:w-16 md:h-16 lg:h-20 lg:w-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                                </svg>
                            </span>
                        <div class="flex flex-col gap-2 items-start mr-auto ml-2 lg:mr-0">
                            <p class="capitalize text-gray-400 group-hover:text-white text-lg">profit</p>
                            <p class="text-gray-800 font-bold text-2xl  lg:text-3xl group-hover:text-white">5116</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="w-full lg:w-1/2 mt-5 lg:pl-0 mb-20 lg:mb-0">
                <div class="flex items-center justify-between w-full cursor-pointer">
                    <h3 class="capitalize text-2xl font-semibold text-gray-600">purchase overview</h3>
                    <span class="text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </span>
                </div>
                <div class="grid grid-cols-1 grid-rows-1 lg:grid-cols-2 lg:grid-rows-2 mt-8 gap-y-5 lg:gap-x-10">
                    <div class="group flex flex-col md:flex-row items-center justify-between gap-1 shadow-xl px-4 py-2 rounded-xl bg-white hover:bg-green-500 transition cursor-pointer hover:text-white">
                            <span class="text-blue-300 group-hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 md:w-16 md:h-16 lg:h-20 lg:w-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                            </span>
                        <div class="flex flex-col gap-2 items-start mr-auto ml-2 lg:mr-0">
                            <p class="capitalize text-gray-400 group-hover:text-white text-md xl:text-lg">no of purchase</p>
                            <p class="text-gray-800 font-bold text-2xl  lg:text-3xl group-hover:text-white">45</p>
                        </div>
                    </div>

                    <div class="group flex flex-col md:flex-row items-center justify-between gap-1 shadow-xl px-4 py-2 rounded-xl bg-white hover:bg-green-500 transition cursor-pointer hover:text-white">
                            <span class="text-red-300 group-hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 md:w-16 md:h-16 lg:h-20 lg:w-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </span>
                        <div class="flex flex-col gap-2 items-start mr-auto ml-2 lg:mr-0">
                            <p class="capitalize text-gray-400 group-hover:text-white text-md xl:text-lg">canceled orders</p>
                            <p class="text-gray-800 font-bold text-2xl  lg:text-3xl group-hover:text-white">04</p>
                        </div>
                    </div>

                    <div class="group flex flex-col md:flex-row items-center justify-between gap-1 shadow-xl px-4 py-2 rounded-xl bg-white hover:bg-green-500 transition cursor-pointer hover:text-white">
                            <span class="text-indigo-300 group-hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 md:w-16 md:h-16 lg:h-20 lg:w-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </span>
                        <div class="flex flex-col gap-2 items-start mr-auto ml-2 lg:mr-0">
                            <p class="capitalize text-gray-400 group-hover:text-white text-md xl:text-lg">cost</p>
                            <p class="text-gray-800 font-bold text-2xl  lg:text-3xl group-hover:text-white">786</p>
                        </div>
                    </div>

                    <div class="group flex flex-col md:flex-row items-center justify-between gap-1 shadow-xl px-4 py-2 rounded-xl bg-white hover:bg-green-500 transition cursor-pointer hover:text-white">
                            <span class="text-yellow-300 group-hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 md:w-16 md:h-16 lg:h-20 lg:w-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                                </svg>
                            </span>
                        <div class="flex flex-col gap-2 items-start mr-auto ml-2 lg:mr-0">
                            <p class="capitalize text-gray-400 group-hover:text-white text-lg">returns</p>
                            <p class="text-gray-800 font-bold text-2xl  lg:text-3xl group-hover:text-white">07</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/overview-->
    </div>
    <!--/page content-->

</div>
<!--/Body wrapper-->


<!--Scripts-->
<script src="./assets/js/app.js"></script>
</body>
</html>
