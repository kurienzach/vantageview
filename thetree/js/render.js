/***********************************************
                Scene Rendering
************************************************/

/* Function  : render_next_scene
 * Desription: Checks if the next scene requires a transition or
 * collapse of the divs and then calls the actual render function
 * Params:
 *    id - id of the scene to be Rendered
 *    transition - the transition object
 * Note:
 *      This function should not be called initally as this requires a prev
 *      scene to be already rendered. Use render_scene for inital rendering
 */



 function render_next_scene (id, transition, options) {
    // Is the next scene in the same level
    // [TODO] scene parent is null logic is bullship, change to a cleaner logic
    console.log("Render next scene" + id);

    // Get the scene json from the server
    // get_scene_data_from_server(id);

if (scenes_data[id]["level"] >0) {
  
    $(".instruction-info small").html("Select Tower");

}


if (scenes_data[id]["level"] >1) {
    $(".instruction-info small").html("Select Floor");
}

if (scenes_data[id]["level"] >2) {
 show_instruction_bar = false;
 $(".instruction-info").fadeOut();
}




    // Scene to be rendered is a 360 pano
    if (scenes_data[id]["is_360"]) {
        curr_scene_state.$scene_360.parent().fadeIn();
        render_scene(id, options);
    }

    // Scene is in the same level as the current one
    // Keep the base image -> load new one -> shown new one in transition
    else if (scenes_data[id]["level"] == curr_scene_data["level"]) {
        // Equivalent to clicking the close button
        if (curr_scene_data["sublevel"] == 1) {
            if ("is_360" in curr_scene_data && curr_scene_data["is_360"]) {
                console.log("Remove 260");
                photosphere.remove();
                curr_scene_state.$scene_360.empty();
                curr_scene_state.$scene_360.unbind();
                curr_scene_state.$scene_360.addClass("scene-hide");
                curr_scene_state.$scene_360.parent().fadeOut();

                // Show instruction bar if it was not hidden before
                if (show_instruction_bar) {
                    $(".instruction-info").fadeIn();
                }

                delete photosphere;
            }
            else {
              // Pop from the data string
              data_string.pop()  
            }
        }

        // Modify data string
        if (scenes_data[id]["data_string"]) {
            // Remove the current stack top
            data_string.pop();

            // Get the previous one and append this scenes data string
            var prev_string = data_string[data_string.length - 1];

            // If there is no prev_string (scene 1 zoomed in view)
            prev_string = (prev_string === undefined) ? "" : prev_string;
            data_string.push(prev_string + scenes_data[id]["data_string"]);
        }
        else if (options && options.floor_no) {
            data_string.pop();
            data_string.push(data_string[data_string.length-1]+"-"+options.floor_no);
        }
        // Save the base image as prev
        curr_scene_state.$scene_img_holder.find(".frame0").removeClass("frame0").addClass("prev");

        // Check if the previous scene requires a transition
        if (transition) {
            console.log("Transition Begin");

            // The base image of current scene is to be applied a transition
            // and be visible till the next scene is completed rendered
            $(".prev").transition({scale: transition.scale, x: transition.x, y: transition.y}, 500, 'in',
            function () {
                console.log("Transition complete");
                render_scene(id, options);
            })
        }
        else {
            render_scene(id, options);
        }
    }

    // Scene has a higher level -> collapse and load new scene
    else if (scenes_data[id]["level"] > curr_scene_data["level"]) {

        console.log("Collapse Current Scene");

        // Add the current scene id to array of collapsed id's
        collapse_scene_id.push(curr_scene_data["id"]);

        // Append to data string
        // Only scenes till tower view have data string
        // From there own the data string is created based on selected floor / flat
        if (scenes_data[id]["data_string"])
            data_string.push(data_string[data_string.length - 1] + scenes_data[id]["data_string"]);

        // Hide the weather info on the 3rd screen
        if (scenes_data[id]["level"] >=2) {
            $(".bottom-bar").addClass("scene-hide");
            $(".bottom1-bar").addClass("scene-hide");

            // Hide info bar from 2nd screen onwards
           // show_instruction_bar = false;
           // $(".instruction-info").fadeOut();
        }




        // Show the collapse div which contains previous scene button and floor
        // numbers (only in level 2)
        curr_scene_state.$scene.find(".collapse").removeClass("scene-hide");

        // Logic to collapse any already collapsed scene
        if(curr_scene_state["id"] > 1)
            scene_state[curr_scene_state["id"]-2].$scene.velocity({"translateX": "100%"});
        // curr_scene_state.$scene.velocity({"left": 100 - curr_scene_data["level"] * 5 + "%"}, 

        // The collapse animation
        scene_state[curr_scene_state["id"]].$scene.velocity({
            "opacity": 1
        }, 0);
        curr_scene_state.$scene.velocity({"translateX": "95%"}, 
            500, function() {
                render_scene(id, options);
            });
    }

    // Scene id < current scene id. Uncollapse -> render scene
    else {
        console.log("Clicked Back. UnCollapse");

        var parent = collapse_scene_id.pop();

        $curr_scene = curr_scene_state.$scene;
        $prev_scene = scene_state[curr_scene_state["id"]-2].$scene;

        if (curr_scene_data["level"] == 2) {
            curr_scene_data = scenes_data[parent];
            curr_scene_state = scene_state[curr_scene_data["level"] - 1];
            // Pop from the data string
            data_string.pop()
        }
        else if (curr_scene_data["level"] == 3){
            // Pop from the data string twice since there are two levels
            data_string.pop();
            //data_string.pop();
            if (curr_scene_data["sublevel"]==1)
                data_string.pop();

            curr_scene_data = scenes_data[parent];
            curr_scene_state = scene_state[curr_scene_data["level"] - 1]; 
            $('.bottom1-bar').removeClass('scene-hide');
        }

        // This happens when floor is selected from the flat view
        if (options && options.floor_no) {
            data_string.push(data_string[data_string.length-1]+"-"+options.floor_no);
        }

        $curr_scene.find(".bottom1-bar").addClass("scene-hide");
        $curr_scene.find(".right").addClass("scene-hide");
        $curr_scene.find(".left").addClass("scene-hide");
        $curr_scene.find(".top-bar").addClass("scene-hide");

        // [TODO] This is always hit code, put a check for this
        $prev_scene.find(".collapse .floor").removeClass("selected");
        $prev_scene.find(".collapse").addClass("scene-hide");

        // $curr_scene.find(".scene-content").addClass("scene-hide");

        // If there are more than one collapsed scene make the 
        // Next collapsed scene show in the right
        if(curr_scene_state["id"] == 2) {
            scene_state[curr_scene_state["id"]-2].$scene.velocity({"translateX": "95%"});
        }

        // Dim the current scene
        $curr_scene.velocity({
            // "scaleX": "0.75",
            // "scaleY": "0.75",
            "opacity": 0.5
        }, 500);

        // Slide in the collapsed scene
        $prev_scene.velocity({"translateX": "0%"}, 
            500, function() {
                scene_resize();
                $curr_scene.find(".img-holder").empty();
                $curr_scene.find(".scene-content").addClass("scene-hide");

                // Show the weather info expect on the 3rd screen
                if (curr_scene_data["level"] == 1) {
                    $(".bottom-bar").removeClass("scene-hide");
                }

                // Render if it is a new scene not the once already present
                console.log("Next id " + id + " curre id " + curr_scene_data["id"]);
                if (id != curr_scene_data["id"]) {
                    // collapse_scene_id.push(id);
                    load_data_and_render(id, null, options);
                }

                // Render the left bar menus again
                render_menu();
            });        
    }
}



