 /********************** Tower E View 1 **********************/
scenes_data["221"] = {
    "id": 221,
    "level": 2,
	"sublevel": 0,
    "parent": 2,
    "name": "Tower E",
    "data_string": "T12",
    "img": {
        "desktop": "img/scene_data/sb-tc/B2_C_1.jpg",
        "topview": "img/scene_data/sb-tc/keymapB2TC.jpg"
    },
    "align_left": true,
    "compass_degree": 50,
    "menu_id": 5,
    "alternate_view_points": [
        {
            "id": 1,
            "name": "Tower E View 2",
            "coordinates": [975, 565],
            "target": 222
        }
    ],
    "require_transition": false,
    "hover_regions": [],
    "render_floor_on_collapse": true,
    "highlight_regions": [
        {
            "id": 1,
            "name": "Floor 1",
            "target": 223,
            "highlighted": false,
            "coordinates": [775,829, 679,847, 582,866, 485,884, 393,863, 300,843, 176,860, 140,847, 85,850, 55,839, 57,915, 86,929, 140,929, 178,941, 302,912, 391,941, 480,970, 578,947, 677,924, 775,901, 775,829],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [777,862]
        },
        {
            "id": 2,
            "name": "Floor 2",
            "target": 223,
            "highlighted": false,
            "coordinates": [775,757, 679,771, 583,786, 486,800, 392,782, 298,764, 176,782, 138,775, 86,775, 53,764, 55,839, 85,850, 140,847, 176,860, 300,843, 393,863, 485,884, 582,866, 679,847, 775,829, 775,757],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [777,790]
        },
        {
            "id": 3,
            "name": "Floor 3",
            "target": 223,
            "highlighted": false,
            "coordinates": [775,685, 679,696, 583,707, 486,717, 392,704, 298,690, 175,703, 139,694, 84,698, 51,691, 53,764, 86,775, 138,775, 176,782, 298,764, 392,782, 486,800, 583,786, 679,771, 775,757, 775,685],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [777,719]
        },
        {
            "id": 4,
            "name": "Floor 4",
            "target": 223,
            "highlighted": false,
            "coordinates": [775,614, 679,620, 582,627, 486,633, 393,626, 300,619, 175,627, 140,621, 86,623, 49,619, 51,691, 84,697, 139,694, 175,703, 298,690, 392,704, 486,717, 583,707, 679,696, 775,685, 775,614],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [777,649]
        },
        {
            "id": 5,
            "name": "Floor 5",
            "target": 223,
            "highlighted": false,
            "coordinates": [49,619, 86,623, 140,621, 175,627, 300,619, 393,626, 486,633, 582,627, 679,620, 775,614, 775,540, 679,543, 582,547, 485,550, 391,545, 297,540, 172,543, 124,541, 81,540, 47,543, 49,619],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [777,579]
        },
        {
            "id": 6,
            "name": "Floor 6",
            "target": 223,
            "highlighted": false,
            "coordinates": [775,468, 676,467, 577,466, 478,465, 388,467, 298,468, 172,466, 129,466, 81,467, 46,470, 47,543, 81,540, 124,541, 172,543, 297,540, 391,545, 485,550, 582,547, 679,543, 775,540, 775,468],
            "color": "#ffe200",
            "tooltip_text": "<strong>Floor 6</strong><br><small>2 BHK: 2 avail, 2 sold<br>4 BHK: 2 avail, 2 sold</small>",
            "tooltip_coordinates": [777,502]
        },
        {
            "id": 7,
            "name": "Floor 7",
            "target": 223,
            "highlighted": false,
            "coordinates": [775,398, 676,392, 576,386, 477,380, 387,387, 296,393, 171,389, 126,393, 78,391, 45,398, 46,470, 81,467, 129,466, 172,466, 298,468, 388,467, 478,465, 577,466, 676,467, 775,468, 775,398],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [777,434]
        },
        {
            "id": 8,
            "name": "Floor 8",
            "target": 223,
            "highlighted": false,
            "coordinates": [775,323, 675,314, 575,304, 474,295, 385,306, 295,317, 172,308, 127,315, 80,313, 44,323, 45,398, 78,391, 126,393, 171,389, 296,393, 387,387, 477,380, 576,386, 676,392, 775,398, 775,323],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [777,363]
        },
        {
            "id": 9,
            "name": "Floor 9",
            "target": 223,
            "highlighted": false,
            "coordinates": [775,250, 675,237, 574,223, 473,210, 383,226, 293,241, 170,227, 126,238, 78,233, 43,242, 44,323, 80,313, 127,315, 172,308, 295,317, 385,306, 474,295, 575,304, 675,314, 775,323, 775,250],
            "color": "#ff4141",
            "tooltip_text": "<strong>Floor 9</strong><br><small>2 BHK: 0 avail, 4 sold<br>4 BHK: 0 avail, 4 sold</small>",
            "tooltip_coordinates": [777,256]
        },
        {
            "id": 10,
            "name": "Floor 10",
            "target": 223,
            "highlighted": false,
            "coordinates": [126,165, 168,153, 290,170, 381,150, 472,130, 573,148, 674,166, 775,184, 775,250, 675,237, 574,223, 473,210, 383,226, 293,241, 170,227, 126,238, 78,233, 43,242, 43,175, 79,162, 126,165],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [777,217]
        }
    ],
    "tooltip_regions": [],
    "nearest_360": 958
}/********************** End of Tower C View **********************/

