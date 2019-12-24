if ($.cookie('--l-color')) {
    document.documentElement.style.setProperty('--l-color', $.cookie('--l-color'));
    $("#link-color-input").val($.cookie('--l-color'));
}
if ($.cookie('--t-color')) {
    document.documentElement.style.setProperty('--t-color', $.cookie('--t-color'));
    $("#main-color-input").val($.cookie('--t-color'));
}
if ($.cookie('--h-color')) {
    document.documentElement.style.setProperty('--h-color', $.cookie('--h-color'));
    $("#header-color-input").val($.cookie('--h-color'));
}
if ($.cookie('--bg-color')) {
    document.documentElement.style.setProperty('--bg-color', $.cookie('--bg-color'));
    $("#bg-color-input").val($.cookie('--bg-color'));
}

function setCookieColor(value) {
    var cookieName = value;
    var st = document.documentElement.style.getPropertyValue(value);
    $.cookie(cookieName, st, { expires: 60 * 60 * 60 * 24 * 1000 });
};

function setAllColorsCookie() {
    setCookieColor('--l-color');
    setCookieColor('--t-color');
    setCookieColor('--bg-color');
    setCookieColor('--h-color');

}
$("#link-color-input").change(function() {
    document.documentElement.style.setProperty('--l-color', $(this).val());
    setAllColorsCookie();
})
$("#main-color-input").change(function() {
    document.documentElement.style.setProperty('--t-color', $(this).val());
    setAllColorsCookie();
})
$("#bg-color-input").change(function() {
    document.documentElement.style.setProperty('--bg-color', $(this).val());
    setAllColorsCookie();
})
$("#header-color-input").change(function() {
    document.documentElement.style.setProperty('--h-color', $(this).val());
    setAllColorsCookie();
})

$.fn.createCookieHeadFont = function() {
    var cookieName = 'header-font';
    var st = $(this).css("font-family");
    $.cookie(cookieName, st, { expires: 60 * 60 * 60 * 24 * 1000 });

    var cookieName = 'active-head';
    var st = $(this).attr("id");
    $.cookie(cookieName, st, { expires: 60 * 60 * 60 * 24 * 1000 });
}
if ($.cookie('header-font')) {
    $('.head-font a').removeClass("active");
    $('#' + $.cookie('active-head')).addClass("active");
    document.documentElement.style.setProperty('--headfont', $.cookie('header-font'));
}

$.fn.createCookieTextFont = function() {
    var cookieName = 'text-font';
    var st = $(this).css("font-family");
    $.cookie(cookieName, st, { expires: 60 * 60 * 60 * 24 * 1000 });

    var cookieName = 'active-text';
    var st = $(this).attr("id")
    $.cookie(cookieName, st, { expires: 60 * 60 * 60 * 24 * 1000 });
}
if ($.cookie('text-font')) {
    $('.text-font a').removeClass("active");
    $('#' + $.cookie('active-text')).addClass("active");
    document.documentElement.style.setProperty('--textfont', $.cookie('text-font'));
}

$(".head-font").on("click", "a", function() {
    $('.head-font a').removeClass("active");
    $(this).addClass("active");
    document.documentElement.style.setProperty('--headfont', $(this).css("font-family"));
    $(this).createCookieHeadFont();
})
$(".text-font").on("click", "a", function() {
    $('.text-font a').removeClass("active");
    $(this).addClass("active");
    document.documentElement.style.setProperty('--textfont', $(this).css("font-family"));
    $(this).createCookieTextFont();
})

function setCookieFontSize() {
    var cookieName = 'font-size';
    var st = $("#font-size-range").val();
    $.cookie(cookieName, st, { expires: 60 * 60 * 60 * 24 * 1000 });
}
if ($.cookie("font-size")) {
    $("#font-size-range").val($.cookie("font-size"));
    $("p, body, .btn").css("font-size", $.cookie("font-size") + "px");
}
$("#font-size-range").change(function() {
    $("p, body, .btn").css("font-size", $(this).val() + 'px');
    setCookieFontSize();
})

function setCookieTextFontWeight() {
    var cookieName = 'font-weight-t';
    var st = $("#font-weight-text").val();
    $.cookie(cookieName, st, { expires: 60 * 60 * 60 * 24 * 1000 });
}
if ($.cookie("font-weight-t")) {
    $("#font-weight-text").val($.cookie("font-weight-t"));
    $("p, body, .btn").css("font-weight", $.cookie("font-weight-t") * 200);
}
$("#font-weight-text").change(function() {
    $("p, body, .btn").css("font-weight", $(this).val() * 200);
    setCookieTextFontWeight();
})

function setCookieHeadFontWeight() {
    var cookieName = 'font-weight-h';
    var st = $("#font-weight-head").val();
    $.cookie(cookieName, st, { expires: 60 * 60 * 60 * 24 * 1000 });
}
if ($.cookie("font-weight-h")) {
    $("#font-weight-head").val($.cookie("font-weight-h"));
    $("h1,h2,h3,h4,h5,h6").css("font-weight", $.cookie("font-weight-h") * 200);
}
$("#font-weight-head").change(function() {
    $("h1,h2,h3,h4,h5,h6").css("font-weight", $(this).val() * 200);
    setCookieHeadFontWeight();
})

