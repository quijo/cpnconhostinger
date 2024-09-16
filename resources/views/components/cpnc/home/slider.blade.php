<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">

            @foreach ($sliders as $key => $slider)
                <div class="carousel-item relative {{ $key == 0 ? 'active' : '' }}">
                    <div class="text-3xl top-6 absolute">ddfasdf</div>
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
</div>
