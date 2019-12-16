jQuery.noConflict();
if (typeof($) == 'undefined') var $ = jQuery;
if (typeof(btTimeOut) == 'undefined') var btTimeOut;
if (typeof(requireRemove) == 'undefined') var requireRemove = true;


$(document).ready(function() {

    $('#btl-content').appendTo('body');
    $(".btl-input #jform_profile_aboutme").attr("cols", 21);
    $('.bt-scroll .btl-buttonsubmit').click(function() {
            setTimeout(function() {
                if ($("#btl-registration-error").is(':visible')) {
                    $('.bt-scroll').data('jsp').scrollToY(0, true);
                } else {
                    var position = $('.bt-scroll').find('.invalid:first').position();
                    if (position) $('.bt-scroll').data('jsp').scrollToY(position.top - 15, true);
                }
            }, 20);
        })
        //SET POSITION
    if ($('.btl-dropdown').length) {
        setFPosition();
        $(window).resize(function() {
            setFPosition();
        })
    }

    $(btlOpt.LOGIN_TAGS).addClass("btl-modal");
    if (btlOpt.REGISTER_TAGS != '') {
        $(btlOpt.REGISTER_TAGS).addClass("btl-modal");
    }

    // Login event
    var elements = '#btl-panel-login';
    if (btlOpt.LOGIN_TAGS) elements += ', ' + btlOpt.LOGIN_TAGS;
    if (btlOpt.MOUSE_EVENT == 'click') {
        $(elements).click(function(event) {
            return showLoginForm();
        });
    } else {
        $(elements).hover(function() {
            return showLoginForm();
        }, function() {});
    }

    // Registration/Profile event
    elements = '#btl-panel-registration';
    if (btlOpt.REGISTER_TAGS) elements += ', ' + btlOpt.REGISTER_TAGS;
    if (btlOpt.MOUSE_EVENT == 'click') {
        $(elements).click(function(event) {
            return showRegistrationForm();
        });
        $("#btl-panel-profile").click(function(event) {
            showProfile();
            event.preventDefault();
        });
    } else {
        $(elements).hover(function() {
            if (!$("#btl-integrated").length) {
                return showRegistrationForm();
            }
        }, function() {});
        $("#btl-panel-profile").hover(function() {
            showProfile();
        }, function() {});
    }
    $('#register-link a').click(function(event) {
        if ($('.btl-modal').length) {
            $.simpleModal.close();
            setTimeout(showRegistrationForm(), 1000);
        } else {
            return showRegistrationForm();
        }

    });

    // Close form
    $(document).click(function(event) {
        if (requireRemove && event.which == 1) btTimeOut = setTimeout('$("#btl-content > div").slideUp();$(".btl-panel span").removeClass("active");', 10);
        requireRemove = true;
    })
    $(".btl-content-block").click(function() { requireRemove = false; });
    $(".btl-panel span").click(function() { requireRemove = false; });

    // Modify iframe
    $('#btl-iframe').load(function() {
        //edit action form	
        oldAction = $('#btl-iframe').contents().find('form').attr("action");
        if (oldAction != null) {
            if (oldAction.search("tmpl=component") == -1) {
                if ($('#btl-iframe').contents().find('form').attr("action").indexOf('?') != -1) {
                    $('#btl-iframe').contents().find('form').attr("action", oldAction + "&tmpl=component");
                } else {
                    $('#btl-iframe').contents().find('form').attr("action", oldAction + "?tmpl=component");
                }
            }
        }
    });

    //reload captcha click event
    $('span#btl-captcha-reload').click(function() {
        $.ajax({
            type: "post",
            url: btlOpt.BT_AJAX,
            data: 'bttask=reload_captcha',
            success: function(html) {
                $('#recaptcha img').attr('src', html);
            }
        });
    });

});

