 /********************** Tower C View 1 **********************/
scenes_data["121"] = {
    "id": 121,
    "level": 2,
    "sublevel": 0,
    "parent": 2,
    "name": "Tower C",
    "data_string": "A",
    "img": {
        "desktop": "img/scene_data/nb-tc/B1_A_1.jpg",
        "topview": "img/scene_data/nb-tc/keymapB1T1A.jpg"
    },
    "align_left": true,
    "compass_degree": 180,
    "menu_id": 4,
    "alternate_view_points": [
        {
            "id": 1,
            "name": "Tower C View 2",
            "coordinates": [24, 549],
            "flip": true,
            "target": 122
        }
    ],
    "require_transition": false,
    "hover_regions": [],
    "render_floor_on_collapse": true,
    "highlight_regions": [
        {
            "id": 1,
            "name": "Floor 1",
            "target": 123,
            "highlighted": false,
            "coordinates": [797,781, 774,782, 774,796, 649,804, 621,847, 485,849, 349,851, 214,853, 211,798, 116,801, 116,871, 212,869, 211,926, 348,924, 484,921, 621,919, 649,866, 773,865, 774,846, 797,843, 797,781],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [797, 813]
        },
        {
            "id": 2,
            "name": "Floor 2",
            "target": 123,
            "highlighted": false,
            "coordinates": [797,720, 774,721, 774,731, 647,734, 620,767, 485,769, 351,771, 216,773, 209,731, 116,731, 116,801, 211,798, 214,853, 349,851, 485,849, 621,847, 649,804, 774,796, 774,782, 797,781, 797,720],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [797, 748]
        },
        {
            "id": 3,
            "name": "Floor 3",
            "target": 123,
            "highlighted": false,
            "coordinates": [116,731, 209,731, 216,773, 351,771, 485,769, 620,767, 647,734, 774,731, 774,721, 797,720, 797,653, 772,653, 772,663, 648,664, 620,687, 485,688, 351,689, 216,690, 213,666, 116,666, 116,731],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [797, 684]
        },
        {
            "id": 4,
            "name": "Floor 4",
            "target": 123,
            "highlighted": false,
            "coordinates": [797,592, 775,593, 774,596, 648,596, 619,610, 484,610, 348,610, 213,610, 212,596, 116,599, 116,666, 213,666, 216,690, 351,689, 485,688, 620,687, 648,664, 772,663, 772,653, 797,653, 797,592],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [797, 620]
        },
        {
            "id": 5,
            "name": "Floor 5",
            "target": 123,
            "highlighted": false,
            "coordinates": [797,529, 661,530, 524,530, 388,531, 252,531, 116,532, 116,599, 212,596, 213,610, 348,610, 484,610, 619,610, 648,596, 774,596, 775,593, 797,592, 797,529],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [797, 561]
        },
        {
            "id": 6,
            "name": "Floor 6",
            "target": 123,
            "highlighted": false,
            "coordinates": [797,468, 775,468, 773,464, 644,466, 620,449, 485,448, 350,447, 215,446, 214,462, 116,462, 116,532, 252,531, 388,531, 524,530, 661,530, 797,529, 797,468],
            "color": "#ffe200",
            "tooltip_text": "<strong>Floor 6</strong><br><small>2 BHK: 2 avail, 2 sold<br>4 BHK: 2 avail, 2 sold</small>",
            "tooltip_coordinates": [797, 498]
        },
        {
            "id": 7,
            "name": "Floor 7",
            "target": 123,
            "highlighted": false,
            "coordinates": [797,404, 774,404, 774,396, 646,396, 618,370, 484,369, 349,367, 215,366, 214,396, 116,396, 116,462, 214,462, 215,446, 350,447, 485,448, 620,449, 644,466, 773,464, 775,468, 797,468, 797,404],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [797, 438]
        },
        {
            "id": 8,
            "name": "Floor 8",
            "target": 123,
            "highlighted": false,
            "coordinates": [797,343, 773,343, 774,330, 647,330, 619,291, 484,289, 348,287, 213,286, 215,330, 116,330, 116,396, 214,396, 215,366, 349,367, 484,369, 618,370, 646,396, 774,396, 774,404, 797,404, 797,345, 797,343],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [797, 368]
        },
        {
            "id": 9,
            "name": "Floor 9",
            "target": 123,
            "highlighted": false,
            "coordinates": [797,282, 773,282, 772,263, 646,259, 620,212, 484,210, 348,208, 212,205, 212,263, 116,263, 116,330, 215,330, 213,286, 348,287, 484,289, 619,291, 647,330, 774,330, 773,343, 797,343, 797,282],
            "color": "#ff4141",
            "tooltip_text": "<strong>Floor 9</strong><br><small>2 BHK: 0 avail, 4 sold<br>4 BHK: 0 avail, 4 sold</small>",
            "tooltip_coordinates": [797, 306]
        },
        {
            "id": 10,
            "name": "Floor 10",
            "target": 123,
            "highlighted": false,
            "coordinates": [116,197, 215,197, 215,124, 350,127, 485,130, 620,133, 653,200, 797,200, 797,282, 773,282, 772,263, 646,259, 620,212, 484,210, 348,208, 212,205, 212,263, 116,263, 116,197],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [797, 235]
        }
    ],
    "tooltip_regions": [],
    "nearest_360": 905
}/********************** End of Tower C View **********************/

