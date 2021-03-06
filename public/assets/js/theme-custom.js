var short = (function () {

    function lock() {
        $(".spinner-container").fadeIn();
    }
    function unlock() {
        $(".spinner-container").fadeOut();
    }

    function message(tipo, assunto, message) {

        let icon;
        switch (tipo) {
            case 'success':
                icon = 'check'
                break;
            case 'warning':
                icon = 'exclamation'
                break;
            case 'danger':
                icon = 'exclamation'
        }

        var toast = "";
        toast += '<div id="liveToast" class="position-fixed toast hide bg-dark" role="alert" aria-live="assertive" aria-atomic="true" style="top: 20px; right: 20px; z-index: 1000;" data-bs-delay="10000">';
        toast += '<div class="toast-header bg-dark">';
        toast += '<div class="d-flex align-items-center flex-grow-1">';
        toast += '<div class="flex-shrink-0">';
        toast += '<span class="avatar avatar-sm avatar-' + tipo + ' avatar-circle">';
        toast += '<span class="avatar-initials"><i class="bi bi-' + icon + '-circle text-white" style="font-size: 45px"></i></span>';
        toast += '</span>';
        toast += '</div>';
        toast += '<div class="flex-grow-1 ms-3">';
        toast += '<h5 class="mb-0">' + assunto + '</h5>';
        toast += '</div>';
        toast += '<div class="text-end">';
        toast += '<button type="button" class="btn-close text-white avatar avatar-sm rounded-circle shadow-sm p-0" data-bs-dismiss="toast" aria-label="Close"></button>';
        toast += '</div>';
        toast += '</div>';
        toast += '</div>';
        if (message != "" || message != null) {
            toast += '<div class="toast-body text-white-70">' + message + '</div>';
        }
        toast += '</div>';

        $(".message-toast").html(toast);

        const liveToast = new bootstrap.Toast(document.querySelector('#liveToast'));

        liveToast.show();
    }

    function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        let expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function checkCookie() {
        let cookies = getCookie("cookie_funcional");
        if (cookies == "") {
            $(".notification_cookie").show();
        }
    }


    function init() {

        Storage.prototype.setObj = function (key, obj) {
            return this.setItem(key, JSON.stringify(obj))
        }
        Storage.prototype.getObj = function (key) {
            return JSON.parse(this.getItem(key))
        }

        String.prototype.replaceAll = function (target, replacement) {
            return this.split(target).join(replacement);
        };

        var forms = $("form");
        forms.each(function (i) {
            var form = $(this);
            $(form).validate({
                ignore: ".ignore",
                rules: {
                    name: {
                        required: true,
                        minlength: 2
                    },
                    last_name: {
                        required: true,
                        minlength: 2
                    },
                    password: {
                        required: true,
                        minlength: 6,
                        maxlength: 20
                    },
                    newpassword: {
                        required: true,
                        minlength: 6
                    },
                    password_confirmation: {
                        required: true,
                        minlength: 6,
                        equalTo: "#password"
                    },
                    senha_antiga: {
                        required: true,
                        minlength: 6
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    data: {
                        required: true,
                        dateFormat: true
                    }
                },
                messages: {
                    name: {
                        required: "Por favor digite o nome",
                        minlength: "O nome deve ter pelo menos 2 caracteres"
                    },
                    last_name: {
                        required: "Por favor digite seu sobrenome",
                        minlength: "O sobrenome deve ter pelo menos 2 caracteres"
                    },
                    password: {
                        required: "Por favor digite uma senha",
                        minlength: "Senha precisa ter entre 6 a 20 caracteres.",
                        maxlength: "Senha precisa ter entre 6 a 20 caracteres."
                    },
                    newpassword: {
                        required: "Por favor digite uma nova senha",
                        minlength: "A nova senha precisa ter entre 6 a 20 caracteres",
                    },
                    password_confirmation: {
                        required: "Por favor confirme a senha",
                        minlength: "Senha precisa ter entre 6 a 20 caracteres",
                        equalTo: "Por favor, digite a mesma senha"
                    },
                    senha_antiga: {
                        required: "Por favor digite uma senha",
                        minlength: "Senha precisa ter entre 6 a 20 caracteres"
                    },
                    email: "Por favor digite um e-mail v??lido"

                },
                errorElement: "em",
                errorPlacement: function (error, element) {
                    error.addClass("invalid-feedback");
                    if (element.prop("type") === "checkbox") {
                        error.insertBefore(element.next("label"));
                    } else {
                        error.insertAfter(element);
                    }
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass("is-invalid").removeClass("is-valid");
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).addClass("is-valid").removeClass("is-invalid");
                },
                invalidHandler: function () {
                    $(form).find(":input.error:first").focus();
                }
            });

            if ($(form).hasClass("form")) {

                $(form).submit(function (e) {
                    if ($(this).valid()) {
                        $(".spinner-container").fadeIn();
                    }
                });
            } else {
            }
        });

        $.validator.messages.required = '';
        $.validator.messages.email = '';

        /iP/i.test(navigator.userAgent) && $('*').css('cursor', 'pointer');

        if (typeof page != "undefined") {
            page.init();
        }


        // let grecaptchaKeyMeta = document.querySelector("meta[name='grecaptcha-key']");
        // let grecaptchaKey = grecaptchaKeyMeta.getAttribute("content");

        // grecaptcha.ready(function () {
        //     let forms = document.querySelectorAll('form[data-grecaptcha-action]');

        //     Array.from(forms).forEach(function (form) {

        //         console.log(forms);

        //         form.onsubmit = (e) => {
        //             e.preventDefault();

        //             let grecaptchaAction = form.getAttribute('data-grecaptcha-action');
        //             alert(grecaptchaAction);

        //             grecaptcha.execute(grecaptchaKey, { action: grecaptchaAction })
        //                 .then((token) => {
        //                     input = document.createElement('input');
        //                     input.type = 'hidden';
        //                     input.name = 'grecaptcha';
        //                     input.value = token;

        //                     form.append(input);
                            
        //                     alert("teste");
        //                 });
        //         }
        //     });
        // });
        // grecaptcha.ready(function () {
        //     grecaptcha.execute('6LdwtqgaAAAAAITnw9swNyifmyQUFw6JyOlQPWU-', { action: 'action_name' }).then(function (token) {
        //         $("#g-recaptcha-response").val(token);
        //     });
        // });
    }

    return {
        init: init,
        message: message,
        lock: lock,
        unlock: unlock,
        setCookie: setCookie,
        getCookie: getCookie,
        checkCookie: checkCookie
    };
}());