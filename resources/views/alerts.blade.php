@extends('layouts.master')
@section('title')
    Alerts
@endsection
@section('content')
    <x-breadcrumb title="Alerts" pagetitle="Elements" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Basic Alert</h2>
                <div class="grid grid-cols-1 gap-5">
                    <div class="p-3 rounded bg-purple/20 text-purple">A simple primary alert—check it out!</div>
                    <div class="p-3 rounded bg-muted/20 text-muted">A simple Secondary alert—check it out!</div>
                    <div class="p-3 rounded bg-info/20 text-info">A simple Info alert—check it out!</div>
                    <div class="p-3 rounded bg-success/20 text-success">A simple Success alert—check it out!</div>
                    <div class="p-3 rounded bg-warning/20 text-warning">A simple Warning alert—check it out!</div>
                    <div class="p-3 rounded bg-danger/20 text-danger">A simple Danger alert—check it out!</div>
                    <div class="p-3 text-black rounded bg-black/20 dark:bg-white/5 dark:text-white">A simple black
                        alert—check it out!</div>
                    <div class="p-3 text-black rounded bg-light/20 dark:text-white">A simple light alert—check it out!</div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Outline Alert</h2>
                <div class="grid grid-cols-1 gap-5">
                    <div class="p-3 border rounded border-purple bg-purple/10 text-purple">A simple primary alert—check it
                        out!</div>
                    <div class="p-3 border rounded border-muted bg-muted/10 text-muted">A simple Secondary alert—check it
                        out!</div>
                    <div class="p-3 border rounded border-info bg-info/10 text-info">A simple Info alert—check it out!</div>
                    <div class="p-3 border rounded border-success bg-success/10 text-success">A simple Success alert—check
                        it out!</div>
                    <div class="p-3 border rounded border-warning bg-warning/10 text-warning">A simple Warning alert—check
                        it out!</div>
                    <div class="p-3 border rounded border-danger bg-danger/10 text-danger">A simple Danger alert—check it
                        out!</div>
                    <div
                        class="p-3 text-black border border-black rounded bg-black/10 dark:bg-white/5 dark:text-white dark:border-darkborder">
                        A simple black alert—check it out!</div>
                    <div
                        class="p-3 text-black border rounded border-light bg-light/20 dark:text-white dark:border-darklight">
                        A simple light alert—check it out!</div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Alert with Close button
                </h2>
                <div class="grid grid-cols-1 gap-5">
                    <div class="flex items-center gap-2 p-3 text-white rounded bg-purple" x-show="showElement"
                        x-data="{ showElement: true }">
                        <span>A simple primary alert—check it out!</span>
                        <button type="button" x-on:click="showElement = false"
                            class="transition-all duration-300 rotate-0 ltr:ml-auto rtl:mr-auto hover:opacity-80 hover:rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center gap-2 p-3 text-white rounded bg-success" x-show="showElement"
                        x-data="{ showElement: true }">
                        <span>A simple Success alert—check it out!</span>
                        <button type="button" x-on:click="showElement = false"
                            class="transition-all duration-300 rotate-0 ltr:ml-auto rtl:mr-auto hover:opacity-80 hover:rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center gap-2 p-3 text-white rounded bg-warning" x-show="showElement"
                        x-data="{ showElement: true }">
                        <span>A simple Warning alert—check it out!</span>
                        <button type="button" x-on:click="showElement = false"
                            class="transition-all duration-300 rotate-0 ltr:ml-auto rtl:mr-auto hover:opacity-80 hover:rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center gap-2 p-3 text-white rounded bg-danger" x-show="showElement"
                        x-data="{ showElement: true }">
                        <span>A simple Danger alert—check it out!</span>
                        <button type="button" x-on:click="showElement = false"
                            class="transition-all duration-300 rotate-0 ltr:ml-auto rtl:mr-auto hover:opacity-80 hover:rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Outline Alert with Close
                    button</h2>
                <div class="grid grid-cols-1 gap-5">
                    <div class="flex items-center gap-2 p-3 border rounded border-purple bg-purple/10 text-purple"
                        x-show="showElement" x-data="{ showElement: true }">
                        <span>A simple primary alert—check it out!</span>
                        <button type="button" x-on:click="showElement = false"
                            class="transition-all duration-300 rotate-0 ltr:ml-auto rtl:mr-auto hover:opacity-80 hover:rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center gap-2 p-3 border rounded border-success bg-success/10 text-success"
                        x-show="showElement" x-data="{ showElement: true }">
                        <span>A simple Success alert—check it out!</span>
                        <button type="button" x-on:click="showElement = false"
                            class="transition-all duration-300 rotate-0 ltr:ml-auto rtl:mr-auto hover:opacity-80 hover:rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center gap-2 p-3 border rounded border-warning bg-warning/10 text-warning"
                        x-show="showElement" x-data="{ showElement: true }">
                        <span>A simple Warning alert—check it out!</span>
                        <button type="button" x-on:click="showElement = false"
                            class="transition-all duration-300 rotate-0 ltr:ml-auto rtl:mr-auto hover:opacity-80 hover:rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center gap-2 p-3 border rounded border-danger bg-danger/10 text-danger"
                        x-show="showElement" x-data="{ showElement: true }">
                        <span>A simple Danger alert—check it out!</span>
                        <button type="button" x-on:click="showElement = false"
                            class="transition-all duration-300 rotate-0 ltr:ml-auto rtl:mr-auto hover:opacity-80 hover:rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Alert with accent border
                </h2>
                <div class="grid grid-cols-1 gap-5">
                    <div class="flex items-center gap-2 p-3 border-l-4 border-purple bg-purple/10 text-purple"
                        x-show="showElement" x-data="{ showElement: true }">
                        <span>A simple primary alert—check it out!</span>
                        <button type="button" x-on:click="showElement = false"
                            class="transition-all duration-300 rotate-0 ltr:ml-auto rtl:mr-auto hover:opacity-80 hover:rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center gap-2 p-3 border-l-4 border-success bg-success/10 text-success"
                        x-show="showElement" x-data="{ showElement: true }">
                        <span>A simple Success alert—check it out!</span>
                        <button type="button" x-on:click="showElement = false"
                            class="transition-all duration-300 rotate-0 ltr:ml-auto rtl:mr-auto hover:opacity-80 hover:rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center gap-2 p-3 border-l-4 border-warning bg-warning/10 text-warning"
                        x-show="showElement" x-data="{ showElement: true }">
                        <span>A simple Warning alert—check it out!</span>
                        <button type="button" x-on:click="showElement = false"
                            class="transition-all duration-300 rotate-0 ltr:ml-auto rtl:mr-auto hover:opacity-80 hover:rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center gap-2 p-3 border-l-4 border-danger bg-danger/10 text-danger"
                        x-show="showElement" x-data="{ showElement: true }">
                        <span>A simple Danger alert—check it out!</span>
                        <button type="button" x-on:click="showElement = false"
                            class="transition-all duration-300 rotate-0 ltr:ml-auto rtl:mr-auto hover:opacity-80 hover:rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Alert with Icons</h2>
                <div class="grid grid-cols-1 gap-5">
                    <div class="flex items-center gap-2 p-3 border rounded border-purple bg-purple/10 text-purple"
                        x-show="showElement" x-data="{ showElement: true }">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M4.00098 20V14C4.00098 9.58172 7.5827 6 12.001 6C16.4193 6 20.001 9.58172 20.001 14V20H21.001V22H3.00098V20H4.00098ZM6.00098 20H18.001V14C18.001 10.6863 15.3147 8 12.001 8C8.68727 8 6.00098 10.6863 6.00098 14V20ZM11.001 2H13.001V5H11.001V2ZM19.7792 4.80761L21.1934 6.22183L19.0721 8.34315L17.6578 6.92893L19.7792 4.80761ZM2.80859 6.22183L4.22281 4.80761L6.34413 6.92893L4.92991 8.34315L2.80859 6.22183ZM7.00098 14C7.00098 11.2386 9.23956 9 12.001 9V11C10.3441 11 9.00098 12.3431 9.00098 14H7.00098Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                        <span>A simple primary alert—check it out!</span>
                        <button type="button" x-on:click="showElement = false"
                            class="transition-all duration-300 rotate-0 ltr:ml-auto rtl:mr-auto hover:opacity-80 hover:rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center gap-2 p-3 border rounded border-success bg-success/10 text-success"
                        x-show="showElement" x-data="{ showElement: true }">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M11.602 13.7599L13.014 15.1719L21.4795 6.7063L22.8938 8.12051L13.014 18.0003L6.65 11.6363L8.06421 10.2221L10.189 12.3469L11.6025 13.7594L11.602 13.7599ZM11.6037 10.9322L16.5563 5.97949L17.9666 7.38977L13.014 12.3424L11.6037 10.9322ZM8.77698 16.5873L7.36396 18.0003L1 11.6363L2.41421 10.2221L3.82723 11.6352L3.82604 11.6363L8.77698 16.5873Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                        <span>A simple Success alert—check it out!</span>
                        <button type="button" x-on:click="showElement = false"
                            class="transition-all duration-300 rotate-0 ltr:ml-auto rtl:mr-auto hover:opacity-80 hover:rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center gap-2 p-3 border rounded border-warning bg-warning/10 text-warning"
                        x-show="showElement" x-data="{ showElement: true }">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M12.865 3.00017L22.3912 19.5002C22.6674 19.9785 22.5035 20.5901 22.0252 20.8662C21.8732 20.954 21.7008 21.0002 21.5252 21.0002H2.47266C1.92037 21.0002 1.47266 20.5525 1.47266 20.0002C1.47266 19.8246 1.51886 19.6522 1.60663 19.5002L11.1329 3.00017C11.4091 2.52187 12.0206 2.358 12.4989 2.63414C12.651 2.72191 12.7772 2.84815 12.865 3.00017ZM4.20471 19.0002H19.7932L11.9989 5.50017L4.20471 19.0002ZM10.9989 16.0002H12.9989V18.0002H10.9989V16.0002ZM10.9989 9.00017H12.9989V14.0002H10.9989V9.00017Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                        <span>A simple Warning alert—check it out!</span>
                        <button type="button" x-on:click="showElement = false"
                            class="transition-all duration-300 rotate-0 ltr:ml-auto rtl:mr-auto hover:opacity-80 hover:rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center gap-2 p-3 border rounded border-danger bg-danger/10 text-danger"
                        x-show="showElement" x-data="{ showElement: true }">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM11 7H13V9H11V7ZM11 11H13V17H11V11Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                        <span>A simple Danger alert—check it out!</span>
                        <button type="button" x-on:click="showElement = false"
                            class="transition-all duration-300 rotate-0 ltr:ml-auto rtl:mr-auto hover:opacity-80 hover:rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Alert Additional content
                </h2>
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                    <div class="p-3 border rounded border-purple bg-purple/10 text-purple" x-show="showElement"
                        x-data="{ showElement: true }">
                        <div class="flex items-center gap-2">
                            <span class="text-lg">A simple primary alert—check it out!</span>
                            <button type="button" x-on:click="showElement = false"
                                class="transition-all duration-300 rotate-0 ltr:ml-auto rtl:mr-auto hover:opacity-80 hover:rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path
                                        d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                        fill="currentColor"></path>
                                </svg>
                            </button>
                        </div>
                        <p class="mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                    <div class="p-3 border rounded border-success bg-success/10 text-success" x-show="showElement"
                        x-data="{ showElement: true }">
                        <div class="flex items-center gap-2">
                            <span class="text-lg">A simple Success alert—check it out!</span>
                            <button type="button" x-on:click="showElement = false"
                                class="transition-all duration-300 rotate-0 ltr:ml-auto rtl:mr-auto hover:opacity-80 hover:rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path
                                        d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                        fill="currentColor"></path>
                                </svg>
                            </button>
                        </div>
                        <p class="mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                    <div class="p-3 border rounded border-warning bg-warning/10 text-warning" x-show="showElement"
                        x-data="{ showElement: true }">
                        <div class="flex items-center gap-2">
                            <span class="text-lg">A simple Warning alert—check it out!</span>
                            <button type="button" x-on:click="showElement = false"
                                class="transition-all duration-300 rotate-0 ltr:ml-auto rtl:mr-auto hover:opacity-80 hover:rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path
                                        d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                        fill="currentColor"></path>
                                </svg>
                            </button>
                        </div>
                        <p class="mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                    <div class="p-3 border rounded border-danger bg-danger/10 text-danger" x-show="showElement"
                        x-data="{ showElement: true }">
                        <div class="flex items-center gap-2">
                            <span class="text-lg">A simple Danger alert—check it out!</span>
                            <button type="button" x-on:click="showElement = false"
                                class="transition-all duration-300 rotate-0 ltr:ml-auto rtl:mr-auto hover:opacity-80 hover:rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path
                                        d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                        fill="currentColor"></path>
                                </svg>
                            </button>
                        </div>
                        <p class="mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Alert Examples</h2>
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-4">
                    <div class="relative p-4 text-center border rounded border-purple bg-purple/10 text-purple"
                        x-show="showElement" x-data="{ showElement: true }">
                        <button type="button" x-on:click="showElement = false"
                            class="absolute transition-all duration-300 rotate-0 ltr:right-2 rtl:left-2 top-2 hover:opacity-80 hover:rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-12 h-12 mx-auto">
                                <path
                                    d="M4.00098 20V14C4.00098 9.58172 7.5827 6 12.001 6C16.4193 6 20.001 9.58172 20.001 14V20H21.001V22H3.00098V20H4.00098ZM6.00098 20H18.001V14C18.001 10.6863 15.3147 8 12.001 8C8.68727 8 6.00098 10.6863 6.00098 14V20ZM11.001 2H13.001V5H11.001V2ZM19.7792 4.80761L21.1934 6.22183L19.0721 8.34315L17.6578 6.92893L19.7792 4.80761ZM2.80859 6.22183L4.22281 4.80761L6.34413 6.92893L4.92991 8.34315L2.80859 6.22183ZM7.00098 14C7.00098 11.2386 9.23956 9 12.001 9V11C10.3441 11 9.00098 12.3431 9.00098 14H7.00098Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                        <p class="mt-3 text-lg">Primary alert</p>
                        <p class="mt-2">Lorem Ipsum is simply dummy text.</p>
                    </div>
                    <div class="relative p-4 text-center border rounded border-success bg-success/10 text-success"
                        x-show="showElement" x-data="{ showElement: true }">
                        <button type="button" x-on:click="showElement = false"
                            class="absolute transition-all duration-300 rotate-0 ltr:right-2 rtl:left-2 top-2 hover:opacity-80 hover:rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-12 h-12 mx-auto">
                                <path
                                    d="M11.602 13.7599L13.014 15.1719L21.4795 6.7063L22.8938 8.12051L13.014 18.0003L6.65 11.6363L8.06421 10.2221L10.189 12.3469L11.6025 13.7594L11.602 13.7599ZM11.6037 10.9322L16.5563 5.97949L17.9666 7.38977L13.014 12.3424L11.6037 10.9322ZM8.77698 16.5873L7.36396 18.0003L1 11.6363L2.41421 10.2221L3.82723 11.6352L3.82604 11.6363L8.77698 16.5873Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                        <p class="mt-3 text-lg">Success alert</p>
                        <p class="mt-2">Lorem Ipsum is simply dummy text.</p>
                    </div>
                    <div class="relative p-4 text-center border rounded border-warning bg-warning/10 text-warning"
                        x-show="showElement" x-data="{ showElement: true }">
                        <button type="button" x-on:click="showElement = false"
                            class="absolute transition-all duration-300 rotate-0 ltr:right-2 rtl:left-2 top-2 hover:opacity-80 hover:rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-12 h-12 mx-auto">
                                <path
                                    d="M12.865 3.00017L22.3912 19.5002C22.6674 19.9785 22.5035 20.5901 22.0252 20.8662C21.8732 20.954 21.7008 21.0002 21.5252 21.0002H2.47266C1.92037 21.0002 1.47266 20.5525 1.47266 20.0002C1.47266 19.8246 1.51886 19.6522 1.60663 19.5002L11.1329 3.00017C11.4091 2.52187 12.0206 2.358 12.4989 2.63414C12.651 2.72191 12.7772 2.84815 12.865 3.00017ZM4.20471 19.0002H19.7932L11.9989 5.50017L4.20471 19.0002ZM10.9989 16.0002H12.9989V18.0002H10.9989V16.0002ZM10.9989 9.00017H12.9989V14.0002H10.9989V9.00017Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                        <p class="mt-3 text-lg">Warning alert</p>
                        <p class="mt-2">Lorem Ipsum is simply dummy text.</p>
                    </div>
                    <div class="relative p-4 text-center border rounded border-danger bg-danger/10 text-danger"
                        x-show="showElement" x-data="{ showElement: true }">
                        <button type="button" x-on:click="showElement = false"
                            class="absolute transition-all duration-300 rotate-0 ltr:right-2 rtl:left-2 top-2 hover:opacity-80 hover:rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-12 h-12 mx-auto">
                                <path
                                    d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM11 7H13V9H11V7ZM11 11H13V17H11V11Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                        <p class="mt-3 text-lg">Warning alert</p>
                        <p class="mt-2">Lorem Ipsum is simply dummy text.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Card -->
@endsection