$("#reset-color").click(function() {
    document.documentElement.style.setProperty('--l-color', '');
    setCookieColor('--l-color');
    $("#link-color-input").val("#00d2b5");
    document.documentElement.style.setProperty('--t-color', '');
    setCookieColor('--t-color');
    $("#main-color-input").val('#A8A8A8');
    document.documentElement.style.setProperty('--bg-color', '');
    setCookieColor('--bg-color');
    $("#bg-color-input").val('#ffffff');
    document.documentElement.style.setProperty('--h-color', '');
    setCookieColor('--h-color');
    $("#header-color-input").val("#000000");
    document.documentElement.style.setProperty('--headfont', "Montserrat, sans-serif");
    document.documentElement.style.setProperty('--textfont', "Montserrat, sans-serif");
    $('.text-font a').removeClass("active");
    $('.head-font a').removeClass("active");
    $("#text-mons").addClass("active").createCookieTextFont();
    $("#head-mons").addClass("active").createCookieHeadFont();
    $("p, body, .btn").css("font-size", '16px');
    $("#font-size-range").val('16')
    setCookieFontSize();
    $("#button-choose .btn").removeClass("active-btn");
    $("#button1").addClass("active-btn");
    for (i = 1; i < 7; i++) {
        $(".btn").removeClass("button" + i);
    }
    $("#font-weight-head").val(3);
    $("h1,h2,h3,h4,h5,h6").css("font-weight", 900);
    setCookieHeadFontWeight();

    $("#font-weight-text").val(2);
    $("p, body, .btn").css("font-weight", 400);
    setCookieTextFontWeight();
})

function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

$(".in1").change(function() {
    //if user changes not bc
    if ($(this).attr('id') != 'bg-color-input') {
        if ($(this).val() == $("#bg-color-input").val()) {
            $("#bg-color-input").val(getRandomColor());
            document.documentElement.style.setProperty('--bg-color', $("#bg-color-input").val());
            setCookieColor('--bg-color');
        }
    } else {
        if ($(this).val() == $("#header-color-input").val()) {
            $("#header-color-input").val(getRandomColor());
            document.documentElement.style.setProperty('--h-color', $("#header-color-input").val());
            setCookieColor('--h-color');
        }
        if ($(this).val() == $("#main-color-input").val()) {
            $("#main-color-input").val(getRandomColor());
            document.documentElement.style.setProperty('--t-color', $("#main-color-input").val());
            setCookieColor('--t-color');

        }
        if ($(this).val() == $("#link-color-input").val()) {
            $("#link-color-input").val(getRandomColor());
            document.documentElement.style.setProperty('--l-color', $("#link-color-input").val());
            setCookieColor('--l-color');
        }
    }
})

$("#reload-btn").click(function() {
    document.location.reload(true);
})
$("#generate").click(function() {
    $("#bg-color-input").val(getRandomColor());
    document.documentElement.style.setProperty('--bg-color', $("#bg-color-input").val());
    $("#header-color-input").val(getRandomColor());
    document.documentElement.style.setProperty('--h-color', $("#header-color-input").val());
    $("#main-color-input").val(getRandomColor());
    document.documentElement.style.setProperty('--t-color', $("#main-color-input").val());
    $("#link-color-input").val(getRandomColor());
    document.documentElement.style.setProperty('--l-color', $("#link-color-input").val());
    setCookieColor('--l-color');
    setCookieColor('--t-color');
    setCookieColor('--h-color');
    setCookieColor('--bg-color');
})
$.fn.setCookie = function() {
    var cookieName = this.attr("id");
    var st = this.attr("style");
    $.cookie(cookieName, st, { expires: 60 * 60 * 60 * 24 * 1000 });
};

var divcount = $(".tf").length;
for (i = 1; i <= divcount; i++) {
    var name = 'div' + i;
    var nameid = '#div' + i;
    var style = $.cookie(name);
    if (style != null) {
        $(nameid).attr("style", style);
    }
}
$(".tf").resize(function() {
    $(this).setCookie();
})
$(".tf").on("drag", function() {
    $(this).setCookie();
});

$(".return").click(function() {
    $(this).closest('.tf').attr('style', null);
    $(this).closest('.tf').setCookie();
})
$(".dropColor").change(function() {
    $(this).closest(".tf").css("color", $(this).val());
    $(this).closest(".tf").setCookie();
})
$(".dropBackColor").change(function() {
    $(this).closest(".tf").css("background-color", $(this).val());
    $(this).closest(".tf").setCookie();
})

function createButtonCookie() {
    var cookieName = "button"
    var st = $(".active-btn").attr("id");
    $.cookie(cookieName, st, { expires: 60 * 60 * 60 * 24 * 1000 });
}
if ($.cookie("button")) {
    $("#button-choose .btn").removeClass("active-btn");
    $("#" + $.cookie("button")).addClass("active-btn");
    for (i = 1; i < 7; i++) {
        $(".btn").removeClass("button" + i);
    }
    $(".btn-primary").addClass($.cookie("button"));
}

$("#button-choose .btn").click(function() {
    $("#button-choose .btn").removeClass("active-btn");
    $(this).addClass("active-btn");
    for (i = 1; i < 7; i++) {
        $(".btn-primary").removeClass("button" + i);
    }
    $(".btn-primary").addClass($(this).attr("id"));
    createButtonCookie();
})

$("#button-hover").on("mouseenter", function() {
    $(this).css("border-color", getRandomColor());
    $(this).css("color", getRandomColor());
    $(this).css("backround-color", getRandomColor());
})
$("#button-hover").on("mouseleave", function() {
    $(this).css("border-color", "var(--l-color)");
    $(this).css("color", "var(--bg-color)");
    $(this).css("backround-color", "var(--l-color)");
})