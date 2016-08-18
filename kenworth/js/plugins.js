// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

// Image loading plugin
Image.prototype.load = function( url, callback ) {
    var thisImg = this,
        xmlHTTP = new XMLHttpRequest();

    thisImg.completedPercentage = 0;

    xmlHTTP.open( 'GET', url , true );
    xmlHTTP.responseType = 'arraybuffer';

    xmlHTTP.onload = function( e ) {
        var h = xmlHTTP.getAllResponseHeaders(),
            m = h.match( /^Content-Type\:\s*(.*?)$/mi ),
            mimeType = m[ 1 ] || 'image/png';
            // Remove your progress bar or whatever here. Load is done.

        // var a = document.createElement("a");
        // document.body.appendChild(a);
        // a.style = "display: none";

        // a.href = url;
        // a.download = fileName;
        // a.click();

        var blob = new Blob( [ this.response ], { type: mimeType } );
        thisImg.src = window.URL.createObjectURL( blob )
;        if ( callback ) callback( this );
    };

    xmlHTTP.onprogress = function( e ) {
        if ( e.lengthComputable )
            thisImg.completedPercentage = parseInt( ( e.loaded / e.total ) * 100 );
        // Update your progress bar here. Make sure to check if the progress value
        // has changed to avoid spamming the DOM.
        // Something like: 
        // if ( prevValue != thisImage completedPercentage ) display_progress();
    };

    xmlHTTP.onloadstart = function() {
        // Display your progress bar here, starting at 0
        thisImg.completedPercentage = 0;
    };

    xmlHTTP.onloadend = function() {
        // You can also remove your progress bar here, if you like.
        thisImg.completedPercentage = 100;
    }

    xmlHTTP.send(null);
};

// String left padding plugin
String.prototype.lpad = function(padString, length) {
    var str = this;
    while (str.length < length)
        str = padString + str;
    return str;
}

// Show hide loader
function loader_hide(value, hide) {
    $loader = $(".loader");
    // if (value && !hide) {
    //     // $loader.addClass("scene-hide");
    //     $loader.velocity({"opacity": 0}, 500);
    // } 
    // else if (value && hide) {
    //   if ($loader.css("opacity") != 0) {
    //     $loader.velocity({"opacity": 0}, 500, function() {
    //         $loader.css("z-index", 0);
    //     });  
    //   }
    //   else {
    //     $loader.css("z-index", 0);
    //   }
      
    // }
    if (value) {
      $loader.velocity({"opacity": 0}, 500, function() {
          $loader.css("z-index", 0);
        $(".left-bar").css("pointer-events", "auto");
      });
    }
    else {
        $('.loader .loader-div .userguide').hide();
        $('.loader .loader-div .icon').show();
        $loader.find('p span').html(0);
        $loader.css("z-index", 900);
        $loader.velocity({"opacity": 1}, 500);
        $(".left-bar").css("pointer-events", "none");
        // $loader.removeClass("scene-hide");
    }
}

function show_userguide(value) {
    if (value) {
        loader_hide(false);
        $('.loader .loader-div .userguide').show();
        $('.loader .loader-div .icon').hide();
    }
    else {
        loader_hide(true); 
    }
}

// Helper to rotate compass
function rotate_compass (degree) {
    curr_scene_state.$scene.find(".compass").css("transform",
        "perspective(250px) rotateX(30deg) rotateZ(" + degree + "deg)");
}

// Query and display weather data
function get_weather_data () {
    $.getJSON("http://api.openweathermap.org/data/2.5/weather?lat=12.983&lon=77.530", function(data){
        $weather = $(".bottom-bar .weather");
        $weather.find("h2 strong").html(Math.floor(data["main"]["temp"] - 273.15));
        $weather.find("p").html(data["weather"][0]["description"]);

        // Weather icon
        console.log("Weather", data);
        switch(Math.floor(data["weather"][0]["id"] / 100)) {
          case 2:
              $weather.find("i").addClass("wi-thunderstorm");
              break;
          case 3:
              $weather.find("i").addClass("wi-rain-mix");
              break;
          case 5:
              $weather.find("i").addClass("wi-rain");
              break;
          case 6:
              $weather.find("i").addClass("wi-snow");
              break;
          case 7:
              $weather.find("i").addClass("wi-smoke");
              break;
          case 8:
              $weather.find("i").addClass("wi-day-cloudy");
              break;
          case 8:
              $weather.find("i").addClass("wi-day-cloudy-windy");
              break;
        }
    });
}

function reset_scene_data (obj) {
    obj.scene_loaded = 0;
    obj.scene_history = [];
}

// [TODO] the hover overlay is unecessarily removed, need not remove it actually
function disable_hover (value) {
    if(value) {
        curr_scene_state.$scene_img_holder.find(".hover-overlay svg").remove();
    } else {
        curr_scene_state.$scene_img_holder.find(".hover-overlay").show();
    }
}

function show_tooltip (show, coordinates, text) {
    if (show) {
        if (!timeoutId) {
            timeoutId = window.setTimeout(function() {
                timeoutId = null; // EDIT: added this line
                $tooltip.find("p").html(text);

                $tooltip.css({
                    "left": (curr_scene_state.$scene_img_holder.position().left + coordinates.left * scaleFactor + $tooltip.find(".pointer").width() / 2) + "px",
                    "top": (curr_scene_state.$scene_img_holder.position().top + coordinates.top * scaleFactor - $tooltip.height() / 2) + "px"
                });
                
                $tooltip.show();
            }, 250);
        }
    }
    else {
        if (timeoutId) {
            window.clearTimeout(timeoutId);
            timeoutId = null;
        }
        else
            $tooltip.hide();
    }
}

