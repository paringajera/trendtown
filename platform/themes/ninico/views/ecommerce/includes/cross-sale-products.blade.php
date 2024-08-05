@php
$parentProduct = $product;
@endphp

@if($products->isNotEmpty())
    <div class="related-product-area pt-65 pb-50">
        <div class="tpsection mb-40">
            <h2 class="tpsection__title">{{ __('Buy with special price') }}</h2>
        </div>

        <div class="row row-cols-xxl-6 row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">
            @foreach($products as $product)
                <div class="col">
                    <div class="cross-sale-product tpproduct pb-15 mb-30">
                        <div class="tpproduct__thumb p-relative">
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
                                <img class="product-thumb-secondary" src="{{ RvMedia::getImageUrl(Arr::get($product->images, 2, $product->image), 'small', false, RvMedia::getDefaultImage()) }}" alt="{{ $product->name }}">
                            </a>
                        </div>
                        <div class="tpproduct__content">
                            <h3 class="tpproduct__title text-truncate">
                                <a href="{{ $product->url }}" title="{{ $product->name }}">{{ $product->name }}</a>
                            </h3>
                            <div class="small">
                                <div class="fw-bold">
                                    <span class="text-primary">{{ format_price($product->front_sale_price_with_taxes) }}</span>

                                    @if ($product->isOnSale())
                                        <span class="tpproduct__priceinfo-list-oldprice">{{ format_price($product->price_with_taxes) }}</span>
                                    @endif
                                </div>
                                @if(EcommerceHelper::isCartEnabled())
                                    @if ($product->variations()->exists())
                                        <a data-id="{{ $product->slug }}" href="{{ route('public.ajax.quick-shop', ['slug' => $product->slug, 'reference_product' => $parentProduct->slug]) }}" class="mt-2 btn button-quick-shop">
                                            <span>{{ __('Select options') }}</span>
                                        </a>
                                    @else
                                        <a data-id="{{ $product->id }}" href="{{ route('public.cart.add-to-cart') }}" class="mt-2 add-to-cart btn">
                                            <span>{{ __('Buy now at :price', ['price' => format_price($product->front_sale_price_with_taxes)]) }}</span>
                                        </a>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
