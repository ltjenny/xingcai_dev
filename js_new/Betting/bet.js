'use strict';
//下注页面换肤 begin
!function () {
    var BGSetting = {
        Container: 'body'
    };
    var skinStyleBtns = $('body').attr('data-container-bg'), btnvalue;
    if (skinStyleBtns) {
        var skinStyleValue = skinStyleBtns.split('|');
        btnvalue = skinStyleValue[1];
        BGSetting.Container = skinStyleValue[0];
    }
    var skinStyle = function () {
        return (!utils.cookie.get("skinStyle")) ? (btnvalue ? btnvalue : 'haocai-blue') : utils.cookie.get("skinStyle");
    };
    var rUrl = "/content/mapping/" + skinStyle() + "/officialGames/images/bg/";
    function s(num) {
        if (~~num < 10) {
            return '0' + num;
        } else {
            return num;
        }
    }
    var changeBetBg = window.changeBetBg = function () {
        var skin = ["#716b79", "#70253c", "#7382c7", "#346e82", "#193c8e", "#2d5258", "#24292f", "#2f739a", "#da305d", "#bf9241", "#14599e", "#0f1e3b", "#766d5e", "#414449", "#030825", "#129f97", "#ff9d46", "#8cbc4c"];

        
        var skinIndex;
        if (!utils.cookie.get('skin')) {
            skinIndex = 0;
        } else {
            skinIndex = s(utils.cookie.get('skin'))
        }
        $(BGSetting.Container).css('background-image', 'url("' + (window.resPath || ('//' + location.host)) + rUrl + s(Number(skinIndex) + 1) + '.jpg")');

    }
    if ($("body").data("skin") === "no") return; /// body上带有data-skin="no"则不需要换肤
    function init() {
        changeBetBg();
        $('.btn-skin').each(function (index) {
            var btn = $(this);
            btn.on('click', function (e) {
                e.preventDefault();

                // 切换时先添加一个与图片近似的颜色
                //     $("body").css("backgroundColor", bglist[index].color);

                //显示载入画面
                $('#loading').show();
                ////预载图片
                var img = new Image();

                var src = rUrl + s(index+1) + '.jpg';
                img.onload = loadend;
                img.src = src;
                //载入完成
                function loadend() {
                    //为了画面效果 延迟1秒
                    setTimeout(function () {
                        /// 将选择的皮肤存入cookie, dependencies:["jquery","jquery.cookie.min.js"]
                        utils.cookie.set("skin", index, 365, '/'); /// 365天过期
                        changeBetBg(index);
                        $('#loading').hide();
                    }, 1000);
                }
            });
        });
    }
    $(init);
}();
//下注页面换肤 end
//未读消息通知 begin
!function () {
    var showMsg = {};
    showMsg.timer = null;
    showMsg.num = Math.ceil((Math.random() + 3) * 1e4);
    showMsg.getMsg = function () {
        var txt = '';
        $.get('/UserCenter/GetMessageIsRemindedCounnt?_=' + (+new Date()), function (data) {
            var dt = (typeof data === 'string') ? eval('(' + data.replace(/\s/, '') + ')') : data;
            if (dt.status) {
                $('#show_msg').css('display', 'block');
                (function (browser, count) {
                    var m = 'redm';
                    if (browser.indexOf('MSIE') !== -1 && ~~browser.substr(browser.indexOf('MSIE') + 5, 3) < 9) {
                        if (count < 10) {
                            m = 'redm';
                        } else if (count > 9 && count < 100) {
                            m = 'red';
                        } else {
                            m = 'redbg';
                        };
                        $('#show_msg').css({ 'background': 'url(/Content/default/home/images/usercenter/' + m + '.png) no-repeat scroll 0 0 transparent;background-size:100% 100%;' });
                    }
                })(navigator.userAgent, dt.count);
                $('#show_msg').prev().removeClass('stc_d');
                if (!dt.count) {
                    $('#show_msg').css('display', 'none');
                    $('#show_msg').prev().addClass('stc_d');
                } else if (!!dt.count && dt.count < 100) {
                    txt = dt.count;
                } else {
                    txt = '99+';
                }
                $('#show_msg').text(txt);
            } else {
                $('#show_msg').css('display', 'none')
            };
        });
    };

    if (utils.cookie.get("LoginSessionID")) {
        showMsg.getMsg();
        setInterval(function () {
            showMsg.getMsg();
        }, showMsg.num);
    };

    $('#show_msg').click(function () {
        $.post('/UserCenter/SetMessageIsReminded', function (data) {
            var dt = (typeof data === 'string') ? eval('(' + data.replace(/\s/, '') + ')') : data;
            if (dt.status) {
                $(this).css('display', 'none');
                window.location.href = '/UserCenter/Messge';
            }
        });
    });
}();
//投注页面右侧挂件
!function () {
    //计算滚动条的宽度
    function init() {
        //$('#chinese_style').on('click', chineseFun);//中国风
        //$('#western_style').on('click', westernFun);//欧美风
        var nowSkin = utils.cookie.get('skinStyle');
        if (nowSkin) {
            $(' #JSChangeSkinContainer .JSJ-change-skin[data-style=' + nowSkin + ']').addClass('on').siblings().removeClass('on');
        }
        else {
            $(' #JSChangeSkinContainer .JSJ-change-skin:eq(0)').addClass('on').siblings().removeClass('on');
        }
        $('#chinese_style,#western_style, #JSChangeSkinContainer .JSJ-change-skin').on('click', changeSkinStyle);

        $('[name="pendant_two"]').unbind('mouseover').on('mouseover', function (e) {
            e.preventDefault();
            $("#skin_box").stop();
            $('#skin_box').fadeIn('slow', 'linear');
        });
        $('#skin_box').unbind('mousemove').on('mousemove', function (e) {
            e.preventDefault();
            $("#skin_box").stop();
            $('#skin_box').fadeIn('fast', 'linear');
        });
        $('[name="pendant_two"],#skin_box').unbind('mouseleave').on('mouseleave', function (e) {
            e.preventDefault();
            $("#skin_box").stop();
            $('#skin_box').fadeOut('slow', 'linear');
        });
        $('[name="code_btn"],[name="code"]').on('click', function () {
            $('[name="code"]').siblings(".ui-code-right-box").addClass('dn');
            if ($('[name="code"]').hasClass('dn')) {
                $('[name="code"]').removeClass('dn');
            } else {
                $('[name="code"]').addClass('dn');
            }
        });
        $('[name="code_btn2"],[name="code2"]').on('click', function () {
            $('[name="code2"]').siblings(".ui-code-right-box").addClass('dn');
            if ($('[name="code2"]').hasClass('dn')) {
                $('[name="code2"]').removeClass('dn');
            } else {
                $('[name="code2"]').addClass('dn');
            }
        });
    };
    function changeSkinStyle(evt) {
        var style = evt && $(evt.currentTarget).attr("data-style");
        if (style) {
            utils.cookie.set('skinStyle', style, 365, '/');
        }
        window.location.reload(true);
    }
    //中国风
    //function chineseFun(evt) {
    //    var style = 'haocai-red';
    //    var data = evt && $(evt.currentTarget).attr("data-style");
    //    if (data) {
    //        style = data;
    //    }
    //    utils.cookie.set('skinStyle', style, 365, '/');
    //    location.reload();
    //    /// 硬代码↓↓↓↓↓
    //    //changeSkin('default-2');
    //    //window.changeBetBg();
    //}
    ////欧美风
    //function westernFun(evt) {
    //    var style = 'haocai-blue';
    //    var data = evt && $(evt.currentTarget).attr("data-style");
    //    if (data) {
    //        style = data;
    //    }
    //    utils.cookie.set('skinStyle', style, 365, '/');
    //    location.reload();
    //    /// 硬代码↓↓↓↓↓
    //    //changeSkin('default');
    //    //window.changeBetBg();
    //}
    //根据选择切换合适的皮肤
    var changeSkin = function (i) {
        var skine, link = '', hn = '';
        if (arguments.length <= 0 || !i) {
            skine = utils.cookie.get('skinStyle');
        } else {
            skine = i;
        };
        link = document.createElement('LINK');
        link.rel = 'stylesheet';
        hn = window.resPath || ('//' + location.host);
        $.each($($(document).find('head')[0]).find('link'), function (i, v) {
            if ($(v).attr('tii')) {
                $($(document).find('head')[0]).find('[tii="' + $(v).attr('tii') + '"]').remove();
                link.setAttribute('tii', $(v).attr('tii'));
                if ($(v).attr('href').indexOf('home') !== -1) {
                    link.href = hn + '/Content/mapping/' + skine + '/home/css/' + $(v).attr('tii') + '.css';
                } else if ($(v).attr('href').indexOf('officialGames') !== -1) {
                    link.href = hn + '/Content/mapping/' + skine + '/officialGames/css/' + $(v).attr('tii') + '.css';
                } else {
                    link.href = hn + '/Content/mapping/' + skine + '/css/' + $(v).attr('tii') + '.css';
                }
                $($(document).find('head')[0]).append(link);
            }
        });
    }
    //utils.changeSkin();
    $(function () {
        setTimeout(function () {
            init()
        }, 50);
    });
}()