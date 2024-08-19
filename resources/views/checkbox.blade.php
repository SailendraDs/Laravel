    @extends('layouts.master')
    @section('title')
        Checkbox
    @endsection
    @section('css')
        <!-- Icon Css -->
        <link rel="stylesheet" href="{{ URL::asset('build/css/remixicon.css') }}" />
    @endsection
    @section('content')
        <x-breadcrumb title="Checkbox" pagetitle="Forms" />

        <!-- Start All Card -->
        <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Checkbox Default</h2>
                    <div class="grid grid-cols-1 gap-3">
                        <label class="inline-flex">
                            <input type="checkbox" class="form-checkbox text-purple" checked />
                            <span>Primary</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="form-checkbox text-info" checked />
                            <span>Info</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="form-checkbox text-success" />
                            <span>Success</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="form-checkbox text-warning" />
                            <span>Warning</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="form-checkbox text-danger" />
                            <span>Danger</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="text-black form-checkbox" />
                            <span>Black</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="form-checkbox text-muted dark:text-darkmuted" />
                            <span>Muted</span>
                        </label>
                    </div>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Checkbox Rounded</h2>
                    <div class="grid grid-cols-1 gap-3">
                        <label class="inline-flex">
                            <input type="checkbox" class="rounded-full form-checkbox text-purple" checked />
                            <span>Primary</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="rounded-full form-checkbox text-info" checked />
                            <span>Info</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="rounded-full form-checkbox text-success" />
                            <span>Success</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="rounded-full form-checkbox text-warning" />
                            <span>Warning</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="rounded-full form-checkbox text-danger" />
                            <span>Danger</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="text-black rounded-full form-checkbox" />
                            <span>Black</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="rounded-full form-checkbox text-muted dark:text-darkmuted" />
                            <span>Muted</span>
                        </label>
                    </div>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Outline</h2>
                    <div class="grid grid-cols-1 gap-3">
                        <label class="inline-flex">
                            <input type="checkbox" class="form-checkbox outborder-purple" checked />
                            <span>Primary</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="form-checkbox outborder-info" checked />
                            <span>Info</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="form-checkbox outborder-success" />
                            <span>Success</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="form-checkbox outborder-warning" />
                            <span>Warning</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="form-checkbox outborder-danger" />
                            <span>Danger</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="form-checkbox outborder-black" />
                            <span>Black</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="form-checkbox outborder-muted" />
                            <span>Muted</span>
                        </label>
                    </div>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Outline Rounded</h2>
                    <div class="grid grid-cols-1 gap-3">
                        <label class="inline-flex">
                            <input type="checkbox" class="rounded-full form-checkbox outborder-purple" checked />
                            <span>Primary</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="rounded-full form-checkbox outborder-info" checked />
                            <span>Info</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="rounded-full form-checkbox outborder-success" />
                            <span>Success</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="rounded-full form-checkbox outborder-warning" />
                            <span>Warning</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="rounded-full form-checkbox outborder-danger" />
                            <span>Danger</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="rounded-full form-checkbox outborder-black" />
                            <span>Black</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="rounded-full form-checkbox outborder-muted" />
                            <span>Muted</span>
                        </label>
                    </div>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Checkbox with text
                        color</h2>
                    <div class="grid grid-cols-1 gap-3">
                        <label class="inline-flex">
                            <input type="checkbox" class="form-checkbox peer text-purple" checked />
                            <span class="peer-checked:text-purple">Primary</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="form-checkbox peer text-info" checked />
                            <span class="peer-checked:text-info">Info</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="form-checkbox peer text-success" />
                            <span class="peer-checked:text-success">Success</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="form-checkbox peer text-warning" />
                            <span class="peer-checked:text-warning">Warning</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="form-checkbox peer text-danger" />
                            <span class="peer-checked:text-danger">Danger</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="text-black form-checkbox peer" />
                            <span class="peer-checked:text-black">Black</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="form-checkbox peer text-muted" />
                            <span class="peer-checked:text-muted">Muted</span>
                        </label>
                    </div>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Outline Checkbox with
                        text color</h2>
                    <div class="grid grid-cols-1 gap-3">
                        <label class="inline-flex">
                            <input type="checkbox" class="form-checkbox peer outborder-purple" checked />
                            <span class="peer-checked:text-purple">Primary</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="form-checkbox peer outborder-info" checked />
                            <span class="peer-checked:text-info">Info</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="form-checkbox peer outborder-success" />
                            <span class="peer-checked:text-success">Success</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="form-checkbox peer outborder-warning" />
                            <span class="peer-checked:text-warning">Warning</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="form-checkbox peer outborder-danger" />
                            <span class="peer-checked:text-danger">Danger</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="form-checkbox peer outborder-black" />
                            <span class="peer-checked:text-black">Black</span>
                        </label>
                        <label class="inline-flex">
                            <input type="checkbox" class="form-checkbox peer outborder-muted" />
                            <span class="peer-checked:text-muted">Muted</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <!-- End All Card -->
    @endsection