function render_scene(id, options) {

    if (curr_scene_data && !curr_scene_data["is_360"]) {
        previous_id = curr_scene_data["id"];
        previous_level= curr_scene_data["level"];
    }

    curr_scene_data = scenes_data[id];

    // show hide availabke units info


if(curr_scene_data["id"]>1000){
    $(".switch").css("opacity","1");

}else{
    $(".switch").css("opacity","0");
    $(".image-2d").css("opacity","0");
}

    // If its a photosphere save the current scene id
    if (curr_scene_data && (curr_scene_data["is_360"] || curr_scene_data["has_content"])) {
        curr_scene_data["parent"] = previous_id;
        curr_scene_data["level"] = previous_level;
    }
    else if (curr_scene_data && curr_scene_data["level"] == 3 && curr_scene_data["sublevel"] == 0) {
        curr_scene_data["parent"] = collapse_scene_id[collapse_scene_id - 1];
    }

    // If its a 360 pano then the scene state is the previous state itself
    if (!curr_scene_data["is_360"]) 
        curr_scene_state = scene_state[curr_scene_data["level"] - 1];

    reset_scene_data(curr_scene_data);

    console.log("Rendering " + curr_scene_data["name"]);

    // Cached the required jquery selectors for scene
    var $scene = curr_scene_state.$scene;
    curr_scene_state.$scene_img_holder = $scene.find(".img-holder")
    var $scene_img_holder = curr_scene_state.$scene_img_holder;

    // Loader start
    $scene.find(".top-bar").addClass("scene-hide");
    $scene.find(".scene-content").addClass("scene-hide");
    $scene.find(".floors .content").empty();
    $tooltip.hide();

    if (curr_scene_data["has_content"]) {
        $(".bottom-bar .icons").addClass("scene-hide");
        $(".bottom-bar").addClass("scene-hide");
        curr_scene_data["menu_id"] = Number.parseInt(data_string[data_string.length - 1][0]) + 3;
    }

    loader_hide(false);

    // Remove all elements from the dom
    // EXCEPT .prev is any - prev comes from the last scene
    // prev should be visible till the current scene is rendered
    $scene_img_holder.children().not(".prev").remove();

    // Render 360 view if scene is a panorama
    if (curr_scene_data["is_360"]) {
        render_360(options);
        return;
    }

    // Add the base image to the dom
    var base_images = [];
    base_images.push(new Image());
    base_images[0].load(curr_scene_data["img"]["desktop"]);
    $(base_images[0]).addClass("scene-img scene-hide frame0");
    $scene_img_holder.append(base_images[0]);

    // Load all the hover region images
    curr_scene_data["hover_regions"].forEach(function(region) {
        base_images.push(new Image());
        base_images[base_images.length - 1].load(region["img"]["desktop"]);
        $(base_images[base_images.length - 1]).addClass("scene-img frame" + region["id"]);
        $(base_images[base_images.length - 1]).css("visibility", "hidden");
        $scene_img_holder.append(base_images[base_images.length - 1]);
    });

    var no_of_img = curr_scene_data["hover_regions"].length + 1;

    // Create a new div for hover regions
    $scene_img_holder.append('<div class="hover-overlay scene-hide" id="hover-overlay"></div>');

    // All images are loaded assign cached jquery var
    var $scene_img = $scene_img_holder.find('img.scene-img').not(".prev");
    curr_scene_state.$scene_img = $scene_img;

    // Init hover regions
    raphael_init();

    // Render content if present 
    if ("has_content" in curr_scene_data && curr_scene_data["has_content"]) {
        render_content();
    }

    // Render floors on collapse if enabled
    if ("render_floor_on_collapse" in curr_scene_data && curr_scene_data["render_floor_on_collapse"]) {
        render_floors(); 
    }

    // Render tower completion percentage if this is a level 2 tower view scene
     // Render tower completion percentage if this is a level 2 tower view scene
    if (curr_scene_data["level"]==2 || curr_scene_data["level"]==1) {
        //$scene.find('.bottom1-bar .left .completed').width(scenes_data[data_string[data_string.length - 1] + "-completed"]['percentage'] + "%");
        //$scene.find('.bottom1-bar .left p').html(scenes_data[data_string[data_string.length - 1] + "-completed"]['status']);

        /* Check if an image already exists, if yes then fade out fade in*/
        if ($scene.find('.left img').length == 0) {
            $scene.find('.left').empty();
            $scene.find('.left').append('<img src="' + curr_scene_data["img"]["topview"] + '">');

            // Show expanded top view on click
            $scene.find('.left img').click(function() {
                reset_modal_css();
                $modal_container.find(".modal").css("width", "78%");
                show_modal("#top-view-modal", {map_img: curr_scene_data["img"]["topview"]});
            });
        }
        else {
            $scene.find('.left img').velocity({"opacity": 0}, {
                complete: function(e) {
                    $scene.find('.left').empty();
                    $scene.find('.left').append('<img style="opacity: 0;" src="' + curr_scene_data["img"]["topview"] + '">');
                    $scene.find('.left img').velocity({"opacity": 1});

                    // Show expanded top view on click
                    $scene.find('.left img').click(function() {
                        reset_modal_css();
                        $modal_container.find(".modal").css("width", "78%");
                        show_modal("#top-view-modal", {map_img: curr_scene_data["img"]["topview"]});
                    });
                }
            });
        }
    }
    else if (curr_scene_data["level"]==3 && curr_scene_data["sublevel"]==0) {
        $scene.find('.left').empty()
        if (curr_scene_data["sublevel"]==0)
            $scene.find('.left').append('<img src="' + curr_scene_data["img"]["topview"] + '">');
        // Show expanded top view on click
        $scene.find('.left img').click(function() {
            reset_modal_css();
            $modal_container.find(".modal").css("width", "78%");
            show_modal("#top-view-modal", {map_img: curr_scene_data["img"]["topview"]});
        });
    }

    // Once the base image is loaded show it to user and wait for other
    // images to load, remove prev base images if any
    $scene_img_holder.find(".frame0").load(function() {
        curr_scene_state.scene_loaded = 1;
        scene_resize();
        // $(this).removeClass("scene-hide");
        $("#hover-overlay").removeClass("scene-hide");

        // Fade in the base image and remove the prev base img if present
        $(this).transition({opacity: 1}, 750, function() {
            $scene_img_holder.find(".prev").remove();
        });

        // Load and render menu items
        render_menu();

        console.log("Base image loaded");
    });

    rotate_compass(curr_scene_data["compass_degree"]);

    // Once all images are loaded  - Hide the loader, show bottom-bar
    var progress = setInterval(function() {
        var sum = _.reduce(_.pluck(base_images, "completedPercentage"), function(memo, num) {
            return memo + num;
        }, 0);
        $loader.find("p span").html(Math.floor(sum / no_of_img));
        if (sum == no_of_img * 100) {
            // Reveal the scene-content if the current scene has one
            if ("has_content" in curr_scene_data && curr_scene_data["has_content"]) {
                $scene.find(".compass-holder").addClass("black");
                $scene.find(".legend").hide();
                $scene.find('.left').addClass('scene-hide');
                $scene.find(".scene-content").removeClass("scene-hide");
            }
            // If the scene does not have content
            else {
                if (curr_scene_data["level"] < 2) {
                    $(".bottom-bar").removeClass("scene-hide");
                    $(".bottom-bar .icons").removeClass("scene-hide");
                }

                $scene.find(".bottom1-bar").removeClass("scene-hide");
                $scene.find(".compass-holder").removeClass("black");
                $scene.find(".legend").show();
                $scene.find(".right").removeClass("scene-hide");
                $scene.find(".left").removeClass("scene-hide");
            }

            // Show the top bar if this is a scene inside a scene
            if (curr_scene_data["parent"] != null 
                && scenes_data[curr_scene_data["parent"]]["level"] == curr_scene_data["level"]) {
              $scene.find(".top-bar").removeClass("scene-hide");
            }

            // If instructino bar is to be shown show it
            if (show_instruction_bar)
                $(".instruction-info").fadeIn();

            // Check if user guide is to be shown
            if (typeof(Storage) == "undefined" || localStorage.getItem('firstVisit') == null) {
                show_userguide(true); 
                localStorage.setItem('firstVisit', "1");
            }
            else
                loader_hide(true);
            console.log("Collapse Ids ", collapse_scene_id);
            console.log("Data String ", data_string);
            console.log("Scene Rendered");
            clearInterval(progress);
        }
    }, 100);
}


