<header class=" flex shadow-md px-8 md:px-16 py-2 bg-[#F5C71A] justify-between max-w-[1924px] m-auto">
    <div class="flex lg:justify-center lg:col-start-2 items-center">
        <h1 class="text-2xl">CPNC</h1>
    </div>
    @if (Route::has('login'))
        <nav class=" flex-1 justify-end items-center hidden lg:flex">
            <div class="flex justify-center items-center mr-16 gap-4">
                <a href={{ route('home.index') }}>Home</a>
                <a href="about">About</a>
                <a href="about">Contact Us</a>
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
                        class="rounded-md  py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        <x-secondary-button>Register</x-secondary-button>
                    </a>
                @endif
            @endauth
        </nav>
    @endif
    <div class=" items-center ml-4 text-3xl flex asolute lg:hidden   ">
        <i class="fa-solid fa-bars cursor-pointer " id='menuBtn'></i>
    </div>

</header>
