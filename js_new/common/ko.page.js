/**
 *  Knockout.js 鍒嗛〉鎻掍欢
 *  author: satrong (http://www.xiaoboy.com)
 *  https://github.com/satrong/knockout-page
 *	闈欐€佸垎椤礵emo锛歨ttp://www.xiaoboy.com/demos/knockout-page/static.html
 *	Ajax鍒嗛〉demo锛歨ttp://www.xiaoboy.com/demos/knockout-page/ajax.html
 */

ko && ko.bindingHandlers && (function (ko, undefined) {
    /// 鍒嗛〉bind
    ko.bindingHandlers.page = {
        update: function (element, valueAccessor, allBindings, viewModel, bindingContext) {
            $(element).children().undelegate();
            element.innerHTML = '';
            var config = ko.utils.extend({
                next: '涓嬩竴椤�',
                prev: '涓婁竴椤�',
                first: '棣栭〉',
                last: '鏈〉',
                className: 'pagination',
                linksCount: 5,
                pagesize: 10,
                showLinks: true
            }, viewModel.pageConfig || {});
            var current = viewModel.currentPage() - 0; // 褰撳墠椤电爜
            var pagesize = config.pagesize; // 姣忛〉鐨勬潯鏁�
            var total = viewModel.countItems() - 0; // 鎬绘潯鏁�
            if (total < 1)
                return;
            var maxPage = Math.ceil(total / pagesize); // 鏈€澶х殑椤电爜
            if (maxPage < 2)
                return;
            var range = centerPosition(maxPage, current, config.linksCount);
            var div = document.createElement('div');
            div.setAttribute('class', config.className);

            var html = '';
            if (config.first && range[0] !== current) {
                html += '<a href="javascript:;" data-n="1">' + config.first + '</a>';
            }
            if (config.prev && current > 1) {
                html += '<a href="javascript:;" data-n="' + (current - 1) + '">' + config.prev + '</a>';
            }
            if (config.showLinks) {
                for (var i = range[0]; i <= range[1]; i++) {
                    if (i === current) {
                        html += '<span>' + i + '</span>';
                    } else {
                        html += '<a href="javascript:;" data-n="' + i + '">' + i + '</a>';
                    }
                }
            } else {
                html += '<span>' + current + '</span>';
            }
            if (config.next && current !== maxPage) {
                html += '<a href="javascript:;" data-n="' + (current + 1) + '">' + config.next + '</a>';
            }
            if (config.last && range[1] !== current) {
                html += '<a href="javascript:;" data-n="' + maxPage + '">' + config.last + '</a>';
            }

            div.innerHTML = html;
            element.appendChild(div);

            if (div.addEventListener) {
                div.addEventListener("click", action, false);
            } else if (div.attachEvent) {
                div.attachEvent("onclick", action);
            }
            function action(event) {
                var target = event.target || event.srcElement;
                if (target.tagName === 'A') {
                    valueAccessor()(target.getAttribute("data-n"));
                }
            }
        }
    };

    /// 鍙栧緱current鐨勪腑蹇冧綅缃�
    /// @max {Number}
    /// @current {Number}
    /// @showBtns {Number}
    /// return {Array}
    function centerPosition(max, current, showBtns) {
        showBtns = showBtns % 2 === 0 ? showBtns + 1 : showBtns;
        var step = Math.floor(showBtns / 2);
        var pos1 = [current - step, current + step];
        var pos2 = pos1;
        if (pos1[0] < 1) {
            var diff = 1 - pos1[0];
            pos2 = [pos1[0] + diff, pos1[1] + diff];
        }
        if (pos2[1] > max) {
            pos2[1] = max;
        }

        if (pos2[1] - pos2[0] + 1 < showBtns) {
            pos2[0] = max - showBtns + 1;
            if (pos2[0] < 1) {
                pos2[0] = 1;
            }
        }
        return pos2;
    }

    var page = function (self, callback, options) {
        var that = ko.utils.extend(this, self);
        this.pageConfig = options;
        this.currentPage = ko.observable(1);
        this.currentPage.subscribe(function (value) {
            if (value > 0) {
                callback.call(that, that.currentPage());
            }
        });
        this.countItems = ko.observable(0);
        this.pagesize = ko.observable();

        /**
		 * 閲嶇疆鍒嗛〉
		 * @param {Number} pageindex 鎸囧畾閲嶇疆鍒板摢椤碉紝榛樿涓哄綋鍓嶉〉锛屽嵆this.currentPage
		 */
        this.pageReset = function (pageindex) {
            if (pageindex === undefined) pageindex = this.currentPage();
            this.currentPage(0);
            this.currentPage(pageindex);
            return this;
        }
    }

    /// 澶栭儴鎺ュ彛锛氬垵濮嬪寲
    /// @self {Object}
    /// @callback {Function}
    /// @options {Object}
    page.init = function (self, callback, options) {
        if (!(Object.prototype.toString.call(options) === "[object Object]" && options.pagesize)) {
            if (/^\d+$/.test(options.pagesize)) {
                throw "ko.koPage.init锛歱agesize鍙傛暟蹇呴』涓烘暟瀛�";
            } else {
                throw "ko.koPage.init锛氫綘杩樻病鏈夎缃畃agesize鍙傛暟锛�";
            }
        }
        options.pagesize = options.pagesize - 0;
        ko.utils.extend(self, new page(self, callback, options));
        page.__this = self;
        callback && callback.call(self, self.currentPage());
        return self;
    }

    /// 澶栭儴鎺ュ彛锛氭€绘潯鏁�
    /// @total {Number}
    page.count = function (total) {
        this.__this.countItems(total);
        return this.__this;
    }

    page.version = '1.2';

    ko.koPage = page;
})(ko);