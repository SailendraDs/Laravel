<!-- Start Header -->
<header>
    <nav class="px-4 lg:px-7 py-4 max-w-[1440px] mx-auto">
        <div class="flex flex-wrap items-center justify-between">
            <a href="{{ url('index') }}" class="flex items-center">
                <img src="{{ URL::asset('build/images/logo-light.svg') }}" class="mx-auto dark-logo h-7 dark:hidden" alt="logo">
                <img src="{{ URL::asset('build/images/light.svg') }}" class="hidden mx-auto light-logo h-7 dark:block" alt="logo">
            </a>
            <div class="flex items-center lg:order-2">
                <a href="{{ url('signup') }}"
                    class="btn bg-purple dark:border-white dark:bg-white dark:text-black dark:hover:bg-white/90 border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">Buy Now</a>
            </div>
        </div>
    </nav>
</header>
<!-- End Header -->
