(function(window, document, $) {
    'use strict';
    var W = $(window),
        D = $(document);


    $(function() {
        var B = $('body');

        B.on('click', '.add-pricing-chart', function(e) {
            e.preventDefault();
            var $div      = $(this).closest('div'),
                $table    = $div.find('table.pricing-chart-table tbody'),
                qty       = parseInt($div.find('.pricing-chart-qty').val()),
                price     = parseFloat($div.find('.pricing-chart-price').val());

            /**
             * Check if qty is lesser than or equal to 0
             * or price is lesser than or equal to 0
             * return if true
             */


            if (qty <= 0 || price <= 0) return;
            console.log(qty +' '+ price);
            console.log($table);
            $table.append('<tr><td>'+ qty.toString() +'</td><td>'+ price.toString() +'</td></tr>');

        });
    });

})(window, document, jQuery);