/********************** Tower E View 2 **********************/
scenes_data["222"] = {
    "id": 222,
    "level": 2,
	"sublevel": 0,
    "parent": 2,
    "name": "Tower E View 2",
    "data_string": "T12",
    "img": {
        "desktop": "img/scene_data/sb-tc/B2_C_2.jpg",
        "topview": "img/scene_data/sb-tc/keymapB2TC.jpg"
    },
    "align_left": true,
    "menu_id": 5,
    "compass_degree": 120,
    "alternate_view_points": [
        {
            "id": 1,
            "name": "Tower A View 1",
            "coordinates": [40, 573],
            "flip": true,
            "target": 221
        }
    ],
    "require_transition": false,
    "hover_regions": [],
    "render_floor_on_collapse": true,
    "highlight_regions": [
        {
            "id": 1,
            "name": "Floor 1",
            "target": 223,
            "highlighted": false,
            "coordinates": [65,858, 65,931, 136,943, 136,965, 182,989, 309,970, 436,951, 564,932, 564,881, 595,876, 595,808, 565,812, 565,855, 437,871, 309,886, 181,901, 136,883, 136,866, 65,855, 65,858],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [600,840]
        },
        {
            "id": 2,
            "name": "Floor 2",
            "target": 223,
            "highlighted": false,
            "coordinates": [595,746, 564,748, 564,781, 436,792, 308,804, 180,815, 136,801, 136,786, 65,779, 65,855, 136,866, 136,883, 181,901, 309,886, 437,871, 565,855, 565,812, 595,808, 595,746],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [600,773]
        },
        {
            "id": 3,
            "name": "Floor 3",
            "target": 223,
            "highlighted": false,
            "coordinates": [595,681, 564,683, 564,704, 437,713, 309,721, 182,730, 136,719, 136,704, 65,704, 65,779, 136,786, 136,801, 180,815, 308,804, 436,792, 564,781, 564,748, 595,746, 595,681],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [600,713]
        },
        {
            "id": 4,
            "name": "Floor 4",
            "target": 223,
            "highlighted": false,
            "coordinates": [65,629, 65,704, 136,704, 136,719, 182,730, 309,721, 437,713, 564,704, 564,683, 595,681, 595,614, 564,615, 563,630, 434,635, 306,639, 177,643, 134,638, 134,629, 65,629],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [600,649]
        },
        {
            "id": 5,
            "name": "Floor 5",
            "target": 223,
            "highlighted": false,
            "coordinates": [595,549, 564,549, 564,556, 435,557, 306,558, 177,559, 133,555, 65,556, 65,629, 134,629, 134,638, 177,643, 306,639, 434,635, 563,630, 564,615, 595,614, 595,549],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [600,582]
        },
        {
            "id": 6,
            "name": "Floor 6",
            "target": 223,
            "highlighted": false,
            "coordinates": [595,485, 563,485, 563,479, 434,477, 306,475, 177,472, 134,474, 134,479, 65,479, 65,556, 133,555, 177,559, 306,558, 435,557, 564,556, 564,549, 595,549, 595,485],
            "color": "yellow",
            "tooltip_text": "<strong>Floor 6</strong><br><small>2 BHK: 2 avail, 2 sold<br>4 BHK: 2 avail, 2 sold</small>",
            "tooltip_coordinates": [600,515]
        },
        {
            "id": 7,
            "name": "Floor 7",
            "target": 223,
            "highlighted": false,
            "coordinates": [595,419, 565,419, 564,403, 436,397, 307,390, 179,383, 135,393, 135,409, 65,406, 65,479, 134,479, 134,474, 177,472, 306,475, 434,477, 563,479, 563,485, 595,485, 595,419],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [600,450]
        },
        {
            "id": 8,
            "name": "Floor 8",
            "target": 223,
            "highlighted": false,
            "coordinates": [595,355, 564,353, 564,329, 436,319, 307,309, 179,299, 134,309, 134,335, 65,330, 65,406, 135,409, 135,393, 179,383, 307,390, 436,397, 564,403, 565,419, 595,419, 595,355],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [600,386]
        },
        {
            "id": 9,
            "name": "Floor 9",
            "target": 223,
            "highlighted": false,
            "coordinates": [595,293, 565,288, 565,252, 436,239, 308,226, 179,212, 136,231, 136,257, 65,253, 65,330, 134,335, 134,309, 179,299, 307,309, 436,319, 564,329, 564,353, 595,355, 595,293],
            "color": "red",
            "tooltip_text": "Text",
            "tooltip_coordinates": [600,325]
        },
        {
            "id": 10,
            "name": "Floor 10",
            "target": 223,
            "highlighted": false,
            "coordinates": [127,180, 178,133, 307,150, 436,166, 565,182, 564,225, 594,230, 595,293, 565,288, 565,252, 436,239, 308,226, 179,212, 136,231, 136,257, 65,253, 65,174, 127,180],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [600,265]
        }
    ],
    "tooltip_regions": [],
    "nearest_360": 956
}/********************** End of Tower C View 2**********************/

