@if(request()->ajax())
    <script src="{{ Theme::asset()->url('js/countdown.js') }}"></script>
@endif

@include(Theme::getThemeNamespace("partials.shortcodes.deal-product.styles.$style"))
