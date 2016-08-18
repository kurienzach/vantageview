$(document).ready(function() {
    resize_sidebar();
    //get_weather_data();
    //get_scene_data_from_server(1).done(function() {render_scene(1)});
    render_scene(1);

    // Testimonial slider loop
    setInterval(function(){
      testimonial_slider();   
    },9000);

    $loader.find('.userguide button').click(function() {
        show_userguide(false); 
    });
});

$(window).resize(function() {
    resize_sidebar();
    scene_resize();
    modal_resize();
});

function resize_sidebar () {
    // Hide testimonial if sidebar list is long
    if ($sidebar_list.offset()["top"] + $sidebar_list.height() > $testimonial.offset()["top"]) {
        $testimonial.addClass("scene-hide");
    } else {
        $testimonial.removeClass("scene-hide");
    }
}

function modal_resize() {
    if (!modal_visible)
        return;

    var $table = $modal_container.find(".table");

    // if there is a table inside the modal
    if ($table.length > 0) {
        var elems_height = 0;
        var table_row_height = 50;
        var modal_padding = 40;
        var $modal_content = $modal_container.find(".modal-content > div > div");

        // Height and width inclusive of the padding
        var modal_height = $modal_content.parent().parent().height(); 
        var modal_width = $modal_content.parent().parent().width();

        // Find the heights of all elements other than the table 
        $.each($modal_content.children().not(".table"), function(index, elem) {
            elems_height += $(elem).outerHeight(true);
        });

        // Find the height of the table if only it was there
        var max_table_height = ($table.find(".scroll").children().length + 1) * table_row_height + 1;

        var table_height = (modal_height - elems_height) < max_table_height ? (modal_height - elems_height) : max_table_height;
        var table_top = $modal_content.find("p").first().position().top + $modal_content.find("p").first().outerHeight(true);

        // Set the table top and table height
        $table.css("top", table_top);
        $table.outerHeight(table_height);

        $modal_content.find(".buttons").css("top", table_top + table_height);
        $modal_content.height(elems_height + table_height)

        $modal_content.parent().css("top", (modal_height - (elems_height + table_height)) / 2 + modal_padding);

        // Set the width of the last line of the table since percentage sizing goes wrong when 
        // scroll bars appear
        $table.find(".grand p").first().css("width", $table.find(".split").first().find("p:first-child").width());
        $table.find(".grand p").last().css("width", $table.find(".split").first().find("p:last-child").width());
    }
}

function testimonial_slider () {
  // Find the current shown testimonial
  var $selected = $testimonial.find(".selected");
  var $next = $selected.next().length ? $selected.next() : $testimonial.find(".testimonial").first();
  $selected.velocity({"top": "-5%", "opacity": 0}, 500, function() {
    $selected.css({"top": "5%"});
    $selected.removeClass("selected");

    $next.velocity({"top": "0", "opacity": "1"}, 500, function() {
      $next.addClass("selected");
    })
  });
  
}

/***********************************************
        Event Handlers inside scene
************************************************/
// [TODO] Find a better place to put this and refactor
$(".close-btn").click(function() {
    var prev_scene = curr_scene_data["parent"];

    console.log("Clicked Close. Goto Scene " + prev_scene);

    load_data_and_render(prev_scene);
});

// Previous scene button uncollapse click event
$(".scene .prev-btn").click(function() {
  // Pop out previous scene id from array of collapsed id's
  var prev_scene_id = collapse_scene_id[collapse_scene_id.length-1];
  load_data_and_render(prev_scene_id);
});

var tog=0;

$(".switch").click(function(){

    if ($(".image-2d").css('opacity') == '1')
        $(".image-2d").animate({'opacity':0})
      else
        $(".image-2d").animate({'opacity':1})


});

// Virtual eye button click event
$("img.virtual-eye").click(function() {
    if (virtual_eye_visible == true) {
        show_virtual_eye(false);
    }
    else {
        show_virtual_eye(true);
    }
});

// Close instruction info on close button click
$(".instruction-info img").click(function() {
    show_instruction_bar = false;
    $('.instruction-info').fadeOut();
});

/***********************************************
                Modal events
************************************************/
// Reset all the modal data
function reset_modal_css () {
    $modal_container.find(".modal").css({"width": "100%"});
    $modal_container.find(".modal-close").show();
}

// Modal events binding
$modal_container.click(function() {
    if (show_instruction_bar) {
        $(".instruction-info").fadeIn();
    }

    $(this).addClass("scene-hide");
    $(this).find(".modal-content").empty();
    modal_visible = false;
});

$modal_container.find(".modal").click(function (e) {
    e.stopPropagation();
})

$modal_container.find(".modal-close").click(function() {
    if (show_instruction_bar) {
        $(".instruction-info").fadeIn();
    }

    $modal_container.addClass("scene-hide");
    $modal_container.find(".modal-content").empty();
    modal_visible = false;
});

// Add click events to leftbar icons
$(".link-ico .fa-phone").click(function() {
    reset_modal_css();
    $modal_container.find(".modal").css("width", "78%");
    show_modal("#contact-modal");
});
$(".link-ico .fa-file").click(function() {
    window.open('brochure.pdf');
});
$(".link-ico .fa-map-marker").click(function() {
    reset_modal_css();
    $modal_container.find(".modal").css("width", "78%");
    show_modal("#info-modal");
    $(".info-modal .map-img img").loupe({
        width: 150, // width of magnifier
        height: 150, // height of magnifier
    });
});
$(".link-ico .fa-camera").click(function() {
    reset_modal_css();
    $modal_container.find(".modal").css({"width": "78%"});
    $modal_container.find(".modal-close").hide();
    show_modal("#video-modal");
});

// Show modal on click of book now button
$("#scene3 button").click(function(e) {
    reset_modal_css();
    $modal_container.find(".modal").css("width", "74%");
    goto_booking_direct = 0;
    if (e.currentTarget.className == "book") 
       goto_booking_direct = 1 
    show_modal("#user-modal");
});