/*
 * Function to fill images to entire content area
 * along with image centering logic
 */
function scene_resize() {
    if (!curr_scene_state.scene_loaded) {
        return;
    }

    var $scene = curr_scene_state.$scene;
    var $scene_img_holder = curr_scene_state.$scene_img_holder;
    var $scene_img = curr_scene_state.$scene_img;

    width = $scene.width();
    height = $scene.height();

    // console.log(width, height, $scene_img.height(), $scene_img.width())

    if (width / height > scene_img_aspect_ratio) {
        if (!$scene_img.hasClass("wide")) {
            $scene_img.removeClass("tall").addClass("wide");
            $scene_img_holder.css({"left": 0});
            // console.log("wide");
        }

        // Image centering logic
        $scene_img_holder.css({"top": -(($scene_img.height()-height) / 2) + "px"});

        // $scene.height($scene_img.height());
        // $scene.width($scene_img.width());
    }
    else {
        if (!$scene_img.hasClass("tall")) {
            $scene_img.removeClass("wide").addClass("tall");
            $scene_img_holder.css({"top": 0});
            // console.log("tall");
        }

        // Image centering logic
        if (!curr_scene_data["align_left"])
            $scene_img_holder.css({"left": -(($scene_img.width()-width + 20) / 2) + "px"});
        else
            $scene_img_holder.css({"left": "0px"});

        // $scene.height($scene_img.height());
        // $scene.width($scene_img.width());
    }

    // Transform the hover overlay svgs according to current proportions
    scaleFactor = $scene_img.width() / scene_img_width;
    $scene.find(".hover-overlay svg").css("transform",
      "scale(" + scaleFactor + ")");
    $scene_img.removeClass("tall");
    $scene_img.removeClass("wide");
    $scene_img.css("transform",
      "scale(" + scaleFactor + ")");
}

