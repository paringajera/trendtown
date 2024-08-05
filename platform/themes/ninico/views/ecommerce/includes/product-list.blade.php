@foreach($products as $product)
    <div class="tpproduct row mb-40">
        <div class="col-lg-4 col-md-12">
            <div class="tpproduct__thumb">
                <div class="tpproduct__thumbitem p-relative">
                    @if ($product->productLabels->isNotEmpty())
                        <div class="product__badge-list">
                            @foreach ($product->productLabels as $label)
                                <span class="tpproduct__thumb-topsall" @style(["background-color: $label->color" => $label->color])>
                                    <span class="product__badge-item">{{ $label->name }}</span>
                                </span>
                            @endforeach
                        </div>
                    @endif
                    <a href="{{ $product->url }}">
                        <img src="{{ RvMedia::getImageUrl($product->image, 'small', false, RvMedia::getDefaultImage()) }}" alt="{{ $product->name }}">
                        <img class="thumbitem-secondary" src="{{ RvMedia::getImageUrl(Arr::get($product->images, 2, $product->image), 'small', false, RvMedia::getDefaultImage()) }}" alt="{{ $product->name }}">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="filter-product ml-20 pt-30">
                <h3 class="filter-product-title">
                    <a href="{{ $product->url }}">{{ $product->name }}</a>
                </h3>
                <div class="tpproduct__amount">
                    <span>{{ format_price($product->front_sale_price_with_taxes) }}</span>
                    @if($product->isOnSale())
                        <span class="tpproduct__amount old">{{ format_price($product->price_with_taxes) }}</span>
                    @endif
                </div>
                @if (EcommerceHelper::isReviewEnabled())
                    <div class="tpproduct__rating mb-15">
                        <div class="product-rating-wrapper">
                            <div class="product-rating" style="width: {{ $product->reviews_avg * 20 }}%"></div>
                        </div>
                        <span>({{ $product->reviews_count }})</span>
                    </div>
                @endif
                <p>{!! BaseHelper::clean(Str::limit($product->description, 200)) !!}</p>
                <div class="tpproduct__action">
                    @if (EcommerceHelper::isCompareEnabled())
                        <a class="add-to-compare" href="{{ route('public.compare.add', $product->id) }}">
                            <i class="fal fa-exchange"></i>
                        </a>
                    @endif
                    <a class="quickview" href="{{ route('public.ajax.quick-view', $product->id) }}">
                        <i class="fal fa-eye"></i>
                    </a>
                    @if (EcommerceHelper::isWishlistEnabled())
                        <a class="wishlist add-to-wishlist" href="{{ route('public.wishlist.add', $product->getKey()) }}">
                            <i class="fal fa-heart"></i>
                        </a>
                    @endif
                    @if(EcommerceHelper::isCartEnabled())
                        @if ($product->variations()->exists())
                            <a href="{{ route('public.ajax.quick-shop', $product->slug) }}" class="button-quick-shop" data-id="{{ $product->id }}">
                                <i class="fal fa-shopping-cart"></i>
                            </a>
                        @else
                            <a class="add-to-cart" href="{{ route('public.cart.add-to-cart') }}" data-id="{{ $product->id }}">
                                <i class="fal fa-shopping-cart"></i>
                            </a>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
@endforeach

@include(Theme::getThemeNamespace('views.ecommerce.includes.quick-view-modal'))