// Helper functions to check if class applied to element
function hasClass(element, cls) {
    return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
}


// Helper to show modal window with compiled template
function show_modal (template_id, options) {
    if (!modal_visible) {
      modal_visible = true;
      var template = _.template($(template_id).html());
      $modal_container.find(".modal-content").empty().html(template(options));
      $modal_container.removeClass("scene-hide");
      modal_resize();
      $(".instruction-info").fadeOut();
    }
    else {
        var template = _.template($(template_id).html());
        $modal_container.find(".modal-content").empty().html(template(options));
        modal_resize();
    }

    // Assign click events based on modal
    if (template_id === "#user-modal") {
        var flat_data = scenes_data[data_string[data_string.length-2] + "00"][data_string[data_string.length-1]];
        console.log("user");
        $modal_container.find(".contact-form button").click(function () {

            if ($("#txtname")[0].checkValidity() && 
                $("#txtemail")[0].checkValidity() &&
                $("#txtmobile")[0].checkValidity()) {
                // Save data to form to submit
                $("#frm-contact .flat_id").val(data_string[data_string.length-1]);
                $("#frm-contact .cust_name").val($("#txtname").val());
                $("#frm-contact .cust_mail").val($("#txtemail").val());
                $("#frm-contact .cust_mobile").val($("#txtmobile").val());
                
                if (goto_booking_direct == 1) {
                    $("#frm-contact").submit();
                    return;
                }
                
                show_modal("#price-modal", {
                    base_price: inrFormat(flat_data["basic_rate"]),
                    area: flat_data["area"],
                    category: flat_data["category"],
                    other_charges: inrFormat(flat_data["other_charges"]),
                    total_cost: inrFormat(flat_data["grand_total"]),
                    type: flat_data["type"],
                    agreement_value: flat_data["agreement_value"],
                    flat_no: data_string[data_string.length-1],
                });
            }
            else {
                alert("All fields are mandatory");
            }
        });
    }
    else if (template_id === "#price-modal") {
        var flat_data = scenes_data[data_string[data_string.length-2] + "00"][data_string[data_string.length-1]];
        $modal_container.find(".price-details .payment").click(function() {
            show_modal("#payment-modal", {
                type: flat_data["type"],
                flat_no: data_string[data_string.length-1],
            });
        });   
        $modal_container.find(".price-details .book").click(function() {
            $("#frm-contact").submit();
        });
    }
    else if (template_id === "#payment-modal") {
        var flat_data = scenes_data[data_string[data_string.length-2] + "00"][data_string[data_string.length-1]];
        $modal_container.find(".payment-plan .payment").click(function() {
            show_modal("#price-modal", {
                base_price: inrFormat(flat_data["basic_rate"]),
                area: flat_data["area"],
                category: flat_data["category"],
                other_charges: inrFormat(flat_data["other_charges"]),
                total_cost: inrFormat(flat_data["grand_total"]),
                type: flat_data["type"],
                agreement_value: flat_data["agreement_value"],
                flat_no: data_string[data_string.length-1],
            });
        });
    }

}

// Functions to add commas to INR 
function inrFormat(nStr) { // nStr is the input string
     nStr += '';
     x = nStr.split('.');
     x1 = x[0];
     x2 = x.length > 1 ? '.' + x[1] : '';
     var rgx = /(\d+)(\d{3})/;
     var z = 0;
     var len = String(x1).length;
     var num = parseInt((len/2)-1);
 
      while (rgx.test(x1))
      {
        if(z > 0)
        {
          x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        else
        {
          x1 = x1.replace(rgx, '$1' + ',' + '$2');
          rgx = /(\d+)(\d{2})/;
        }
        z++;
        num--;
        if(num == 0)
        {
          break;
        }
      }
     return x1 + x2;
 }

function isLetter(str) {
  return str.length === 1 && str.match(/[a-z]/i);
}


// Get scene data json from the server
var get_scene_data_from_server = function (id) {
    var r = $.Deferred();
    $.ajax({
      url: ajax_url + id,
      dataType: "jsonp",
      success: function (data) {
        console.log(data);

        if (String(id).length < 2 || !isLetter(String(id)[1])) {
          scenes_data[id] = data;
        }
        else {
          scenes_data = $.extend(scenes_data, data);
        }
        r.resolve();
      },
      type: 'GET'
    });

    return r;
}

function load_data_and_render (id, transition, options) {
   console.log("Loading data ", id);
    if (scenes_data[id] == undefined) {
       loader_hide(false);
        get_scene_data_from_server(id).done(function() { 
          if (scenes_data[id]["level"] == 2) {
            get_scene_data_from_server(data_string[0] + scenes_data[id]["data_string"]).done(function() { 
              render_next_scene(id, transition, options);
            });
          }
          else {
            render_next_scene(id, transition, options);
          }
        });
    }
    else if (scenes_data[id]["level"] == 2 
         && scenes_data[data_string[0] + scenes_data[id]["data_string"]+"-100"] == undefined) {
         loader_hide(false);
    	get_scene_data_from_server(data_string[0] + scenes_data[id]["data_string"]).done(function() { 
              render_next_scene(id, transition, options);
            });
    }
    else {
        render_next_scene(id, transition, options);
    }
}

function load_data_and_raphael_init (id) {
  // Check if data for the tower is available
  if (scenes_data[id + "-100"] == undefined) {
      get_scene_data_from_server(id).done(function() { 
          raphael_init();
      });
  }
  else {
      raphael_init();
  }
}
