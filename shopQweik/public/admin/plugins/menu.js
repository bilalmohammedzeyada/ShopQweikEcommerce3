$(function () {
    $("a[id^='sm']").click(function () {
        if ($(this).attr("level") == "2") {
            var mid = $(this).attr("id");
            $.cookie("kselm", $(this).attr("id"), {expires: 1, path: '/'});
            $.cookie("collapsible", mid.substring(0, 4), {expires: 7, path: '/'});
            clearCondition();
        }
    });
    var selMnu = $.cookie("kselm");
    if (selMnu) {
        var pid = selMnu.substring(0, 4);
        $("#" + selMnu).css("background-color", "#1b2327");
    }
});