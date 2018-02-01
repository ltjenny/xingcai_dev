'use strict';
!function () {
	var NoticeAnnou = function () {
		if (this instanceof NoticeAnnou) {
			this.init = function () {
				var $this = this;
				$this.eventBind();

				ko.applyBindings(new $this.viewmodel, document.getElementById("ulMain"));
			};
			this.$$ = function (id) {
				if (!id) return;
				return document.getElementById(id);
			};
			this.eventBind = function () {
				var _this = this;
				
			};
			this.viewmodel = function () {
			    this.list = ko.observableArray();
			    ko.koPage.init(this, this.GetData,{
			        pagesize: 10,
			        className: 'page'
			    });
			};
			this.viewmodel.prototype.GetData = function (pageindex) {
			    var that = this;
			    $.ajax({
			        url: '/UserCenter/NoticePage?pageSize=10&pageIndex=' + pageindex,
			        type: 'get',
			        success: function (data) {
			            var dt = (typeof data === 'string') ? eval('(' + data + ')') : data;
			            if (dt.rows !== null && dt.rows.length > 0) {
			                $('#have_data').removeClass('dn');
			                $('#no_data').addClass('dn');
			                ko.koPage.count(dt.total);
			                that.list(dt.rows);
			            } else {
			                $('#have_data').addClass('dn');
			                $('#no_data').removeClass('dn');
			            };

			            $('div[data-notice="notice"]').on('click', function (e) {
			                if ($(this).next().hasClass('dn')) {
			                    $(this).addClass('fc_red');
			                    $(this).next().removeClass('dn');
			                    $(this).parent().parent().siblings().find('td:eq(0)').find('div:eq(0)').removeClass('fc_red')
			                    $(this).parent().parent().siblings().find('td:eq(0)').find('div:eq(1)').addClass('dn');
			                } else {
			                    $(this).removeClass('fc_red');
			                    $(this).next().addClass('dn');
			                }
			            });
			        },
			        error: function (err) {
			            noticeAnnou.tip('提示', '获取数据失败！', '关闭', function (data) { });
			        }
			    });
			};
			this.tip = function (title, content, okVal, ok) {
			    dialog({ title: title, content: content, ok: ok || function () { }, okValue: okVal || "关闭" }).show()
			};
		} else {
			new NoticeAnnou();
		}
	};
	var noticeAnnou = new NoticeAnnou();
	noticeAnnou.init();
}();