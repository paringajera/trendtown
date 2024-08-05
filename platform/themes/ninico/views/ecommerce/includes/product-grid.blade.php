<div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
    @foreach($products as $product)
        <div class="col">
            @include(Theme::getThemeNamespace('views.ecommerce.includes.product-item'))
        </div>
    @endforeach
</div>

@include(Theme::getThemeNamespace('views.ecommerce.includes.quick-view-modal'))