/********************** Tower C View 2 **********************/
scenes_data["122"] = {
    "id": 122,
    "level": 2,
    "sublevel": 0,
    "parent": 2,
    "name": "Tower C View 2",
    "data_string": "A",
    "img": {
        "desktop": "img/scene_data/nb-tc/B1_A_2.jpg",
        "topview": "img/scene_data/nb-tc/keymapB1T1A.jpg"
    },
    "align_left": true,
    "menu_id": 4,
    "compass_degree": 20,
    "alternate_view_points": [
        {
            "id": 1,
            "name": "Tower A View 1",
            "coordinates": [1039, 564],
            "target": 121
        }
    ],
    "require_transition": false,
    "hover_regions": [],
    "render_floor_on_collapse": true,
    "highlight_regions": [
        {
            "id": 1,
            "name": "Floor 1",
            "target": 123,
            "highlighted": false,
            "coordinates": [902,756, 825,804, 726,803, 627,802, 531,850, 420,846, 309,842, 198,838, 198,908, 309,913, 421,917, 532,921, 627,862, 725,868, 823,874, 902,812, 902,756],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [901,786]
        },
        {
            "id": 2,
            "name": "Floor 2",
            "target": 123,
            "highlighted": false,
            "coordinates": [902,702, 825,739, 725,740, 624,741, 529,775, 419,772, 309,770, 198,767, 198,838, 309,842, 420,846, 531,850, 627,802, 726,803, 825,804, 902,756, 902,702],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [901,730]
        },
        {
            "id": 3,
            "name": "Floor 3",
            "target": 123,
            "highlighted": false,
            "coordinates": [902,647, 823,674, 723,674, 624,675, 528,702, 418,699, 308,696, 198,693, 198,767, 309,770, 419,772, 529,775, 624,741, 725,740, 825,739, 902,702, 902,647],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [901,672]
        },
        {
            "id": 4,
            "name": "Floor 4",
            "target": 123,
            "highlighted": false,
            "coordinates": [902,592, 825,607, 724,608, 623,608, 527,627, 417,625, 307,624, 197,622, 198,693, 308,696, 418,699, 528,702, 624,675, 723,674, 823,674, 902,647, 902,592],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [901,618]
        },
        {
            "id": 5,
            "name": "Floor 5",
            "target": 123,
            "highlighted": false,
            "coordinates": [902,533, 825,540, 724,542, 624,544, 530,550, 419,550, 307,550, 196,550, 197,622, 307,624, 417,625, 527,627, 623,608, 724,608, 825,607, 902,592, 902,533],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [901,562]
        },
        {
            "id": 6,
            "name": "Floor 6",
            "target": 123,
            "highlighted": false,
            "coordinates": [902,480, 826,476, 725,476, 624,476, 528,476, 417,476, 306,476, 196,476, 196,550, 307,550, 419,550, 530,550, 624,544, 724,542, 825,540, 902,533, 902,480],
            "color": "yellow",
            "tooltip_text": "<strong>Floor 6</strong><br><small>2 BHK: 2 avail, 2 sold<br>4 BHK: 2 avail, 2 sold</small>",
            "tooltip_coordinates": [901,506]
        },
        {
            "id": 7,
            "name": "Floor 7",
            "target": 123,
            "highlighted": false,
            "coordinates": [902,424, 825,413, 725,413, 624,412, 528,400, 417,402, 306,403, 196,405, 196,476, 306,476, 417,476, 528,476, 624,476, 725,476, 826,476, 902,480, 902,424],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [901,450]
        },
        {
            "id": 8,
            "name": "Floor 8",
            "target": 123,
            "highlighted": false,
            "coordinates": [902,367, 824,347, 722,345, 620,344, 526,324, 416,327, 306,329, 196,331, 196,405, 306,403, 417,402, 528,400, 624,412, 725,413, 825,413, 902,424, 902,367],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [901,398]
        },
        {
            "id": 9,
            "name": "Floor 9",
            "target": 123,
            "highlighted": false,
            "coordinates": [902,313, 823,280, 722,279, 622,279, 527,248, 417,251, 306,254, 196,258, 196,331, 306,329, 416,327, 526,324, 620,344, 722,345, 824,347, 902,367, 902,313],
            "color": "red",
            "tooltip_text": "Text",
            "tooltip_coordinates": [901,338]
        },
        {
            "id": 10,
            "name": "Floor 10",
            "target": 123,
            "highlighted": false,
            "coordinates": [196,187, 306,183, 416,179, 526,174, 624,219, 724,218, 824,216, 902,258, 902,313, 823,280, 722,279, 622,279, 527,248, 417,251, 306,254, 196,258, 196,187],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [901,283]
        }
    ],
    "tooltip_regions": [],
    "nearest_360": 904
}/********************** End of Tower C View 2**********************/


