<div class="product-sidebar__widget mb-30">
    <div class="product-sidebar__info">
        <h4 class="product-sidebar__title mb-20">{{ $set->title }}</h4>
        <div class="dropdown-swatch">
            <label>
                <select name="attributes[{{ $set->slug }}][]" class="form-select">
                    <option value="">{{ __('-- Select --') }}</option>
                    @foreach($attributes->where('attribute_set_id', $set->id) as $attribute)
                        <option value="{{ $attribute->id }}" @selected(in_array($attribute->id, $selected))>{{ $attribute->title }}</option>
                    @endforeach
                </select>
            </label>
        </div>
    </div>
</div>
