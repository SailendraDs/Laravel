@extends('layouts.master')
@section('title')
Pagination
@endsection
@section('content')
    <x-breadcrumb title="Pagination" pagetitle="Elements" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Pagination Default</h2>
                <div class="overflow-auto">
                    <div>
                        <ul class="inline-flex items-center gap-1 m-auto mb-4">
                            <li><button type="button"
                                    class="flex justify-center px-3.5 py-2 rounded transition text-muted hover:text-purple border border-black/10 hover:border-purple dark:border-darkborder dark:text-darkmuted dark:hover:text-purple dark:hover:border-purple">First</button>
                            </li>
                            <li><button type="button"
                                    class="flex justify-center px-3.5 py-2 rounded transition text-muted hover:text-purple border border-black/10 hover:border-purple dark:border-darkborder dark:text-darkmuted dark:hover:text-purple dark:hover:border-purple">Prev</button>
                            </li>
                            <li><button type="button"
                                    class="flex justify-center px-3.5 py-2 rounded transition text-muted hover:text-purple border border-black/10 hover:border-purple dark:border-darkborder dark:text-darkmuted dark:hover:text-purple dark:hover:border-purple">1</button>
                            </li>
                            <li><button type="button"
                                    class="flex justify-center px-3.5 py-2 rounded transition text-purple border border-purple">2</button>
                            </li>
                            <li><button type="button"
                                    class="flex justify-center px-3.5 py-2 rounded transition text-muted hover:text-purple border border-black/10 hover:border-purple dark:border-darkborder dark:text-darkmuted dark:hover:text-purple dark:hover:border-purple">3</button>
                            </li>
                            <li><button type="button"
                                    class="flex justify-center px-3.5 py-2 rounded transition text-muted hover:text-purple border border-black/10 hover:border-purple dark:border-darkborder dark:text-darkmuted dark:hover:text-purple dark:hover:border-purple">Next</button>
                            </li>
                            <li><button type="button"
                                    class="flex justify-center px-3.5 py-2 rounded transition text-muted hover:text-purple border border-black/10 hover:border-purple dark:border-darkborder dark:text-darkmuted dark:hover:text-purple dark:hover:border-purple">Last</button>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul class="inline-flex my-2 -space-x-px list-inside">
                            <li><a href="#"
                                    class="px-3 py-2 bg-white border cursor-not-allowed ltr:ml-0 rtl:mr-0 ltr:rounded-l-lg rtl:rounded-r-lg text-black/50 border-black/10 dark:bg-transparent dark:text-darkmuted dark:border-darkborder">Previous</a>
                            </li>
                            <li><a href="#"
                                    class="px-3 py-2 text-black bg-white border border-black/10 hover:bg-purple hover:text-white dark:bg-transparent dark:text-white dark:border-darkborder dark:hover:bg-purple dark:hover:text-white dark:hover:border-purple">1</a>
                            </li>
                            <li><a href="#"
                                    class="px-3 py-2 text-black bg-white border border-black/10 hover:bg-purple hover:text-white dark:bg-transparent dark:text-white dark:border-darkborder dark:hover:bg-purple dark:hover:text-white dark:hover:border-purple">2</a>
                            </li>
                            <li><a href="#" class="px-3 py-2 text-white border bg-purple border-black/10">3</a></li>
                            <li><a href="#"
                                    class="px-3 py-2 text-black bg-white border border-black/10 hover:bg-purple hover:text-white dark:bg-transparent dark:text-white dark:border-darkborder dark:hover:bg-purple dark:hover:text-white dark:hover:border-purple">4</a>
                            </li>
                            <li><a href="#"
                                    class="px-3 py-2 text-black bg-white border border-black/10 hover:bg-purple hover:text-white dark:bg-transparent dark:text-white dark:border-darkborder dark:hover:bg-purple dark:hover:text-white dark:hover:border-purple">5</a>
                            </li>
                            <li><a href="#"
                                    class="px-3 py-2 text-black bg-white border ltr:rounded-r-lg rtl:rounded-l-lg border-black/10 hover:bg-purple hover:text-white dark:bg-transparent dark:text-white dark:border-darkborder dark:hover:bg-purple dark:hover:text-white dark:hover:border-purple">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Pagination Solid</h2>
                <div class="overflow-auto">
                    <div>
                        <ul class="inline-flex items-center gap-1 m-auto mb-4">
                            <li><button type="button"
                                    class="flex justify-center px-3.5 py-2 rounded transition text-purple hover:text-white hover:bg-purple border border-purple/5 hover:border-purple bg-purple/10">First</button>
                            </li>
                            <li><button type="button"
                                    class="flex justify-center px-3.5 py-2 rounded transition text-purple hover:text-white hover:bg-purple border border-purple/5 hover:border-purple bg-purple/10">Prev</button>
                            </li>
                            <li><button type="button"
                                    class="flex justify-center px-3.5 py-2 rounded transition text-purple hover:text-white hover:bg-purple border border-purple/5 hover:border-purple bg-purple/10">1</button>
                            </li>
                            <li><button type="button"
                                    class="flex justify-center px-3.5 py-2 rounded transition text-white bg-purple border border-purple">2</button>
                            </li>
                            <li><button type="button"
                                    class="flex justify-center px-3.5 py-2 rounded transition text-purple hover:text-white hover:bg-purple border border-purple/5 hover:border-purple bg-purple/10">3</button>
                            </li>
                            <li><button type="button"
                                    class="flex justify-center px-3.5 py-2 rounded transition text-purple hover:text-white hover:bg-purple border border-purple/5 hover:border-purple bg-purple/10">Next</button>
                            </li>
                            <li><button type="button"
                                    class="flex justify-center px-3.5 py-2 rounded transition text-purple hover:text-white hover:bg-purple border border-purple/5 hover:border-purple bg-purple/10">Last</button>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul class="inline-flex my-2 -space-x-px list-inside">
                            <li><a href="#"
                                    class="px-3 py-2 border cursor-not-allowed ltr:ml-0 rtl:mr-0 ltr:rounded-l-lg rtl:rounded-r-lg text-purple/50 bg-purple/10 border-purple/10">Previous</a>
                            </li>
                            <li><a href="#"
                                    class="px-3 py-2 border text-purple bg-purple/10 border-purple/10 hover:bg-purple hover:text-white">1</a>
                            </li>
                            <li><a href="#"
                                    class="px-3 py-2 border text-purple bg-purple/10 border-purple/10 hover:bg-purple hover:text-white">2</a>
                            </li>
                            <li><a href="#" class="px-3 py-2 text-white border bg-purple border-purple/10">3</a></li>
                            <li><a href="#"
                                    class="px-3 py-2 border text-purple bg-purple/10 border-purple/10 hover:bg-purple hover:text-white">4</a>
                            </li>
                            <li><a href="#"
                                    class="px-3 py-2 border text-purple bg-purple/10 border-purple/10 hover:bg-purple hover:text-white">5</a>
                            </li>
                            <li><a href="#"
                                    class="px-3 py-2 border ltr:rounded-r-lg rtl:rounded-l-lg text-purple bg-purple/10 border-purple/10 hover:bg-purple hover:text-white">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Pagination With Icon</h2>
                <div class="overflow-auto">
                    <div>
                        <ul class="inline-flex items-center gap-1 m-auto mb-4">
                            <li>
                                <button type="button"
                                    class="flex justify-center px-2 py-2 transition border rounded text-purple hover:text-white hover:bg-purple border-purple/5 hover:border-purple bg-purple/10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-5 h-5 mx-auto rtl:rotate-180">
                                        <path
                                            d="M4.83594 12.0001L11.043 18.2072L12.4573 16.793L7.66436 12.0001L12.4573 7.20718L11.043 5.79297L4.83594 12.0001ZM10.4858 12.0001L16.6929 18.2072L18.1072 16.793L13.3143 12.0001L18.1072 7.20718L16.6929 5.79297L10.4858 12.0001Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type="button"
                                    class="flex justify-center px-2 py-2 transition border rounded text-purple hover:text-white hover:bg-purple border-purple/5 hover:border-purple bg-purple/10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-5 h-5 mx-auto rtl:rotate-180">
                                        <path
                                            d="M10.8284 12.0007L15.7782 16.9504L14.364 18.3646L8 12.0007L14.364 5.63672L15.7782 7.05093L10.8284 12.0007Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </button>
                            </li>
                            <li><button type="button"
                                    class="flex justify-center px-3.5 py-2 rounded transition text-purple hover:text-white hover:bg-purple border border-purple/5 hover:border-purple bg-purple/10">1</button>
                            </li>
                            <li><button type="button"
                                    class="flex justify-center px-3.5 py-2 rounded transition text-white bg-purple border border-purple">2</button>
                            </li>
                            <li><button type="button"
                                    class="flex justify-center px-3.5 py-2 rounded transition text-purple hover:text-white hover:bg-purple border border-purple/5 hover:border-purple bg-purple/10">3</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="flex justify-center px-2 py-2 transition border rounded text-purple hover:text-white hover:bg-purple border-purple/5 hover:border-purple bg-purple/10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-5 h-5 mx-auto rtl:rotate-180">
                                        <path
                                            d="M13.1714 12.0007L8.22168 7.05093L9.63589 5.63672L15.9999 12.0007L9.63589 18.3646L8.22168 16.9504L13.1714 12.0007Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type="button"
                                    class="flex justify-center px-2 py-2 transition border rounded text-purple hover:text-white hover:bg-purple border-purple/5 hover:border-purple bg-purple/10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-5 h-5 mx-auto rtl:rotate-180">
                                        <path
                                            d="M19.1643 12.0001L12.9572 5.79297L11.543 7.20718L16.3359 12.0001L11.543 16.793L12.9572 18.2072L19.1643 12.0001ZM13.5144 12.0001L7.30728 5.79297L5.89307 7.20718L10.686 12.0001L5.89307 16.793L7.30728 18.2072L13.5144 12.0001Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul class="inline-flex items-center my-2 -space-x-px list-inside rtl:space-x-reverse">
                            <li>
                                <button type="button"
                                    class="flex justify-center px-2 py-2 transition border cursor-not-allowed ltr:rounded-l-lg rtl:rounded-r-lg text-purple/50 border-purple/10 bg-purple/10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-[18px] h-[18px] mx-auto rtl:rotate-180">
                                        <path
                                            d="M10.8284 12.0007L15.7782 16.9504L14.364 18.3646L8 12.0007L14.364 5.63672L15.7782 7.05093L10.8284 12.0007Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </button>
                            </li>
                            <li><a href="#"
                                    class="px-3 py-2 border text-purple bg-purple/10 border-purple/10 hover:bg-purple hover:text-white">1</a>
                            </li>
                            <li><a href="#"
                                    class="px-3 py-2 border text-purple bg-purple/10 border-purple/10 hover:bg-purple hover:text-white">2</a>
                            </li>
                            <li><a href="#" class="px-3 py-2 text-white border bg-purple border-purple/10">3</a>
                            </li>
                            <li><a href="#"
                                    class="px-3 py-2 border text-purple bg-purple/10 border-purple/10 hover:bg-purple hover:text-white">4</a>
                            </li>
                            <li><a href="#"
                                    class="px-3 py-2 border text-purple bg-purple/10 border-purple/10 hover:bg-purple hover:text-white">5</a>
                            </li>
                            <li>
                                <button
                                    class="flex justify-center px-2 py-2 transition border ltr:rounded-r-lg rtl:rounded-l-lg text-purple hover:text-white hover:bg-purple border-purple/5 hover:border-purple bg-purple/10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-[18px] h-[18px] mx-auto rtl:rotate-180">
                                        <path
                                            d="M13.1714 12.0007L8.22168 7.05093L9.63589 5.63672L15.9999 12.0007L9.63589 18.3646L8.22168 16.9504L13.1714 12.0007Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Pagination With Icons and
                    Rounded</h2>
                <div class="overflow-auto">
                    <div>
                        <ul class="inline-flex items-center gap-1 m-auto mb-4">
                            <li>
                                <button type="button"
                                    class="flex justify-center px-2 py-2 text-black transition border rounded-full hover:text-white hover:bg-purple border-light hover:border-purple bg-light/50 dark:bg-white/5 dark:border-darkborder dark:text-white dark:hover:bg-purple dark:hover:border-purple dark:hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-5 h-5 mx-auto rtl:rotate-180">
                                        <path
                                            d="M4.83594 12.0001L11.043 18.2072L12.4573 16.793L7.66436 12.0001L12.4573 7.20718L11.043 5.79297L4.83594 12.0001ZM10.4858 12.0001L16.6929 18.2072L18.1072 16.793L13.3143 12.0001L18.1072 7.20718L16.6929 5.79297L10.4858 12.0001Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type="button"
                                    class="flex justify-center px-2 py-2 text-black transition border rounded-full hover:text-white hover:bg-purple border-light hover:border-purple bg-light/50 dark:bg-white/5 dark:border-darkborder dark:text-white dark:hover:bg-purple dark:hover:border-purple dark:hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-5 h-5 mx-auto rtl:rotate-180">
                                        <path
                                            d="M10.8284 12.0007L15.7782 16.9504L14.364 18.3646L8 12.0007L14.364 5.63672L15.7782 7.05093L10.8284 12.0007Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </button>
                            </li>
                            <li><button type="button"
                                    class="flex justify-center px-3.5 py-2 rounded-full transition text-black hover:text-white hover:bg-purple border border-light hover:border-purple bg-light/50 dark:bg-white/5 dark:border-darkborder dark:text-white dark:hover:bg-purple dark:hover:border-purple dark:hover:text-white">1</button>
                            </li>
                            <li><button type="button"
                                    class="flex justify-center px-3.5 py-2 rounded-full transition text-white bg-purple border border-purple">2</button>
                            </li>
                            <li><button type="button"
                                    class="flex justify-center px-3.5 py-2 rounded-full transition text-black hover:text-white hover:bg-purple border border-light hover:border-purple bg-light/50 dark:bg-white/5 dark:border-darkborder dark:text-white dark:hover:bg-purple dark:hover:border-purple dark:hover:text-white">3</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="flex justify-center px-2 py-2 text-black transition border rounded-full hover:text-white hover:bg-purple border-light hover:border-purple bg-light/50 dark:bg-white/5 dark:border-darkborder dark:text-white dark:hover:bg-purple dark:hover:border-purple dark:hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-5 h-5 mx-auto rtl:rotate-180">
                                        <path
                                            d="M13.1714 12.0007L8.22168 7.05093L9.63589 5.63672L15.9999 12.0007L9.63589 18.3646L8.22168 16.9504L13.1714 12.0007Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type="button"
                                    class="flex justify-center px-2 py-2 text-black transition border rounded-full hover:text-white hover:bg-purple border-light hover:border-purple bg-light/50 dark:bg-white/5 dark:border-darkborder dark:text-white dark:hover:bg-purple dark:hover:border-purple dark:hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-5 h-5 mx-auto rtl:rotate-180">
                                        <path
                                            d="M19.1643 12.0001L12.9572 5.79297L11.543 7.20718L16.3359 12.0001L11.543 16.793L12.9572 18.2072L19.1643 12.0001ZM13.5144 12.0001L7.30728 5.79297L5.89307 7.20718L10.686 12.0001L5.89307 16.793L7.30728 18.2072L13.5144 12.0001Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul class="inline-flex items-center my-2 -space-x-px list-inside">
                            <li>
                                <button type="button"
                                    class="flex justify-center px-2 py-2 transition border cursor-not-allowed ltr:rounded-l-full rtl:rounded-r-full text-black/50 border-light bg-light/50 dark:bg-white/5 dark:border-darkborder dark:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-[18px] h-[18px] mx-auto rtl:rotate-180">
                                        <path
                                            d="M10.8284 12.0007L15.7782 16.9504L14.364 18.3646L8 12.0007L14.364 5.63672L15.7782 7.05093L10.8284 12.0007Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </button>
                            </li>
                            <li><a href="#"
                                    class="px-3 py-2 text-black border bg-light/50 border-light hover:bg-purple hover:border-purple hover:text-white dark:bg-white/5 dark:border-darkborder dark:text-white dark:hover:bg-purple dark:hover:border-purple dark:hover:text-white">1</a>
                            </li>
                            <li><a href="#"
                                    class="px-3 py-2 text-black border bg-light/50 border-light hover:bg-purple hover:border-purple hover:text-white dark:bg-white/5 dark:border-darkborder dark:text-white dark:hover:bg-purple dark:hover:border-purple dark:hover:text-white">2</a>
                            </li>
                            <li><a href="#" class="px-3 py-2 text-white border bg-purple border-purple">3</a></li>
                            <li><a href="#"
                                    class="px-3 py-2 text-black border bg-light/50 border-light hover:bg-purple hover:border-purple hover:text-white dark:bg-white/5 dark:border-darkborder dark:text-white dark:hover:bg-purple dark:hover:border-purple dark:hover:text-white">4</a>
                            </li>
                            <li><a href="#"
                                    class="px-3 py-2 text-black border bg-light/50 border-light hover:bg-purple hover:border-purple hover:text-white dark:bg-white/5 dark:border-darkborder dark:text-white dark:hover:bg-purple dark:hover:border-purple dark:hover:text-white">5</a>
                            </li>
                            <li>
                                <button
                                    class="flex justify-center px-2 py-2 text-black transition border ltr:rounded-r-full rtl:rounded-l-full hover:text-white hover:bg-purple border-light hover:border-purple bg-light/50 dark:bg-white/5 dark:border-darkborder dark:text-white dark:hover:bg-purple dark:hover:border-purple dark:hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-[18px] h-[18px] mx-auto rtl:rotate-180">
                                        <path
                                            d="M13.1714 12.0007L8.22168 7.05093L9.63589 5.63672L15.9999 12.0007L9.63589 18.3646L8.22168 16.9504L13.1714 12.0007Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Card -->
@endsection
