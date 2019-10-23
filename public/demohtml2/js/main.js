(function ($) {
    "use strict";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.datepicker').datepicker({
        dateFormat: 'mm/dd/yy'
    });
    $('#phone').blur(function () {
        checkPhone($(this));
    });

    $('#email').blur(function () {
        checkEmail($(this));
    });
    function validateEmail(email) {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }
    function checkPhone(obj) {
        var mobile = obj.val();
        var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;

        if (mobile !== '') {
            if (vnf_regex.test(mobile) == false) {
                obj.next().html('Sá»‘ Ä‘iá»‡n thoáº¡i khĂ´ng há»£p lá»‡.').show();
                return false;
            } else {
                obj.next().hide();
                return true;
            }
        } else {
            obj.next().html('Vui lĂ²ng nháº­p sá»‘ Ä‘iá»‡n thoáº¡i.').show();
            return false;
        }
    }
    function checkEmail(obj) {
        if (obj.val() == "") {
            obj.next().html('Vui lĂ²ng nháº­p Ä‘á»‹a chá»‰ email.').show();
            return false;
        }
        if (!validateEmail(obj.val())) {
            obj.next().html('Äá»‹a chá»‰ email khĂ´ng há»£p lá»‡.').show();
            return false;
        } else {
            obj.next().hide();
            return true;
        }
    }

    // Change viewport
    function ChangeWiewport() {
        if (screen.width < 750) {
            $("#viewport").attr("content", "width=750");
        } else {
            $("#viewport").attr("content", "width=device-width, initial-scale=1");
        }
    }
    ChangeWiewport();
    $(window).resize(function () {
        ChangeWiewport();
    });

    // Zoom Web on in all browser
    function Zoom() {
        var winHeight = $(window).height();
        var zoom = 1;
        var bodyMaxHeightHome = 1331;
        var bodyMaxHeight = 782;
        var zoom_home = winHeight / bodyMaxHeightHome;
        zoom = winHeight / bodyMaxHeight;
        /* Firefox */
        var winWidth = $(window).width();
        var widthFirefox = winWidth / zoom;
        var widthFirefox_home = winWidth / zoom_home;
        var winWidths = $(window).height();

        $('body').each(function () {
            if ($(this).is("#kl_home")) {
                if (navigator.userAgent.indexOf("Firefox") != -1) {
                    $('#Zoom').css({
                        '-moz-transform': 'scale(' + zoom_home + ')',  /* Firefox */
                        'transform-origin': '0 0',
                        'width': widthFirefox_home,
                    });
                } else {
                    $('#Zoom').css({
                        'zoom': zoom_home,
                    });
                }
            } else {
                if (navigator.userAgent.indexOf("Firefox") != -1) {
                    $('#Zoom').css({
                        '-moz-transform': 'scale(' + zoom + ')',  /* Firefox */
                        'transform-origin': '0 0',
                        'width': widthFirefox,
                    });
                } else {
                    $('#Zoom').css({
                        'zoom': zoom,
                    });
                }
            }
        });
    }
    Zoom();
    $(window).on('load resize', function () {
        Zoom();
    });

    // Slider Rewards
    $('.kl_autoplay').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
    });
    function getContent(id) {
        $.ajax({
            url: $('#route_get_content').val(),
            type: "GET",
            async: false,
            data: {
                id: id
            },
            dataType: 'json',
            success: function (data) {

                $('.title-page').html(data.title);
                $('#content-page').html(data.content);
            }
        });
    }
    $('a.load-content').click(function () {
        getContent($(this).data('id'));
        $('li.kl_content_item').removeClass('kl_content_item_active');
        $(this).parent('li.kl_content_item').addClass('kl_content_item_active');
    });
    $("input.number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
            // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
            // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
    function quayso() {
        var numberArr = Array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
        $('.number-list .number').each(function () {
            $(this).html(numberArr[Math.floor(Math.random() * numberArr.length)]);
        });
    }

    $('#btnQuayNgay').click(function () {

        var myQuaySo = setInterval(quayso, 30);
        setTimeout(function () {
            clearInterval(myQuaySo);
        }, 3000);
        setTimeout(function () {
            checkNo();
        }, 2000);
    });
    $('#code').keypress(function (e) {
        if (e.which == 13) {
            $('#btnQuayNgay').click();
        }
    });
    function checkNo() {
        var code = $('#code').val();
        $.ajax({
            url: $('#route_check_no').val(),
            type: "GET",
            async: false,
            data: {
                code: code
            },
            dataType: 'json',
            success: function (data) {
                if (data.success == 0) {
                    $('#wrongModal').modal('show');
                } else if (data.success == 1) {
                    $('#success_image').attr('src', data.popup_image_url);
                    $('#success_image').attr('alt', data.name);
                    $('#success_code').html(data.code);
                    $('#successModal').modal('show');
                } else if (data.success == 2) {
                    $('#loseModal').modal('show');
                    $("#losing_video")[0].src += "&autoplay=1";
                    $("#losing_video")[0].allow = "autoplay";
                }
            }
        });
    }
    $('button.close').click(function () {
        $('#code').val('');
        $('.number-list span.number').html(0);
    });
    $(document).on('click', '#btnNhanSo, a.btnNhanSo', function () {
        $('.modal').modal('hide');
        $('#infoModal').modal('show');
    });
    $(document).on('click', 'a.btnConfirm', function () {
        $('.modal').modal('hide');
        $('#confirmModal').modal('show');
    });
    $('#btnSend2').click(function () {
        var error = 0;
        $('#contactForm input.requireds, #contactForm select.requireds').each(function () {
            if ($.trim($(this).val()) == "") {
                error++;
                $(this).next().show();
            } else {
                $(this).next().hide();
            }

        });

        if (error > 0) {
            return false;
        } else {
            $('#btnSend2').attr('disabled', 'disabled');
            $.ajax({
                url: $('#contactForm').attr('action'),
                type: 'POST',
                data: $('#contactForm').serialize(),
                dataType: 'json',
                async: false,
                success: function (data) {
                    if (data.success == 1) {
                        $('#contactForm input, #contactForm select').val('');
                        $('#infoModal').modal('hide');
                        $('#sendSuccessModal').modal('show');
                        $("#success_video")[0].src += "&autoplay=1";
                        $("#success_video")[0].allow = "autoplay";
                        $('#btnSend2').removeAttr('disabled');
                    }

                }
            });
        }
    });
    $('#btnSend').click(function () {
        var error = 0;
        $('#contactForm input.requireds, #contactForm select.requireds').each(function () {
            if ($.trim($(this).val()) == "") {
                error++;
                $(this).next().show();
            } else {
                $(this).next().hide();
            }

        });
        if (!checkEmail($('#email'))) {
            error++;
        }
        if (!checkPhone($('#phone'))) {
            error++;
        }
        if (error > 0) {
            return false;
        } else {
            $('#btnSend').attr('disabled', 'disabled');
            $.ajax({
                url: $('#contactForm').attr('action'),
                type: 'POST',
                data: $('#contactForm').serialize(),
                dataType: 'json',
                async: false,
                success: function (data) {
                    if (data.success == 1) {
                        $('#contactForm input, #contactForm select').val('');
                        $('#infoModal').modal('hide');
                        $('#sendSuccessModal').modal('show');
                        $("#success_video")[0].src += "&autoplay=1";
                        $("#success_video")[0].allow = "autoplay";
                    }

                }
            });
        }
    });
    $('#btnNewNumber').click(function () {
        $('.modal').modal('hide');
        $('#infoModal').modal('show');
    });

    // Video Embed Youtube
    // Find all YouTube videos
    var $allVideos = $("iframe[src^='//www.youtube.com']"),
        // The element that is fluid width
        $fluidEl = $("body");
    // Figure out and save aspect ratio for each video
    $allVideos.each(function () {
        $(this)
            .data('aspectRatio', this.height / this.width)
            // and remove the hard coded width/height
            .removeAttr('height')
            .removeAttr('width');
    });

    // When the window is resized
    $(window).resize(function () {
        var newWidth = $fluidEl.width();
        // Resize all videos according to their own aspect ratio
        $allVideos.each(function () {
            var $el = $(this);
            $el
                .width(newWidth)
                .height(newWidth * $el.data('aspectRatio'));
        });
        // Kick off one resize to fix all videos on page load
    }).resize();

    if ($('.wrapper2').hasClass('wrapper_kl_rewards')) {
        $('.wrapper2').closest('body').addClass('kl_rewards_body');
    }
    $(document).on('click', '.kl_item .kl_btnclose', function (e) {
        e.preventDefault();
        $(this).parent().hide();
    });

    $(window).on('load', function () {
        $('.kl_activeLoad').modal('show');
    });

    // Slide Carousel
    $(document).ready(function () {
        $(".owl-carousel").each(function (index, el) {
            var config = $(this).data();
            config.navText = ['<img src="images/slider-prev.png" alt="slder-prev">', '<img src="images/slider-next.png" alt="slder-next">'];
            config.smartSpeed = "800";
            if ($(this).hasClass('owl-style2')) {
                config.animateOut = "fadeOut";
                config.animateIn = "fadeIn";
            }
            if ($(this).hasClass('dotsData')) {
                config.dotsData = "true";
            }
            $(this).owlCarousel(config);
        });
    });
    $('.kl_gif_shoot .kl_banner .kl_item a').click(function (e) {
        e.preventDefault();
        $('html').addClass('portrait_mode_hide');
        // $('.kl_shoot_fish .kl_content').addClass('portrait_mode');
    });
    $('#kl_closeshot').click(function (e) {
        e.preventDefault();
        $('html').removeClass('portrait_mode_hide');
        // $('.kl_shoot_fish .kl_content').addClass('portrait_mode');
    });
})(jQuery); // End of use strict