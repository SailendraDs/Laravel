@extends('layouts.master')
@section('title')
    Input Group
@endsection
@section('css')
    <!-- Icon Css -->
    <link rel="stylesheet" href="{{ URL::asset('build/css/remixicon.css') }}" />
@endsection
@section('content')
    <x-breadcrumb title="Input Group" pagetitle="Forms" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Input Group</h2>
                <form class="space-y-4">
                    <label class="flex">
                        <div
                            class="flex items-center ltr:border-r-0 rtl:border-l-0 justify-center ltr:rounded-l rtl:rounded-r bg-[#f9fbfd] dark:bg-white/5 border border-black/10 px-3.5">
                            <span class="text-base">@</span>
                        </div>
                        <input class="ltr:rounded-r rtl:rounded-l ltr:rounded-l-none rtl:rounded-r-none form-input"
                            placeholder="Username" type="text" />
                    </label>
                    <label class="flex">
                        <input class="ltr:rounded-r-none rtl:rounded-l-none form-input" placeholder="Username"
                            type="text" />
                        <div
                            class="flex items-center justify-center ltr:rounded-r rtl:rounded-l border-l-0 border bg-[#f9fbfd] dark:bg-white/5 border-black/10 px-3.5">
                            <span class="text-base">@site.com</span>
                        </div>
                    </label>
                    <label class="flex">
                        <div
                            class="flex items-center justify-center ltr:rounded-l rtl:rounded-r ltr:border-r-0 rtl:border-l-0 bg-[#f9fbfd] dark:bg-white/5 border border-black/10 px-3.5">
                            <span class="text-base">$</span>
                        </div>
                        <input class="rounded-none form-input" placeholder="Enter Price" type="text" />
                        <div
                            class="flex items-center justify-center ltr:border-l-0 rtl:border-r-0 ltr:rounded-r rtl:rounded-l bg-[#f9fbfd] dark:bg-white/5 border border-black/10 px-3.5">
                            <span class="text-base">.00</span>
                        </div>
                    </label>
                </form>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Other Input</h2>
                <form class="space-y-4">
                    <div class="flex">
                        <input class="ltr:rounded-r-none rtl:rounded-l-none form-input" placeholder="Username"
                            type="text" />
                        <div
                            class="flex items-center justify-center border-x-0 border border-black/10 bg-[#f9fbfd] dark:bg-white/5 px-3.5 text-black">
                            <span class="text-base">@</span>
                        </div>
                        <input class="ltr:rounded-l-none rtl:rounded-r-none form-input" placeholder="Server"
                            type="text" />
                    </div>
                    <div class="flex">
                        <select class="w-16 rounded-l-full form-select">
                            <option>$</option>
                            <option>£</option>
                            <option>€</option>
                        </select>
                        <input class="rounded-none ltr:border-r-0 rtl:border-l-0 form-input" placeholder="Price"
                            type="text" />
                        <button
                            class="btn bg-purple border border-purple ltr:rounded-l-none rtl:rounded-r-none ltr:rounded-r-full rtl:rounded-l-full text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">
                            Purchase
                        </button>
                    </div>
                    <div class="flex">
                        <input class="ltr:rounded-r-none rtl:rounded-l-none ltr:border-r-0 rtl:border-l-0 form-input"
                            placeholder="Search..." type="text" />
                        <button
                            class="btn bg-purple border border-purple ltr:rounded-l-none rtl:rounded-r-none ltr:rounded-r rtl:rounded-l text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">
                            Search
                        </button>
                    </div>
                </form>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Icon Input</h2>
                <form class="space-y-4">
                    <div class="flex">
                        <div
                            class="flex items-center justify-center px-3 text-white border ltr:rounded-l rtl:rounded-r ltr:border-r-0 rtl:border-l-0 bg-purple border-purple">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                viewBox="0 0 256 256">
                                <path
                                    d="M168,224a8,8,0,0,1-8,8H96a8,8,0,1,1,0-16h64A8,8,0,0,1,168,224Zm53.85-32A15.8,15.8,0,0,1,208,200H48a16,16,0,0,1-13.8-24.06C39.75,166.38,48,139.34,48,104a80,80,0,1,1,160,0c0,35.33,8.26,62.38,13.81,71.94A15.89,15.89,0,0,1,221.84,192ZM208,184c-7.73-13.27-16-43.95-16-80a64,64,0,1,0-128,0c0,36.06-8.28,66.74-16,80Z">
                                </path>
                            </svg>
                        </div>
                        <input type="text" placeholder="Notification"
                            class="ltr:rounded-l-none rtl:rounded-r-none ltr:border-l-0 rtl:border-r-0 form-input" />
                    </div>
                    <div class="flex">
                        <input type="text" placeholder="Notification"
                            class="ltr:border-r-0 rtl:border-l-0 ltr:rounded-r-none rtl:rounded-l-none form-input" />
                        <div
                            class="flex items-center justify-center px-3 text-white border ltr:rounded-r rtl:rounded-l ltr:border-r-0 rtl:border-l-0 bg-purple border-purple">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                viewBox="0 0 256 256">
                                <path
                                    d="M168,224a8,8,0,0,1-8,8H96a8,8,0,1,1,0-16h64A8,8,0,0,1,168,224Zm53.85-32A15.8,15.8,0,0,1,208,200H48a16,16,0,0,1-13.8-24.06C39.75,166.38,48,139.34,48,104a80,80,0,1,1,160,0c0,35.33,8.26,62.38,13.81,71.94A15.89,15.89,0,0,1,221.84,192ZM208,184c-7.73-13.27-16-43.95-16-80a64,64,0,1,0-128,0c0,36.06-8.28,66.74-16,80Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </form>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Button addons</h2>
                <form class="space-y-4">
                    <div class="flex">
                        <button
                            class="btn bg-purple border border-purple ltr:rounded-r-none rtl:rounded-l-none ltr:rounded-l rtl:rounded-r text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">
                            Button
                        </button>
                        <input type="text" placeholder="Username"
                            class="ltr:rounded-l-none rtl:rounded-r-none ltr:border-l-0 rtl:border-r-0 form-input" />
                    </div>
                    <div class="flex">
                        <input type="text" placeholder="Username"
                            class="ltr:border-r-0 rtl:border-l-0 ltr:rounded-r-none rtl:rounded-l-none form-input" />
                        <button
                            class="btn bg-purple border border-purple ltr:rounded-l-none rtl:rounded-r-none ltr:rounded-r rtl:rounded-l text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">
                            Button
                        </button>
                    </div>
                </form>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Input Group Sizes</h2>
                <form class="space-y-4">
                    <label class="flex">
                        <div
                            class="flex items-center ltr:border-r-0 rtl:border-l-0 justify-center ltr:rounded-l rtl:rounded-r bg-[#f9fbfd] border dark:bg-white/5 border-black/10 px-3.5">
                            <span class="text-base">@</span>
                        </div>
                        <input class="ltr:rounded-r rtl:rounded-l ltr:rounded-l-none rtl:rounded-r-none form-input h-14"
                            placeholder="Username" type="text">
                    </label>
                    <label class="flex">
                        <div
                            class="flex items-center ltr:border-r-0 rtl:border-l-0 justify-center ltr:rounded-l rtl:rounded-r bg-[#f9fbfd] border dark:bg-white/5 border-black/10 px-3.5">
                            <span class="text-base">@</span>
                        </div>
                        <input class="ltr:rounded-l-none rtl:rounded-r-none ltr:rounded-r rtl:rounded-l form-input"
                            placeholder="Username" type="text">
                    </label>
                    <label class="flex">
                        <div
                            class="flex items-center ltr:border-r-0 rtl:border-l-0 justify-center ltr:rounded-l rtl:rounded-r bg-[#f9fbfd] border dark:bg-white/5 border-black/10 px-3.5">
                            <span class="text-base">@</span>
                        </div>
                        <input class="h-10 ltr:rounded-r rtl:rounded-l ltr:rounded-l-none rtl:rounded-r-none form-input"
                            placeholder="Username" type="text">
                    </label>
                </form>
            </div>
        </div>
    </div>
    <!-- End All Card -->
@endsection
