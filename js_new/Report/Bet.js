/// <reference path="../_reference.js" />
(function ($, window) {
    var ViewModel = function () {
        var that = this;
        that.gameID = ko.observable(gameID);
        that.gamePlayID = ko.observable(gamePlayID);
        that.gamePlayList = ko.observableArray([{ ID: 0, Name: "所有玩法" }]);
        that.startEvent = function (data, event) {
            WdatePicker({
                readOnly: true, dateFmt: 'yyyy-MM-dd HH:mm:ss', maxDate: '#F{$dp.$D(\'end\')||\'2020-10-01\'}'
            });
        };
        that.endEvent = function (data, event) {
            WdatePicker({
                readOnly: true, dateFmt: 'yyyy-MM-dd HH:mm:ss', minDate: '#F{$dp.$D(\'start\')}', maxDate: '2100-10-01'
            });
        };
        that.gameEvent = function (data, event) {
            if (Number(that.gameID()) == 0) {
                var arr = [{ ID: 0, Name: "所有玩法" }];
                that.gamePlayList(arr);
                return false;
            }
            var url = "/Shared/GetGamePlayList";
            var arr = [];
            arr.push({ ID: 0, Name: "所有玩法" });
            $.get(url, { gameID: that.gameID() }, function (json) {
                $.each(json, function (a, b) {
                    arr.push(b);
                });
                that.gamePlayList(arr);
                if (gamePlayID != '') {
                    that.gamePlayID(gamePlayID);
                }
            });
        };
        that.containSub = function (data, event) {
            var thisEle = $(event.currentTarget);
            if (thisEle.attr("class") === "checkbox select") {
                thisEle.attr("class", "checkbox");
                $("#isContainSub").val("False");
            } else {
                thisEle.attr("class", "checkbox select");
                $("#isContainSub").val("True");
            }
        };
        that.searchData = function (data, event) {
            $("#SEARCH-TIP").show();
            $("#form1").submit();
        };
        that.init = function () {
            var errMsg = $("#hdErrMsg").val();
            if (errMsg != undefined && errMsg != '') {
                utils.tip(errMsg, '#ff0000', function () { });
            }
            if (that.gameID() != 0) {
                that.gameEvent(null, null);
            }
        };
        that.init();
    };
    $(function () {
        var model = new ViewModel();
        ko.applyBindings(model, document.getElementById("ulMain"));
    });
})(jQuery, window);