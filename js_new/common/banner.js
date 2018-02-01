//banner
!function () {
    //knob
    (function () {
        var time = 6000;
        var ticktime = 16;
        var ticks = 0;
        var maxTick = (time / ticktime) | 0;
        var tickTimeout;
        var index;
        var banner, items, len;
        var knobList = [];


        function init() {
            index = 0;

            banner = $('.banner');
            items = banner.find('.banner-item');
            len = items.length;

            if (!len) return;
            items.hide();
            items.each(function (i) {
                var input, outer, order;

                order = i + 1;
                outer = $('<div class="knob kb' + order + '">');
                input = $('<input type="text">').appendTo(outer);

                knobList.push({
                    outer: outer,
                    input: input
                });

                outer.appendTo(banner.find('.knobbox'));

                input.knob({
                    "width": 40,
                    "height": 40,
                    'min': 0,
                    'max': maxTick,
                    "displayInput": false,
                    "displayPrevious": true,
                    "thickness": ".1",
                    "fgColor": "#3cd2f5",
                    "bgColor": "none",
                    "readOnly": true
                });
                outer.bind('click', function () {
                    run(i);
                });
            })

            run(index);

            $(".line-gray .main").css("zoom", 1);
                       
        }
        function run(n) {
            if (!knobList.length) return;
            ticks = 0;
            knobList[index].input.val(0).trigger('change');
            items.eq(n).css('position', 'relative').fadeIn()
                .siblings().css('position', 'absolute').fadeOut();
            index = n;
            tick();
        }
        function tick() {
            var input = knobList[index].input;
            ticks++;
            if (ticks == maxTick) {
                next();
            } else {
                input.val(ticks).trigger('change');
                if (tickTimeout) clearTimeout(tickTimeout);
                tickTimeout = setTimeout(tick, ticktime);
            }
        }
        function next() {
            run(index + 1 < len ? index + 1 : 0);
        }
        function prev() {
            run(index - 1 > -1 ? index - 1 : len-1);
        }
        window.onload = function () {
            $('#prev_btn').on('click', function () {
                prev();
            });
            $('#next_btn').on('click', function () {
                next();
            });
        };
        
        $(init);
    })();


}();
//换背景
(function () {
    "use strict";
    var DefautIndex = utils.cookie.get("skin");

    var BGSetting = {
        Container: 'body'
    };
    var skinStyleBtns = $('body').attr('data-container-bg'), btnvalue;
    if (skinStyleBtns) {
        var skinStyleValue = skinStyleBtns.split('|');
        btnvalue = skinStyleValue[1];
        BGSetting.Container = skinStyleValue[0];
    }
    var skinStyle = function () { return (!utils.cookie.get("skinStyle")) ? (btnvalue ? btnvalue: 'haocai-blue') : utils.cookie.get("skinStyle");};
    
    var bgfolder = function () { return iis + "/content/mapping/" + skinStyle() + "/home/images/bg/";};
    var bglist = [
        { img: "01.jpg"},
		{ img: "02.jpg"},
		{ img: "03.jpg"},
		{ img: "04.jpg"},
		{ img: "05.jpg"},
		{ img: "06.jpg"},
		{ img: "07.jpg"},
		{ img: "08.jpg"},
		{ img: "09.jpg"},
		{ img: "10.jpg"},
		{ img: "11.jpg"},
		{ img: "12.jpg"},
		{ img: "13.jpg"},
		{ img: "14.jpg"},
		{ img: "15.jpg"},
		{ img: "16.jpg"},
		{ img: "17.jpg"},
		{ img: "18.jpg"}
    ];

    var BGChange = function (i) {
        skinStyle();
        var src = bgfolder() + bglist[~~i].img;

        //覆写背景
        $(BGSetting.Container).css('background-image', 'url("' + src + '")');

        //给按钮加上active样式，其余去除
        $('.btn-skin').eq(i).addClass('active').siblings().removeClass('active');
    };
    var BGLength = bglist.length;
    DefautIndex = DefautIndex || 0;


    function init() {
        BGChange(DefautIndex);
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
                var src = bgfolder() + bglist[index].img;
                img.onload = loadend;
                img.src = src;

                //载入完成
                function loadend() {
                    //为了画面效果 延迟1秒
                    setTimeout(function () {

                        /// 将选择的皮肤存入cookie, dependencies:["jquery","jquery.cookie.min.js"]
                        utils.cookie.set("skin", index, 365, '/'); /// 365天过期

                        //替换背景
                        BGChange(index);

                        //关闭载入画面
                        $('#loading').hide();
                    }, 1000);
                }
            });
        });


        //BGChange(DefautIndex);
    }

    window.BGSetting = BGSetting;
    window.BGChange = BGChange;
    window.BGLength = BGLength;
    $(init);
})();


function random(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
}

//DEBUG
$(function () {
    var debug = false;
    if (window.location.hash == "#debug") debug = true;

    if (debug) {
        $('#loading').show();
    }
});


//Transfer
$(function () {
    if (!window.XTransfer) return;
    var transfer = new XTransfer('#trans', {
        minValue: 0,
        maxValue: 200000,
        initValue: 88888,
        ondrag: function (value) { },
        ontransfer: function (value) {
            alert(value);
        }
    });
});

//語言選擇
$(function () {
    $('.lang-box').on('click', function () {
        $('.lang-select', this).toggle();
    });
});

function onloadChangeBg() {
    function windowOnload() {
        if (!BGSetting) return;

        var bgloader = $('<div class="bg-loader"><div class="bg-content"><div>随机为您挑选背景…</div></div></div>');
        var rand = random(0, BGLength);

        bgloader.height(0);
        bgloader.prependTo('body');
        loadershow();


        function loadershow() {
            bgloader.animate({ height: 56 }, 1000, function () {
                setTimeout(function () {
                    BGChange(rand);
                    loaderhide();
                }, 1000);
            });

        }
        function loaderhide() {
            bgloader.animate({ height: 0 }, 1000);
        }
    }

    $(window).on('load', windowOnload);
}

$(function () {
    $('.input_tip').bind({
        focus: function () {
            if (this.value == this.defaultValue) {
                this.value = "";
            }
        },
        blur: function () {
            if (this.value == "") {
                this.value = this.defaultValue;
            }
        }
    });
})


$(function () {
    setTimeout(function () {
        $(".main_wrap").removeClass("loading");
        $(".content").fadeIn(1000);
    }, 2000)
})