// Helper Function to show hover frame
function show_region (id) {
    // curr_scene_state.$scene_img.hide();
    if ("curr_frame" in curr_scene_state) {
        curr_scene_state.$scene_img_holder.find(curr_scene_state.curr_frame).css("visibility", "hidden");
    }
    else
        curr_scene_state.$scene_img.css("visibility", "hidden");

    // $scene_img_holder.find("#frame" + id).removeClass("hidden");
    // curr_scene_state.$scene_img_holder.find(".frame" + id).show();
    curr_scene_state.$scene_img_holder.find(".frame" + id).css("visibility", "visible");    
    curr_scene_state.curr_frame = ".frame" + id;

    // Show tooltip if applicalbe
    if(id != 0 && "hover_regions" in curr_scene_data
        && curr_scene_data["hover_regions"][id-1]["tooltip_text"]) {
        var hregion = curr_scene_data["hover_regions"][id-1];
        show_tooltip(true, {
            left: hregion["tooltip_coordinates"][0],
            top: hregion["tooltip_coordinates"][1]
        }, hregion["tooltip_text"]);
    }
    else {
        show_tooltip(false);
    }

    // Add hover state to corresponsing menu
    var $menu = $sidebar_list.find(".scene" + id)
    if ($menu.length > 0) {
        $menu.addClass("hover");
        $previous_select_menu = $menu;
    }
    else {
        $previous_select_menu.removeClass("hover");
    }
}

