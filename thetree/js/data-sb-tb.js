 /********************** Tower E View 1 **********************/
scenes_data["211"] = {
    "id": 211,
    "level": 2,
	"sublevel": 0,
    "parent": 2,
    "name": "Tower E",
    "data_string": "B",
    "img": {
        "desktop": "img/scene_data/sb-tb/B2_B_1.jpg",
        "topview": "img/scene_data/sb-tb/keymapB2TB.jpg"
    },
    "align_left": true,
    "compass_degree": 180,
    "menu_id": 5,
    "alternate_view_points": [
        {
            "id": 1,
            "name": "Tower E View 2",
            "coordinates": [34, 564],
            "flip": true,
            "target": 212
        }
    ],
    "require_transition": false,
    "hover_regions": [],
    "render_floor_on_collapse": true,
    "highlight_regions": [
        {
            "id": 1,
            "name": "Floor 1",
            "target": 213,
            "highlighted": false,
            "coordinates": [1022,795, 995,813, 902,817, 809,820, 788,847, 664,847, 541,847, 417,847, 411,810, 267,810, 123,810, 123,882, 267,882, 410,882, 419,922, 543,922, 667,922, 791,922, 811,888, 902,888, 992,888, 1022,859, 1022,795],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [1026,822]
        },
        {
            "id": 2,
            "name": "Floor 2",
            "target": 213,
            "highlighted": false,
            "coordinates": [1022,729, 993,744, 900,745, 807,745, 786,771, 662,771, 538,771, 414,771, 408,741, 266,741, 123,741, 123,810, 267,810, 411,810, 417,847, 541,847, 664,847, 788,847, 809,820, 902,817, 995,813, 1022,795, 1022,729],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [1026,791]
        },
        {
            "id": 3,
            "name": "Floor 3",
            "target": 213,
            "highlighted": false,
            "coordinates": [1022,659, 995,671, 902,671, 808,671, 787,691, 663,691, 538,691, 414,691, 411,670, 267,670, 123,670, 123,741, 266,741, 408,741, 414,771, 538,771, 662,771, 786,771, 807,745, 900,745, 993,744, 1022,729, 1022,659],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [1026,688]
        },
        {
            "id": 4,
            "name": "Floor 4",
            "target": 213,
            "highlighted": false,
            "coordinates": [1022,591, 994,599, 902,599, 809,599, 785,611, 661,611, 538,611, 414,611, 409,599, 266,599, 123,599, 123,670, 267,670, 411,670, 414,691, 538,691, 663,691, 787,691, 808,671, 902,671, 995,671, 1022,659, 1022,591],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [1026,624]
        },
        {
            "id": 5,
            "name": "Floor 5",
            "target": 213,
            "highlighted": false,
            "coordinates": [1022,525, 993,526, 902,526, 810,526, 784,533, 660,533, 537,533, 413,533, 409,527, 266,527, 123,526, 123,599, 266,599, 409,599, 414,611, 538,611, 661,611, 785,611, 809,599, 902,599, 994,599, 1022,591, 1022,525],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [1026,556]
        },
        {
            "id": 6,
            "name": "Floor 6",
            "target": 213,
            "highlighted": false,
            "coordinates": [1022,456, 893,456, 765,456, 637,456, 508,456, 380,456, 251,456, 123,456, 123,526, 266,527, 409,527, 413,533, 537,533, 660,533, 784,533, 810,526, 902,526, 993,526, 1022,525, 1022,456],
            "color": "#ffe200",
            "tooltip_text": "<strong>Floor 6</strong><br><small>2 BHK: 2 avail, 2 sold<br>4 BHK: 2 avail, 2 sold</small>",
            "tooltip_coordinates": [1026,492]
        },
        {
            "id": 7,
            "name": "Floor 7",
            "target": 213,
            "highlighted": false,
            "coordinates": [1022,390, 997,385, 903,385, 808,385, 786,375, 661,375, 536,374, 411,373, 410,385, 267,385, 123,385, 123,456, 251,456, 380,456, 508,456, 637,456, 765,456, 893,456, 1022,456, 1022,390],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [1026,424]
        },
        {
            "id": 8,
            "name": "Floor 8",
            "target": 213,
            "highlighted": false,
            "coordinates": [1022,323, 994,316, 901,316, 808,315, 786,295, 661,295, 535,295, 410,295, 411,316, 267,316, 123,316, 123,385, 267,385, 410,385, 411,373, 536,374, 661,375, 786,375, 808,385, 903,385, 997,385, 1022,390, 1022,323],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [1026,358]
        },
        {
            "id": 9,
            "name": "Floor 9",
            "target": 213,
            "highlighted": false,
            "coordinates": [1022,252, 993,239, 899,238, 804,237, 786,216, 661,216, 537,216, 412,216, 412,243, 316,243, 219,243, 123,243, 123,316, 267,316, 411,316, 410,295, 535,295, 661,295, 786,295, 808,315, 901,316, 994,316, 1022,323, 1022,252],
            "color": "#ff4141",
            "tooltip_text": "<strong>Floor 9</strong><br><small>2 BHK: 0 avail, 4 sold<br>4 BHK: 0 avail, 4 sold</small>",
            "tooltip_coordinates": [1026,289]
        },
        {
            "id": 10,
            "name": "Floor 10",
            "target": 213,
            "highlighted": false,
            "coordinates": [123,176, 219,176, 315,176, 411,175, 410,140, 535,140, 661,140, 786,140, 805,175, 900,175, 995,174, 1022,192, 1022,252, 993,239, 899,238, 804,237, 786,216, 661,216, 537,216, 412,216, 412,243, 316,243, 219,243, 123,243, 123,176],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [1026,223]
        }
    ],
    "tooltip_regions": [],
    "nearest_360": 960
}/********************** End of Tower C View **********************/

