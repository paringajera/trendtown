$(() => {
    $(document).on('keyup', '#store_order_prefix', (event) => {
        if ($(event.currentTarget).val()) {
            $('.sample-order-code-prefix').text($(event.currentTarget).val() + '-')
        } else {
            $('.sample-order-code-prefix').text('')
        }
    })

    $(document).on('keyup', '#store_order_suffix', (event) => {
        if ($(event.currentTarget).val()) {
            $('.sample-order-code-suffix').text('-' + $(event.currentTarget).val())
        } else {
            $('.sample-order-code-suffix').text('')
        }
    })

    $('.trigger-input-option').on('change', function () {
        let $settingContentContainer = $($(this).data('setting-container'))
        if ($(this).val() == '1') {
            $settingContentContainer.removeClass('d-none')
            Botble.initResources()
        } else {
            $settingContentContainer.addClass('d-none')
        }
    })
})
