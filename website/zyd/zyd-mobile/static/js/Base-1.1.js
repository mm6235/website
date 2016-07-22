// Description：基库，包含一些工具方法，一些扩展
if (jQuery) {
    /*jquery扩展区*/
    jQuery.fn.extend({
        FormToCondition: function () {
            return Obj2str($(this).serializeArray());
        },
        Obj2str: function (o) {
            return Obj2str(o);
        },
        //元素对角线交叉点坐标
        centerPoint: function () {

            var offset = this.offset();

            return { x: offset.left + this.width() / 2, y: offset.top + this.height() / 2 };
        },
        //一个元素是否与另一个元素相隔distance距离内
        isNear: function (target, distance) {

            distance = distance || 0;

            var thisOffset = this.offset();
            var thisWidth = this.width();
            var thisHeight = this.height();
            var tar = $(target);
            var tarOffset = tar.offset();
            var tarWidth = tar.width();
            var tarHeight = tar.height();

            var isXNear = (tarOffset.left - (thisOffset.left + thisWidth) <= distance) && (thisOffset.left - (tarOffset.left + tarWidth) <= distance);
            var isYNear = (tarOffset.top - (thisOffset.top + thisHeight) <= distance) && (thisOffset.top - (tarOffset.top + tarHeight) <= distance);

            return (isXNear && isYNear);
        }
    });
    //resize扩展，来自http://benalman.com/code/projects/jquery-resize/examples/resize/。原jq只支持window的resize——拖动窗口时的resize，这个支持所有标签
    (function ($, h, c) { var a = $([]), e = $.resize = $.extend($.resize, {}), i, k = "setTimeout", j = "resize", d = j + "-special-event", b = "delay", f = "throttleWindow"; e[b] = 250; e[f] = true; $.event.special[j] = { setup: function () { if (!e[f] && this[k]) { return false } var l = $(this); a = a.add(l); $.data(this, d, { w: l.width(), h: l.height() }); if (a.length === 1) { g() } }, teardown: function () { if (!e[f] && this[k]) { return false } var l = $(this); a = a.not(l); l.removeData(d); if (!a.length) { clearTimeout(i) } }, add: function (l) { if (!e[f] && this[k]) { return false } var n; function m(s, o, p) { var q = $(this), r = $.data(this, d); r.w = o !== c ? o : q.width(); r.h = p !== c ? p : q.height(); n.apply(this, arguments) } if ($.isFunction(l)) { n = l; return m } else { n = l.handler; l.handler = m } } }; function g() { i = h[k](function () { a.each(function () { var n = $(this), m = n.width(), l = n.height(), o = $.data(this, d); if (m !== o.w || l !== o.h) { n.trigger(j, [o.w = m, o.h = l]) } }); g() }, e[b]) } })(jQuery, this);


    //todo 放置位置
    //初始化对象，提示、警告等等
    //查看log方式：在控制台运行log.Show()
    (function (window) {

        function _log() {

            //log缓存池
            this.tempLog = "";

            this.logElem;
        }

        _log.prototype.Error = function (msg) {

            this.tempLog += ("\n" + new Date().Format("yyyy-MM-dd HH:mm:ss S") + " [error]:\n" + msg);

            this.msg();
        }

        _log.prototype.Warn = function (msg) {

            this.tempLog += ("\n" + new Date().Format("yyyy-MM-dd HH:mm:ss S") + " [error]:\n" + msg);

            this.msg();
        }

        _log.prototype.Info = function (msg) {

            this.tempLog += ("\n" + new Date().Format("yyyy-MM-dd HH:mm:ss S") + " [error]:\n" + msg);

            this.msg();
        }

        _log.prototype.Show = function () {
            if (window.console && this.logElem && this.logElem.length > 0) {

                window.console.info(this.logElem.html());
            }
        }

        _log.prototype.msg = function () {

            var _this = this;

            $(document).ready(function () {

                if (!_this.tempLog) return;

                if (!(_this.logElem && _this.logElem.length > 0)) {

                    var html = "<div id='log_div' style='display:none;'></div>";

                    $(html).appendTo("body");

                    _this.logElem = $("#log_div");
                }

                $(_this.logElem).append(_this.tempLog);

                _this.tempLog = "";

            });
        }

        window.log = new _log();

    })(window);

    //错误处理函数，带有调用堆栈
    //ie不起作用？？w3c未提示
    /*
    window.onerror = function (sMessage, sUrl, sLine) {

    var str = "";

    str += " 错误信息:" + sMessage + "\n";

    str += " 错误地址:" + sUrl + "\n";

    str += " 错误行数:" + sLine + "\n";

    str += "<=========调用堆栈=========>\n";

    var func = window.onerror.caller;

    var index = 0;

    while (func != null) {

    str += "第" + index + "个函数：" + func + "\n";

    str += "第" + index + "个函数：参数表："

    for (var i = 0; i < func.arguments.length; i++) {

    str += func.arguments[i] + ",";

    }

    str += "\n===================\n";

    func = func.caller;

    index++;
    }

    log.Error(str);

    return false;
    }
    */
}
//#region 工具区

