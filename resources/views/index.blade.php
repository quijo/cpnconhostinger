<x-cpnc.layout.layout>

    {{-- navigation --}}
    <x-cpnc.layout.headerTop></x-cpnc.layout.headerTop>
    <x-cpnc.layout.header></x-cpnc.layout.header>
    <x-cpnc.layout.mobileNav></x-cpnc.layout.mobileNav>

    {{-- home content --}}
    @include('components/cpnc/home/slider')
    {{-- <x-cpnc.home.sliders></x-cpnc.home.sliders> --}}
    {{-- <x-cpnc.home.slider></x-cpnc.home.slider> --}}
    {{-- <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">

                @foreach ($sliders as $key => $slider)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img src="{{ $slider->url }}" class="d-block w-100" alt="{{ $slider->title }}">

                    </div>
                @endforeach

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> --}}
    <x-cpnc.home.hero></x-cpnc.home.hero>
    <x-cpnc.home.welcome></x-cpnc.home.welcome>
    <x-cpnc.home.article>

    </x-cpnc.home.article>

    <x-cpnc.layout.footer></x-cpnc.layout.footer>
</x-cpnc.layout.layout>
