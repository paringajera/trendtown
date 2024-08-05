<div class="product-sidebar__widget mb-30">
    <div class="product-sidebar__info">
        <h4 class="product-sidebar__title mb-20">{{ $set->title }}</h4>
        <ul class="text-swatch">
            @foreach($attributes->where('attribute_set_id', $set->id) as $attribute)
                <li>
                    <label>
                        <input class="product-filter-item" type="checkbox" name="attributes[{{ $set->slug }}][]" value="{{ $attribute->id }}" @checked(in_array($attribute->id, $selected))>
                        <span>{{ $attribute->title }}</span>
                    </label>
                </li>
            @endforeach
        </ul>
    </div>
</div>