function DX(n)
{
    if(n==0)
        return "";
    if (!/^(0|[1-9]\d*)(\.\d+)?$/.test(n))
        return "数据非法";
    var unit = "千百拾亿千百拾万千百拾元角分", str = "";
    n += "00";
    var p = n.indexOf('.');
    if (p >= 0)
        n = n.substring(0, p) + n.substr(p + 1, 2);
    unit = unit.substr(unit.length - n.length);
    for (var i = 0; i < n.length; i++)
        str += '零壹贰叁肆伍陆柒捌玖'.charAt(n.charAt(i)) + unit.charAt(i);
    return str.replace(/零(千|百|拾|角)/g, "零").replace(/(零)+/g, "零").replace(/零(万|亿|元)/g, "$1").replace(/(亿)万|壹(拾)/g, "$1$2").replace(/^元零?|零分/g, "").replace(/元$/g, "元整");
}

//#region 鼠标
function mouseX(evt) {
    if (evt.pageX) return evt.pageX;
    else if (evt.clientX)
        return evt.clientX + (document.documentElement.scrollLeft ?
   document.documentElement.scrollLeft :
   document.body.scrollLeft);
    else return 0;
}

function mouseY(evt) {
    if (evt.pageY) return evt.pageY;
    else if (evt.clientY)
        return evt.clientY + (document.documentElement.scrollTop ?
   document.documentElement.scrollTop :
   document.body.scrollTop);
    else return 0;
}
//#endregion

//#region ConvertHelper
var ConvertHelper = {
    ToDate: function (date) {
        if (!date) return null;
        if (typeof date == "object") {
            return date;
        } else if (typeof date == "string") {
            var retDate = new Date();
            try {
                if (date.indexOf("T") > -1 && date.indexOf("+08:00") > -1) {

                    retDate = new Date(date);

                    if (isNaN(retDate)) {
                        retDate = new Date(date.replaceAll("-", "/").replaceAll("T", " "));
                    }
                }
                else if (date.indexOf("T") > -1 && date.indexOf("+08:00") < 0) {

                    //东八区，XML Schema时间表示法
                    retDate = new Date(date + "+08:00");
                    //IE8及以下不支持上面转化
                    if (isNaN(retDate)) {
                        var iOfD = date.indexOf(".");
                        if (iOfD > 0) {

                            item = date.substr(0, iOfD);
                        }
                        retDate = new Date(date.replaceAll("-", "/").replaceAll("T", " "));
                    }
                } else {
                    retDate = new Date(date.replaceAll("-", "/"));
                }
            } catch (ex) {
            }

            return isNaN(retDate) ? new Date() : retDate;
        }
    },
    ToString: function (obj, type) {
        if (typeof obj === "number" && type && ",C,N,".indexOf("," + type + ",") > -1) {
            obj = obj.toString().replace(/\$|\,/g, '');
            if (isNaN(obj))
                obj = "0";
            var sign = (obj == (obj = Math.abs(obj)));
            obj = Math.floor(obj * 100 + 0.50000000001);
            var cents = obj % 100;
            obj = Math.floor(obj / 100).toString();
            if (cents < 10)
                cents = "0" + cents;
            for (var i = 0; i < Math.floor((obj.length - (1 + i)) / 3); i++)
                obj = obj.substring(0, obj.length - (4 * i + 3)) + ',' + obj.substring(obj.length - (4 * i + 3));
            return (type == "C" ? "￥" : "") + (((sign) ? '' : '-') + obj + '.' + cents);
        }
        else if (typeof obj === "object") {
            if (obj instanceof Date) {
                return obj.Format(type);
            }
            return String(obj);
        }
        return String(obj);
    }
}
//#endregion

