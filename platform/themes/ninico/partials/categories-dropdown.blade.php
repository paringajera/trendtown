@php
    $groupedCategories = $categories->groupBy('parent_id');

    $currentCategories = $groupedCategories->get(0);
    $limit = theme_option('ecommerce_header_categories_limit', 10);
@endphp

@if($currentCategories)
    @php
        $hasMoreCategories = $currentCategories->count() > $limit + 1;
    @endphp

    <div class="cat-menu__category p-relative">
        @if (theme_option('collapsing_product_categories_on_homepage', 'no') == 'yes')
            <a class="tp-cat-toggle js-tp-cat-toggle" href="#" title="Expand/Collapse">
                <i class="fal fa-bars"></i> {{ __('Categories') }}
            </a>
        @else
            <span class="tp-cat-toggle">
                <i class="fal fa-bars"></i> {{ __('Categories') }}
            </span>
        @endif
        <div class="category-menu category-menu-off" @style(['display: none !important' => theme_option('collapsing_product_categories_on_homepage', 'no') == 'yes'])>
            <ul class="cat-menu__list">
                @foreach ($currentCategories as $category)
                    @php
                        $hasChildren = $groupedCategories->has($category->id);
                    @endphp
                    <li @class(['menu-item-has-children' => $hasChildren, 'hidden-to-toggle' => $hasMoreCategories ? $loop->iteration > $limit : $loop->iteration > $limit + 1])>
                        <a href="{{ route('public.single', $category->url) }}">
                            @if ($categoryImage = $category->icon_image)
                                <img src="{{ RvMedia::getImageUrl($categoryImage) }}" alt="{{ $category->name }}" width="18" height="18" class="me-1">
                            @elseif ($categoryIcon = $category->icon)
                                <i class="{{ $categoryIcon }}"></i>
                            @endif
                            {{ $category->name }}
                        </a>
                        @if($hasChildren && $currentCategories = $groupedCategories->get($category->id))
                            <ul class="submenu">
                                @foreach($currentCategories as $childCategory)
                                    <li><a href="{{ route('public.single', $childCategory->url ) }}">{{ $childCategory->name }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
            @if($hasMoreCategories)
                <div class="more-categories">
                    {{ __('More Categories') }}
                </div>
            @endif
        </div>
    </div>
@endif
