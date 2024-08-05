<div class="tpproduct-details__nab pr-30 mb-40 product-gallery product-gallery-{{ theme_option('ecommerce_product_gallery_image_style', 'vertical') }}">
    <div class="product-gallery__wrapper">
        @foreach ($productImages as $img)
            <a href="{{ RvMedia::getImageUrl($img) }}">
                <img src="{{ RvMedia::getImageUrl($img) }}" alt="{{ $product->name }}" >
            </a>
        @endforeach
    </div>
    <div class="product-thumbnails" data-vertical="{{ theme_option('ecommerce_product_gallery_image_style', 'vertical') == 'vertical' ? 1 : 0 }}">
        @foreach ($productImages as $img)
            <img src="{{ RvMedia::getImageUrl($img, 'thumb') }}" alt="{{ $product->name }}" />
        @endforeach
    </div>
</div>