/***********************************************
            Raphael SVG init part
************************************************/
function raphael_init() {
    var elem = document.getElementById('hover-overlay');
    paper = Raphael(elem, 1920, 1080);

    /********* Draw each hover region and setup up hover and click fns *********/
    curr_scene_data["hover_regions"].forEach(function(hregion) {
        var path_string = "";
        for (var i = 0; i < hregion["coordinates"].length; i+=2) {
            if (i == 0)
                path_string += "M"
            else
                path_string += "L"
            path_string += hregion["coordinates"][i] + "," +
                hregion["coordinates"][i+1] + " ";
        };

        path_string += "Z";

        var region = paper.path(path_string);

        region.attr({"stroke-width": 0, "fill": "#fff", "fill-opacity": "0"});

        // Add hover and click events
        region.hover(function() {
            show_region(hregion["id"]);
        },
        function() {
            show_region(0);
        });

        // Current logic hover regions with tooltip are disabled so 
        // need not have click event, others render next scene
      //  if (!hregion["tooltip_text"]) {
            region.click(function() {
                console.log("Clicked! goto target " + hregion["target"]);
                show_region(0);
                
                if (curr_scene_data["require_transition"]) {
                    load_data_and_render(hregion["target"], hregion["transition"]);
                }
                else {
                    load_data_and_render(hregion["target"], null);
                }
            });
       // }
    });



    console.log("Rendered Hover Regions");

    /**************** Highlight regions and hovers ****************/
    curr_scene_data["highlight_regions"].forEach(function(hregion) {
        var path_string = "";
        for (var i = 0; i < hregion["coordinates"].length; i+=2) {
            if (i == 0)
                path_string += "M"
            else
                path_string += "L"
            path_string += hregion["coordinates"][i] + "," +
                hregion["coordinates"][i+1] + " ";
        };

        path_string += "Z";

        var region = paper.path(path_string);

        // If this is tower view
        var tooltip_text = "";
        

        if (curr_scene_data["level"]==2) {

            // Generate the tooltip text from the data

            // Find the json holding details of all flats in the floor
            var id = data_string[data_string.length - 1] + "-" + hregion["id"] + "00";

            tooltip_text += "<strong>Floor "+ hregion["id"] +"</strong><br><small>";

            // Get the types of flats available 2BHK, 3BHK etc.
            var types = _.uniq(_.pluck(scenes_data[id], "type"))
            var total_avail = 0;
            types.forEach(function(type) {
                tooltip_text += type + ": ";

                // Store all of the current type
                var all_of_type =_.filter(scenes_data[id], function(obj) {
                    if (obj["type"]==type)
                        return true;
                });

                // Get no of available and sold in the current type
                var avail_no = _.filter(all_of_type, function(obj) { if (obj["availability"]=="Available") {return true} } ).length;
                var sold_no = _.filter(all_of_type, function(obj) { if (obj["availability"]=="Sold") {return true} } ).length;
                tooltip_text += avail_no + " available <br>";
                
                total_avail += avail_no;

            });
            
            if(total_avail>0){
                region.attr({"stroke-width": 0, "fill": floor_hover_color});
                clickable=true;
            }else{
                region.attr({"stroke-width": 0, "fill": "#FF0000"});
                clickable=false;
            }
	        
            tooltip_text += "</small>"

            // Set the hover color

            region.attr("fill-opacity", "0");
        
        }

        // If this is floor view
        else if (curr_scene_data["level"]==3){
            // Find the key of json having all flats in the floor
            var floor_id = data_string[data_string.length - 1] + "00";

            // Key of json for a particular flat
            var flat_id = data_string[data_string.length - 1] 
                        + String(hregion["id"]).lpad("0", 2)

            // Json for the current flat
            var curr_flat = scenes_data[floor_id][flat_id];

            tooltip_text += "<strong>" + curr_flat["type"] + " Flat No: " + flat_id
            +"</strong><br><small>Area: " + curr_flat["area"] 
            +" SqFt<br>Status: " + curr_flat["availability"] +"</small>"

            switch(curr_flat["availability"]) {
                case "Sold":
                    region.attr({"stroke-width": 4, "stroke": flat_sold_color,"fill": flat_sold_color});
                    region.attr("fill-opacity", "0");
                    break;
                case "Not Opened":
                    region.attr({"stroke-width": 4, "stroke": flat_hold_color,"fill": flat_hold_color});
                    region.attr("fill-opacity", "0");
                    break;
                case "Available":
                    region.attr({"stroke-width": 4, "stroke": flat_available_color,"fill": flat_available_color});
                    region.attr("fill-opacity", "0");
                    break;
                default:
                    region.attr({"stroke-width": 4, "stroke": flat_hold_color,"fill": flat_hold_color});
                    region.attr("fill-opacity", "0");
                    break;
            }

            clickable = curr_flat["availability"] == "Available" ? true : false;
        }


        /*Add hover and click events */
        region.hover(function() {
            // if (curr_scene_data["render_floor_on_collapse"])
            this.attr("fill-opacity", "0.7");

            show_tooltip(true, {
                left: hregion["tooltip_coordinates"][0],
                top: hregion["tooltip_coordinates"][1]
            }, tooltip_text);
        },
        function() {
            // if (curr_scene_data["render_floor_on_collapse"])
            this.attr("fill-opacity", "0");
            show_tooltip(false);
        });

        if(clickable) {
            region.click(function() {
                console.log("Clicked! goto target " + hregion["target"]);

                show_tooltip(false);

                // If this is tower view
                if (curr_scene_data["render_floor_on_collapse"]) {
                    curr_scene_state.$scene.find(".collapse .floor" + hregion["id"]).addClass("selected");

                    // If the current level is 2 append floor no 
                    // to data_string
                    data_string.push(data_string[data_string.length - 1] + "-" 
                        + hregion["id"]);
                }
                // If this is floor view
                else {
                    data_string.push(data_string[data_string.length - 1]
                        + String(hregion["id"]).lpad("0", 2));   
                }

                if (curr_scene_data["require_transition"]) {
                    load_data_and_render(hregion["target"], hregion["transition"]);
                }
                else
                    load_data_and_render(hregion["target"], null);
            });
        }
    });

    console.log("Rendered Highlight Regions");

    /**************** Tooltip Regions ****************/
    curr_scene_data["tooltip_regions"].forEach(function(hregion) {
        var path_string = "";
        for (var i = 0; i < hregion["coordinates"].length; i+=2) {
            if (i == 0)
                path_string += "M"
            else
                path_string += "L"
            path_string += hregion["coordinates"][i] + "," +
                hregion["coordinates"][i+1] + " ";
        };

        path_string += "Z";

        var region = paper.path(path_string);

        region.attr({"stroke-width": 0, "fill": "#fff", "fill-opacity": "0"});

        // Add hover and click events
        region.hover(function() {
            show_tooltip(true, {
                left: hregion["tooltip_coordinates"][0],
                top: hregion["tooltip_coordinates"][1]
            }, hregion["tooltip_text"]);
        },
        function() {
            show_tooltip(false);
        });
    });

    /**************** Alterate View points ****************/
    if ("alternate_view_points" in curr_scene_data){
        curr_scene_data["alternate_view_points"].forEach(function(point) {
            var region = paper.image("img/icon-view-change.svg", point["coordinates"][0], point["coordinates"][1], 54, 51.88);
            var region1 = paper.image("img/icon-view-change-text.svg", point["coordinates"][0]+2, point["coordinates"][1] + 55, 50, 26);
            if (point["flip"]) {
                region.transform("S-1,1");

            }
            region.click(function(e) {
                load_data_and_render(point["target"]);
            });
            region1.click(function(e) {
                load_data_and_render(point["target"]);
            });
        });
    }

    /**************** 360 degree points ****************/
    if ("360_points" in curr_scene_data){
        curr_scene_data["360_points"].forEach(function(point) {
            var region = paper.image("img/icon-panoramic-ponits.svg", point["coordinates"][0], point["coordinates"][1], 51, 49);
            region.node.setAttribute("class","pt360");
            region.click(function(e) {
                load_data_and_render(point["target"]);
            });
        });
        curr_scene_state["nearest_360"] = null;
    }
    else {
        if (curr_scene_data["nearest_360"]) {
            curr_scene_state["nearest_360"] = curr_scene_data["nearest_360"];
        }                
    }

    console.log("Rendered 360 Points");
}

