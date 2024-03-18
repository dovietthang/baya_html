<div class="home-slider" id="home-slider">
    <div class="container container-pd0">
        <div class="slider-owl owl-carousel">
            @foreach ($banners as $key => $item)
            <div class="slider-item">
                <div class="slide--image">
                    <a href="{{$item->url}}" title="{{$item->title}}">
                        <picture>
                            <source media="(max-width: 767px)" srcset="{{$item->photo}}" />
                            <source media="(min-width: 768px)" srcset="{{$item->photo}}" />
                            <img src="{{$item->photo}}" alt="{{$item->title}}" />
                        </picture>
                    </a>
                </div>
            </div>
            @endforeach
        
        </div>
    </div>
</div>