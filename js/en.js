$(".drag-on").click(function() {
    if ($(this).closest('.tf').hasClass("draggable")) {
        $(this).closest('.tf').removeClass('draggable');
        $(this).closest('.tf').draggable('disable');
        $(this).html("Drag");
        $(this).closest('.tf').css("z-index", "5");
    } else {
        $(this).closest('.tf').addClass('draggable');
        $(".draggable").draggable({
            containment: "document",
        });
        $(this).closest('.tf').draggable('enable');
        $(this).closest('.tf').css("z-index", "30");
        $(this).html("Stop dragging");
    }
})

$(".resizable").resizable();

$(".resize-on").click(function() {
    if ($(this).closest('.tf').hasClass("resizable")) {
        $(this).closest('.tf').removeClass('resizable');
        $(this).closest('.tf').resizable('disable');
        $(this).html("Resize");

    } else {
        $(this).closest('.tf').addClass('resizable');
        $(".resizable").resizable();
        $(this).closest('.tf').resizable('enable');
        $(this).html("Stop resizing");
    }
})