@php
    [$categories, $brands, $tags, $rand, $categoriesRequest, $urlCurrent, $categoryId, $maxFilterPrice] = EcommerceHelper::dataForFilter($category ?? null);
@endphp

<input type="hidden" name="page" value="{{ BaseHelper::stringify(request()->integer('page', 1)) }}">
<input type="hidden" name="per-page" value="{{ BaseHelper::stringify(request()->integer('per-page', 12)) }}">
<input type="hidden" name="sort-by" value="{{ BaseHelper::stringify(request()->query('sort-by', 'default_sorting')) }}">
<input type="hidden" name="layout" value="{{ BaseHelper::stringify(get_current_product_layout()) }}">

<div class="tpsidebar product-sidebar__product-category">
    <div class="product-sidebar">
        <div class="product-categories-filter-widget">
            @if($categories->isNotEmpty())
                <div class="product-sidebar__widget mb-30">
                    <div class="product-sidebar__info product-info-list">
                        <h4 class="product-sidebar__title mb-20">{{ __('Categories') }}</h4>
                        @include(Theme::getThemeNamespace('views.ecommerce.includes.categories'), [
                            'categories' => $categories,
                            'activeCategoryId' => $categoryId,
                            'categoriesRequest' => $categoriesRequest,
                            'urlCurrent' => $urlCurrent
                        ])
                    </div>
                </div>
            @endif
        </div>

        @if ($maxFilterPrice)
            <div class="product-sidebar__widget mb-30">
                <div class="product-sidebar__info product-info-list">
                    <h4 class="product-sidebar__title mb-30">{{ __('Price Range') }}</h4>
                    <div class="productsidebar">
                        <div class="productsidebar__range">
                            <div id="slider-range" data-min="0" data-max="{{ $maxFilterPrice }}"></div>
                            <div class="price-filter mt-10">
                                <input type="hidden" name="min_price" value="{{ BaseHelper::stringify((float) request()->input('min_price', 0)) }}">
                                <input type="hidden" name="max_price" value="{{ BaseHelper::stringify((float) request()->input('max_price', $maxFilterPrice)) }}">
                                <span id="amount"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if ($brands->isNotEmpty())
            <div class="product-sidebar__widget mb-30">
                <div class="product-sidebar__info product-info-list">
                    <h4 class="product-sidebar__title mb-20">{{ __('Brands') }}</h4>
                    <div class="product-sidebar__list">
                        @foreach($brands as $brand)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="brands[]" value="{{ $brand->id }}" @checked(in_array($brand->id, request()->query('brands', []))) id="brand-filter-{{ $brand->id }}">
                                <label class="form-check-label" for="brand-filter-{{ $brand->id }}">
                                    {{ $brand->name }} ({{ $brand->products_count }})
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        @if ($tags->isNotEmpty())
            <div class="product-sidebar__widget mb-30">
                <div class="product-sidebar__info product-info-list">
                    <h4 class="product-sidebar__title mb-20">{{ __('Tags') }}</h4>
                    <div class="product-sidebar__list">
                        @foreach($tags as $tag)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}" @checked(in_array($tag->id, request()->query('tags', []))) id="tag-filter-{{ $tag->id }}">
                                <label class="form-check-label" for="tag-filter-{{ $tag->id }}">
                                    {{ $tag->name }} ({{ $tag->products_count }})
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        {!! render_product_swatches_filter([
            'view' => Theme::getThemeNamespace('views.ecommerce.attributes.attributes-filter-renderer')
        ]) !!}
    </div>
</div>
