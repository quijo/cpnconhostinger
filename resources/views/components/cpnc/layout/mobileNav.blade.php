<main
    id="mobile-menu"class="h-full mobile-menu flex-col justify-center w-full text-center bg-white w-96  right-0  absolute hidden  ">
    @if (Route::has('login'))
        <nav class=" flex-col justify-center items-center w-full flex">
            <div class="flex flex-col justify-center items-center w-full  mb-8">
                <a class="text-2xl hover:bg-blue-500 w-full py-4" href="about">Home</a>
                <a class="text-2xl hover:bg-blue-500 w-full py-4" href="about">About</a>
                <a class="text-2xl hover:bg-blue-500 w-full py-4" href="about">Contact Us</a>
            </div>

            @auth
                <a href="{{ url('/dashboard') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">

                </a>
            @else
                <a href="{{ route('login') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                    <x-primary-button>Log in</x-primary-button>
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        <x-secondary-button>Register</x-secondary-button>
                    </a>
                @endif
            @endauth
        </nav>
    @endif
</main>