function show_virtual_eye (value) {
    if (curr_scene_state["nearest_360"]) {
        load_data_and_render(curr_scene_state["nearest_360"]);
    }
    else {
        if (value) {
            curr_scene_state.$scene_img_holder.find("image.pt360").css("visibility", "visible");
            virtual_eye_visible = true;

            curr_scene_state.$scene_img_holder.find("svg").click(function() {
                $(this).unbind("click");
                show_virtual_eye(false);
            });
        }
        else {
            curr_scene_state.$scene_img_holder.find("image.pt360").css("visibility", "hidden");   
            virtual_eye_visible = false;
        }
    }
}

/***********************************************
            360 Degrees Rendering
************************************************/
function render_360 (options) {
    virtual_eye_visible = false;

    curr_scene_state.$scene.find(".bottom1-bar").addClass("scene-hide");
    curr_scene_state.$scene.find(".right").addClass("scene-hide");
    curr_scene_state.$scene.find(".left").addClass("scene-hide");
    $(".bottom-bar .icons").addClass("scene-hide");
    $(".bottom-bar").addClass("scene-hide");
    $(".instruction-info").fadeOut();
    curr_scene_state.$scene_360.removeClass("scene-hide");

    photosphere = THREE.Photosphere(curr_scene_state.$scene_360[0], curr_scene_data["img"]["desktop"], {
        view: null,
        speed: null,
        y: null,
        id: curr_scene_data["id"],
        initialCamPos: options ? options.initialCamPos : null
    });
    window.onresize = photosphere.resize;

    curr_scene_state.$scene_360.parent().find(".top-bar").removeClass("scene-hide");
    console.log("Scene Rendered");
}

