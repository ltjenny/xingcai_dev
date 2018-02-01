/// <reference path="_reference.js" />
(function ($, window) {
    var isLogin = utils.cookie.get("LoginSessionID") != null;
    $(document).ready(function () {
        if (isLogin) {
            /// 定时刷新检测是否已在其他地方登录
            ; (function checkStatus() {
                setTimeout(function () {
                    $.ajax({
                        url: '/Shared/Validate',
                        cache: false,
                        dataType: 'text',
                        success: function (json) {
                            if (/ForcesChangePWD/i.test(json)) {
                                checkStatus();
                            } else {
                                /location/i.test(json) ? eval(json) : checkStatus();
                            }
                        }
                    });
                }, 15000);
            })();
        }
    });
})(jQuery, window);