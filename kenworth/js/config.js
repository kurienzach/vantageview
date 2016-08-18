/***********************************************
              Configuration Options
************************************************/
var scene_img_aspect_ratio = 16/9;
var scene_img_width = 1600;

var floor_hover_color = "#26d226";
var flat_sold_color = "red";
var flat_hold_color = "red";
var flat_available_color = "green";

var ajax_url = "/vantageview/data/kenworth/";

var goto_booking_direct = 0;

/***********************************************
                Global Variables
************************************************/
//Jquery selectors caching
var $sidebar_list = $(".sidebar-list");
var $testimonial = $(".testimonials");
var $tooltip = $(".tooltip");
var $modal_container = $(".modal-container");
var $previous_select_menu;
var fake_loader_perc;
var fake_loader_acc;
var fake_loader_stopflag;

var data_string = []
var collapse_scene_id = []

// Tooltip timout variable
var timeoutId;

// Toggle variables for various events
var virtual_eye_visible = false;
var modal_visible = false;
var show_instruction_bar = true;

// Variables storing the previous scene id and level
// these are used by the photosphere to go back
var previous_id = 0;
var previous_level = 0;
var photosphere;

var scaleFactor;

var curr_scene_data;        // Scene data of current scene
var scene_state = [
    {
        "id": 1,
        "div": "#scene1",
        scene_loaded: 0,
        scene_history: [],
        $scene: $("#scene1"),
        $scene_img_holder: null,
        $scene_360: $("#scene360").find('.img-360'),
        nearest_360: null,
        $scene_img: null,
        $hover_overlay: null
    },
    {
        "id": 2,
        "div": "#scene2",
        scene_loaded: 0,
        scene_history: [],
        $scene: $("#scene2"),
        $scene_img_holder: null,
        $scene_360: $("#scene360").find('.img-360'),
        nearest_360: null,
        $scene_img: null,
        $hover_overlay: null
    },
    {
        "id": 3,
        "div": "#scene3",
        scene_loaded: 0,
        scene_history: [],
        $scene: $("#scene3"),
        $scene_img_holder: null,
        $scene_360: $("#scene360").find('.img-360'),
        nearest_360: null,
        $scene_img: null,
        $hover_overlay: null
    }
];
var curr_scene_state = null;
var scenes_data = {};