function setFPosition() {
    if (btlOpt.ALIGN == "center") {
        $("#btl-content > div").each(function() {
            var panelid = "#" + this.id.replace("content", "panel");
            var left = $(panelid).offset().left + $(panelid).width() / 2 - $(this).width() / 2;
            if (left < 0) left = 0;
            $(this).css('left', left);
        });
    } else {
        if (btlOpt.ALIGN == "right") {
            $("#btl-content > div").css('right', $(document).width() - $('.btl-panel').offset().left - $('.btl-panel').width());
        } else {
            $("#btl-content > div").css('left', $('.btl-panel').offset().left);
        }
    }
    $("#btl-content > div").css('top', $(".btl-panel").offset().top + $(".btl-panel").height() + 2);
}

// SHOW LOGIN FORM
function showLoginForm() {
    if ($('#btl-content-login').size() == 0) {
        return;
    }
    $('.btl-panel span').removeClass("active");
    var el = '#btl-panel-login';
    if (btlOpt.LOGIN_TAGS) el += ', ' + btlOpt.LOGIN_TAGS;
    $.simpleModal.close();
    var containerWidth = 0;
    var containerHeight = 0;
    containerHeight = 371;
    containerWidth = 357;

    if (containerWidth > $(window).width()) {
        containerWidth = $(window).width() - 50;
    }
    if (btlOpt.EFFECT == "btl-modal") {
        $(el).addClass("active");
        $("#btl-content > div").slideUp();
        $("#btl-content-login").simpleModal({
            overlayClose: true,
            persist: true,
            autoPosition: true,
            fixed: $(window).width() > 500,
            onOpen: function(dialog) {
                dialog.overlay.fadeIn();
                dialog.container.show();
                dialog.data.show();
            },
            onClose: function(dialog) {
                dialog.overlay.fadeOut(function() {
                    dialog.container.hide();
                    dialog.data.hide();
                    $.simpleModal.close();
                    $('.btl-panel span').removeClass("active");
                });
            },
            containerCss: {
                height: containerHeight,
                width: containerWidth
            }
        })
    } else {
        setFPosition();
        $("#btl-content > div").each(function() {
            if (this.id == "btl-content-login") {
                if ($(this).is(":hidden")) {
                    $(el).addClass("active");
                    $(this).slideDown();
                } else {
                    $(this).slideUp();
                    $(el).removeClass("active");
                }

            } else {
                if ($(this).is(":visible")) {
                    $(this).slideUp();
                    $('#btl-panel-registration').removeClass("active");
                }
            }

        })
    }
    return false;
}

// SHOW REGISTRATION FORM
function showRegistrationForm() {
    if ($("#btl-integrated").length) {
        window.location.href = $("#btl-integrated").val();
        return;
    }
    if ($('#btl-content-registration').size() == 0) {
        return;
    }
    $('.btl-panel span').removeClass("active");
    $.simpleModal.close();
    var el = '#btl-panel-registration';
    var containerWidth = 0;
    var containerHeight = 0;
    containerHeight = "auto";
    containerWidth = "auto";
    if (containerWidth > $(window).width()) {
        containerWidth = $(window).width();
    }
    if (btlOpt.EFFECT == "btl-modal") {
        $(el).addClass("active");
        $("#btl-content > div").slideUp();
        $("#btl-content-registration").simpleModal({
            overlayClose: true,
            persist: true,
            autoPosition: true,
            fixed: $(window).width() > 500,
            onOpen: function(dialog) {
                dialog.overlay.fadeIn();
                dialog.container.show();
                dialog.data.show();
            },
            onClose: function(dialog) {
                dialog.overlay.fadeOut(function() {
                    dialog.container.hide();
                    dialog.data.hide();
                    $.simpleModal.close();
                    $('.btl-panel span').removeClass("active");
                });
            },
            containerCss: {
                height: containerHeight,
                width: containerWidth
            }
        })
    } else {
        setFPosition();
        $("#btl-content > div").each(function() {
            if (this.id == "btl-content-registration") {
                if ($(this).is(":hidden")) {
                    $(el).addClass("active");
                    $(this).slideDown();
                } else {
                    $(this).slideUp();
                    $(el).removeClass("active");
                }
            } else {
                if ($(this).is(":visible")) {
                    $(this).slideUp();
                    $('#btl-panel-login').removeClass("active");
                }
            }

        })
    }
    return false;
}

