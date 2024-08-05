<div class="tp-slider-area p-relative">
    <div class="swiper-container slider-active">
        <div class="swiper-wrapper">
            @foreach($sliders as $slider)
                <div class="swiper-slide">
                    <div class="tp-slide-item">
                        <div class="tp-slide-item__img">
                            @include(Theme::getThemeNamespace('partials.shortcodes.simple-slider.includes.image'))
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="slider-pagination"></div>
</div>