//获取window.top，当跨域时获取未跨域的最外层window
function GetTopWindow() {
    var topWin = window;
    //var temp = "";
    try {
        //temp = window.top.location.href;
        topWin = window.top;
    } catch (ex) {
        topWin = window;
        var tempWin = window;
        while (tempWin) {
            try {
                tempWin = tempTop.parent;
                //temp = window.top.location.href;
                topWin = tempWin;
            } catch (ex) {
                tempWin = null;
            }
        }
    }
    return topWin;
}
//获取能获取到的最上层opener
function GetRootWindow() {
    var topWin = window;
    var tempWin = window;
    while (tempWin) {
        try {
            tempWin = tempTop.opener;
            //temp = window.top.location.href;
            topWin = tempWin;
        } catch (ex) {
            tempWin = null;
        }
    }
    return topWin;
}

function AddTicket(src) {

    if (typeof src != "string") return "";

    return src.UrlParams("radom", Math.random());
}

function GetRndInt(begNum,endNum) {
    return parseInt(Math.random() * (endNum - begNum) + begNum);
}
//获取最大zindex
function GetMaxZ() {

    var maxZ = Math.max.apply(null, $.map($('body *'), function (e, n) {

        if (($(e).css('position') == 'absolute') && $(e).is(":visible") == true)

            return parseInt($(e).css('z-index')) || 1;
    })) + 1;

    if (maxZ == -Infinity) maxZ = 199;

    return maxZ;
}

//获取事件
var getEvent = function () {//ie/ff
    if (document.all) {
        return window.event;
    }
    func = getEvent.caller;
    while (func != null) {
        var arg0 = func.arguments[0];
        if (arg0) {
            if ((arg0.constructor == Event || arg0.constructor == MouseEvent) || (typeof (arg0) == "object" && arg0.preventDefault && arg0.stopPropagation)) {
                return arg0;
            }
        }
        func = func.caller;
    }
    return null;
};
//获取鼠标x、y轴，坐标轴方向：V>
var getMousePos = function (ev) {
    if (!ev) {
        ev = this.getEvent();
    }
    if (ev.pageX || ev.pageY) {
        return {
            x: ev.pageX,
            y: ev.pageY
        };
    }
    if (document.documentElement && document.documentElement.scrollTop) {
        return {
            x: ev.clientX + document.documentElement.scrollLeft - document.documentElement.clientLeft,
            y: ev.clientY + document.documentElement.scrollTop - document.documentElement.clientTop
        };
    }
    else if (document.body) {
        return {
            x: ev.clientX + document.body.scrollLeft - document.body.clientLeft,
            y: ev.clientY + document.body.scrollTop - document.body.clientTop
        };
    }
};

var getElementPos = function (el) {
    var _x = 0, _y = 0;
    do {
        _x += el.offsetLeft;
        _y += el.offsetTop;
    } while (el = el.offsetParent);
    return { x: _x, y: _y };
};

//#region 停止冒泡
function stopBubble(e) {
    //如果提供了事件对象，则这是一个非IE浏览器
    if (e && e.stopPropagation)
    //因此它支持W3C的stopPropagation()方法
        e.stopPropagation();
    else
    //否则，我们需要使用IE的方式来取消事件冒泡
        window.event.cancelBubble = true;
}
//#endregion

