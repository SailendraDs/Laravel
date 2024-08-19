@extends('layouts.master')
@section('title')
    Progress Bar
@endsection
@section('content')
    <x-breadcrumb title="Progress Bar" pagetitle="Elements" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Default Examples</h2>
                <div class="flex flex-col items-center justify-center gap-3">
                    <div class="w-full h-4 rounded-full bg-light/80 dark:bg-white/10">
                        <div class="w-3/12 h-4 rounded-full bg-purple"></div>
                    </div>
                    <div class="w-full h-4 rounded-full bg-light/80 dark:bg-white/10">
                        <div class="w-4/12 h-4 rounded-full bg-purple"></div>
                    </div>
                    <div class="w-full h-4 rounded-full bg-light/80 dark:bg-white/10">
                        <div class="w-5/12 h-4 rounded-full bg-purple"></div>
                    </div>
                    <div class="w-full h-4 rounded-full bg-light/80 dark:bg-white/10">
                        <div class="w-6/12 h-4 rounded-full bg-purple"></div>
                    </div>
                    <div class="w-full h-4 rounded-full bg-light/80 dark:bg-white/10">
                        <div class="w-7/12 h-4 rounded-full bg-purple"></div>
                    </div>
                    <div class="w-full h-4 rounded-full bg-light/80 dark:bg-white/10">
                        <div class="w-8/12 h-4 rounded-full bg-purple"></div>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Backgrounds</h2>
                <div class="flex flex-col items-center justify-center gap-3">
                    <div class="w-full h-4 rounded-full bg-light/80 dark:bg-white/10">
                        <div class="w-3/12 h-4 rounded-full bg-purple"></div>
                    </div>
                    <div class="w-full h-4 rounded-full bg-light/80 dark:bg-white/10">
                        <div class="w-4/12 h-4 rounded-full bg-info"></div>
                    </div>
                    <div class="w-full h-4 rounded-full bg-light/80 dark:bg-white/10">
                        <div class="w-5/12 h-4 rounded-full bg-success"></div>
                    </div>
                    <div class="w-full h-4 rounded-full bg-light/80 dark:bg-white/10">
                        <div class="w-6/12 h-4 rounded-full bg-warning"></div>
                    </div>
                    <div class="w-full h-4 rounded-full bg-light/80 dark:bg-white/10">
                        <div class="w-7/12 h-4 rounded-full bg-danger"></div>
                    </div>
                    <div class="w-full h-4 rounded-full bg-light/80 dark:bg-white/10">
                        <div class="w-8/12 h-4 bg-black rounded-full"></div>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Labels Example</h2>
                <div class="w-full h-3 rounded-full bg-light/80 dark:bg-white/10">
                    <div class="flex items-center justify-center w-6/12 h-3 text-center rounded-full bg-black/80">
                        <p class="text-[11px] text-white align-middle">50%</p>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Labels Example</h2>
                <div class="flex w-full h-3 rounded-full bg-light/80 dark:bg-white/10">
                    <div class="w-3/12 h-3 rounded-l bg-purple"></div>
                    <div class="w-3/12 h-3 bg-success"></div>
                    <div class="w-3/12 h-3 bg-black rounded-r"></div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Sizes</h2>
                <div class="flex flex-col items-center justify-center gap-3">
                    <div class="w-full">
                        <h6 class="mb-1 text-sm text-black dark:text-white/80">Progress sm</h6>
                        <div class="w-full h-1 rounded-full bg-light/80 dark:bg-white/10">
                            <div class="w-3/12 h-1 rounded-full bg-purple"></div>
                        </div>
                    </div>
                    <div class="w-full">
                        <h6 class="mb-1 text-sm text-black dark:text-white/80">Progress md</h6>
                        <div class="w-full h-2 rounded-full bg-light/80 dark:bg-white/10">
                            <div class="w-4/12 h-2 rounded-full bg-success"></div>
                        </div>
                    </div>
                    <div class="w-full">
                        <h6 class="mb-1 text-sm text-black dark:text-white/80">Progress lg</h6>
                        <div class="w-full h-3 rounded-full bg-light/80 dark:bg-white/10">
                            <div class="w-5/12 h-3 bg-black rounded-full"></div>
                        </div>
                    </div>
                    <div class="w-full">
                        <h6 class="mb-1 text-sm text-black dark:text-white/80">Progress xl</h6>
                        <div class="w-full h-4 rounded-full bg-light/80 dark:bg-white/10">
                            <div class="w-6/12 h-4 rounded-full bg-danger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Striped</h2>
                <div class="flex flex-col items-center justify-center gap-3">
                    <div class="w-full h-4 rounded-full bg-black/10 dark:bg-white/10">
                        <div class="w-3/12 h-4 rounded-full bg-purple"
                            style="background-image: linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent); background-size: 1rem 1rem;">
                        </div>
                    </div>
                    <div class="w-full h-4 rounded-full bg-black/10 dark:bg-white/10">
                        <div class="w-4/12 h-4 rounded-full bg-info"
                            style="background-image: linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent); background-size: 1rem 1rem;">
                        </div>
                    </div>
                    <div class="w-full h-4 rounded-full bg-black/10 dark:bg-white/10">
                        <div class="w-5/12 h-4 rounded-full bg-success"
                            style="background-image: linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent); background-size: 1rem 1rem;">
                        </div>
                    </div>
                    <div class="w-full h-4 rounded-full bg-black/10 dark:bg-white/10">
                        <div class="w-6/12 h-4 bg-black rounded-full"
                            style="background-image: linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent); background-size: 1rem 1rem;">
                        </div>
                    </div>
                    <div class="w-full h-4 rounded-full bg-black/10 dark:bg-white/10">
                        <div class="w-7/12 h-4 rounded-full bg-danger"
                            style="background-image: linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent); background-size: 1rem 1rem;">
                        </div>
                    </div>
                    <div class="w-full h-4 rounded-full bg-black/10 dark:bg-white/10">
                        <div class="w-8/12 h-4 rounded-full bg-warning"
                            style="background-image: linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent); background-size: 1rem 1rem;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Card -->
@endsection
