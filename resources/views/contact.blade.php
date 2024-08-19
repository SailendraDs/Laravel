    @extends('layouts.master')
    @section('title')
        Contact
    @endsection
    @section('css')
        <!-- Icon Css -->
        <link rel="stylesheet" href="{{ URL::asset('build/css/remixicon.css') }}" />
    @endsection
    @section('content')
        <x-breadcrumb title="Contact" pagetitle="Apps" />

        <!-- Start All Card -->
        <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <div class="flex items-center gap-2 mb-4">
                        <div>
                            <img src="{{ URL::asset('build/images/avatar-1.png') }}" class="w-12 h-12 rounded-full" alt="">
                        </div>
                        <div>
                            <p class="font-bold text-base mb-1.5 dark:text-white">Fernando Scarbrough</p>
                            <p class="flex items-center gap-1 text-muted dark:text-darkmuted">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                                    <path fill="currentColor"
                                        d="M17.6177 5.9681L19.0711 4.51472L20.4853 5.92893L19.0319 7.38231C20.2635 8.92199 21 10.875 21 13C21 17.9706 16.9706 22 12 22C7.02944 22 3 17.9706 3 13C3 8.02944 7.02944 4 12 4C14.125 4 16.078 4.73647 17.6177 5.9681ZM12 20C15.866 20 19 16.866 19 13C19 9.13401 15.866 6 12 6C8.13401 6 5 9.13401 5 13C5 16.866 8.13401 20 12 20ZM11 8H13V14H11V8ZM8 1H16V3H8V1Z">
                                    </path>
                                </svg>
                                Today at 09:30 AM
                            </p>
                        </div>
                    </div>
                    <p class="flex items-center gap-1 text-muted dark:text-darkmuted">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                            <path fill="currentColor"
                                d="M21 3C21.5523 3 22 3.44772 22 4V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V19H20V7.3L12 14.5L2 5.5V4C2 3.44772 2.44772 3 3 3H21ZM8 15V17H0V15H8ZM5 10V12H0V10H5ZM19.5659 5H4.43414L12 11.8093L19.5659 5Z">
                            </path>
                        </svg>
                        Fernand@armyspy.com
                    </p>
                    <p class="text-muted flex items-center gap-1 mt-2.5 dark:text-darkmuted">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                            <path fill="currentColor"
                                d="M9.36556 10.6821C10.302 12.3288 11.6712 13.698 13.3179 14.6344L14.2024 13.3961C14.4965 12.9845 15.0516 12.8573 15.4956 13.0998C16.9024 13.8683 18.4571 14.3353 20.0789 14.4637C20.599 14.5049 21 14.9389 21 15.4606V19.9234C21 20.4361 20.6122 20.8657 20.1022 20.9181C19.5723 20.9726 19.0377 21 18.5 21C9.93959 21 3 14.0604 3 5.5C3 4.96227 3.02742 4.42771 3.08189 3.89776C3.1343 3.38775 3.56394 3 4.07665 3H8.53942C9.0611 3 9.49513 3.40104 9.5363 3.92109C9.66467 5.54288 10.1317 7.09764 10.9002 8.50444C11.1427 8.9484 11.0155 9.50354 10.6039 9.79757L9.36556 10.6821ZM6.84425 10.0252L8.7442 8.66809C8.20547 7.50514 7.83628 6.27183 7.64727 5H5.00907C5.00303 5.16632 5 5.333 5 5.5C5 12.9558 11.0442 19 18.5 19C18.667 19 18.8337 18.997 19 18.9909V16.3527C17.7282 16.1637 16.4949 15.7945 15.3319 15.2558L13.9748 17.1558C13.4258 16.9425 12.8956 16.6915 12.3874 16.4061L12.3293 16.373C10.3697 15.2587 8.74134 13.6303 7.627 11.6707L7.59394 11.6126C7.30849 11.1044 7.05754 10.5742 6.84425 10.0252Z">
                            </path>
                        </svg>
                        770-940-8851
                    </p>
                    <div class="flex items-center gap-4 mt-4">
                        <a href="{{ url('profile') }}"
                            class="btn inline-block py-1 px-3.5 text-[13px] bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">Profile</a>
                        <a href="{{ url('chat') }}"
                            class="btn inline-block py-1 px-3.5 text-[13px] dark:text-white dark:hover:text-black border border-light rounded-md text-black transition-all duration-300 hover:bg-light hover:text-black">Chat</a>
                    </div>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <div class="flex items-center gap-2 mb-4">
                        <div>
                            <img src="{{ URL::asset('build/images/avatar-2.png') }}" class="w-12 h-12 rounded-full" alt="">
                        </div>
                        <div>
                            <p class="font-bold text-base mb-1.5 dark:text-white">Robert Vansickle</p>
                            <p class="flex items-center gap-1 text-muted dark:text-darkmuted">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                                    <path fill="currentColor"
                                        d="M17.6177 5.9681L19.0711 4.51472L20.4853 5.92893L19.0319 7.38231C20.2635 8.92199 21 10.875 21 13C21 17.9706 16.9706 22 12 22C7.02944 22 3 17.9706 3 13C3 8.02944 7.02944 4 12 4C14.125 4 16.078 4.73647 17.6177 5.9681ZM12 20C15.866 20 19 16.866 19 13C19 9.13401 15.866 6 12 6C8.13401 6 5 9.13401 5 13C5 16.866 8.13401 20 12 20ZM11 8H13V14H11V8ZM8 1H16V3H8V1Z">
                                    </path>
                                </svg>
                                Today at 04:30 AM
                            </p>
                        </div>
                    </div>
                    <p class="flex items-center gap-1 text-muted dark:text-darkmuted">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                            <path fill="currentColor"
                                d="M21 3C21.5523 3 22 3.44772 22 4V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V19H20V7.3L12 14.5L2 5.5V4C2 3.44772 2.44772 3 3 3H21ZM8 15V17H0V15H8ZM5 10V12H0V10H5ZM19.5659 5H4.43414L12 11.8093L19.5659 5Z">
                            </path>
                        </svg>
                        Vansickle@armyspy.com
                    </p>
                    <p class="text-muted flex items-center gap-1 mt-2.5 dark:text-darkmuted">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                            <path fill="currentColor"
                                d="M9.36556 10.6821C10.302 12.3288 11.6712 13.698 13.3179 14.6344L14.2024 13.3961C14.4965 12.9845 15.0516 12.8573 15.4956 13.0998C16.9024 13.8683 18.4571 14.3353 20.0789 14.4637C20.599 14.5049 21 14.9389 21 15.4606V19.9234C21 20.4361 20.6122 20.8657 20.1022 20.9181C19.5723 20.9726 19.0377 21 18.5 21C9.93959 21 3 14.0604 3 5.5C3 4.96227 3.02742 4.42771 3.08189 3.89776C3.1343 3.38775 3.56394 3 4.07665 3H8.53942C9.0611 3 9.49513 3.40104 9.5363 3.92109C9.66467 5.54288 10.1317 7.09764 10.9002 8.50444C11.1427 8.9484 11.0155 9.50354 10.6039 9.79757L9.36556 10.6821ZM6.84425 10.0252L8.7442 8.66809C8.20547 7.50514 7.83628 6.27183 7.64727 5H5.00907C5.00303 5.16632 5 5.333 5 5.5C5 12.9558 11.0442 19 18.5 19C18.667 19 18.8337 18.997 19 18.9909V16.3527C17.7282 16.1637 16.4949 15.7945 15.3319 15.2558L13.9748 17.1558C13.4258 16.9425 12.8956 16.6915 12.3874 16.4061L12.3293 16.373C10.3697 15.2587 8.74134 13.6303 7.627 11.6707L7.59394 11.6126C7.30849 11.1044 7.05754 10.5742 6.84425 10.0252Z">
                            </path>
                        </svg>
                        770-789-8851
                    </p>
                    <div class="flex items-center gap-4 mt-4">
                        <a href="{{ url('profile') }}"
                            class="btn inline-block py-1 px-3.5 text-[13px] bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">Profile</a>
                        <a href="{{ url('chat') }}"
                            class="btn inline-block py-1 px-3.5 text-[13px] dark:text-white dark:hover:text-black border border-light rounded-md text-black transition-all duration-300 hover:bg-light hover:text-black">Chat</a>
                    </div>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <div class="flex items-center gap-2 mb-4">
                        <div>
                            <img src="{{ URL::asset('build/images/avatar-3.png') }}" class="w-12 h-12 rounded-full" alt="">
                        </div>
                        <div>
                            <p class="font-bold text-base mb-1.5 dark:text-white">Eliseo Patterson</p>
                            <p class="flex items-center gap-1 text-muted dark:text-darkmuted">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                                    <path fill="currentColor"
                                        d="M17.6177 5.9681L19.0711 4.51472L20.4853 5.92893L19.0319 7.38231C20.2635 8.92199 21 10.875 21 13C21 17.9706 16.9706 22 12 22C7.02944 22 3 17.9706 3 13C3 8.02944 7.02944 4 12 4C14.125 4 16.078 4.73647 17.6177 5.9681ZM12 20C15.866 20 19 16.866 19 13C19 9.13401 15.866 6 12 6C8.13401 6 5 9.13401 5 13C5 16.866 8.13401 20 12 20ZM11 8H13V14H11V8ZM8 1H16V3H8V1Z">
                                    </path>
                                </svg>
                                Today at 05:48 AM
                            </p>
                        </div>
                    </div>
                    <p class="flex items-center gap-1 text-muted dark:text-darkmuted">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                            <path fill="currentColor"
                                d="M21 3C21.5523 3 22 3.44772 22 4V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V19H20V7.3L12 14.5L2 5.5V4C2 3.44772 2.44772 3 3 3H21ZM8 15V17H0V15H8ZM5 10V12H0V10H5ZM19.5659 5H4.43414L12 11.8093L19.5659 5Z">
                            </path>
                        </svg>
                        Patterson@armyspy.com
                    </p>
                    <p class="text-muted flex items-center gap-1 mt-2.5 dark:text-darkmuted">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                            <path fill="currentColor"
                                d="M9.36556 10.6821C10.302 12.3288 11.6712 13.698 13.3179 14.6344L14.2024 13.3961C14.4965 12.9845 15.0516 12.8573 15.4956 13.0998C16.9024 13.8683 18.4571 14.3353 20.0789 14.4637C20.599 14.5049 21 14.9389 21 15.4606V19.9234C21 20.4361 20.6122 20.8657 20.1022 20.9181C19.5723 20.9726 19.0377 21 18.5 21C9.93959 21 3 14.0604 3 5.5C3 4.96227 3.02742 4.42771 3.08189 3.89776C3.1343 3.38775 3.56394 3 4.07665 3H8.53942C9.0611 3 9.49513 3.40104 9.5363 3.92109C9.66467 5.54288 10.1317 7.09764 10.9002 8.50444C11.1427 8.9484 11.0155 9.50354 10.6039 9.79757L9.36556 10.6821ZM6.84425 10.0252L8.7442 8.66809C8.20547 7.50514 7.83628 6.27183 7.64727 5H5.00907C5.00303 5.16632 5 5.333 5 5.5C5 12.9558 11.0442 19 18.5 19C18.667 19 18.8337 18.997 19 18.9909V16.3527C17.7282 16.1637 16.4949 15.7945 15.3319 15.2558L13.9748 17.1558C13.4258 16.9425 12.8956 16.6915 12.3874 16.4061L12.3293 16.373C10.3697 15.2587 8.74134 13.6303 7.627 11.6707L7.59394 11.6126C7.30849 11.1044 7.05754 10.5742 6.84425 10.0252Z">
                            </path>
                        </svg>
                        897-940-8851
                    </p>
                    <div class="flex items-center gap-4 mt-4">
                        <a href="{{ url('profile') }}"
                            class="btn inline-block py-1 px-3.5 text-[13px] bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">Profile</a>
                        <a href="{{ url('chat') }}"
                            class="btn inline-block py-1 px-3.5 text-[13px] dark:text-white dark:hover:text-black border border-light rounded-md text-black transition-all duration-300 hover:bg-light hover:text-black">Chat</a>
                    </div>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <div class="flex items-center gap-2 mb-4">
                        <div>
                            <img src="{{ URL::asset('build/images/avatar-4.png') }}" class="w-12 h-12 rounded-full" alt="">
                        </div>
                        <div>
                            <p class="font-bold text-base mb-1.5 dark:text-white">Roger Epling</p>
                            <p class="flex items-center gap-1 text-muted dark:text-darkmuted">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                                    <path fill="currentColor"
                                        d="M17.6177 5.9681L19.0711 4.51472L20.4853 5.92893L19.0319 7.38231C20.2635 8.92199 21 10.875 21 13C21 17.9706 16.9706 22 12 22C7.02944 22 3 17.9706 3 13C3 8.02944 7.02944 4 12 4C14.125 4 16.078 4.73647 17.6177 5.9681ZM12 20C15.866 20 19 16.866 19 13C19 9.13401 15.866 6 12 6C8.13401 6 5 9.13401 5 13C5 16.866 8.13401 20 12 20ZM11 8H13V14H11V8ZM8 1H16V3H8V1Z">
                                    </path>
                                </svg>
                                Today at 07:38 AM
                            </p>
                        </div>
                    </div>
                    <p class="flex items-center gap-1 text-muted dark:text-darkmuted">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                            <path fill="currentColor"
                                d="M21 3C21.5523 3 22 3.44772 22 4V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V19H20V7.3L12 14.5L2 5.5V4C2 3.44772 2.44772 3 3 3H21ZM8 15V17H0V15H8ZM5 10V12H0V10H5ZM19.5659 5H4.43414L12 11.8093L19.5659 5Z">
                            </path>
                        </svg>
                        Roger@armyspy.com
                    </p>
                    <p class="text-muted flex items-center gap-1 mt-2.5 dark:text-darkmuted">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                            <path fill="currentColor"
                                d="M9.36556 10.6821C10.302 12.3288 11.6712 13.698 13.3179 14.6344L14.2024 13.3961C14.4965 12.9845 15.0516 12.8573 15.4956 13.0998C16.9024 13.8683 18.4571 14.3353 20.0789 14.4637C20.599 14.5049 21 14.9389 21 15.4606V19.9234C21 20.4361 20.6122 20.8657 20.1022 20.9181C19.5723 20.9726 19.0377 21 18.5 21C9.93959 21 3 14.0604 3 5.5C3 4.96227 3.02742 4.42771 3.08189 3.89776C3.1343 3.38775 3.56394 3 4.07665 3H8.53942C9.0611 3 9.49513 3.40104 9.5363 3.92109C9.66467 5.54288 10.1317 7.09764 10.9002 8.50444C11.1427 8.9484 11.0155 9.50354 10.6039 9.79757L9.36556 10.6821ZM6.84425 10.0252L8.7442 8.66809C8.20547 7.50514 7.83628 6.27183 7.64727 5H5.00907C5.00303 5.16632 5 5.333 5 5.5C5 12.9558 11.0442 19 18.5 19C18.667 19 18.8337 18.997 19 18.9909V16.3527C17.7282 16.1637 16.4949 15.7945 15.3319 15.2558L13.9748 17.1558C13.4258 16.9425 12.8956 16.6915 12.3874 16.4061L12.3293 16.373C10.3697 15.2587 8.74134 13.6303 7.627 11.6707L7.59394 11.6126C7.30849 11.1044 7.05754 10.5742 6.84425 10.0252Z">
                            </path>
                        </svg>
                        159-940-8851
                    </p>
                    <div class="flex items-center gap-4 mt-4">
                        <a href="{{ url('profile') }}"
                            class="btn inline-block py-1 px-3.5 text-[13px] bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">Profile</a>
                        <a href="{{ url('chat') }}"
                            class="btn inline-block py-1 px-3.5 text-[13px] dark:text-white dark:hover:text-black border border-light rounded-md text-black transition-all duration-300 hover:bg-light hover:text-black">Chat</a>
                    </div>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <div class="flex items-center gap-2 mb-4">
                        <div>
                            <img src="{{ URL::asset('build/images/avatar-5.png') }}" class="w-12 h-12 rounded-full" alt="">
                        </div>
                        <div>
                            <p class="font-bold text-base mb-1.5 dark:text-white">Tommy Mendez</p>
                            <p class="flex items-center gap-1 text-muted dark:text-darkmuted">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                                    <path fill="currentColor"
                                        d="M17.6177 5.9681L19.0711 4.51472L20.4853 5.92893L19.0319 7.38231C20.2635 8.92199 21 10.875 21 13C21 17.9706 16.9706 22 12 22C7.02944 22 3 17.9706 3 13C3 8.02944 7.02944 4 12 4C14.125 4 16.078 4.73647 17.6177 5.9681ZM12 20C15.866 20 19 16.866 19 13C19 9.13401 15.866 6 12 6C8.13401 6 5 9.13401 5 13C5 16.866 8.13401 20 12 20ZM11 8H13V14H11V8ZM8 1H16V3H8V1Z">
                                    </path>
                                </svg>
                                Today at 09:30 PM
                            </p>
                        </div>
                    </div>
                    <p class="flex items-center gap-1 text-muted dark:text-darkmuted">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                            <path fill="currentColor"
                                d="M21 3C21.5523 3 22 3.44772 22 4V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V19H20V7.3L12 14.5L2 5.5V4C2 3.44772 2.44772 3 3 3H21ZM8 15V17H0V15H8ZM5 10V12H0V10H5ZM19.5659 5H4.43414L12 11.8093L19.5659 5Z">
                            </path>
                        </svg>
                        Mendez@armyspy.com
                    </p>
                    <p class="text-muted flex items-center gap-1 mt-2.5 dark:text-darkmuted">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                            <path fill="currentColor"
                                d="M9.36556 10.6821C10.302 12.3288 11.6712 13.698 13.3179 14.6344L14.2024 13.3961C14.4965 12.9845 15.0516 12.8573 15.4956 13.0998C16.9024 13.8683 18.4571 14.3353 20.0789 14.4637C20.599 14.5049 21 14.9389 21 15.4606V19.9234C21 20.4361 20.6122 20.8657 20.1022 20.9181C19.5723 20.9726 19.0377 21 18.5 21C9.93959 21 3 14.0604 3 5.5C3 4.96227 3.02742 4.42771 3.08189 3.89776C3.1343 3.38775 3.56394 3 4.07665 3H8.53942C9.0611 3 9.49513 3.40104 9.5363 3.92109C9.66467 5.54288 10.1317 7.09764 10.9002 8.50444C11.1427 8.9484 11.0155 9.50354 10.6039 9.79757L9.36556 10.6821ZM6.84425 10.0252L8.7442 8.66809C8.20547 7.50514 7.83628 6.27183 7.64727 5H5.00907C5.00303 5.16632 5 5.333 5 5.5C5 12.9558 11.0442 19 18.5 19C18.667 19 18.8337 18.997 19 18.9909V16.3527C17.7282 16.1637 16.4949 15.7945 15.3319 15.2558L13.9748 17.1558C13.4258 16.9425 12.8956 16.6915 12.3874 16.4061L12.3293 16.373C10.3697 15.2587 8.74134 13.6303 7.627 11.6707L7.59394 11.6126C7.30849 11.1044 7.05754 10.5742 6.84425 10.0252Z">
                            </path>
                        </svg>
                        456-940-8851
                    </p>
                    <div class="flex items-center gap-4 mt-4">
                        <a href="{{ url('profile') }}"
                            class="btn inline-block py-1 px-3.5 text-[13px] bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">Profile</a>
                        <a href="{{ url('chat') }}"
                            class="btn inline-block py-1 px-3.5 text-[13px] dark:text-white dark:hover:text-black border border-light rounded-md text-black transition-all duration-300 hover:bg-light hover:text-black">Chat</a>
                    </div>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <div class="flex items-center gap-2 mb-4">
                        <div>
                            <img src="{{ URL::asset('build/images/avatar-6.png') }}" class="w-12 h-12 rounded-full" alt="">
                        </div>
                        <div>
                            <p class="font-bold text-base mb-1.5 dark:text-white">Marty Brassfield</p>
                            <p class="flex items-center gap-1 text-muted dark:text-darkmuted">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                                    <path fill="currentColor"
                                        d="M17.6177 5.9681L19.0711 4.51472L20.4853 5.92893L19.0319 7.38231C20.2635 8.92199 21 10.875 21 13C21 17.9706 16.9706 22 12 22C7.02944 22 3 17.9706 3 13C3 8.02944 7.02944 4 12 4C14.125 4 16.078 4.73647 17.6177 5.9681ZM12 20C15.866 20 19 16.866 19 13C19 9.13401 15.866 6 12 6C8.13401 6 5 9.13401 5 13C5 16.866 8.13401 20 12 20ZM11 8H13V14H11V8ZM8 1H16V3H8V1Z">
                                    </path>
                                </svg>
                                Today at 11:38 AM
                            </p>
                        </div>
                    </div>
                    <p class="flex items-center gap-1 text-muted dark:text-darkmuted">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                            <path fill="currentColor"
                                d="M21 3C21.5523 3 22 3.44772 22 4V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V19H20V7.3L12 14.5L2 5.5V4C2 3.44772 2.44772 3 3 3H21ZM8 15V17H0V15H8ZM5 10V12H0V10H5ZM19.5659 5H4.43414L12 11.8093L19.5659 5Z">
                            </path>
                        </svg>
                        Brassfield@armyspy.com
                    </p>
                    <p class="text-muted flex items-center gap-1 mt-2.5 dark:text-darkmuted">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                            <path fill="currentColor"
                                d="M9.36556 10.6821C10.302 12.3288 11.6712 13.698 13.3179 14.6344L14.2024 13.3961C14.4965 12.9845 15.0516 12.8573 15.4956 13.0998C16.9024 13.8683 18.4571 14.3353 20.0789 14.4637C20.599 14.5049 21 14.9389 21 15.4606V19.9234C21 20.4361 20.6122 20.8657 20.1022 20.9181C19.5723 20.9726 19.0377 21 18.5 21C9.93959 21 3 14.0604 3 5.5C3 4.96227 3.02742 4.42771 3.08189 3.89776C3.1343 3.38775 3.56394 3 4.07665 3H8.53942C9.0611 3 9.49513 3.40104 9.5363 3.92109C9.66467 5.54288 10.1317 7.09764 10.9002 8.50444C11.1427 8.9484 11.0155 9.50354 10.6039 9.79757L9.36556 10.6821ZM6.84425 10.0252L8.7442 8.66809C8.20547 7.50514 7.83628 6.27183 7.64727 5H5.00907C5.00303 5.16632 5 5.333 5 5.5C5 12.9558 11.0442 19 18.5 19C18.667 19 18.8337 18.997 19 18.9909V16.3527C17.7282 16.1637 16.4949 15.7945 15.3319 15.2558L13.9748 17.1558C13.4258 16.9425 12.8956 16.6915 12.3874 16.4061L12.3293 16.373C10.3697 15.2587 8.74134 13.6303 7.627 11.6707L7.59394 11.6126C7.30849 11.1044 7.05754 10.5742 6.84425 10.0252Z">
                            </path>
                        </svg>
                        265-940-8851
                    </p>
                    <div class="flex items-center gap-4 mt-4">
                        <a href="{{ url('profile') }}"
                            class="btn inline-block py-1 px-3.5 text-[13px] bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">Profile</a>
                        <a href="{{ url('chat') }}"
                            class="btn inline-block py-1 px-3.5 text-[13px] dark:text-white dark:hover:text-black border border-light rounded-md text-black transition-all duration-300 hover:bg-light hover:text-black">Chat</a>
                    </div>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <div class="flex items-center gap-2 mb-4">
                        <div>
                            <img src="{{ URL::asset('build/images/avatar-7.png') }}" class="w-12 h-12 rounded-full" alt="">
                        </div>
                        <div>
                            <p class="font-bold text-base mb-1.5 dark:text-white">Pamela Williams</p>
                            <p class="flex items-center gap-1 text-muted dark:text-darkmuted">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                                    <path fill="currentColor"
                                        d="M17.6177 5.9681L19.0711 4.51472L20.4853 5.92893L19.0319 7.38231C20.2635 8.92199 21 10.875 21 13C21 17.9706 16.9706 22 12 22C7.02944 22 3 17.9706 3 13C3 8.02944 7.02944 4 12 4C14.125 4 16.078 4.73647 17.6177 5.9681ZM12 20C15.866 20 19 16.866 19 13C19 9.13401 15.866 6 12 6C8.13401 6 5 9.13401 5 13C5 16.866 8.13401 20 12 20ZM11 8H13V14H11V8ZM8 1H16V3H8V1Z">
                                    </path>
                                </svg>
                                Today at 7:00 PM
                            </p>
                        </div>
                    </div>
                    <p class="flex items-center gap-1 text-muted dark:text-darkmuted">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                            <path fill="currentColor"
                                d="M21 3C21.5523 3 22 3.44772 22 4V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V19H20V7.3L12 14.5L2 5.5V4C2 3.44772 2.44772 3 3 3H21ZM8 15V17H0V15H8ZM5 10V12H0V10H5ZM19.5659 5H4.43414L12 11.8093L19.5659 5Z">
                            </path>
                        </svg>
                        Williams@armyspy.com
                    </p>
                    <p class="text-muted flex items-center gap-1 mt-2.5 dark:text-darkmuted">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                            <path fill="currentColor"
                                d="M9.36556 10.6821C10.302 12.3288 11.6712 13.698 13.3179 14.6344L14.2024 13.3961C14.4965 12.9845 15.0516 12.8573 15.4956 13.0998C16.9024 13.8683 18.4571 14.3353 20.0789 14.4637C20.599 14.5049 21 14.9389 21 15.4606V19.9234C21 20.4361 20.6122 20.8657 20.1022 20.9181C19.5723 20.9726 19.0377 21 18.5 21C9.93959 21 3 14.0604 3 5.5C3 4.96227 3.02742 4.42771 3.08189 3.89776C3.1343 3.38775 3.56394 3 4.07665 3H8.53942C9.0611 3 9.49513 3.40104 9.5363 3.92109C9.66467 5.54288 10.1317 7.09764 10.9002 8.50444C11.1427 8.9484 11.0155 9.50354 10.6039 9.79757L9.36556 10.6821ZM6.84425 10.0252L8.7442 8.66809C8.20547 7.50514 7.83628 6.27183 7.64727 5H5.00907C5.00303 5.16632 5 5.333 5 5.5C5 12.9558 11.0442 19 18.5 19C18.667 19 18.8337 18.997 19 18.9909V16.3527C17.7282 16.1637 16.4949 15.7945 15.3319 15.2558L13.9748 17.1558C13.4258 16.9425 12.8956 16.6915 12.3874 16.4061L12.3293 16.373C10.3697 15.2587 8.74134 13.6303 7.627 11.6707L7.59394 11.6126C7.30849 11.1044 7.05754 10.5742 6.84425 10.0252Z">
                            </path>
                        </svg>
                        278-940-8851
                    </p>
                    <div class="flex items-center gap-4 mt-4">
                        <a href="{{ url('profile') }}"
                            class="btn inline-block py-1 px-3.5 text-[13px] bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">Profile</a>
                        <a href="{{ url('chat') }}"
                            class="btn inline-block py-1 px-3.5 text-[13px] dark:text-white dark:hover:text-black border border-light rounded-md text-black transition-all duration-300 hover:bg-light hover:text-black">Chat</a>
                    </div>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <div class="flex items-center gap-2 mb-4">
                        <div>
                            <img src="{{ URL::asset('build/images/avatar-8.png') }}" class="w-12 h-12 rounded-full" alt="">
                        </div>
                        <div>
                            <p class="font-bold text-base mb-1.5 dark:text-white">Thomas Perry</p>
                            <p class="flex items-center gap-1 text-muted dark:text-darkmuted">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                                    <path fill="currentColor"
                                        d="M17.6177 5.9681L19.0711 4.51472L20.4853 5.92893L19.0319 7.38231C20.2635 8.92199 21 10.875 21 13C21 17.9706 16.9706 22 12 22C7.02944 22 3 17.9706 3 13C3 8.02944 7.02944 4 12 4C14.125 4 16.078 4.73647 17.6177 5.9681ZM12 20C15.866 20 19 16.866 19 13C19 9.13401 15.866 6 12 6C8.13401 6 5 9.13401 5 13C5 16.866 8.13401 20 12 20ZM11 8H13V14H11V8ZM8 1H16V3H8V1Z">
                                    </path>
                                </svg>
                                Today at 1:30 AM
                            </p>
                        </div>
                    </div>
                    <p class="flex items-center gap-1 text-muted dark:text-darkmuted">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                            <path fill="currentColor"
                                d="M21 3C21.5523 3 22 3.44772 22 4V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V19H20V7.3L12 14.5L2 5.5V4C2 3.44772 2.44772 3 3 3H21ZM8 15V17H0V15H8ZM5 10V12H0V10H5ZM19.5659 5H4.43414L12 11.8093L19.5659 5Z">
                            </path>
                        </svg>
                        Perry@armyspy.com
                    </p>
                    <p class="text-muted flex items-center gap-1 mt-2.5 dark:text-darkmuted">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                            <path fill="currentColor"
                                d="M9.36556 10.6821C10.302 12.3288 11.6712 13.698 13.3179 14.6344L14.2024 13.3961C14.4965 12.9845 15.0516 12.8573 15.4956 13.0998C16.9024 13.8683 18.4571 14.3353 20.0789 14.4637C20.599 14.5049 21 14.9389 21 15.4606V19.9234C21 20.4361 20.6122 20.8657 20.1022 20.9181C19.5723 20.9726 19.0377 21 18.5 21C9.93959 21 3 14.0604 3 5.5C3 4.96227 3.02742 4.42771 3.08189 3.89776C3.1343 3.38775 3.56394 3 4.07665 3H8.53942C9.0611 3 9.49513 3.40104 9.5363 3.92109C9.66467 5.54288 10.1317 7.09764 10.9002 8.50444C11.1427 8.9484 11.0155 9.50354 10.6039 9.79757L9.36556 10.6821ZM6.84425 10.0252L8.7442 8.66809C8.20547 7.50514 7.83628 6.27183 7.64727 5H5.00907C5.00303 5.16632 5 5.333 5 5.5C5 12.9558 11.0442 19 18.5 19C18.667 19 18.8337 18.997 19 18.9909V16.3527C17.7282 16.1637 16.4949 15.7945 15.3319 15.2558L13.9748 17.1558C13.4258 16.9425 12.8956 16.6915 12.3874 16.4061L12.3293 16.373C10.3697 15.2587 8.74134 13.6303 7.627 11.6707L7.59394 11.6126C7.30849 11.1044 7.05754 10.5742 6.84425 10.0252Z">
                            </path>
                        </svg>
                        985-940-8851
                    </p>
                    <div class="flex items-center gap-4 mt-4">
                        <a href="{{ url('profile') }}"
                            class="btn inline-block py-1 px-3.5 text-[13px] bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">Profile</a>
                        <a href="{{ url('chat') }}"
                            class="btn inline-block py-1 px-3.5 text-[13px] dark:text-white dark:hover:text-black border border-light rounded-md text-black transition-all duration-300 hover:bg-light hover:text-black">Chat</a>
                    </div>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <div class="flex items-center gap-2 mb-4">
                        <div>
                            <img src="{{ URL::asset('build/images/avatar-9.png') }}" class="w-12 h-12 rounded-full" alt="">
                        </div>
                        <div>
                            <p class="font-bold text-base mb-1.5 dark:text-white">James Alverez</p>
                            <p class="flex items-center gap-1 text-muted dark:text-darkmuted">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                                    <path fill="currentColor"
                                        d="M17.6177 5.9681L19.0711 4.51472L20.4853 5.92893L19.0319 7.38231C20.2635 8.92199 21 10.875 21 13C21 17.9706 16.9706 22 12 22C7.02944 22 3 17.9706 3 13C3 8.02944 7.02944 4 12 4C14.125 4 16.078 4.73647 17.6177 5.9681ZM12 20C15.866 20 19 16.866 19 13C19 9.13401 15.866 6 12 6C8.13401 6 5 9.13401 5 13C5 16.866 8.13401 20 12 20ZM11 8H13V14H11V8ZM8 1H16V3H8V1Z">
                                    </path>
                                </svg>
                                Today at 2:30 AM
                            </p>
                        </div>
                    </div>
                    <p class="flex items-center gap-1 text-muted dark:text-darkmuted">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                            <path fill="currentColor"
                                d="M21 3C21.5523 3 22 3.44772 22 4V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V19H20V7.3L12 14.5L2 5.5V4C2 3.44772 2.44772 3 3 3H21ZM8 15V17H0V15H8ZM5 10V12H0V10H5ZM19.5659 5H4.43414L12 11.8093L19.5659 5Z">
                            </path>
                        </svg>
                        Alverez@armyspy.com
                    </p>
                    <p class="text-muted flex items-center gap-1 mt-2.5 dark:text-darkmuted">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                            <path fill="currentColor"
                                d="M9.36556 10.6821C10.302 12.3288 11.6712 13.698 13.3179 14.6344L14.2024 13.3961C14.4965 12.9845 15.0516 12.8573 15.4956 13.0998C16.9024 13.8683 18.4571 14.3353 20.0789 14.4637C20.599 14.5049 21 14.9389 21 15.4606V19.9234C21 20.4361 20.6122 20.8657 20.1022 20.9181C19.5723 20.9726 19.0377 21 18.5 21C9.93959 21 3 14.0604 3 5.5C3 4.96227 3.02742 4.42771 3.08189 3.89776C3.1343 3.38775 3.56394 3 4.07665 3H8.53942C9.0611 3 9.49513 3.40104 9.5363 3.92109C9.66467 5.54288 10.1317 7.09764 10.9002 8.50444C11.1427 8.9484 11.0155 9.50354 10.6039 9.79757L9.36556 10.6821ZM6.84425 10.0252L8.7442 8.66809C8.20547 7.50514 7.83628 6.27183 7.64727 5H5.00907C5.00303 5.16632 5 5.333 5 5.5C5 12.9558 11.0442 19 18.5 19C18.667 19 18.8337 18.997 19 18.9909V16.3527C17.7282 16.1637 16.4949 15.7945 15.3319 15.2558L13.9748 17.1558C13.4258 16.9425 12.8956 16.6915 12.3874 16.4061L12.3293 16.373C10.3697 15.2587 8.74134 13.6303 7.627 11.6707L7.59394 11.6126C7.30849 11.1044 7.05754 10.5742 6.84425 10.0252Z">
                            </path>
                        </svg>
                        123-940-8851
                    </p>
                    <div class="flex items-center gap-4 mt-4">
                        <a href="{{ url('profile') }}"
                            class="btn inline-block py-1 px-3.5 text-[13px] bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">Profile</a>
                        <a href="{{ url('chat') }}"
                            class="btn inline-block py-1 px-3.5 text-[13px] dark:text-white dark:hover:text-black border border-light rounded-md text-black transition-all duration-300 hover:bg-light hover:text-black">Chat</a>
                    </div>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <div class="flex items-center gap-2 mb-4">
                        <div>
                            <img src="{{ URL::asset('build/images/avatar-11.png') }}" class="w-12 h-12 rounded-full" alt="">
                        </div>
                        <div>
                            <p class="font-bold text-base mb-1.5 dark:text-white">Adrienne M. Graham</p>
                            <p class="flex items-center gap-1 text-muted dark:text-darkmuted">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                                    <path fill="currentColor"
                                        d="M17.6177 5.9681L19.0711 4.51472L20.4853 5.92893L19.0319 7.38231C20.2635 8.92199 21 10.875 21 13C21 17.9706 16.9706 22 12 22C7.02944 22 3 17.9706 3 13C3 8.02944 7.02944 4 12 4C14.125 4 16.078 4.73647 17.6177 5.9681ZM12 20C15.866 20 19 16.866 19 13C19 9.13401 15.866 6 12 6C8.13401 6 5 9.13401 5 13C5 16.866 8.13401 20 12 20ZM11 8H13V14H11V8ZM8 1H16V3H8V1Z">
                                    </path>
                                </svg>
                                Today at 8:30 AM
                            </p>
                        </div>
                    </div>
                    <p class="flex items-center gap-1 text-muted dark:text-darkmuted">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                            <path fill="currentColor"
                                d="M21 3C21.5523 3 22 3.44772 22 4V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V19H20V7.3L12 14.5L2 5.5V4C2 3.44772 2.44772 3 3 3H21ZM8 15V17H0V15H8ZM5 10V12H0V10H5ZM19.5659 5H4.43414L12 11.8093L19.5659 5Z">
                            </path>
                        </svg>
                        Graham@armyspy.com
                    </p>
                    <p class="text-muted flex items-center gap-1 mt-2.5 dark:text-darkmuted">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                            <path fill="currentColor"
                                d="M9.36556 10.6821C10.302 12.3288 11.6712 13.698 13.3179 14.6344L14.2024 13.3961C14.4965 12.9845 15.0516 12.8573 15.4956 13.0998C16.9024 13.8683 18.4571 14.3353 20.0789 14.4637C20.599 14.5049 21 14.9389 21 15.4606V19.9234C21 20.4361 20.6122 20.8657 20.1022 20.9181C19.5723 20.9726 19.0377 21 18.5 21C9.93959 21 3 14.0604 3 5.5C3 4.96227 3.02742 4.42771 3.08189 3.89776C3.1343 3.38775 3.56394 3 4.07665 3H8.53942C9.0611 3 9.49513 3.40104 9.5363 3.92109C9.66467 5.54288 10.1317 7.09764 10.9002 8.50444C11.1427 8.9484 11.0155 9.50354 10.6039 9.79757L9.36556 10.6821ZM6.84425 10.0252L8.7442 8.66809C8.20547 7.50514 7.83628 6.27183 7.64727 5H5.00907C5.00303 5.16632 5 5.333 5 5.5C5 12.9558 11.0442 19 18.5 19C18.667 19 18.8337 18.997 19 18.9909V16.3527C17.7282 16.1637 16.4949 15.7945 15.3319 15.2558L13.9748 17.1558C13.4258 16.9425 12.8956 16.6915 12.3874 16.4061L12.3293 16.373C10.3697 15.2587 8.74134 13.6303 7.627 11.6707L7.59394 11.6126C7.30849 11.1044 7.05754 10.5742 6.84425 10.0252Z">
                            </path>
                        </svg>
                        654-940-8851
                    </p>
                    <div class="flex items-center gap-4 mt-4">
                        <a href="{{ url('profile') }}"
                            class="btn inline-block py-1 px-3.5 text-[13px] bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">Profile</a>
                        <a href="{{ url('chat') }}"
                            class="btn inline-block py-1 px-3.5 text-[13px] dark:text-white dark:hover:text-black border border-light rounded-md text-black transition-all duration-300 hover:bg-light hover:text-black">Chat</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End All Card -->
    @endsection