/********************** Tower C Floor View **********************/
scenes_data["223"] = {
    "id": 223,
    "level": 3,
	"sublevel": 0,
    "parent": 222,
    "name": "Tower C Floor Plan",
    "img": {
        "desktop": "img/scene_data/sb-tc/FP-B2-C.jpg",
        "topview": "img/scene_data/sb-tc/keymapB2TC.jpg"
    },
    "align_left": false,
    "menu_id": 5,
    "compass_degree": 180,
    "require_transition": false,
    "hover_regions": [],
    "highlight_regions": [
        {
            "id": 1,
            "name": "Type 3",
            "target": 1005,
            "highlighted": false,
            "coordinates": [1246,716, 1301,649, 1358,690, 1410,623, 1342,575, 1273,527, 1268,532, 1202,485, 1184,505, 1130,468, 1069,534, 1104,559, 1077,588, 1161,652, 1246,716],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [1290,606]
        },
        {
            "id": 2,
            "name": "Type 4",
            "target": 1005,
            "highlighted": false,
            "coordinates": [1012,594, 946,664, 1001,709, 979,731, 1048,787, 1042,794, 1114,850, 1185,905, 1246,833, 1188,787, 1246,716, 1161,652, 1077,588, 1049,621, 1012,594],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [1167,730]
        },
        {
            "id": 3,
            "name": "Type 5",
            "target": 1007,
            "highlighted": false,
            "coordinates": [656,687, 688,712, 660,739, 726,797, 752,770, 782,797, 789,789, 858,846, 918,781, 851,727, 893,683, 868,662, 909,620, 838,564, 798,605, 765,579, 711,633, 656,687],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [846,687]
        },
        {
            "id": 4,
            "name": "Type 6",
            "target": 1007,
            "highlighted": false,
            "coordinates": [735,555, 776,515, 709,463, 668,501, 645,485, 605,523, 547,475, 484,530, 543,581, 537,587, 566,609, 537,634, 600,687, 626,661, 656,687, 711,633, 765,579, 735,555],
            "color": "yellow",
            "tooltip_text": "<strong>3 BHK</strong><br><small>Area: 1300 SqFt<br>Status: Available</small>",
            "tooltip_coordinates": [697,577]
        },
        {
            "id": 5,
            "name": "Type 8",
            "target": 1001,
            "highlighted": false,
            "coordinates": [393,274, 455,222, 514,266, 576,216, 652,272, 727,328, 700,352, 732,377, 687,418, 657,396, 599,448, 544,404, 556,394, 501,349, 493,355, 393,274],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [660,355]
        },
        {
            "id": 6,
            "name": "Type 7",
            "target": 1001,
            "highlighted": false,
            "coordinates": [576,216, 634,167, 576,126, 634,79, 737,151, 732,155, 785,192, 795,183, 851,223, 800,268, 828,289, 786,328, 754,306, 727,328, 652,272, 576,216],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [777,249]
            
        },
        {
            "id": 7,
            "name": "Type 1",
            "target": 1007,
            "highlighted": true,
            "coordinates": [1012,339, 979,318, 943,350, 879,306, 913,272, 891,256, 926,224, 871,185, 922,143, 976,180, 981,175, 1008,194, 1028,176, 1085,216, 1069,234, 1098,253, 1012,339],
            "color": "red",
            "tooltip_text": "<strong>2 BHK</strong><br><small>Area: 1000 SqFt<br>Status: Booked</small>",
            "tooltip_coordinates": [1027,262]
        },
        {
            "id": 8,
            "name": "Type 2",
            "target": 1007,
            "highlighted": true,
            "coordinates": [1005,396, 1074,448, 1111,409, 1134,425, 1168,389, 1232,434, 1278,381, 1215,339, 1219,332, 1191,315, 1207,295, 1145,253, 1126,273, 1098,253, 1012,339, 1042,360, 1005,396],
            "color": "orange",
            "tooltip_text": "<strong>3 BHK</strong><br><small>Area: 1300 SqFt<br>Status: On Hold</small>",
            "tooltip_coordinates": [1171,361]
        },
    ],
    "tooltip_regions": []
}/********************** End of Tower C Floor View **********************/

/********************** Tower A 3 BHK Type 1 View **********************/
scenes_data["224"] = {
    "id": 224,
    "level": 3,
	"sublevel": 0,
    "parent": 223,
    "name": "Tower A 3BHK Type 1",
    "img": {
        "desktop": "img/scene_data/nb-ta/TYPE1.jpg"
    },
    "align_left": false,
    "menu_id": 5,
    "compass_degree": -150,
    "require_transition": false,
    "has_content": true,
    "content": "<strong>3 BHK</strong> <p>Area : 1300 Sqft<br>Status : Available<br>Booking Price INR 27,000 (Refundable)</p>",
    "hover_regions": [],
    "highlight_regions": [],
    "tooltip_regions": []
}/********************** End of Tower A Floor View **********************/
