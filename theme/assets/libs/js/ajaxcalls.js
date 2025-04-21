$.urlParam = function (name) {
    var results = new RegExp("[?&]" + name + "=([^&#]*)").exec(window.location.href);
    if (results == null) {
        return null;
    }
    return decodeURI(results[1]) || 0;
};
var medium = "";
var utm_source = $.urlParam("utm_source");
var utm_medium = $.urlParam("utm_medium");
var utm_campaign = $.urlParam("utm_campaign");
if (utm_source != null && utm_source != "" && utm_medium != null && utm_medium != "" && utm_campaign != null && utm_campaign != "") {
    medium = "utm_source=" + utm_source + "&utm_medium=" + utm_medium + "&utm_campaign=" + utm_campaign;
}
if (medium != "") {
    setCookie("medium", medium, 15);
}

$ = jQuery;
$(document).ready(function () {
    // Loại bỏ border cảnh báo lỗi của input
    $(".feild_required").focus(function (event) {
        $(this).removeClass("border-danger");
    });

    // Đóng form popup
    $(".close_modal").click(function (event) {
        var modal_content = $(this).closest(".modal-content");
        modal_content.find(".block-form").removeClass("active hide").addClass("active");
        modal_content.find(".block-finish").removeClass("active hide").addClass("hide");
    });

    // Show form popup đsq
    $(".btn-update").on("click", function (event) {
        var title = $(this).parent().find(".vnb_eb_title").text();
        $(".form-title-dsq ").val(title);
        $("#modal-update-info").modal();
    });

    /*
     * Đăng ký form tư vấn
     * 
     * added by hiennguyenduy (hiennd@ancu.com) at 2021-08-19
     * @contributor Huy (huytv@ancu.com)
     * @contributor Thành (thanhvt@ancu.com)
     */
    $(".btn-push-fs").click(function (e) {
        e.preventDefault();

        var register = $(this).closest("#register");
        var name = $.trim(register.find("input[name=fullname]").val());
        var email = $.trim(register.find("input[name=your-email]").val());
        var phone = $.trim(register.find("input[name=phone]").val());
        phone = phone.replace(/[^\d\+]/g, "");
        var customer_note = $.trim(register.find("textarea[name=content]").val());
        var country = register.find("input[name=form-dktv-country]").val();
        var vidiProduct = register.find("input[name=vidiProduct]").val();
        var tags = register.find("input[name=form-dktv-tags]").val();
        var medium = getCookie("medium");
        var url = window.location.href;
        var notes = "KH ĐK form Tư Vấn \n";
        notes += "Họ Tên: " + name + " \n";
        notes += "Mobile: " + phone + " \n";
        notes += "Nội dung: " + customer_note + " \n";
        notes += "Form URL: " + url;

        var numErr = 0;
        register.find(".feild_required").each(function (index, el) {
            if (!$.trim($(this).val())) {
                numErr++;
                $(this).addClass("border-danger");
            }
        });

        var email_status = checkEmail(email);
        if (!email_status) {
            register.find("input[name=your-email]").addClass("border-danger");
            register.find(".your-email").attr("data-tip", "Email không hợp lệ");
            setTimeout(function () {
                register.find(".your-email").removeAttr("data-tip");
            }, 3000);
            return false;
        }

        if (numErr == 0) {
            register.find(".email_msg").text("");

            // bắt buộc phải có recaptcha
            var ggReCaptcha = $("#ggReCaptcha").val();

            grecaptcha.ready(function () {
                grecaptcha.execute(ggReCaptcha, { action: "submit" }).then(function (token) {
                    $.ajax({
                        type: "POST",
                        url: control_vars.ADMIN_AJAX_URL,
                        data: {
                            action: "post_to_fs",
                            page_url: url,
                            form_title: "KH ĐK form Tư Vấn",
                            name: name,
                            email: email,
                            phone: phone,
                            vidiProduct: vidiProduct,
                            customer_note: customer_note,
                            medium: medium,
                            notes: notes,
                            campaign_id: "3946",
                            gg_response: token,
                            country: country,
                            tags: tags,
                        },
                        dataType: "json",
                        cache: false,
                        beforeSend: function beforeSend() {
                            register.find(".error-captcha").text("");
                            register.find(".loading-on-modal").removeClass("d-none");
                            register.find(".mask-modal").removeClass("d-none");
                        },
                        success: function success(response) {
                            if (response.status) {
                                register.find(".loading-on-modal").addClass("d-none");
                                register.find(".mask-modal").addClass("d-none");
                                register.find(".block-dktv").removeClass("active").addClass("hide");
                                register.find(".block-finish").removeClass("hide").addClass("active");
                            } else {
                                register.find(".loading-on-modal").addClass("d-none");
                                register.find(".mask-modal").addClass("d-none");
                                register.find('.error-captcha').text(response.messages).css('color', 'red');
                            }
                        },
                        error: function error(response) {
                            register.find(".loading-on-modal").addClass("d-none");
                            register.find(".mask-modal").addClass("d-none");
                        }
                    });
                });
            });
        } else {
            return false;
        }
    });

    /*
     * Đăng ký download tài liệu visa
     * 
     * added by hiennguyenduy (hiennd@ancu.com) at 2021-08-19
     * @contributor Huy (huytv@ancu.com)
     * @contributor Thành (thanhvt@ancu.com)
     */
    $(".btn-download").click(function (e) {
        e.preventDefault();

        var download = $(this).closest("#download");
        var personal_title = download.find("select[name=gender]").val();
        var name = $.trim(download.find("input[name=fullname]").val());
        var email = $.trim(download.find("input[name=your-email]").val());
        var phone = $.trim(download.find("input[name=phone]").val());
        phone = phone.replace(/[^\d\+]/g, "");
        var visa = download.find("input[name=VISA]").val();
        var list_id = download.find("input[name=listId]").val();
        var temp_id = download.find("input[name=tempId]").val();
        var country = download.find("input[name=country]").val();
        var vidiProduct = download.find("input[name=vidiProduct]").val();
        var medium = getCookie("medium");
        var url = window.location.href;
        var notes = "KH ĐK form Download \n";
        notes += "Họ Tên: " + name + " \n";
        notes += "Mobile: " + phone + " \n";
        notes += "Form URL: " + url;
        var tags = download.find("input[name=tags]").val();
        var lead_source_by_service = download.find("input[name=lead_source_by_service]").val();

        var numErr = 0;
        download.find(".feild_required").each(function (index, el) {
            if (!$.trim($(this).val())) {
                numErr++;
                $(this).addClass("border-danger");
            }
        });

        var email_status = checkEmail(email);
        if (!email_status) {
            download.find("input[name=your-email]").addClass("border-danger");
            download.find(".your-email").attr("data-tip", "Email không hợp lệ");
            setTimeout(function () {
                download.find(".your-email").removeAttr("data-tip");
            }, 3000);
            return false;
        }

        if (numErr == 0) {
            download.find(".email_msg").text("");

            // bắt buộc phải có recaptcha
            var ggReCaptcha = $("#ggReCaptcha").val();

            grecaptcha.ready(function () {
                grecaptcha.execute(ggReCaptcha, { action: "submit" }).then(function (token) {
                    $.ajax({
                        type: "POST",
                        url: control_vars.ADMIN_AJAX_URL,
                        data: {
                            action: "post_to_fs",
                            page_url: url,
                            form_title: "KH ĐK form Download",
                            download_file: "yes",
                            visa: visa,
                            list_id: list_id,
                            temp_id: temp_id,
                            country: country,
                            vidiProduct: vidiProduct,
                            name: name,
                            email: email,
                            phone: phone,
                            medium: medium,
                            notes: notes,
                            personal_title: personal_title,
                            campaign_id: "3931",
                            gg_response: token,
                            tags: tags,
                            lead_source_by_service: lead_source_by_service,
                        },
                        dataType: "json",
                        cache: false,
                        beforeSend: function beforeSend() {
                            download.find(".error-captcha").text("");
                            download.find(".loading-on-modal").removeClass("d-none");
                            download.find(".mask-modal").removeClass("d-none");
                        },
                        success: function success(response) {
                            if (response.status) {
                                download.find(".loading-on-modal").addClass("d-none");
                                download.find(".mask-modal").addClass("d-none");
                                download.find(".block-dktv").removeClass("active").addClass("hide");
                                download.find(".block-finish").removeClass("hide").addClass("active");
                            } else {
                                download.find(".loading-on-modal").addClass("d-none");
                                download.find(".mask-modal").addClass("d-none");
                                download.find('.error-captcha').text(response.messages).css('color', 'red');
                            }
                        },
                        error: function error(response) {
                            download.find(".loading-on-modal").addClass("d-none");
                            download.find(".mask-modal").addClass("d-none");
                        }
                    });
                });
            });
        } else {
            return false;
        }
    });

    /*
     * Yêu cầu chỉnh sửa form ĐSQ
     * 
     * added by hiennguyenduy (hiennd@ancu.com) at 2021-08-20
     * @contributor Thành (thanhvt@ancu.com)
     */
    $(".btn-update-dsq").on("click", function (e) {
        e.preventDefault();

        var embassy = $(this).closest("#modal-update-info");
        var name = embassy.find(".form-name-dsq").val();
        var phone = embassy.find(".form-phone-dsq").val();
        var email = embassy.find(".form-email-dsq").val();
        var msg = embassy.find(".form-msg-dsq").val();
        var country = embassy.find(".form-country-dsq").val();

        var url = window.location.href;
        var notes = "KH Cập nhật thông tin ĐSQ \n";
        notes += "Họ Tên: " + name + " \n";
        notes += "Phone: " + phone + " \n";
        notes += "Email: " + email + " \n";
        notes += "Nội dung cập nhật: " + msg + " \n";
        notes += "Form URL: " + url;

        var numErr = 0;
        embassy.find(".feild_required").each(function (index, el) {
            if (!$.trim($(this).val())) {
                numErr++;
                $(this).addClass("border-danger");
            }
        });

        var email_status = checkEmail(email);
        if (!email_status) {
            embassy.find(".form-email-dsq").addClass("border-danger");
            embassy.find(".your-email").attr("data-tip", "Email không hợp lệ");
            setTimeout(function () {
                embassy.find(".your-email").removeAttr("data-tip");
            }, 3000);
            return false;
        }

        if (numErr == 0) {
            embassy.find(".email_msg").text("");

            // bắt buộc phải có recaptcha
            var ggReCaptcha = $("#ggReCaptcha").val();

            grecaptcha.ready(function () {
                grecaptcha.execute(ggReCaptcha, { action: "submit" }).then(function (token) {
                    $.ajax({
                        type: "POST",
                        url: control_vars.ADMIN_AJAX_URL,
                        data: {
                            action: "post_to_fs",
                            page_url: url,
                            form_title: "KH Cập nhật thông tin ĐSQ",
                            name: name,
                            email: email,
                            phone: phone,
                            notes: notes,
                            country: country,
                            gg_response: token,
                        },
                        dataType: "json",
                        cache: false,
                        beforeSend: function beforeSend() {
                            embassy.find(".error-captcha").text("");
                        },
                        success: function success(response) {
                            if (response.status) {
                                embassy.find(".block-dktv").removeClass("active").addClass("hide");
                                embassy.find(".block-finish").removeClass("hide").addClass("active");
                            } else {
                                embassy.find('.error-captcha').text(response.messages).css('color', 'red');
                            }
                        },
                        error: function error(response) {
                        }
                    });
                });
            });
        } else {
            return false;
        }
    });

    /*
     * Đăng ký mua Sim
     * 
     * added by hiennguyenduy (hiennd@ancu.com) at 2021-08-19
     * @contributor Thành (thanhvt@ancu.com)
     */
    $(".dk_sim").on("click", function (e) {
        e.preventDefault();

        var modal_sim = $(this).closest("#modalSim");

        var name = modal_sim.find("input[name=fullname]").val();
        var phone = modal_sim.find("input[name=phone]").val();
        phone = phone.replace(/[^\d\+]/g, "");
        var email = modal_sim.find("input[name=your-email]").val();
        var sim_type = modal_sim.find("select[name=sim_type] option:selected").text();
        var sim_number = modal_sim.find("input[name=sim-number]").val();
        var form_url = window.location.href;

        var notes = "";
        notes = "KH ĐK mua Sim \n";
        notes += "Họ Tên: " + name + " \n";
        notes += "Mobile: " + phone + " \n";
        notes += "Loại sim: " + sim_type + " \n";
        notes += "Số lượng: " + sim_number + " \n";
        notes += "Form URL: " + form_url;

        var numErr = 0;
        modal_sim.find(".feild_required").each(function (index, el) {
            if (!$.trim($(this).val())) {
                numErr++;
                $(this).addClass("border-danger");
            }
        });

        var email_status = checkEmail(email);
        if (!email_status) {
            modal_sim.find("input[name=your-email]").addClass("border-danger");
            modal_sim.find(".your-email").attr("data-tip", "Email không hợp lệ");
            setTimeout(function () {
                modal_sim.find(".your-email").removeAttr("data-tip");
            }, 3000);
            return false;
        }

        if (numErr == 0) {
            modal_sim.find(".email_msg").text("");

            // bắt buộc phải có recaptcha
            var ggReCaptcha = $("#ggReCaptcha").val();

            grecaptcha.ready(function () {
                grecaptcha.execute(ggReCaptcha, { action: "submit" }).then(function (token) {
                    $.ajax({
                        type: "POST",
                        url: control_vars.ADMIN_AJAX_URL,
                        data: {
                            action: "post_to_fs",
                            page_url: form_url,
                            form_title: "KH ĐK mua Sim",
                            name: name,
                            email: email,
                            phone: phone,
                            notes: notes,
                            gg_response: token,
                        },
                        dataType: "json",
                        cache: false,
                        beforeSend: function beforeSend() {
                            modal_sim.find(".error-captcha").text("");
                            modal_sim.find(".loading-on-modal").removeClass("d-none");
                            modal_sim.find(".mask-modal").removeClass("d-none");
                        },
                        success: function success(response) {
                            if (response.status) {
                                modal_sim.find(".loading-on-modal").addClass("d-none");
                                modal_sim.find(".mask-modal").addClass("d-none");
                                modal_sim.find(".block-dksim").removeClass("active").addClass("hide");
                                modal_sim.find(".block-finish").removeClass("hide").addClass("active");
                            } else {
                                modal_sim.find(".loading-on-modal").addClass("d-none");
                                modal_sim.find(".mask-modal").addClass("d-none");
                                modal_sim.find('.error-captcha').text(response.messages).css('color', 'red');
                            }
                        },
                        error: function error(response) {
                            modal_sim.find(".loading-on-modal").addClass("d-none");
                            modal_sim.find(".mask-modal").addClass("d-none");
                        }
                    });
                });
            });
        } else {
            return false;
        }
    });

    /*
     * Đăng ký tư vấn (form từ shortcode: form_dang_ky)
     * 
     * added by hiennguyenduy (hiennd@ancu.com) at 2021-08-21
     * @contributor Thành (thanhvt@ancu.com)
     */
    $(".btn-send").on("click", function (e) {
        e.preventDefault();

        var form_dktv = $(this).closest(".form-signup-advice");

        var name = $.trim(form_dktv.find("input[name=fullname]").val());
        var email = $.trim(form_dktv.find("input[name=your-email]").val());
        var phone = $.trim(form_dktv.find("input[name=phone]").val());
        phone = phone.replace(/[^\d\+]/g, "");
        var customer_note = $.trim(form_dktv.find("input[name=content]").val());
        var medium = getCookie("medium");
        var url = window.location.href;
        var notes = "KH ĐK form Tư Vấn \n";
        notes += "Họ Tên: " + name + " \n";
        notes += "Mobile: " + phone + " \n";
        notes += "Nội dung: " + customer_note + " \n";
        notes += "Form URL: " + url;

        var country = form_dktv.find("input[name=country]").val();
        var tags = form_dktv.find("input[name=tags]").val();

        var numErr = 0;
        form_dktv.find(".feild_required").each(function (index, el) {
            if (!$.trim($(this).val())) {
                numErr++;
                $(this).addClass("border-danger");
            }
        });

        var email_status = checkEmail(email);
        if (!email_status) {
            form_dktv.find("input[name=your-email]").addClass("border-danger");
            form_dktv.find(".your-email").attr("data-tip", "Email không hợp lệ");
            setTimeout(function () {
                form_dktv.find(".your-email").removeAttr("data-tip");
            }, 3000);
            return false;
        }

        if (numErr == 0) {
            form_dktv.find(".email_msg").text("");

            // bắt buộc phải có recaptcha
            var ggReCaptcha = $("#ggReCaptcha").val();

            grecaptcha.ready(function () {
                grecaptcha.execute(ggReCaptcha, { action: "submit" }).then(function (token) {
                    $.ajax({
                        type: "POST",
                        url: control_vars.ADMIN_AJAX_URL,
                        data: {
                            action: "post_to_fs",
                            page_url: url,
                            form_title: "KH ĐK form Tư Vấn (shortcode: form_dang_ky)",
                            name: name,
                            email: email,
                            phone: phone,
                            customer_note: customer_note,
                            medium: medium,
                            notes: notes,
                            campaign_id: "3946",
                            gg_response: token,
                            country: country,
                            tags: tags,
                        },
                        dataType: "json",
                        cache: false,
                        beforeSend: function beforeSend() {
                            form_dktv.find(".error-captcha").text("");
                        },
                        success: function success(response) {
                            if (response.status) {
                                form_dktv.find('.success-captcha').text("Cảm ơn bạn đã đăng kí tư vấn. Chúng tôi đã nhận được và đang xem xét xử lý. Trân trọng!").css('color', 'green');
                            } else {
                                form_dktv.find('.error-captcha').text(response.messages).css('color', 'red');
                            }
                        },
                        error: function error(response) {
                        }
                    });
                });
            });
        } else {
            return false;
        }
    });

    /*
     * Render tour gallery
     *
     * added by hiennguyenduy (hiennd@ancu.com) at 2022-03-25
     */
    $(".vsn-tour-galery__readmore").on("click", function (e) {
        e.preventDefault();

        var that, prop_id, flag;

        that = $(this);
        prop_id = that.attr("data-propid");
        flag = that.attr("data-flag");

        // Kiểm tra điều kiện
        if (prop_id === undefined || flag === undefined) {
            return false;
        }

        if (flag == "true") {
            $(".lightgallery").lightGallery();
            $(".lightgallery img").trigger("click");
        } else {
            $.ajax({
                type: "POST",
                url: control_vars.ADMIN_AJAX_URL,
                data: {
                    "action": "render_tour_gallery",
                    "prop_id": prop_id,
                },
                dataType: "json",
                success: function (response) {
                    that.attr("data-flag", "true");

                    $(".lightgallery").html(response.data_html)
                    $(".lightgallery").lightGallery();
                    $(".lightgallery img").trigger("click");
                },
                error: function (errorThrown) { }
            });
        }
    });

    /*
     * Sign up for a consultation
     *
     * added by hiennguyenduy (hiennd@ancu.com) at 2022-03-25
     */
    $(".btn-tour-signup-consultation").on("click", function (e) {
        e.preventDefault();

        var that = $(this);
        var formSignupConsultation = that.closest("#ocSignupConsultation");
        var form_title = formSignupConsultation.find(".form-title").val();
        var page_url = formSignupConsultation.find(".page-url").val();
        var product_title = formSignupConsultation.find(".product-title").val();

        var your_name = formSignupConsultation.find(".your-name").val();
        var your_email = formSignupConsultation.find(".your-email").val();
        var your_phone = formSignupConsultation.find(".your-phone").val();
        var your_customers = formSignupConsultation.find(".your-customers").val();
        var your_start_date = formSignupConsultation.find(".your-start-date").val();
        var your_note = formSignupConsultation.find(".your-note").val();

        var product = formSignupConsultation.find(".product").val();
        var tags = formSignupConsultation.find(".tags").val();
        var vidiProduct = formSignupConsultation.find("input[name=vidiProduct]").val();
        var ggReCaptcha = $("#ggReCaptcha").val();

        // Check validity
        var formCheckValidity = formSignupConsultation.find(".needs-validation")[0];
        if (!formCheckValidity.checkValidity()) {
            formSignupConsultation.find(".gg-results").text("");
            formCheckValidity.classList.add('was-validated');
            return false;
        }

        that.attr('disabled', true);

        grecaptcha.ready(function () {
            grecaptcha.execute(ggReCaptcha, { action: "submit" }).then(function (token) {
                $.ajax({
                    type: "POST",
                    url: control_vars.ADMIN_AJAX_URL,
                    data: {
                        action: "tour_signup_consultation",
                        page_url: page_url,
                        form_title: form_title + ' TOUR: ' + product_title,
                        gg_response: token,
                        your_name: your_name,
                        your_email: your_email,
                        your_phone: your_phone,
                        your_customers: your_customers,
                        your_start_date: your_start_date,
                        your_note: your_note,
                        vidiProduct: vidiProduct,
                        tags: tags,
                    },
                    dataType: "json",
                    cache: false,
                    beforeSend: function () {
                        that.find(".__spinner").removeClass('d-none');
                    },
                    success: function (response) {
                        that.attr('disabled', false);
                        that.find(".__spinner").addClass('d-none');
                        if (response.status) {
                            formSignupConsultation.find(".your-name").val('');
                            formSignupConsultation.find(".your-phone").val('');
                            formSignupConsultation.find(".your-email").val('');
                            formSignupConsultation.find(".your-customers").val('');
                            formSignupConsultation.find(".your-start-date").val('');
                            formSignupConsultation.find(".your-note").val('');
                            formSignupConsultation.find("input[name=vidiProduct]").val('');

                            formSignupConsultation.find(".gg-results").addClass('text-success');
                            formSignupConsultation.find(".gg-results").text(response.messages);

                            formCheckValidity.classList.remove('was-validated');
                        } else {
                            formSignupConsultation.find(".gg-results").addClass('text-danger');
                            formSignupConsultation.find(".gg-results").text(response.messages);
                        }
                    },
                    error: function (errorThrown) { }
                });
            });
        });
    });
});