/********************** Tower C Floor View **********************/
scenes_data["123"] = {
    "id": 123,
    "level": 3,
    "sublevel": 0,
    "parent": 122,
    "name": "Tower C Floor Plan",
    "img": {
        "desktop": "img/scene_data/nb-tc/FP-B1-A.jpg",
        "topview": "img/scene_data/nb-tc/keymapB1T1A.jpg"
    },
    "align_left": false,
    "menu_id": 4,
    "compass_degree": -150,
    "require_transition": false,
    "hover_regions": [],
    "highlight_regions": [
        {
            "id": 1,
            "name": "Type 4",
            "target": 1007,
            "highlighted": false,
            "coordinates": [1095,499, 1163,441, 1210,483, 1256,445, 1293,477, 1325,448, 1399,512, 1312,590, 1335,611, 1279,662, 1255,641, 1224,670, 1161,610, 1099,550, 1127,526, 1095,499],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [1308,511]
        },
        {
            "id": 2,
            "name": "Type 3",
            "target": 1007,
            "highlighted": false,
            "coordinates": [1099,550, 1067,574, 1037,545, 960,606, 1010,652, 956,697, 994,735, 953,769, 1028,846, 1130,754, 1155,777, 1216,721, 1193,698, 1224,670, 1161,610, 1099,550],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [1162,663]
        },
        {
            "id": 3,
            "name": "Type 2",
            "target": 1003,
            "highlighted": true,
            "coordinates": [605,737, 707,658, 809,578, 836,605, 873,578, 918,622, 889,646, 948,705, 850,788, 751,871, 653,954, 583,873, 637,830, 583,768, 612,745, 605,737],
            "color": "orange",
            "tooltip_text": "<strong>3 BHK</strong><br><small>Area: 1300 SqFt<br>Status: On Hold</small>",
            "tooltip_coordinates": [853,693]
        },
        {
            "id": 4,
            "name": "Type 1",
            "target": 1004,
            "highlighted": true,
            "coordinates": [605,737, 594,727, 566,748, 514,690, 462,729, 398,656, 497,586, 595,516, 694,446, 746,498, 774,479, 816,521, 781,549, 809,578, 707,658, 605,737],
            "color": "red",
            "tooltip_text": "<strong>2 BHK</strong><br><small>Area: 1000 SqFt<br>Status: Booked</small>",
            "tooltip_coordinates": [700,580]
        },
        {
            "id": 5,
            "name": "Type 8",
            "target": 1005,
            "highlighted": false,
            "coordinates": [574,289, 651,238, 672,258, 737,215, 814,287, 890,359, 859,382, 890,408, 814,464, 770,421, 743,441, 691,389, 683,395, 629,342, 574,289],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [780,352]
        },
        {
            "id": 6,
            "name": "Type 7",
            "target": 1005,
            "highlighted": false,
            "coordinates": [737,215, 802,171, 781,153, 848,109, 955,203, 948,208, 1001,254, 975,272, 1019,312, 950,362, 922,336, 890,359, 814,287, 737,215],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [904,211]
        },
        {
            "id": 7,
            "name": "Type 6",
            "target": 1005,
            "highlighted": false,
            "coordinates": [1007,260, 1051,228, 1026,207, 1080,169, 1074,164, 1181,87, 1244,138, 1224,151, 1275,195, 1256,207, 1263,215, 1195,267, 1127,319, 1099,295, 1071,319, 1007,260],
            "color": "yellow",
            "tooltip_text": "<strong>3 BHK</strong><br><small>Area: 1300 SqFt<br>Status: Available</small>",
            "tooltip_coordinates": [1249,174]
        },
        {
            "id": 8,
            "name": "Type 5",
            "target": 1005,
            "highlighted": false,
            "coordinates": [1127,319, 1158,346, 1127,369, 1197,429, 1241,393, 1267,415, 1318,372, 1325,377, 1430,288, 1364,235, 1344,248, 1291,206, 1272,221, 1263,215, 1195,267, 1127,319],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [1185,294]
        },        
    ],
    "tooltip_regions": []
}/********************** End of Tower C Floor View **********************/

