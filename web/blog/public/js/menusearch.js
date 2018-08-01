$(function() {
    if ($(".filter-input").length > 0) {
        var $filterInput = $(".filter-input"),
            $filterList = $("ul.filter-list li a.dropdown-item"),
            $clearList = $(".clear-filter");
        $clearList.hide();
        $filterInput.on("keyup", function() {
            var value = $(this)
                .val()
                .toLowerCase();
            $filterList.filter(function() {
                $(this).toggle(
                    $(this)
                        .text()
                        .toLowerCase()
                        .indexOf(value) > -1
                );
                $clearList.show();
                if (!$filterInput.val().length) {
                    $clearList.hide();
                }
            });
        });

        $clearList.on("click", function() {
            $(this).hide();
            $filterInput.val("");
            $filterList.fadeIn();
        });
    }
});