/********************** Tower E View 2 **********************/
scenes_data["212"] = {
    "id": 212,
    "level": 2,
	"sublevel": 0,
    "parent": 2,
    "name": "Tower E View 2",
    "data_string": "B",
    "img": {
        "desktop": "img/scene_data/sb-tb/B2_B_2.jpg",
        "topview": "img/scene_data/sb-tb/keymapB2TB.jpg"
    },
    "align_left": true,
    "menu_id": 5,
    "compass_degree": 50,
    "alternate_view_points": [
        {
            "id": 1,
            "name": "Tower A View 1",
            "coordinates": [1128, 621],
            "target": 211
        }
    ],
    "require_transition": false,
    "hover_regions": [],
    "render_floor_on_collapse": true,
    "highlight_regions": [
        {
            "id": 1,
            "name": "Floor 1",
            "target": 213,
            "highlighted": false,
            "coordinates": [934,827, 794,853, 653,879, 568,853, 482,827, 351,851, 273,833, 195,814, 196,871, 274,898, 352,925, 483,897, 568,929, 652,962, 746,941, 840,920, 934,899, 934,827],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [938,865]
        },
        {
            "id": 2,
            "name": "Floor 2",
            "target": 213,
            "highlighted": false,
            "coordinates": [934,757, 794,777, 653,798, 567,778, 482,758, 350,777, 272,763, 193,750, 195,814, 273,833, 351,851, 482,827, 568,853, 653,879, 794,853, 934,827, 934,757],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [938,792]
        },
        {
            "id": 3,
            "name": "Floor 3",
            "target": 213,
            "highlighted": false,
            "coordinates": [934,688, 794,704, 654,720, 567,704, 480,688, 350,703, 271,695, 192,687, 193,750, 272,763, 350,777, 482,758, 567,778, 653,798, 794,777, 934,757, 934,688],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [938,721]
        },
        {
            "id": 4,
            "name": "Floor 4",
            "target": 213,
            "highlighted": false,
            "coordinates": [934,618, 793,629, 652,640, 564,629, 476,617, 348,628, 269,626, 190,623, 192,687, 271,695, 350,703, 480,688, 567,704, 654,720, 794,704, 934,688, 934,618],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [938,651]
        },
        {
            "id": 5,
            "name": "Floor 5",
            "target": 213,
            "highlighted": false,
            "coordinates": [934,547, 793,552, 652,558, 564,553, 477,548, 346,554, 267,552, 188,551, 190,623, 269,626, 348,628, 476,617, 564,629, 652,640, 793,629, 934,618, 934,547],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [938,582]
        },
        {
            "id": 6,
            "name": "Floor 6",
            "target": 213,
            "highlighted": false,
            "coordinates": [934,478, 810,478, 685,479, 561,479, 436,479, 312,479, 187,479, 188,551, 267,552, 346,554, 477,548, 564,553, 652,558, 793,552, 934,547, 934,478],
            "color": "yellow",
            "tooltip_text": "<strong>Floor 6</strong><br><small>2 BHK: 2 avail, 2 sold<br>4 BHK: 2 avail, 2 sold</small>",
            "tooltip_coordinates": [938,513]
        },
        {
            "id": 7,
            "name": "Floor 7",
            "target": 213,
            "highlighted": false,
            "coordinates": [934,406, 836,403, 739,401, 642,398, 556,402, 470,407, 344,402, 265,406, 186,409, 187,479, 312,479, 436,479, 561,479, 685,479, 810,478, 934,478, 934,406],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [938,443]
        },
        {
            "id": 8,
            "name": "Floor 8",
            "target": 213,
            "highlighted": false,
            "coordinates": [934,335, 836,329, 739,323, 642,317, 556,325, 470,334, 342,327, 263,335, 185,343, 186,409, 265,406, 344,402, 470,407, 556,402, 642,398, 739,401, 836,403, 934,406, 934,335],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [938,374]
        },
        {
            "id": 9,
            "name": "Floor 9",
            "target": 213,
            "highlighted": false,
            "coordinates": [934,263, 836,253, 739,244, 642,234, 555,248, 469,263, 342,250, 264,263, 185,276, 185,343, 263,335, 342,327, 470,334, 556,325, 642,317, 739,323, 836,329, 934,335, 934,263],
            "color": "red",
            "tooltip_text": "Text",
            "tooltip_coordinates": [938,300]
        },
        {
            "id": 10,
            "name": "Floor 10",
            "target": 213,
            "highlighted": false,
            "coordinates": [184,217, 263,197, 341,177, 466,198, 554,178, 641,157, 738,170, 836,183, 933,195, 934,263, 836,253, 739,244, 642,234, 555,248, 469,263, 342,250, 264,263, 185,276, 184,217],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [938,231]
        }
    ],
    "tooltip_regions": [],
    "nearest_360": 959
}/********************** End of Tower C View 2**********************/