// SHOW PROFILE (LOGGED MODULES)
function showProfile() {
    setFPosition();
    var el = '#btl-panel-profile';
    $("#btl-content > div").each(function() {
        if (this.id == "btl-content-profile") {
            if ($(this).is(":hidden")) {
                $(el).addClass("active");
                $(this).slideDown();
            } else {
                $(this).slideUp();
                $('.btl-panel span').removeClass("active");
            }
        } else {
            if ($(this).is(":visible")) {
                $(this).slideUp();
                $('.btl-panel span').removeClass("active");
            }
        }

    })
}

// AJAX REGISTRATION
function registerAjax() {

    $("#btl-registration-error").hide();
    $(".btl-error-detail").hide();
    if ($("#btl-input-name").val() == "") {
        $("#btl-registration-error").html(btlOpt.MESSAGES.REQUIRED_NAME).show();
        $("#btl-input-name").focus();
        return false;
    }
    if ($("#btl-input-username1").val() == "") {
        $("#btl-registration-error").html(btlOpt.MESSAGES.REQUIRED_USERNAME).show();
        $("#btl-input-username1").focus();
        return false;
    }
    if ($("#btl-input-password1").val() == "") {
        $("#btl-registration-error").html(btlOpt.MESSAGES.REQUIRED_PASSWORD).show();
        $("#btl-input-password1").focus();
        return false;
    }
    if ($("#btl-input-password2").val() == "") {
        $("#btl-registration-error").html(btlOpt.MESSAGES.REQUIRED_VERIFY_PASSWORD).show();
        $("#btl-input-password2").focus();
        return false;
    }
    if ($("#btl-input-password2").val() != $("#btl-input-password1").val()) {
        $("#btl-registration-error").html(btlOpt.MESSAGES.PASSWORD_NOT_MATCH).show();
        $("#btl-input-password2").focus().select();
        $("#btl-registration-error").show();
        return false;
    }
    if ($("#btl-input-email1").val() == "") {
        $("#btl-registration-error").html(btlOpt.MESSAGES.REQUIRED_EMAIL).show();
        $("#btl-input-email1").focus();
        return false;
    }
    var emailRegExp = /^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.([a-zA-Z]){2,4})$/;
    if (!emailRegExp.test($("#btl-input-email1").val())) {
        $("#btl-registration-error").html(btlOpt.MESSAGES.EMAIL_INVALID).show();
        $("#btl-input-email1").focus().select();
        return false;
    }
    if ($("#btl-input-email2").val() == "") {
        $("#btl-registration-error").html(btlOpt.MESSAGES.REQUIRED_VERIFY_EMAIL).show();
        $("#btl-input-email2").focus().select();
        return false;
    }
    if ($("#btl-input-email1").val() != $("#btl-input-email2").val()) {
        $("#btl-registration-error").html(btlOpt.MESSAGES.EMAIL_NOT_MATCH).show();;
        $("#btl-input-email2").focus().select();
        return false;
    }
    if (btlOpt.RECAPTCHA == "1") {
        if ($('#recaptcha_response_field').length && $('#recaptcha_response_field').val() == '') {
            $("#btl-registration-error").html(btlOpt.MESSAGES.CAPTCHA_REQUIRED).show();
            $('#recaptcha_response_field').focus();
            return false;
        }
    } else if (btlOpt.RECAPTCHA == "2") {
        if ($('#btl-captcha').length && $('#btl-captcha').val() == '') {
            $("#btl-registration-error").html(btlOpt.MESSAGES.CAPTCHA_REQUIRED).show();
            $('#btl-captcha').focus();
            return false;
        }
    }


    var datasubmit = $('#btl-content-registration form').serialize();


    $.ajax({
        type: "POST",
        beforeSend: function() {
            $("#btl-register-in-process").show();
        },
        url: btlOpt.BT_AJAX,
        data: datasubmit,
        success: function(html) {
            //if html contain "Registration failed" is register fail
            $("#btl-register-in-process").hide();
            if (html.indexOf('$error$') != -1) {
                $("#btl-registration-error").html(html.replace('$error$', ''));
                $("#btl-registration-error").show();
                if (btlOpt.RECAPTCHA == "1") {
                    if (typeof(Recaptcha) != 'undefined') {
                        Recaptcha.reload();
                    } else if (typeof(grecaptcha) != 'undefined') {
                        grecaptcha.reset('bt-login-recaptcha');
                    }
                } else if (btlOpt.RECAPTCHA == "2") {
                    $.ajax({
                        type: "post",
                        url: btlOpt.BT_AJAX,
                        data: 'bttask=reload_captcha',
                        success: function(html) {
                            $('#recaptcha img').attr('src', html);
                        }
                    });
                }

            } else {
                $(".btl-formregistration").children("div").hide();
                $("#btl-success").html(html);
                $("#btl-success").show();
                setTimeout(function() { window.location.reload(); }, 7000);

            }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert(textStatus + ': Ajax request failed');
        }
    });
    return false;
}

