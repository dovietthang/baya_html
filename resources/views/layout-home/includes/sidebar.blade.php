<div class="home-slider" id="home-slider">
    <div class="container container-pd0">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach ($banners as $key => $item)
                <li data-target="#carouselExampleCaptions" data-slide-to="{{$key}}" class="active"></li>
                @endforeach
            </ol>
            <div class="carousel-inner slider-owl owl-carousel">
                @foreach ($banners as $key => $item)
                <div class="carousel-item slider-item active">
                    <div class="slide--image">
                        <a href="{{$item->url}}" title="{{$item->title}}">
                            <img src="{{$item->photo}}" class="d-block w-100" alt="...">
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>