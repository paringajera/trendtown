$((function(){$(document).on("click",".invoice-generate",(function(e){e.preventDefault();var t=$(e.currentTarget),a=$(t.find("span[data-trigger]")).data("url");$httpClient.make().withButtonLoading(t).get(a).then((function(e){var t=e.data;Botble.showSuccess(t.message),window.LaravelDataTables["botble-ecommerce-tables-invoice-table"].draw()}))}))}));