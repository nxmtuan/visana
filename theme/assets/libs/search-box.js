$ = jQuery;
$(document).ready(function () {
    function removeAccents(str) {
        return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
    }

    let isDataLoaded = false;
    let isLoading = false;

    $(".js-input-form").on("click", function () {
        if (!isDataLoaded && !isLoading) {
            $("#spinner-search").show();
            isLoading = true;

            $.ajax({
                type: "POST",
                url: control_vars.ADMIN_AJAX_URL,
                data: {
                    action: 'load_visa_services'
                },
                success: function (response) {
                    const services = JSON.parse(response);
                    $("#myList").html(services.services_html);

                    $("#spinner-search").hide();
                    isDataLoaded = true;
                    isLoading = false;
                },
                error: function () {
                    $("#spinner-search").hide();
                    isLoading = false;
                }
            });
        }
    });

    $(".js-input-form").on("input", function () {
        var value = removeAccents($(this).val().toLowerCase());
        $(".js-list-service li").each(function () {
            var listItemText = removeAccents($(this).text().toLowerCase());
            $(this).toggle(listItemText.indexOf(value) > -1);
        });
    });

    $(document).on("click", function (event) {
        if (!$(event.target).closest(".js-block-ip-search").length) {
            $(".js-list-service").removeClass('visa-country');
        } else {
            $(".js-list-service").addClass('visa-country');
        }
    });

    var $list = $(".js-list-service");
    $list.children().detach().sort(function (a, b) {
        return removeAccents($(a).text()).localeCompare(removeAccents($(b).text()));
    }).appendTo($list);
});