/***********************************************
                    Menu
************************************************/
function render_menu() {
    if ($sidebar_list.children().length == 0) {
        render_menu_items();
    }
    else {
        $sidebar_list.velocity({"opacity": 0}, 500, function() {
            render_menu_items();     
        }); 
    }
}

function render_menu_items() {
    $sidebar_list.empty();  
    

    if (!curr_scene_data["menu_id"])
        return;

    var curr_menu = menu_data[curr_scene_data["menu_id"]];

    curr_menu.forEach(function(menu_item) {
        var $new_li = $('<li><a href="#">' + menu_item["menu_text"] + '</a></li>');
        
        if (!menu_item["submenu"]) {
            if (menu_item["target"]) {
                $new_li.find('a').addClass("scene" + menu_item["target"]);
                $new_li.hover(function() {
                    show_region(menu_item["target"]);
                }, 
                function() {
                    show_region(0);
                });
            }
            else {
                $new_li.hover(function() {
                    $(this).find('a').addClass("hover");
                }, 
                function() {
                    $(this).find('a').removeClass("hover");
                });
            }

            $new_li.click(function() {
                var id = menu_item["render_target"] ? menu_item["render_target"] : curr_scene_data["hover_regions"][menu_item["target"]-1]["target"];
                console.log("Clicked! goto target " + id);
                show_region(0);
                load_data_and_render(id, null);
            });
        }
        else {
            $new_li.addClass("expanded");
            $new_li.append("<ul></ul>")
            menu_item["submenu"].forEach(function(sub_menu_item) {
                var $submenu = $('<li><a href="#">' + sub_menu_item["menu_text"] + '</a></li>');

                if (sub_menu_item["render_target"]  <= curr_scene_data["id"] && sub_menu_item["render_target"] > (curr_scene_data["id"] - 10)) {
                    $submenu.find('a').addClass("hover");
                    $new_li.find("ul").append($submenu);
                    return;
                }
                else if (data_string[data_string.length -1].length >= 2 
                        && scenes_data[sub_menu_item["render_target"]] != undefined 
                        && scenes_data[sub_menu_item["render_target"]]["data_string"] == data_string[data_string.length - 1][1]) {
                    $submenu.find('a').addClass("hover");
                    $new_li.find("ul").append($submenu);
                    return;
                }

                if (sub_menu_item["target"]) {
                    $submenu.find('a').addClass("scene" + sub_menu_item["target"]);
                    $submenu.hover(function() {
                        show_region(sub_menu_item["target"]);
                    }, 
                    function() {
                        show_region(0);
                    });
                }
                else {
                    $submenu.hover(function() {
                        $(this).find('a').addClass("hover");
                    }, 
                    function() {
                        $(this).find('a').removeClass("hover");
                    });
                }

                $submenu.click(function() {
                    var id = sub_menu_item["render_target"] ? sub_menu_item["render_target"] : curr_scene_data["hover_regions"][sub_menu_item["target"]-1]["target"]
                    console.log("Clicked! goto target " + id);
                    show_region(0);
                    load_data_and_render(id);
                });

                $new_li.find("ul").append($submenu);
            });
        }

        $sidebar_list.append($new_li);
    });

    // Call resize_sidebar to adjust testmnonial visibility based on content size
    resize_sidebar ();
    $sidebar_list.velocity({"opacity": 1}, 500); 
}

