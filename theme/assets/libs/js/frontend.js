/*
 * Kiểm tra định dạng email
 * 
 * added by hiennguyenduy (hiennd@ancu.com) at 2019-12-23
 */
var addTagsToFormDKTV = (outbound_product, tags) => {
    document.getElementById('form-dktv-country').value = outbound_product;
    document.getElementById('form-dktv-tags').value = tags;
}

/**
 * Kiểm tra định dạng email
 * 
 * added by hiennguyenduy (hiennd@ancu.com) at 2019-12-23
 */
var checkEmail = (email) => {
    var regex = RegExp(/^[a-z0-9][a-z0-9_\.]{0,30}@[a-z0-9\-\.]{2,}(\.[a-z]{2,9}){1,2}$/gm);
    return regex.test(email);
}

/**
 * Lưu cookie
 * 
 * added by hiennguyenduy (hiennd@ancu.com) at 2019-12-23
 */
var setCookie = (cname, cvalue, exdays) => {
    var d = new Date();
    d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires + "; path=/";
}

/**
 * Lấy cookie
 * 
 * added by hiennguyenduy (hiennd@ancu.com) at 2019-12-23
 */
var getCookie = (cname) => {
    var name = cname + "=";
    var ca = document.cookie.split(";");
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == " ") {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}

/*
 * Format number
 * added by hiennguyenduy (hiennd@gmail.com) at 2022-02-10
 */
var formatNumber = function (n, c, d, t) {
    var c = isNaN(c = Math.abs(c)) ? 2 : c,
        d = d === undefined ? '.' : d,
        t = t === undefined ? ',' : t,
        s = n < 0 ? '-' : '',
        i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
        j = (j = i.length) > 3 ? j % 3 : 0;

    return s + (j ? i.substr(0, j) + t : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, '$1' + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : '');
};

/*
 * Set local storage
 * added by hiennguyenduy (hiennd@gmail.com) at 2021-08-30
 */
var setStore = (name, content) => {
    if (!name) return false;

    if (typeof content !== 'string') {
        content = JSON.stringify(content);
    }

    return window.localStorage.setItem(name, content);
}

/*
 * Get local storage
 * added by hiennguyenduy (hiennd@gmail.com) at 2021-08-30
 */
var getStore = (name) => {
    if (!name) return false;

    return window.localStorage.getItem(name);
}

/*
 * Clear local storage
 * added by hiennguyenduy (hiennd@gmail.com) at 2021-08-30
 */
var removeItem = (name) => {
    if (!name) return
    return window.localStorage.removeItem(name)
}

/*
 * Check empty
 * added by hiennguyenduy (hiennd@gmail.com) at 2021-09-13
 */
var isEmpty = (value) => {
    if (!value) return true;

    return false;
}

/*
 * Check email
 * added by hiennguyenduy (hiennd@gmail.com) at 2021-09-13
 */
var isEmail = (email) => {
    // eslint-disable-next-line
    re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    return re.test(email);
}
/*
 * Check length
 * added by hiennguyenduy (hiennd@gmail.com) at 2021-09-13
 */
var isLength = (password) => {
    if (password.length < 6) return true;

    return false;
}

/*
 * Check match
 * added by hiennguyenduy (hiennd@gmail.com) at 2021-09-13
 */
var isMatch = (password, confirmPassword) => {
    if (password === confirmPassword) return true;

    return false;
}

$(document).on('input', '.elementor-form input[type="e mail"]', function () {
    var emailField = $(this);
    var submitButton = emailField.closest('form').find('button[type="submit"], input[type="submit"]');
    var emailValue = emailField.val();

    var regex = /test|@example\.com/i;

    if (regex.test(emailValue)) {
        submitButton.prop('disabled', true);
    } else {
        submitButton.prop('disabled', false);
    }
});
document.addEventListener("DOMContentLoaded", function () {
    if (sessionStorage.getItem("hide_hbar") !== "true") {
        document.querySelector(".header-bar-text-apply").classList.add("show");
    }

    document.querySelector(".close-hbar").addEventListener("click", function () {
        document.querySelector(".header-bar-text-apply").style.display = "none";
        sessionStorage.setItem("hide_hbar", "true");
    });
});

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".lazy-load-audio").forEach((button) => {
        button.addEventListener("click", function () {
            let audio = this.nextElementSibling;
            let src = this.getAttribute("data-src");
            let audioPlayer = this.closest(".audio_player");

            if (!audio.src) {
                audio.src = src;
                audio.load();
            }

            this.style.display = "none";
            audio.style.display = "block";
            audio.play();

            audioPlayer.classList.add("active");
        });
    });
});