//#region 数值操作区

//digit位有效数字四舍五入
function RoundParse(num, digit) {
    var digit = Math.pow(10, digit);
    return Math.round(num * digit) / digit;
}
//#endregion

//#region url参数获取：直接获取url栏url的参数

//获取url参数
//调用方式：GetQueryString("参数名")
function getQueryString(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return unescape(r[2]); return null;
}
//#endregion

//#region 日期处理

//日期相减得天数.type:d(天),h（小时）两种,默认天
function GetDateDiff(startDate, endDate, type) {

    var eTime = 1000 * 60 * 60 * 24;

    if (type == 'h') eTime = 1000 * 60 * 60;

    var startTime = typeof startDate == "object" ? startDate.getTime() : new Date(Date.parse(startDate.replace(/-/g, "/"))).getTime();
    var endTime = typeof endDate == "object" ? endDate.getTime() : new Date(Date.parse(endDate.replace(/-/g, "/"))).getTime();

    var dates = (startTime - endTime) / eTime;

    return dates;
}

//#endregion

//#region cookie操作
//设置cookie
var setCookie = function (name, value, expireHours) {
    var cookieString = name + "=" + escape(value);
    //判断是否设置过期时间
    if (expireHours > 0) {
        var date = new Date();
        date.setTime(date.getTime() + expireHours * 3600 * 1000);
        cookieString = cookieString + "; expire=" + date.toGMTString() + "; path=/";
    }
    document.cookie = cookieString;
};
//获取cookie
var getCookie = function (name) {
    var strCookie = document.cookie;
    var arrCookie = strCookie.split("; ");
    for (var i = 0; i < arrCookie.length; i++) {
        var arr = arrCookie[i].split("=");
        if (arr[0] == name) {
            return unescape(arr[1]);
        }
    }
    return "";
};
//删除cookie
var delCookie = function (name) {
    var exp = new Date();
    exp.setTime(exp.getTime() - 1);
    var cval = this.getCookie(name);
    if (cval != null) document.cookie = name + "=" + cval + ";expires=" + exp.toGMTString();
};
//#endregion