function render_content () {
    var flat_data = scenes_data[data_string[data_string.length-2] + "00"][data_string[data_string.length-1]];
    var html = "<strong class='heading'>" + flat_data["type"] + "<br>Flat No: " + data_string[data_string.length-1] 
    +"</strong> <p>Area : " + flat_data["area"] + " Sqft<br>Category : " +  flat_data["category"]
    + "<br>Status : "+ flat_data["availability"] 
    + "<br>Booking Price <strong>INR 27,000 (Refundable)</strong></p>"
    // $scene.find(".scene-content span").html(curr_scene_data["content"])
    curr_scene_state.$scene.find(".scene-content span").html(html)   
}

function render_floors () {
    for (var i = curr_scene_data["highlight_regions"].length - 1; i >= 0; i--) {
        var new_floor_html = '<div class="floor floor' + (i+1)  + '"><p><span>' + (i+1);
        switch (i) {
            case 0:
                    new_floor_html += '</span>st<br>floor</p></div>'
                    break;
            case 1:
                    new_floor_html += '</span>nd<br>floor</p></div>'
                    break;
            case 2:
                    new_floor_html += '</span>rd<br>floor</p></div>'
                    break;
            default:
                    new_floor_html += '</span>th<br>floor</p></div>'
        }
        var $new_floor = $(new_floor_html);
        $new_floor.attr('target', curr_scene_data["highlight_regions"][i]["target"]);
        $new_floor.attr('target1', curr_scene_data["highlight_regions"][i]["id"]);
        
       $new_floor.click(function() {
            $(this).siblings().removeClass("selected");
            $(this).addClass("selected");
            load_data_and_render($(this).attr('target'), null, {floor_no: $(this).attr("target1")});
        });

        curr_scene_state.$scene.find(".floors .content").append($new_floor);
    };
}   