// AJAX LOGIN
function loginAjax() {
    if ($("#btl-input-username").val() == "") {
        showLoginError(btlOpt.MESSAGES.REQUIRED_USERNAME);
        return false;
    }
    if ($("#btl-input-password").val() == "") {
        showLoginError(btlOpt.MESSAGES.REQUIRED_PASSWORD);
        return false;
    }
    var token = $('.btl-buttonsubmit input:last').attr("name");
    var value_token = encodeURIComponent($('.btl-buttonsubmit input:last').val());
    var datasubmit = "bttask=login&username=" + encodeURIComponent($("#btl-input-username").val()) +
        "&passwd=" + encodeURIComponent($("#btl-input-password").val()) +
        "&" + token + "=" + value_token +
        "&return=" + encodeURIComponent($("#btl-return").val());

    if ($("#btl-checkbox-remember").is(":checked")) {
        datasubmit += '&remember=yes';
    }

    $.ajax({
        type: "POST",
        beforeSend: function() {
            $("#btl-login-in-process").show();
            $("#btl-login-in-process").css('height', $('#btl-content-login').outerHeight() + 'px');

        },
        url: btlOpt.BT_AJAX,
        data: datasubmit,
        success: function(html, textstatus, xhrReq) {
            if (html == "1" || html == 1) {
                window.location.href = btlOpt.BT_RETURN;
            } else {
                if (html.indexOf('</head>') == -1) {
                    showLoginError(btlOpt.MESSAGES.E_LOGIN_AUTHENTICATE);
                } else {
                    if (html.indexOf('btl-panel-profile') == -1) {
                        showLoginError('Another plugin has redirected the page on login, Please check your plugins system');
                    } else {
                        window.location.href = btlOpt.BT_RETURN;
                    }
                }
            }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert(textStatus + ': Ajax request failed!');
        }
    });
    return false;
}

function showLoginError(notice, reload) {
    $("#btl-login-in-process").hide();
    $("#btl-login-error").html(notice);
    $("#btl-login-error").show();
    if (reload) {
        setTimeout(function() { window.location.reload(); }, 5000);
    }
}

function submit(option, url) {

    if (option == 'addCustomer') {
        console.log(option);
    } else if (option == 'apply') {

    } else if (option == 'cancel') {
        document.location.href = url;
    } else {}
}