//#region json系列化
function Obj2str(o) {
    if (o == undefined) {
        return "";
    }
    var r = [];
    if (typeof o == "string") return "\"" + o.replace(/([\"\\])/g, "\\$1").replace(/(\n)/g, "\\n").replace(/(\r)/g, "\\r").replace(/(\t)/g, "\\t") + "\"";
    if (typeof o == "object") {
        if (!o.sort) {
            for (var i in o) r.push("\"" + i + "\":" + Obj2str(o[i]));
            if (!!document.all && !/^\n?function\s*toString\(\)\s*\{\n?\s*\[native code\]\n?\s*\}\n?\s*$/.test(o.toString)) {
                r.push("toString:" + o.toString.toString());
            }
            r = "{" + r.join() + "}";
        } else {
            for (var i = 0; i < o.length; i++) r.push(Obj2str(o[i]));
            r = "[" + r.join() + "]";
        }
        return r;
    }
    return o.toString().replace(/\"\:/g, '":""');
}

function _ToJSON(o) {

    if (o == null) return "null";

    var con = null;
    try {
        con = o.constructor;
        if (con == undefined)
            con = null;
    }
    catch (ex) {
        con = null;
    }

    switch (con) {
        case String:
            var s = o; // .encodeURI();
            s = '"' + s.replace(/(["\\])/g, '\\$1') + '"';
            s = s.replace(/\n/g, "\\n");
            s = s.replace(/\r/g, "\\r");
            return s;
        case Array:
            var v = [];
            for (var i = 0; i < o.length; i++)
                v.push(_ToJSON(o[i]));
            return "[" + v.join(", ") + "]";
        case Number:
            return isFinite(o) ? o.toString() : _ToJSON(null);
        case Boolean:
            return o.toString();
        case Date:
            var d = new Object();
            d.__type = "System.DateTime";
            d.Year = o.getUTCFullYear();
            d.Month = o.getUTCMonth() + 1;
            d.Day = o.getUTCDate();
            d.Hour = o.getUTCHours();
            d.Minute = o.getUTCMinutes();
            d.Second = o.getUTCSeconds();
            d.Millisecond = o.getUTCMilliseconds();
            d.TimezoneOffset = o.getTimezoneOffset();
            return _ToJSON(d);
        default:
            if (o["toJSON"] != null && typeof o["toJSON"] == "function")
                return o.toJSON();
            if (o.length != undefined) {
                v = [];
                for (var i = 0; i < o.length; i++)
                    v.push(_ToJSON(o[i]));
                return "[" + v.join(", ") + "]";
            }
            if (typeof o == "object") {
                v = [];
                for (var attr in o) {
                    if (typeof o[attr] != "function")
                        v.push('"' + attr + '": ' + _ToJSON(o[attr]));
                }

                if (v.length > 0)
                    return "{" + v.join(", ") + "}";
                else
                    return "{}";
            }
            return o.toString();
    }
}
//#endregion

//#endregion

//#region 扩展区

//-----------------------------------------
// string方法扩展
// string.replaceAll,string.Trim
//-----------------------------------------
//summary:替换所有字符串
//param[AFindText]:查找的字符串
//param[ARepText]:替换的字符串
//return:替换后的字符串
String.prototype.replaceAll = function (AFindText, ARepText) {
    var raRegExp = new RegExp(AFindText.replace(/([\(\)\[\]\{\}\^\$\+\-\*\?\.\"\'\|\/\\])/g, "\\$1"), "ig");
    return this.replace(raRegExp, ARepText);
};

String.prototype.trimEnd = function (trimStr) {
    if (!trimStr) { return this; }
    var temp = this;
    while (true) {
        if (temp.substr(temp.length - trimStr.length, trimStr.length) != trimStr) {
            break;
        }
        temp = temp.substr(0, temp.length - trimStr.length);
    }
    return temp;
};

String.prototype.trim = function (trimStr) {
    var temp = trimStr;
    if (!trimStr) { temp = " "; }
    return this.trimStart(temp).trimEnd(temp);
};

String.prototype.trimStart = function (trimStr) {
    if (!trimStr) { return this; }
    var temp = this;
    while (true) {
        if (temp.substr(0, trimStr.length) != trimStr) {
            break;
        }
        temp = temp.substr(trimStr.length);
    }
    return temp;
};

//字符串url设置和取值。
//取值：url.UrlParams(name) 设值（添加或者修改参数）：url.UrlParams(name,value),url.UrlParams({n1:v1,n2:v2})
String.prototype.UrlParams = function (name, value) {

    if (typeof name == "object") {

        var str = this;

        for (var n in name) {

            str = str.setUrlParam(n, name[n]);
        }

        return str;
    }

    if (typeof name == "string") {

        if (arguments.length > 1)
            return this.setUrlParam(name, value);
        else
            return this.getUrlParam(name);

    }

    return this;
}

String.prototype.getUrlParam = function (name) {

    var reg = new RegExp("(\\\?|&)" + name + "=([^&]+)(&|$)", "i");

    var m = this.match(reg);

    if (m) {

        return m[2];

    } else {

        return '';

    }
}

String.prototype.setUrlParam = function (name, value) {

    var reg = new RegExp("(\\\?|&)" + name + "=([^&]*)", "i");

    var m = this.match(reg);

    if (m) {

        return (this.replace(reg, function ($0, $1, $2) {
            if ($2)
                return ($0.replace($2, value));
            else
                return $0 + value;

        }));

    } else {

        if (this.indexOf('?') == -1) {

            return (this + '?' + name + '=' + value);

        } else {

            return (this + '&' + name + '=' + value);

        }

    }
}

//字符串url删除参数
String.prototype.UrlParamDel = function (name) {

    var reg = new RegExp("(\\\?|&)" + name + "=([^&]*)(&|$)", "i");

    if (this.indexOf("?" + name + "=") > 0)
        return this.replace(reg, "?");

    return this.replace(reg, "");

}

//summary:去除字符串前后空格
//return:去除空格后字符串
String.prototype.Trim = function () {
    return this.replace(/^\s+|\s+$/g, "");
};

//-----------------------------------------
// 数组方法扩展
// Array.IndexOf、Array.Find、Array.FindAll、Array.Contains
// 后三个方法调用示例:Array.Find('o=>o["name"] = "name" && o["value"] = "value";')
//-----------------------------------------
//summary:查找元素位置
//param[Object]:元素
//return:位置索引，未找到时为-1
if (!Array.indexOf) {
    Array.prototype.indexOf = function (Object) {
        for (var i = 0; i < this.length; i++) {
            if (this[i] == Object) {
                return i;
            }
        }
        return -1;
    }
}
Array.prototype.indexByKey = function (key) {

    for (var i = 0; i < this.length; i++) {

        if (String(this[i].key) == String(key) || String(this[i].Key) == String(key)) {

            return i;
        }
    }

    return -1;
}
//summary:查找元素
//param[str]:条件字符串，如'o=>o["name"] = "name" && o["value"] = "value";',需要分号
//return:查找出来的元素或者null
Array.prototype.Find = function (fn) {

    if (typeof fn != "function") return null;

    var tempItem = null;

    for (var i = 0; i < this.length; i++) {

        if (!fn(this[i])) continue;

        tempItem = this[i];

        break;
    }
    return tempItem;
};
//summary:查找数组
//param[str]:条件字符串，如'o=>o["name"] = "name" && o["value"] = "value";',需要分号
//return:查找出来的元素数组或者空数组
Array.prototype.FindAll = function (fn) {

    var tempList = new Array();

    if (typeof fn != "function") return tempList;

    for (var i = 0; i < this.length; i++) {

        if (!fn(this[i])) continue;

        tempList.push(this[i]);
    }

    return tempList;
};
//summary:查找是否存在
//param[str]:条件字符串，如'o=>o["name"] = "name" && o["value"] = "value";',需要分号
//return:true或者false
Array.prototype.Contains = function (fn) {
    var tempItem = false;

    if (typeof fn != "function") return false;

    for (var i = 0; i < this.length; i++) {

        if (!fn(this[i])) continue;

        tempItem = true;

        break;
    }

    return tempItem;
};

Array.prototype.Sum = function (fn) {

    if (typeof fn != "function") fn = function (o) { return o; };

    var result = 0;

    for (var i = 0; i < this.length; i++) {
        result += fn(this[i]);
    }

    return result;
}

Array.prototype.Remove = function (fn) {

    var i = this.length - 1;

    while (i > -1) {

        if (fn(this[i])) {

            this.splice(i, 1);
        }
        i--;
    }
}

//------------------------------------------
// 日期方法扩展
// Date.Format,Date.parseDate
//------------------------------------------
//summary:日期格式化
//param[formatStr]:格式。(yyyy/yy)年,(MM/M)月，（W/w）星期，（dd/d）日期，（hh/h）小时，（mm/m）分钟，（ss/s）秒,(S) 微秒
//return:时间字符串
Date.prototype.Format = function (format) {

    var Week = ['日', '一', '二', '三', '四', '五', '六'];

    var o = {

        "M+": this.getMonth() + 1, //month  
        "d+": this.getDate(), //day  
        "h+": this.getHours(), //hour  
        "m+": this.getMinutes(), //minute  
        "s+": this.getSeconds(), //second  
        "q+": Math.floor((this.getMonth() + 3) / 3), //quarter  
        "S": this.getMilliseconds() //millisecond  
    }

    if (/(y+)/.test(format))
        format = format.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
    for (var k in o)
        if (new RegExp("(" + k + ")").test(format))
            format = format.replace(RegExp.$1, RegExp.$1.length == 1 ? o[k] : ("00" + o[k]).substr(("" + o[k]).length));

    format = format.replace(/w|W/g, Week[this.getDay()]);

    return format;
}
/* 得到日期年月日等加数字后的日期 */
//interval:y年,q季度,m月,d日,w周,h小时,n分钟,s秒,ms毫秒
Date.prototype.dateAdd = function (interval, number) {
    var d = this;
    var k = { 'y': 'FullYear', 'q': 'Month', 'm': 'Month', 'w': 'Date', 'd': 'Date', 'h': 'Hours', 'n': 'Minutes', 's': 'Seconds', 'ms': 'MilliSeconds' };
    var n = { 'q': 3, 'w': 7 };
    eval('d.set' + k[interval] + '(d.get' + k[interval] + '()+' + ((n[interval] || 1) * number) + ')');
    return d;
}
/* 计算两日期相差的日期年月日等 */
Date.prototype.dateDiff = function (interval, objDate2) {
    var d = this, i = {}, t = d.getTime(), t2 = objDate2.getTime();
    i['y'] = objDate2.getFullYear() - d.getFullYear();
    i['q'] = i['y'] * 4 + Math.floor(objDate2.getMonth() / 4) - Math.floor(d.getMonth() / 4);
    i['m'] = i['y'] * 12 + objDate2.getMonth() - d.getMonth();
    i['ms'] = objDate2.getTime() - d.getTime();
    i['w'] = Math.floor((t2 + 345600000) / (604800000)) - Math.floor((t + 345600000) / (604800000));
    i['d'] = Math.floor(t2 / 86400000) - Math.floor(t / 86400000);
    i['h'] = Math.floor(t2 / 3600000) - Math.floor(t / 3600000);
    i['n'] = Math.floor(t2 / 60000) - Math.floor(t / 60000);
    i['s'] = Math.floor(t2 / 1000) - Math.floor(t / 1000);
    return i[interval];
} 
//summary:将字符串转为Date
//param[str]:时间字符串,格式为（yyyy-mm-dd hh:mm:ss）或（yyyy/mm/dd hh:mm:ss）
//return:时间
Date.parseDate = function (str) {
    //str = str.replace(/\/\/g, "-")

    if (typeof str != "string") return;

    var parts = str.split(" ");
    var dp = "";

    if (parts[0].indexOf("-") > 0)
        dp = parts[0].split("-");
    else if (parts[0].indexOf("/") > 0)
        dp = parts[0].split("/");
    else
        return null;

    var dt = new Date(dp[0], Number(dp[1]) - 1, dp[2]);
    if (parts.length > 1) {
        var tt = parts[1].split(":");
        dt.setHours(parseInt(tt[0]), parseInt(tt[1]), parseInt(tt[2]));
    }
    return dt;
}

//object的深拷贝方法
Object.clone = function (sObj) {

    if (typeof sObj !== "object") {

        return sObj;
    }

    var s = {};

    if (sObj.constructor == Array) {

        s = [];
    }

    for (var i in sObj) {

        s[i] = Object.clone(sObj[i]);
    }

    return s;
}
//将chief用bench补充完整。即chief中undefined的属性用bench中对应的属性补上，有值的属性保持原样
//返回补充完整后的chief。
//注：原有的chief运行完此方法后变成补充完整后的chief
Object.add = function (chief, bench) {

    if (!bench) return chief;

    if (chief === undefined)
        chief = bench.constructor ? new bench.constructor
            : (Object.prototype.toString.call(bench) === '[object Array]' ? new Array() : new Object());

    for (var n in bench) {

        var benchTemp = bench[n];

        if (typeof benchTemp == "object") {

            benchTemp = Object.add(chief[n], benchTemp);
        }

        if (chief[n] === undefined) chief[n] = benchTemp;
    }

    return chief;

}

var isMobile = {
    Android: function ()
    {
        return navigator.userAgent.match(/Android/i) ? true : false;
    },
    BlackBerry: function ()
    {
        return navigator.userAgent.match(/BlackBerry/i) ? true : false;
    },
    iOS: function ()
    {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i) ? true : false;
    },
    Windows: function ()
    {
        return navigator.userAgent.match(/IEMobile/i) ? true : false;
    },
    any: function ()
    {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Windows());
    }
};
//#endregion