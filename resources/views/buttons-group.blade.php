@extends('layouts.master')
@section('title')
Buttons Group
@endsection
@section('content')
    <x-breadcrumb title="Buttons Group" pagetitle="Elements" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Buttons Group</h2>
                <div class="inline-flex">
                    <button type="button"
                        class="btn border text-white bg-purple ltr:rounded-l-md rtl:rounded-r-md ltr:border-r-0 rtl:border-l-0 transition-all duration-300 bg-purple/[0.85] border-purple/[0.40]">Primary</button>
                    <button type="button"
                        class="btn border text-white border-purple bg-purple transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.40] focus:bg-purple/[0.85] focus:border-purple/[0.40]">Primary</button>
                    <button type="button"
                        class="btn border text-white border-purple bg-purple ltr:rounded-r-md rtl:rounded-l-md ltr:border-l-0 rtl:border-r-0 transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.40] focus:bg-purple/[0.85] focus:border-purple/[0.40]">Primary</button>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Buttons Group Outlined
                </h2>
                <div class="inline-flex">
                    <button type="button"
                        class="transition-all duration-300 border ltr:border-r-0 rtl:border-l-0 btn text-purple border-purple ltr:rounded-l-md rtl:rounded-r-md hover:bg-purple hover:text-white">Primary</button>
                    <button type="button"
                        class="transition-all duration-300 border btn text-purple border-purple hover:bg-purple hover:text-white">Primary</button>
                    <button type="button"
                        class="transition-all duration-300 border ltr:border-l-0 rtl:border-r-0 btn text-purple border-purple ltr:rounded-r-md rtl:rounded-l-md hover:bg-purple hover:text-white">Primary</button>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Buttons With Icons Group
                </h2>
                <div class="inline-flex">
                    <button type="button"
                        class="btn flex items-center gap-1.5 border text-white bg-purple ltr:rounded-l-md rtl:rounded-r-md ltr:border-r-0 rtl:border-l-0 transition-all duration-300 bg-purple/[0.85] border-purple/[0.40]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 mx-auto">
                            <path
                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM7 13H9C9 14.6569 10.3431 16 12 16C13.6569 16 15 14.6569 15 13H17C17 15.7614 14.7614 18 12 18C9.23858 18 7 15.7614 7 13ZM8 11C7.17157 11 6.5 10.3284 6.5 9.5C6.5 8.67157 7.17157 8 8 8C8.82843 8 9.5 8.67157 9.5 9.5C9.5 10.3284 8.82843 11 8 11ZM16 11C15.1716 11 14.5 10.3284 14.5 9.5C14.5 8.67157 15.1716 8 16 8C16.8284 8 17.5 8.67157 17.5 9.5C17.5 10.3284 16.8284 11 16 11Z"
                                fill="currentColor"></path>
                        </svg>
                        Primary
                    </button>
                    <button type="button"
                        class="btn flex items-center gap-1.5 border text-white border-purple bg-purple transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.40] focus:bg-purple/[0.85] focus:border-purple/[0.40]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 mx-auto">
                            <path
                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM7 13H9C9 14.6569 10.3431 16 12 16C13.6569 16 15 14.6569 15 13H17C17 15.7614 14.7614 18 12 18C9.23858 18 7 15.7614 7 13ZM8 11C7.17157 11 6.5 10.3284 6.5 9.5C6.5 8.67157 7.17157 8 8 8C8.82843 8 9.5 8.67157 9.5 9.5C9.5 10.3284 8.82843 11 8 11ZM16 11C15.1716 11 14.5 10.3284 14.5 9.5C14.5 8.67157 15.1716 8 16 8C16.8284 8 17.5 8.67157 17.5 9.5C17.5 10.3284 16.8284 11 16 11Z"
                                fill="currentColor"></path>
                        </svg>
                        Primary
                    </button>
                    <button type="button"
                        class="btn flex items-center gap-1.5 border text-white border-purple bg-purple ltr:rounded-r-md rtl:rounded-l-md ltr:border-l-0 rtl:border-r-0 transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.40] focus:bg-purple/[0.85] focus:border-purple/[0.40]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 mx-auto">
                            <path
                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM7 13H9C9 14.6569 10.3431 16 12 16C13.6569 16 15 14.6569 15 13H17C17 15.7614 14.7614 18 12 18C9.23858 18 7 15.7614 7 13ZM8 11C7.17157 11 6.5 10.3284 6.5 9.5C6.5 8.67157 7.17157 8 8 8C8.82843 8 9.5 8.67157 9.5 9.5C9.5 10.3284 8.82843 11 8 11ZM16 11C15.1716 11 14.5 10.3284 14.5 9.5C14.5 8.67157 15.1716 8 16 8C16.8284 8 17.5 8.67157 17.5 9.5C17.5 10.3284 16.8284 11 16 11Z"
                                fill="currentColor"></path>
                        </svg>
                        Primary
                    </button>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Buttons Outlined With
                    icons Group</h2>
                <div class="inline-flex">
                    <button type="button"
                        class="btn flex items-center gap-1.5 border text-purple border-purple ltr:rounded-l-md rtl:rounded-r-md ltr:border-r-0 rtl:border-l-0 transition-all duration-300 hover:bg-purple hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 mx-auto">
                            <path
                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM7 13H9C9 14.6569 10.3431 16 12 16C13.6569 16 15 14.6569 15 13H17C17 15.7614 14.7614 18 12 18C9.23858 18 7 15.7614 7 13ZM8 11C7.17157 11 6.5 10.3284 6.5 9.5C6.5 8.67157 7.17157 8 8 8C8.82843 8 9.5 8.67157 9.5 9.5C9.5 10.3284 8.82843 11 8 11ZM16 11C15.1716 11 14.5 10.3284 14.5 9.5C14.5 8.67157 15.1716 8 16 8C16.8284 8 17.5 8.67157 17.5 9.5C17.5 10.3284 16.8284 11 16 11Z"
                                fill="currentColor"></path>
                        </svg>
                        Primary
                    </button>
                    <button type="button"
                        class="btn flex items-center gap-1.5 border text-purple border-purple transition-all duration-300 hover:bg-purple hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 mx-auto">
                            <path
                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM7 13H9C9 14.6569 10.3431 16 12 16C13.6569 16 15 14.6569 15 13H17C17 15.7614 14.7614 18 12 18C9.23858 18 7 15.7614 7 13ZM8 11C7.17157 11 6.5 10.3284 6.5 9.5C6.5 8.67157 7.17157 8 8 8C8.82843 8 9.5 8.67157 9.5 9.5C9.5 10.3284 8.82843 11 8 11ZM16 11C15.1716 11 14.5 10.3284 14.5 9.5C14.5 8.67157 15.1716 8 16 8C16.8284 8 17.5 8.67157 17.5 9.5C17.5 10.3284 16.8284 11 16 11Z"
                                fill="currentColor"></path>
                        </svg>
                        Primary
                    </button>
                    <button type="button"
                        class="btn flex items-center gap-1.5 border text-purple border-purple ltr:rounded-r-md rtl:rounded-l-md ltr:border-l-0 rtl:border-r-0 transition-all duration-300 hover:bg-purple hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 mx-auto">
                            <path
                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM7 13H9C9 14.6569 10.3431 16 12 16C13.6569 16 15 14.6569 15 13H17C17 15.7614 14.7614 18 12 18C9.23858 18 7 15.7614 7 13ZM8 11C7.17157 11 6.5 10.3284 6.5 9.5C6.5 8.67157 7.17157 8 8 8C8.82843 8 9.5 8.67157 9.5 9.5C9.5 10.3284 8.82843 11 8 11ZM16 11C15.1716 11 14.5 10.3284 14.5 9.5C14.5 8.67157 15.1716 8 16 8C16.8284 8 17.5 8.67157 17.5 9.5C17.5 10.3284 16.8284 11 16 11Z"
                                fill="currentColor"></path>
                        </svg>
                        Primary
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Card -->
@endsection