/********************** Tower C Floor View **********************/
scenes_data["213"] = {
    "id": 213,
    "level": 3,
	"sublevel": 0,
    "parent": 212,
    "name": "Tower C Floor Plan",
    "img": {
        "desktop": "img/scene_data/sb-tb/FP-B2-B.jpg",
        "topview": "img/scene_data/sb-tb/keymapB2TB.jpg"
    },
    "align_left": false,
    "menu_id": 5,
    "compass_degree": 210,
    "require_transition": false,
    "hover_regions": [],
    "highlight_regions": [
        {
            "id": 1,
            "name": "Type 2",
            "target": 1007,
            "highlighted": true,
            "coordinates": [1137,633, 1164,603, 1115,568, 1173,505, 1221,540, 1240,519, 1288,553, 1337,498, 1407,546, 1358,605, 1365,610, 1342,638, 1368,658, 1318,721, 1290,700, 1264,730, 1200,682, 1137,633],
            "color": "orange",
            "tooltip_text": "<strong>3 BHK</strong><br><small>Area: 1300 SqFt<br>Status: On Hold</small>",
            "tooltip_coordinates": [1296,628]
        },
        {
            "id": 2,
            "name": "Type 1",
            "target": 1007,
            "highlighted": true,
            "coordinates": [1137,633, 1108,663, 1062,625, 998,692, 1047,733, 1026,756, 1074,796, 1015,862, 1089,924, 1148,854, 1156,860, 1182,829, 1210,851, 1267,784, 1238,762, 1264,730, 1200,682, 1137,633],
            "color": "red",
            "tooltip_text": "<strong>2 BHK</strong><br><small>Area: 1000 SqFt<br>Status: Booked</small>",
            "tooltip_coordinates": [1176,783]
        },
        
        {
            "id": 3,
            "name": "Type 5",
            "target": 1005,
            "highlighted": false,
            "coordinates": [705,713, 777,774, 726,825, 800,893, 861,828, 922,762, 915,757, 975,694, 950,673, 996,625, 918,563, 887,593, 853,567, 779,640, 705,713],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [915,681]
        },
        {
            "id": 4,
            "name": "Type 6",
            "target": 1005,
            "highlighted": false,
            "coordinates": [778,453, 730,496, 708,479, 649,533, 642,528, 580,585, 519,642, 585,703, 638,655, 705,713, 779,640, 853,567, 821,540, 853,510, 778,453],
            "color": "yellow",
            "tooltip_text": "<strong>3 BHK</strong><br><small>Area: 1300 SqFt<br>Status: Available</small>",
            "tooltip_coordinates": [787,571]
        },
        {
            "id": 5,
            "name": "Type 8",
            "target": 1001,
            "highlighted": false,
            "coordinates": [615,234, 553,285, 493,239, 428,291, 533,378, 539,372, 594,417, 580,428, 639,474, 698,422, 727,446, 774,403, 742,376, 769,352, 692,293, 615,234],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [703,375]
        },
        {
            "id": 6,
            "name": "Type 7",
            "target": 1001,
            "highlighted": false,
            "coordinates": [615,234, 675,184, 618,141, 675,95, 780,169, 774,173, 828,212, 839,203, 895,244, 842,291, 873,312, 828,353, 797,328, 769,352, 692,293, 615,234],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [810,279]
        },
        {
            "id": 7,
            "name": "Type 4",
            "target": 1007,
            "highlighted": false,
            "coordinates": [936,317, 973,283, 952,267, 986,234, 928,195, 979,150, 1036,189, 1041,185, 1068,203, 1085,187, 1146,227, 1128,244, 1158,264, 1070,353, 1040,330, 1003,365, 936,317],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [1069,274]
        },
        {
            "id": 8,
            "name": "Type 3",
            "target": 1007,
            "highlighted": false,
            "coordinates": [1158,264, 1189,285, 1206,267, 1268,310, 1252,327, 1283,348, 1277,354, 1344,398, 1296,453, 1231,405, 1195,443, 1171,425, 1136,461, 1066,410, 1101,375, 1070,353, 1158,264],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [1222,369]
        },
    ],
    "tooltip_regions": []
}/********************** End of Tower C Floor View **********************/

/********************** Tower A 3 BHK Type 1 View **********************/
scenes_data["214"] = {
    "id": 214,
    "level": 3,
	"sublevel": 0,
    "parent": 213,
    "name": "Tower A 3BHK Type 1",
    "img": {
        "desktop": "img/scene_data/nb-ta/TYPE1.jpg"
    },
    "align_left": false,
    "menu_id": 5,
    "compass_degree": 180,
    "require_transition": false,
    "has_content": true,
    "content": "<strong>3 BHK</strong> <p>Area : 1300 Sqft<br>Status : Available<br>Booking Price INR 27,000 (Refundable)</p>",
    "hover_regions": [],
    "highlight_regions": [],
    "tooltip_regions": []
}/********************** End of Tower A Floor View **********************/
