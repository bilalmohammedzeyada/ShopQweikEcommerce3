/**
 * 邮箱格式判断
 * @param str
 */
function checkEmail(str) {
    var reg = /^[a-z0-9]([a-z0-9\\.]*[-_]{0,4}?[a-z0-9-_\\.]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+([\.][\w_-]+){1,5}$/i;
    if (reg.test(str)) {
        return true;
    } else {
        return false;
    }
}

/**
 * 手机号码格式判断
 * @param tel
 * @returns {boolean}
 */
function checkMobile(tel) {
    var reg = /(^1[3|4|5|7|8][0-9]{9}$)/;
    return reg.test(value);
}

function isInteger(value) {
    if (value == '') return 0;
    var reg = /^\d+$/;
    if (reg.test(value)) {
        return 1;
    }
    else {
        return -1;
    }
}

function isFloat(value) {
    if (value == '') return 0;
    var reg = /^\d+(\.\d*)?$/;
    if (reg.test(value)) {
        return 1;
    }
    else {
        return -1;
    }
}

function isEmail(value) {
    var reg = /^[a-zA-Z0-9]+([._-]*[a-zA-Z0-9])*@([a-zA-Z0-9]+[-a-zA-Z0-9]*[a-zA-Z0-9]+.){1,63}[a-zA-Z0-9]+$/;
    return reg.test(value);
}

function isPhoneNo(value) {
    var reg = /^\d+$/;
    return reg.test(value);
}

/*
 * 上传图片 后台专用
 * @access  public
 * @null int 一次上传图片张图
 * @elementid string 上传成功后返回路径插入指定ID元素内
 * @path  string 指定上传保存文件夹,默认存在Public/upload/temp/目录
 * @callback string  回调函数(单张图片返回保存路径字符串，多张则为路径数组 )
 */
function GetUploadify(num, elementid, path, callback) {
    var upurl = url('/Uploadify/upload/num/' + num + '/input/' + elementid + '/path/' + path + '/func/' + callback);
    var iframe_str = '<iframe frameborder="0" ';
    iframe_str = iframe_str + 'id=uploadify ';
    iframe_str = iframe_str + ' src=' + upurl;
    iframe_str = iframe_str + ' allowtransparency="true" class="uploadframe" scrolling="no"> ';
    iframe_str = iframe_str + '</iframe>';
    $("body").append(iframe_str);
    $("iframe.uploadframe").css("height", $(document).height()).css("width", "100%").css("position", "absolute").css("left", "0px").css("top", "0px").css("z-index", "999999").show();
    $(window).resize(function () {
        $("iframe.uploadframe").css("height", $(document).height()).show();
    });
}

function deletePic(imgUrl, callback) {
    $.get(url("/Uploadify/delupload"), {action: "del", filename: imgUrl},
        function () {
            if (typeof(callback) == "function") callback();
        });
}


// 判断是否手机浏览器
function isMobileBrowser() {
    var sUserAgent = navigator.userAgent.toLowerCase();
    var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
    var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
    var bIsMidp = sUserAgent.match(/midp/i) == "midp";
    var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
    var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
    var bIsAndroid = sUserAgent.match(/android/i) == "android";
    var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
    var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
    if (bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) {
        return true;
    } else
        return false;
}

function postForm(form_id, success, error) {
    if (!form_id) return false;

    var data = $('#' + form_id).serialize();
    var url = $("#" + form_id).attr('action');

    if (!url) return false;

    ajaxPost(url, data, success, error);
}

function ajaxGet(url, param, success, error) {
    $.get(url, param, function (result) {
        if (result.sts == 0) {
            errorBox(result.msg);
            if (typeof(error) == "function") error(result);
        }
        if (result.sts == 1) {
            if (result.msg) {
                successBox(result.msg);
            }
            if (result.url) {
                location.href = result.url;
            }
            if (typeof(success) == "function") success(result);
        }
    });
}

function ajaxPost(url, param, success, error) {
    $.post(url, param, function (result) {
        if (result.sts == 0) {
            errorBox(result.msg);
            if (typeof(error) == "function") error(result);
        }
        if (result.sts == 1) {
            if (result.msg) {
                successBox(result.msg);
            }
            if (result.url) {
                location.href = result.url;
            }
            if (typeof(success) == "function") success(result);
        }
    });
}

function showLoading() {
    layer.load(2);
}

function closeLoading() {
    layer.closeAll('loading');
}

function msgbox(msg) {
    layer.msg(msg, {
            icon: 0,
            time: 2000 //2秒关闭（如果不配置，默认是3秒）
        }
    );
}

function successBox(msg, href) {
    layer.msg(msg, {
        icon: 1,
        time: 2000 //2秒关闭（如果不配置，默认是3秒）
    }, function () {
        if (href && href.length > 0) {
            location.href = href;
        }
    });
}

function errorBox(msg) {
    layer.msg(msg, {
        icon: 2
    });
}

function confirmBox(msg, confirm, cancel) {
    layer.confirm(msg, {
        icon: 3,
        title: '',
        btn: [kroot.lang.confirm, kroot.lang.cancel]
    }, function (index) {
        if (typeof(confirm) == "function") confirm();
        layer.close(index);
    }, function () {
        if (typeof(cancel) == "function") cancel();
    });
}

function showLayer(id, title, width, height, confirm) {
    layer.open({
        area: [width + 'px', height + 'px'], //宽高
        title: title,
        btn: [kroot.lang.confirm],
        content: $("#" + id).html(),
        yes: function (index, layero) {
            if (typeof(confirm) == "function") confirm(layero);
            layer.close(index);
        }
    });
}

function refreshVerifyCode(elementId) {
    $('#' + elementId).attr('src', url('/Index/verifyCode?') + Math.random());
}

function chgLang(lng) {
    if (lng != '') {
        var str = window.location.href.split('?');
        location.href = str[0] + "?l=" + lng;
    }
}

function url(url) {
    if (kroot && kroot.base) {
        return kroot.base + url;
    }
    return url;
}

function cdn(url) {
    if (kroot && kroot.cdn) {
        return kroot.cdn + url;
    }
    return url;
}

function gurl(id) {
    if (kroot && kroot.gurl) {
        return kroot.gurl + id;
    }
    return id;
}

function surl(name) {
    if (kroot && kroot.surl) {
        return kroot.surl + name;
    }
    return name;
}

function curl(id) {
    if (kroot && kroot.curl) {
        return kroot.curl + id;
    }
    return id;
}

$(function () {
    $("img.upload_preview").click(function () {
        imgShow($(this).attr("src"));
    });
});

function imgShow(img_url) {
    if ($("#bigimg").length == 0) {
        var divPrev = "<div id='outerdiv' style='position:fixed;top:0;left:240px;background:rgba(0,0,0,0.7);z-index:999;width:100%;height:100%;display:none;'>" +
            "    <div id='innerdiv' style='position:absolute;'><img id='bigimg' style='border:3px solid #fff;' src='' /></div>" +
            "</div>";
        $("body").append(divPrev);
    }
    $("#bigimg").attr("src", img_url);//设置#bigimg元素的src属性
    /*获取当前点击图片的真实大小，并显示弹出层及大图*/
    $("<img/>").attr("src", img_url).load(function () {
        var windowW = $(window).width();//获取当前窗口宽度
        var windowH = $(window).height();//获取当前窗口高度
        var realWidth = this.width;//获取图片真实宽度
        var realHeight = this.height;//获取图片真实高度
        var imgWidth, imgHeight;
        var scale = 0.8;//缩放尺寸，当图片真实宽度和高度大于窗口宽度和高度时进行缩放

        if (realHeight > windowH * scale) {
            imgHeight = windowH * scale;//如大于窗口高度，图片高度进行缩放
            imgWidth = imgHeight / realHeight * realWidth;//等比例缩放宽度
            if (imgWidth > windowW * scale) {
                imgWidth = windowW * scale;//再对宽度进行缩放
            }
        } else if (realWidth > windowW * scale) {
            imgWidth = windowW * scale;//如大于窗口宽度，图片宽度进行缩放
            imgHeight = imgWidth / realWidth * realHeight;//等比例缩放高度
        } else {
            imgWidth = realWidth;
            imgHeight = realHeight;
        }
        $("#bigimg").css("width", imgWidth);//以最终的宽度对图片缩放
        var w = (windowW - imgWidth) / 2;//计算图片与窗口左边距
        var h = (windowH - imgHeight) / 2;//计算图片与窗口上边距
        $("#innerdiv").css({"top": h, "left": w - 240});//设置#innerdiv的top和left属性
        $("#outerdiv").fadeIn("fast");//淡入显示#outerdiv及.pimg
    });

    $("#outerdiv").click(function () {
        $(this).fadeOut("fast");
    });
}

function loadOptions(url, objId, parentId, defaultOpt, selectedVal) {
    var html = "";
    objId = "#" + objId;
    if (defaultOpt) {
        if (!selectedVal) {
            html += "<option value='' selected>-- " + defaultOpt + " --</option>";
        }
        else {
            html += "<option value=''>-- " + defaultOpt + " --</option>";
        }
    }

    if (parentId != '') {
        $.get(url, {"pid": parentId}, function (ret) {
            if (ret.sts == 1 && ret.data) {
                for (var i = 0; i < ret.data.length; i++) {
                    if (ret.data[i].id == selectedVal) {
                        html += "<option selected value='" + ret.data[i].id + "'>" + ret.data[i].name + "</option>";
                    } else {
                        html += "<option value='" + ret.data[i].id + "'>" + ret.data[i].name + "</option>";
                    }
                }
            }
            $(objId).html(html);

            $(objId).select2({
                minimumResultsForSearch: "-1",
                width: "100%"
            });
        }, 'json');
    } else {
        $(objId).html(html);
        $(objId).select2({
            minimumResultsForSearch: "-1",
            width: "100%"
        });
    }
}

(function ($) {
    $.fn.serializeJson = function () {
        var serializeObj = {};
        var array = this.serializeArray();
        $(array).each(function () {
            if (serializeObj[this.name]) {
                if ($.isArray(serializeObj[this.name])) {
                    serializeObj[this.name].push(this.value);
                } else {
                    serializeObj[this.name] = [serializeObj[this.name], this.value];
                }
            } else {
                serializeObj[this.name] = this.value;
            }
        });
        return serializeObj;
    };
})(jQuery);


function mergeTableCells(tblId, mergeCols) {
    var tab = document.getElementById(tblId);
    if (!tab || tab.rows <= 1) return;

    var maxCol, val, count, start;
    if (mergeCols > 0) {
        maxCol = mergeCols;
    } else if (mergeCols < 0) {
        maxCol = tab.rows[0].cells.length + mergeCols;
    } else {
        maxCol = tab.rows[0].cells.length;
    }

    if (tab != null) {
        for (var col = maxCol - 1; col >= 0; col--) {
            count = 1;
            val = "";
            for (var i = 0; i < tab.rows.length; i++) {
                if (val == tab.rows[i].cells[col].innerHTML) {
                    count++;
                } else {
                    if (count > 1) {
                        start = i - count;
                        tab.rows[start].cells[col].rowSpan = count;
                        for (var j = start + 1; j < i; j++) {
                            tab.rows[j].cells[col].style.display = "none";
                        }
                        count = 1;
                    }
                    val = tab.rows[i].cells[col].innerHTML;
                }
            }
            if (count > 1) {
                start = i - count;
                tab.rows[start].cells[col].rowSpan = count;
                for (var j = start + 1; j < i; j++) {
                    tab.rows[j].cells[col].style.display = "none";
                }
            }
        }
    }
}

function saveCondition(cond, key) {
    var k = "KWD_COND_" + $.cookie("kselm");
    if (key) {
        k = k + key;
    }
    if (window.localStorage) {
        var storage = window.localStorage;
        storage.setItem(k, JSON.stringify(cond));
    }
}

function getCondition(key) {
    var k = "KWD_COND_" + $.cookie("kselm");
    if (key) {
        k = k + key;
    }
    var cond = null;
    if (window.localStorage) {
        var storage = window.localStorage;
        cond = JSON.parse(storage.getItem(k));
    }
    return cond;
}

function clearCondition() {
    if (window.localStorage) {
        window.localStorage.clear();
    }
}

function tableSelectAll(e) {
    $('.checkboxs').prop('checked', $(e).prop('checked'));
    $('.styled, .multiselect-container input').uniform({radioClass: 'choice', selectAutoWidth: false});
}

function getTableSelectedId() {
    var ids = [];
    $('.checkboxs:checked').each(function () {
        var id = $(this).val();
        if (id) ids.push(id);
    });
    return ids;
}

function isJsonString(str) {
    try {
        if (typeof JSON.parse(str) == "object") {
            return true;
        }
    } catch (e) {
    }
    return false;
}


function tableLoad(id, url, cond) {
    $("#" + id).load(url, {"cond": cond}, function (ret) {
        if (isJsonString(ret)) {
            ret = JSON.parse(ret);
            if (ret.msg) msgbox(ret.msg);
            if (ret.url) location.href = ret.url;
        }
        $('.styled, .multiselect-container input').uniform();
        $("img.upload_preview").click(function () {
            imgShow($(this).attr("src"));
        });
        $("#" + id).find("select.select-full").select2({
            minimumResultsForSearch: "-1",
            width: "100%"
        });
    });
}

function checkUrl(url) {
    url = url.toLowerCase();
    var re = new RegExp("^(http://|https://).*$", "i");
    if (url && (!re.test(url) || url.indexOf("javascript") > -1)) {
        return false;
    }
    return true;
}

function hasArabicChar(str){
    var reg = /[\u0621-\u064A\u0660-\u0669]+/;
    return reg.test(str);
}

function sprintf() {
    var arg = arguments,
        str = arg[0] || '',
        i, n;
    for (i = 1, n = arg.length; i < n; i++) {
        str = str.replace(/%s/, arg[i]);
    }
    return str;
}