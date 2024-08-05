<div class="product-sidebar__widget mb-30">
    <div class="product-sidebar__info">
        <h4 class="product-sidebar__title mb-20">{{ $set->title }}</h4>
        <div>
            @foreach($attributes->where('attribute_set_id', $set->id) as $attribute)
                <div class="form-check">
                    <input class="form-check-input" style="{{ $attribute->getAttributeStyle() }}" type="checkbox" id="{{ $set->slug }}-filter-{{ $attribute->id }}" name="attributes[{{ $set->slug }}][]" value="{{ $attribute->id }}" @checked(in_array($attribute->id, $selected))>
                    <label class="form-check-label" for="{{ $set->slug }}-filter-{{ $attribute->id }}">
                        {{ $attribute->title }}
                    </label>
                </div>
            @endforeach
        </div>
    </div>
</div>
