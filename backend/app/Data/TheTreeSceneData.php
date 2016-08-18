<?php namespace App\Data;

class TheTreeSceneData extends DataProvider {

 public static function data()
 {
  return [
    // Data L1 L2
    '1' => ' {
        "id": 1,
        "level": 1,
        "sublevel": 0,
        "parent": null,
        "name": "Ariel",
        "img": {
            "desktop": "img/scene_data/base/ARIEL.jpg"
        },
        "align_left": false,
        "compass_degree": -150,
        "menu_id": 1,
        "require_transition": false,
        "hover_regions": [
            {
                "id": 1,
                "name": "North Block",
                "target": 2,
                "coordinates": [557, 344, 604, 312, 592, 295, 670, 261, 704, 282, 759, 250, 822, 288, 822, 322, 838, 338, 878, 314, 950, 353, 950, 411, 980, 430, 1024, 404, 1104, 450, 1100, 509, 1130, 528, 1114, 700, 1050, 752, 984, 711, 948, 740, 854, 677, 844, 629, 828, 616, 768, 649, 696, 596, 688, 540, 648, 561, 588, 522],
                "img": {
                    "desktop": "img/scene_data/base/ARIEL_B1.jpg"
                }
            },
            {
                "id": 2,
                "name": "South Block",
                "target": 3,
                "coordinates": [932, 154, 1000, 117, 1034, 132, 1034, 104, 1084, 74, 1094, 80, 1153, 44, 1314, 98, 1292, 250, 1334, 267, 1305, 430, 1259, 462, 1198, 435, 1178, 453, 960, 344, 932, 304],
                "img": {
                    "desktop": "img/scene_data/base/ARIEL_B2.jpg"
                }
            }
        ],
        "highlight_regions": [],
        "tooltip_regions": [
            {
                "id": 1,
                "coordinates": [763,860, 808,811, 738,773, 695,813, 763,860],
                "tooltip_text": "Kids Play Area",
                "tooltip_coordinates": [808,811]  
            },
            {
                "id": 2,
                "coordinates": [849,1009, 934,925, 905,889, 809,872, 738,942, 849,1009],
                "tooltip_text": "Basket Ball & Tennis Courts",
                "tooltip_coordinates": [827,904]  
            },
            {
                "id": 3,
                "coordinates": [1418,515, 1479,529, 1480,434, 1423,342, 1368,375, 1393,445, 1418,515],
                "tooltip_text": "Club House",
                "tooltip_coordinates": [1480,434]  
            },
            {
                "id": 4,
                "coordinates": [1358,367, 1332,286, 1385,290, 1405,320, 1358,367],
                "tooltip_text": "Swimming Pool",
                "tooltip_coordinates": [1405,320]  
            },
            {
                "id": 5,
                "coordinates": [588,738, 696,807, 730,778, 619,709],
                "tooltip_text": "Tree Court",
                "tooltip_coordinates": [695, 775]  
            },
            {
                "id": 6,
                "coordinates": [433,643, 522,700, 558,667, 472,616, 430,646],
                "tooltip_text": "Tree Court",
                "tooltip_coordinates": [523,666]  
            },
            {
                "id": 7,
                "coordinates": [343,591, 418,637, 462,609, 408,579, 378,576],
                "tooltip_text": "Open air theatre",
                "tooltip_coordinates": [421,609]  
            },
            {
                "id": 8,
                "coordinates": [558,682, 558,712, 573,723, 594,715, 600,698, 600,679, 582,668],
                "tooltip_text": "Meditation Pavilion",
                "tooltip_coordinates": [589,692]  
            }
        ],
        "360_points": [
            {
                "id": 1,
                "coordinates": [1170, 625],
                "target": 900
            },
            {
                "id": 2,
                "coordinates": [1134, 724],
                "target": 909
            },
            {
                "id": 3,
                "coordinates": [1018, 766],
                "target": 908
            },
            {
                "id": 4,
                "coordinates": [807, 669],
                "target": 907
            },
            {
                "id": 5,
                "coordinates": [639, 565],
                "target": 906
            },
            {
                "id": 6,
                "coordinates": [541, 486],
                "target": 905
            },
            {
                "id": 7,
                "coordinates": [1216, 478],
                "target": 950
            },
            {
                "id": 8,
                "coordinates": [1327, 409],
                "target": 951
            },
            {
                "id": 8,
                "coordinates": [1113, 421],
                "target": 951
            },
            {
                "id": 9,
                "coordinates": [1041, 384],
                "target": 951
            },
            {
                "id": 10,
                "coordinates": [949, 340],
                "target": 951
            },
            {
                "id": 11,
                "coordinates": [885, 285],
                "target": 951
            }
        ]
    }',
    '2' => '{
        "id": 2,
        "level": 1,
        "sublevel": 1,
        "parent": 1,
        "name": "North Block",
        "data_string": "1",
        "img": {
            "desktop": "img/scene_data/nb/B1.jpg"
        },
        "align_left": false,
        "compass_degree": -150,
        "menu_id": 2,
        "require_transition": false,
        "hover_regions": [
            {
                "id": 1,
                "name": "Group A",
                "target": 121,
                "coordinates": [507,540, 478,409, 449,278, 487,242, 521,195, 632,147, 688,175, 770,131, 868,177, 865,225, 776,272, 687,320, 708,330, 673,352, 675,369, 640,385, 661,527, 681,670, 594,605, 507,540],
                "img": {
                    "desktop": "img/scene_data/nb/B1_A.jpg"
                }
            },
            {
                "id": 2,
                "name": "Group B",
                "target": 111,
                "coordinates": [923,801, 786,757, 681,670, 661,527, 640,385, 675,369, 673,352, 708,330, 687,320, 776,272, 865,225, 907,248, 956,216, 1079,274, 1071,356, 989,410, 907,463, 907,588, 908,712, 923,801],
                "img": {
                    "desktop": "img/scene_data/nb/B1_B.jpg"
                }
            },
            {
                "id": 3,
                "name": "Group C",
                "target": 101,
                "coordinates": [1330,511, 1418,550, 1395,649, 1371,747, 1348,846, 1257,933, 1138,863, 1079,920, 1001,860, 923,801, 908,712, 907,588, 907,463, 989,410, 1071,356, 1138,400, 1198,352, 1270,387, 1341,422, 1330,511],
                "img": {
                    "desktop": "img/scene_data/nb/B1_C.jpg"
                }
            },
            {
                "id": 4,
                "name": "South Block",
                "target": 3,
                "coordinates": [1012,0, 1012,121, 1012,242, 1079,274, 1076,305, 1198,352, 1270,387, 1341,422, 1413,453, 1485,484, 1584,400, 1619,277, 1654,153, 1559,122, 1581,100, 1525,79, 1542,0, 1410,0, 1277,0, 1145,0, 1012,0],
                "img": {
                    "desktop": "img/scene_data/nb/B1_B2.jpg"
                }
            }
        ],
        "highlight_regions": [],
        "tooltip_regions": [],
        "nearest_360": 908
    }',
    '3' => '{
        "id": 3,
        "level": 1,
        "sublevel": 1,
        "parent": 1,
        "name": "South Block",
        "data_string": "2",
        "img": {
            "desktop": "img/scene_data/sb/B2.jpg"
        },
        "align_left": false,
        "compass_degree": -150,
        "menu_id": 3,
        "require_transition": false,
        "hover_regions": [
            {
                "id": 1,
                "name": "Group A",
                "target": 201,
                "coordinates": [893,487, 897,607, 900,727, 904,847, 993,911, 1082,976, 1139,926, 1200,965, 1261,1005, 1312,953, 1362,901, 1384,803, 1407,706, 1429,608, 1326,554, 1343,490, 1246,442, 1149,395, 1111,421, 1038,388, 966,437, 893,487],
                "img": {
                    "desktop": "img/scene_data/sb/B2_A.jpg"
                }
            },
            {
                "id": 2,
                "name": "Group B",
                "target": 211,
                "coordinates": [902,771, 897,629, 893,487, 966,437, 1038,388, 996,362, 1023,345, 946,305, 869,265, 813,273, 745,236, 673,271, 601,306, 621,442, 640,579, 672,683, 777,762, 902,771],
                "img": {
                    "desktop": "img/scene_data/sb/B2_B.jpg"
                }
            },
            {
                "id": 3,
                "name": "Group C",
                "target": 221,
                "coordinates": [1227,433, 1149,395, 1111,421, 1038,388, 996,362, 1023,345, 946,305, 869,265, 834,270, 831,192, 929,144, 1016,180, 1051,162, 1126,193, 1201,224, 1196,257, 1248,280, 1238,357, 1227,433],
                "img": {
                    "desktop": "img/scene_data/sb/B2_C.jpg"
                }
            },
            {
                "id": 4,
                "name": "Group D",
                "target": 3,
                "coordinates": [1227,433, 1238,357, 1248,280, 1196,257, 1201,224, 1126,193, 1051,162, 1016,180, 950,152, 1068,84, 1164,122, 1261,159, 1358,196, 1336,336, 1315,476, 1227,433, 1227,433],
                "img": {
                    "desktop": "img/scene_data/sb/B2_D.jpg"
                },
                "tooltip_text": "Not Available",
                "tooltip_coordinates": [1381, 205]
            },
            {
                "id": 5,
                "name": "North Block",
                "target": 2,
                "coordinates": [0,636, 66,602, 132,569, 188,621, 244,674, 287,789, 342,756, 416,822, 489,889, 515,984, 540,1080, 405,1080, 270,1081, 135,1083, 0,1084, 0,973, 0,860, 0,748, 0,636],
                "img": {
                    "desktop": "img/scene_data/sb/B2_B1.jpg"
                }
            }
        ],
        "highlight_regions": [],
        "tooltip_regions": [],
        "nearest_360": 950
    }',  
    // End of Data L1 L2
    // Data North Block Tower A
    "121" => '{
        "id": 121,
        "level": 2,
        "sublevel": 0,
        "parent": 2,
        "name": "Tower C",
        "data_string": "A",
        "img": {
            "desktop": "img/scene_data/nb-tc/B1_A_1.jpg"
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
                "tooltip_coordinates": [797, 813]
            },
            {
                "id": 2,
                "name": "Floor 2",
                "target": 123,
                "highlighted": false,
                "coordinates": [797,720, 774,721, 774,731, 647,734, 620,767, 485,769, 351,771, 216,773, 209,731, 116,731, 116,801, 211,798, 214,853, 349,851, 485,849, 621,847, 649,804, 774,796, 774,782, 797,781, 797,720],
                "color": "#ffe200",
                "tooltip_coordinates": [797, 748]
            },
            {
                "id": 3,
                "name": "Floor 3",
                "target": 123,
                "highlighted": false,
                "coordinates": [116,731, 209,731, 216,773, 351,771, 485,769, 620,767, 647,734, 774,731, 774,721, 797,720, 797,653, 772,653, 772,663, 648,664, 620,687, 485,688, 351,689, 216,690, 213,666, 116,666, 116,731],
                "color": "#ffe200",
                "tooltip_coordinates": [797, 684]
            },
            {
                "id": 4,
                "name": "Floor 4",
                "target": 123,
                "highlighted": false,
                "coordinates": [797,592, 775,593, 774,596, 648,596, 619,610, 484,610, 348,610, 213,610, 212,596, 116,599, 116,666, 213,666, 216,690, 351,689, 485,688, 620,687, 648,664, 772,663, 772,653, 797,653, 797,592],
                "color": "#ffe200",
                "tooltip_coordinates": [797, 620]
            },
            {
                "id": 5,
                "name": "Floor 5",
                "target": 123,
                "highlighted": false,
                "coordinates": [797,529, 661,530, 524,530, 388,531, 252,531, 116,532, 116,599, 212,596, 213,610, 348,610, 484,610, 619,610, 648,596, 774,596, 775,593, 797,592, 797,529],
                "color": "#ffe200",
                "tooltip_coordinates": [797, 561]
            },
            {
                "id": 6,
                "name": "Floor 6",
                "target": 123,
                "highlighted": false,
                "coordinates": [797,468, 775,468, 773,464, 644,466, 620,449, 485,448, 350,447, 215,446, 214,462, 116,462, 116,532, 252,531, 388,531, 524,530, 661,530, 797,529, 797,468],
                "color": "#ffe200",
                "tooltip_coordinates": [797, 498]
            },
            {
                "id": 7,
                "name": "Floor 7",
                "target": 123,
                "highlighted": false,
                "coordinates": [797,404, 774,404, 774,396, 646,396, 618,370, 484,369, 349,367, 215,366, 214,396, 116,396, 116,462, 214,462, 215,446, 350,447, 485,448, 620,449, 644,466, 773,464, 775,468, 797,468, 797,404],
                "color": "#ffe200",
                "tooltip_coordinates": [797, 438]
            },
            {
                "id": 8,
                "name": "Floor 8",
                "target": 123,
                "highlighted": false,
                "coordinates": [797,343, 773,343, 774,330, 647,330, 619,291, 484,289, 348,287, 213,286, 215,330, 116,330, 116,396, 214,396, 215,366, 349,367, 484,369, 618,370, 646,396, 774,396, 774,404, 797,404, 797,345, 797,343],
                "color": "#ffe200",
                "tooltip_coordinates": [797, 368]
            },
            {
                "id": 9,
                "name": "Floor 9",
                "target": 123,
                "highlighted": false,
                "coordinates": [797,282, 773,282, 772,263, 646,259, 620,212, 484,210, 348,208, 212,205, 212,263, 116,263, 116,330, 215,330, 213,286, 348,287, 484,289, 619,291, 647,330, 774,330, 773,343, 797,343, 797,282],
                "color": "#ff4141",
                "tooltip_coordinates": [797, 306]
            },
            {
                "id": 10,
                "name": "Floor 10",
                "target": 123,
                "highlighted": false,
                "coordinates": [116,197, 215,197, 215,124, 350,127, 485,130, 620,133, 653,200, 797,200, 797,282, 773,282, 772,263, 646,259, 620,212, 484,210, 348,208, 212,205, 212,263, 116,263, 116,197],
                "color": "#ffe200",
                "tooltip_coordinates": [797, 235]
            }
        ],
        "tooltip_regions": [],
        "nearest_360": 905
    }',
    // Tower A View 2
    "122" => '{
        "id": 122,
        "level": 2,
        "sublevel": 0,
        "parent": 2,
        "name": "Tower C View 2",
        "data_string": "A",
        "img": {
            "desktop": "img/scene_data/nb-tc/B1_A_2.jpg"
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
                "tooltip_coordinates": [901,786]
            },
            {
                "id": 2,
                "name": "Floor 2",
                "target": 123,
                "highlighted": false,
                "coordinates": [902,702, 825,739, 725,740, 624,741, 529,775, 419,772, 309,770, 198,767, 198,838, 309,842, 420,846, 531,850, 627,802, 726,803, 825,804, 902,756, 902,702],
                "color": "yellow",
                "tooltip_coordinates": [901,730]
            },
            {
                "id": 3,
                "name": "Floor 3",
                "target": 123,
                "highlighted": false,
                "coordinates": [902,647, 823,674, 723,674, 624,675, 528,702, 418,699, 308,696, 198,693, 198,767, 309,770, 419,772, 529,775, 624,741, 725,740, 825,739, 902,702, 902,647],
                "color": "yellow",
                "tooltip_coordinates": [901,672]
            },
            {
                "id": 4,
                "name": "Floor 4",
                "target": 123,
                "highlighted": false,
                "coordinates": [902,592, 825,607, 724,608, 623,608, 527,627, 417,625, 307,624, 197,622, 198,693, 308,696, 418,699, 528,702, 624,675, 723,674, 823,674, 902,647, 902,592],
                "color": "yellow",
                "tooltip_coordinates": [901,618]
            },
            {
                "id": 5,
                "name": "Floor 5",
                "target": 123,
                "highlighted": false,
                "coordinates": [902,533, 825,540, 724,542, 624,544, 530,550, 419,550, 307,550, 196,550, 197,622, 307,624, 417,625, 527,627, 623,608, 724,608, 825,607, 902,592, 902,533],
                "color": "yellow",
                "tooltip_coordinates": [901,562]
            },
            {
                "id": 6,
                "name": "Floor 6",
                "target": 123,
                "highlighted": false,
                "coordinates": [902,480, 826,476, 725,476, 624,476, 528,476, 417,476, 306,476, 196,476, 196,550, 307,550, 419,550, 530,550, 624,544, 724,542, 825,540, 902,533, 902,480],
                "color": "yellow",
                "tooltip_coordinates": [901,506]
            },
            {
                "id": 7,
                "name": "Floor 7",
                "target": 123,
                "highlighted": false,
                "coordinates": [902,424, 825,413, 725,413, 624,412, 528,400, 417,402, 306,403, 196,405, 196,476, 306,476, 417,476, 528,476, 624,476, 725,476, 826,476, 902,480, 902,424],
                "color": "yellow",
                "tooltip_coordinates": [901,450]
            },
            {
                "id": 8,
                "name": "Floor 8",
                "target": 123,
                "highlighted": false,
                "coordinates": [902,367, 824,347, 722,345, 620,344, 526,324, 416,327, 306,329, 196,331, 196,405, 306,403, 417,402, 528,400, 624,412, 725,413, 825,413, 902,424, 902,367],
                "color": "yellow",
                "tooltip_coordinates": [901,398]
            },
            {
                "id": 9,
                "name": "Floor 9",
                "target": 123,
                "highlighted": false,
                "coordinates": [902,313, 823,280, 722,279, 622,279, 527,248, 417,251, 306,254, 196,258, 196,331, 306,329, 416,327, 526,324, 620,344, 722,345, 824,347, 902,367, 902,313],
                "color": "red",
                "tooltip_coordinates": [901,338]
            },
            {
                "id": 10,
                "name": "Floor 10",
                "target": 123,
                "highlighted": false,
                "coordinates": [196,187, 306,183, 416,179, 526,174, 624,219, 724,218, 824,216, 902,258, 902,313, 823,280, 722,279, 622,279, 527,248, 417,251, 306,254, 196,258, 196,187],
                "color": "yellow",
                "tooltip_coordinates": [901,283]
            }
        ],
        "tooltip_regions": [],
        "nearest_360": 904
    }',
    // Tower A Floor View
    "123" => '{
        "id": 123,
        "level": 3,
        "sublevel": 0,
        "parent": 122,
        "name": "Tower C Floor Plan",
        "img": {
            "desktop": "img/scene_data/nb-tc/FP-B1-A.jpg"
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
                "tooltip_coordinates": [1308,511]
            },
            {
                "id": 2,
                "name": "Type 3",
                "target": 1007,
                "highlighted": false,
                "coordinates": [1099,550, 1067,574, 1037,545, 960,606, 1010,652, 956,697, 994,735, 953,769, 1028,846, 1130,754, 1155,777, 1216,721, 1193,698, 1224,670, 1161,610, 1099,550],
                "color": "yellow",
                "tooltip_coordinates": [1162,663]
            },
            {
                "id": 3,
                "name": "Type 2",
                "target": 1003,
                "highlighted": true,
                "coordinates": [605,737, 707,658, 809,578, 836,605, 873,578, 918,622, 889,646, 948,705, 850,788, 751,871, 653,954, 583,873, 637,830, 583,768, 612,745, 605,737],
                "color": "orange",
                "tooltip_coordinates": [853,693]
            },
            {
                "id": 4,
                "name": "Type 1",
                "target": 1004,
                "highlighted": true,
                "coordinates": [605,737, 594,727, 566,748, 514,690, 462,729, 398,656, 497,586, 595,516, 694,446, 746,498, 774,479, 816,521, 781,549, 809,578, 707,658, 605,737],
                "color": "red",
                "tooltip_coordinates": [700,580]
            },
            {
                "id": 5,
                "name": "Type 8",
                "target": 1006,
                "highlighted": false,
                "coordinates": [574,289, 651,238, 672,258, 737,215, 814,287, 890,359, 859,382, 890,408, 814,464, 770,421, 743,441, 691,389, 683,395, 629,342, 574,289],
                "color": "yellow",
                "tooltip_coordinates": [780,352]
            },
            {
                "id": 6,
                "name": "Type 7",
                "target": 1006,
                "highlighted": false,
                "coordinates": [737,215, 802,171, 781,153, 848,109, 955,203, 948,208, 1001,254, 975,272, 1019,312, 950,362, 922,336, 890,359, 814,287, 737,215],
                "color": "yellow",
                "tooltip_coordinates": [904,211]
            },
            {
                "id": 7,
                "name": "Type 6",
                "target": 1006,
                "highlighted": false,
                "coordinates": [1007,260, 1051,228, 1026,207, 1080,169, 1074,164, 1181,87, 1244,138, 1224,151, 1275,195, 1256,207, 1263,215, 1195,267, 1127,319, 1099,295, 1071,319, 1007,260],
                "color": "yellow",
                "tooltip_coordinates": [1249,174]
            },
            {
                "id": 8,
                "name": "Type 5",
                "target": 1006,
                "highlighted": false,
                "coordinates": [1127,319, 1158,346, 1127,369, 1197,429, 1241,393, 1267,415, 1318,372, 1325,377, 1430,288, 1364,235, 1344,248, 1291,206, 1272,221, 1263,215, 1195,267, 1127,319],
                "color": "yellow",
                "tooltip_coordinates": [1185,294]
            }        
        ],
        "tooltip_regions": []
    }',
    // North Block Tower B
    "111" => '{
        "id": 111,
        "level": 2,
        "sublevel": 0,
        "parent": 2,
        "name": "Tower B",
        "data_string": "B",
        "img": {
            "desktop": "img/scene_data/nb-tb/B1_B_1.jpg"
        },
        "align_left": true,
        "compass_degree": 180,
        "menu_id": 4,
        "alternate_view_points": [
            {
                "id": 1,
                "name": "Tower B View 2",
                "coordinates": [66, 555],
                "flip": true,
                "target": 112
            }
        ],
        "require_transition": false,
        "hover_regions": [],
        "render_floor_on_collapse": true,
        "highlight_regions": [
            {
                "id": 1,
                "name": "Floor 1",
                "target": 113,
                "highlighted": false,
                "coordinates": [860,758, 777,801, 660,795, 551,849, 433,846, 315,842, 196,839, 198,916, 317,920, 435,924, 554,928, 661,862, 772,872, 860,818, 860,758],
                "color": "#ffe200",
                "tooltip_coordinates": [861,786]
            },
            {
                "id": 2,
                "name": "Floor 2",
                "target": 113,
                "highlighted": false,
                "coordinates": [860,700, 776,736, 661,730, 552,774, 433,771, 315,768, 196,766, 196,839, 315,842, 433,846, 551,849, 660,795, 777,801, 860,758, 860,700],
                "color": "#ff4141",
                "tooltip_coordinates": [861,727]
            },
            {
                "id": 3,
                "name": "Floor 3",
                "target": 113,
                "highlighted": false,
                "coordinates": [860,646, 776,669, 660,666, 552,695, 433,694, 314,692, 195,691, 195,766, 314,768, 433,771, 552,774, 661,730, 776,736, 860,700, 860,646],
                "color": "#ffe200",
                "tooltip_coordinates": [861,673]
            },
            {
                "id": 4,
                "name": "Floor 4",
                "target": 113,
                "highlighted": false,
                "coordinates": [860,589, 776,602, 660,601, 552,618, 433,617, 313,616, 194,615, 195,691, 314,692, 433,694, 552,695, 660,666, 776,669, 860,646, 860,589],
                "color": "#ffe200",
                "tooltip_coordinates": [861,616]
            },
            {
                "id": 5,
                "name": "Floor 5",
                "target": 113,
                "highlighted": false,
                "coordinates": [860,535, 775,536, 658,535, 551,540, 432,540, 313,540, 194,540, 194,615, 313,616, 433,617, 552,618, 660,601, 776,602, 860,589, 860,535],
                "color": "#ffe200",
                "tooltip_coordinates": [861,562]
            },
            {
                "id": 6,
                "name": "Floor 6",
                "target": 113,
                "highlighted": false,
                "coordinates": [860,476, 773,472, 659,472, 551,462, 432,463, 313,463, 194,464, 194,540, 313,540, 432,540, 551,540, 658,535, 775,536, 860,535, 860,476],
                "color": "#ffe200",
                "tooltip_coordinates": [861,506]
            },
            {
                "id": 7,
                "name": "Floor 7",
                "target": 113,
                "highlighted": false,
                "coordinates": [860,421, 775,402, 660,407, 550,385, 431,386, 313,387, 194,388, 194,464, 313,463, 432,463, 551,462, 659,472, 773,472, 860,476, 860,421],
                "color": "#ffe200",
                "tooltip_coordinates": [861,449]
            },
            {
                "id": 8,
                "name": "Floor 8",
                "target": 113,
                "highlighted": false,
                "coordinates": [860,361, 773,334, 660,337, 549,305, 431,308, 313,310, 194,313, 194,388, 313,388, 431,387, 550,387, 660,407, 775,402, 860,421, 860,361],
                "color": "#ffe200",
                "tooltip_coordinates": [861,391]
            },
            {
                "id": 9,
                "name": "Floor 9",
                "target": 113,
                "highlighted": false,
                "coordinates": [860,304, 770,267, 661,274, 550,225, 431,228, 313,231, 194,234, 194,313, 313,310, 431,308, 549,305, 660,337, 773,334, 860,361, 860,304],
                "color": "#ffe200",
                "tooltip_coordinates": [861,332]
            },
            {
                "id": 10,
                "name": "Floor 10",
                "target": 113,
                "highlighted": false,
                "coordinates": [194,163, 312,159, 431,155, 549,151, 660,213, 769,204, 860,256, 860,304, 770,267, 661,274, 550,225, 431,228, 313,231, 194,234, 194,163],
                "color": "#ffe200",
                "tooltip_coordinates": [861,281]
            }
        ],
        "tooltip_regions": [],
        "nearest_360": 906
    }',
    // Tower B View 2
    "112" => '{
        "id": 112,
        "level": 2,
        "sublevel": 0,
        "parent": 2,
        "name": "Tower A View 2",
        "data_string": "B",
        "img": {
            "desktop": "img/scene_data/nb-tb/B1_B_2.jpg"
        },
        "align_left": true,
        "menu_id": 4,
        "compass_degree": -60,
        "alternate_view_points": [
            {
                "id": 1,
                "name": "Tower A View 1",
                "coordinates": [984, 553],
                "target": 111
            }
        ],
        "require_transition": false,
        "hover_regions": [],
        "render_floor_on_collapse": true,
        "highlight_regions": [
            {
                "id": 1,
                "name": "Floor 1",
                "target": 113,
                "highlighted": false,
                "coordinates": [846,816, 794,819, 794,857, 683,865, 572,874, 462,882, 434,845, 305,855, 271,838, 270,770, 302,786, 432,780, 462,806, 574,800, 686,793, 798,786, 799,757, 846,754, 846,817, 846,816],
                "color": "yellow",
                "tooltip_coordinates": [846,785]
            },
            {
                "id": 2,
                "name": "Floor 2",
                "target": 113,
                "highlighted": false,
                "coordinates": [846,695, 798,698, 797,720, 686,726, 575,731, 464,737, 432,713, 303,719, 268,710, 270,770, 302,786, 432,780, 462,806, 574,800, 686,793, 798,786, 799,757, 846,754, 846,695],
                "color": "yellow",
                "tooltip_coordinates": [846,726]
            },
            {
                "id": 3,
                "name": "Floor 3",
                "target": 113,
                "highlighted": false,
                "coordinates": [846,637, 798,640, 798,654, 687,658, 575,663, 464,668, 432,650, 302,654, 268,648, 268,710, 303,719, 432,713, 464,737, 575,731, 686,726, 797,720, 798,698, 846,695, 846,637],
                "color": "yellow",
                "tooltip_coordinates": [846,664]
            },
            {
                "id": 4,
                "name": "Floor 4",
                "target": 113,
                "highlighted": false,
                "coordinates": [846,578, 797,581, 798,588, 687,590, 576,592, 466,594, 432,587, 302,587, 268,584, 268,648, 302,654, 432,650, 464,668, 575,663, 687,658, 798,654, 798,640, 846,637, 846,578],
                "color": "yellow",
                "tooltip_coordinates": [846,608]
            },
            {
                "id": 5,
                "name": "Floor 5",
                "target": 113,
                "highlighted": false,
                "coordinates": [846,522, 731,522, 615,522, 500,522, 384,522, 268,522, 268,584, 302,587, 432,587, 466,594, 576,592, 687,590, 798,588, 797,581, 846,578, 846,522],
                "color": "yellow",
                "tooltip_coordinates": [846,549]
            },
            {
                "id": 6,
                "name": "Floor 6",
                "target": 113,
                "highlighted": false,
                "coordinates": [846,463, 797,463, 796,454, 683,452, 570,450, 456,448, 430,459, 301,454, 268,459, 268,522, 384,522, 500,522, 615,522, 731,522, 846,522, 846,463],
                "color": "yellow",
                "tooltip_coordinates": [846,492]
            },
            {
                "id": 7,
                "name": "Floor 7",
                "target": 113,
                "highlighted": false,
                "coordinates": [846,404, 797,404, 797,388, 683,384, 570,381, 456,378, 432,397, 302,390, 268,397, 268,459, 301,454, 430,459, 456,448, 570,450, 683,452, 796,454, 797,463, 846,463, 846,400, 846,404],
                "color": "yellow",
                "tooltip_coordinates": [846,434]
            },
            {
                "id": 8,
                "name": "Floor 8",
                "target": 113,
                "highlighted": false,
                "coordinates": [268,337, 268,397, 302,390, 432,397, 456,378, 570,381, 683,384, 797,388, 797,404, 846,404, 846,344, 798,343, 797,322, 684,318, 570,313, 456,308, 430,328, 301,323, 268,334, 268,337],
                "color": "yellow",
                "tooltip_coordinates": [846,375]
            },
            {
                "id": 9,
                "name": "Floor 9",
                "target": 113,
                "highlighted": false,
                "coordinates": [846,285, 793,281, 794,257, 681,249, 569,242, 456,234, 431,264, 301,260, 268,267, 268,334, 301,323, 430,328, 456,308, 570,313, 684,318, 797,322, 798,343, 846,344, 846,285],
                "color": "red",
                "tooltip_coordinates": [846,315]
            },
            {
                "id": 10,
                "name": "Floor 10",
                "target": 113,
                "highlighted": false,
                "coordinates": [268,212, 299,204, 299,195, 424,204, 448,164, 563,172, 679,180, 794,188, 794,227, 846,231, 846,285, 793,281, 794,257, 681,249, 569,242, 456,234, 431,264, 301,260, 268,267, 268,212],
                "color": "yellow",
                "tooltip_coordinates": [846,257]
            }
        ],
        "tooltip_regions": [],
        "nearest_360": 906
    }',
    // Tower B Floor View
    "113" => '{
        "id": 113,
        "level": 3,
        "sublevel": 0,
        "parent": 112,
        "name": "Tower B Floor Plan",
        "img": {
            "desktop": "img/scene_data/nb-tb/FP-B1-B.jpg"
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
                "coordinates": [1098,474, 1164,415, 1212,454, 1256,412, 1294,443, 1324,412, 1401,471, 1318,554, 1344,574, 1291,628, 1265,608, 1236,636, 1169,580, 1103,524, 1127,500, 1098,474],
                "color": "yellow",
                "tooltip_coordinates": [1308,511]
            },
            {
                "id": 2,
                "name": "Type 3",
                "target": 1007,
                "highlighted": false,
                "coordinates": [1103,524, 1074,551, 1042,524, 971,589, 1020,631, 971,680, 1010,716, 971,752, 1050,824, 1147,727, 1173,749, 1231,690, 1205,668, 1236,636, 1169,580, 1103,524],
                "color": "yellow",
                "tooltip_coordinates": [1162,663]
            },
            {
                "id": 3,
                "name": "Type 2",
                "target": 1003,
                "highlighted": true,
                "coordinates": [620,737, 718,652, 816,568, 844,595, 880,568, 926,606, 900,632, 960,688, 867,776, 773,865, 680,953, 608,875, 658,831, 602,771, 628,748, 620,737],
                "color": "orange",
                "tooltip_coordinates": [853,693]
            },
            {
                "id": 4,
                "name": "Type 1",
                "target": 1004,
                "highlighted": true,
                "coordinates": [620,737, 610,729, 583,753, 526,695, 478,737, 411,670, 505,594, 600,519, 694,443, 750,494, 776,472, 822,512, 786,540, 816,568, 718,652, 620,737],
                "color": "red",
                "tooltip_coordinates": [700,580]
            },
            {
                "id": 5,
                "name": "Type 8",
                "target": 1007,
                "highlighted": false,
                "coordinates": [567,379, 665,303, 645,287, 705,242, 726,259, 757,235, 813,282, 868,329, 840,354, 868,379, 798,436, 754,398, 702,436, 669,408, 631,436, 567,379],
                "color": "yellow",
                "tooltip_coordinates": [780,352]
            },
            {
                "id": 6,
                "name": "Type 7",
                "target": 1007,
                "highlighted": false,
                "coordinates": [757,235, 788,212, 768,195, 823,154, 843,171, 928,106, 991,153, 960,178, 991,205, 948,241, 991,276, 926,331, 896,307, 868,329, 813,282, 757,235],
                "color": "yellow",
                "tooltip_coordinates": [904,211]
            },
            {
                "id": 7,
                "name": "Type 6",
                "target": 1005,
                "highlighted": false,
                "coordinates": [1002,246, 1044,211, 1019,190, 1070,152, 1063,146, 1167,63, 1232,110, 1212,126, 1268,166, 1248,180, 1256,186, 1191,242, 1127,298, 1098,276, 1069,298, 1002,246],
                "color": "yellow",
                "tooltip_coordinates": [1149,174]
            },
            {
                "id": 8,
                "name": "Type 5",
                "target": 1005,
                "highlighted": false,
                "coordinates": [1127,298, 1158,324, 1130,346, 1203,404, 1244,368, 1272,387, 1319,340, 1327,344, 1428,251, 1356,199, 1340,216, 1283,176, 1265,193, 1256,186, 1191,242, 1127,298],
                "color": "yellow",
                "tooltip_coordinates": [1185,294]
            }
        ],
        "tooltip_regions": []
    }',
    // North Block Tower C
    "101" => '{
        "id": 101,
        "level": 2,
        "sublevel": 0,
        "parent": 2,
        "name": "Tower A",
        "data_string": "C",
        "img": {
            "desktop": "img/scene_data/nb-ta/B1_C_E1.jpg"
        },
        "align_left": true,
        "compass_degree": -150,
        "menu_id": 4,
        "alternate_view_points": [
            {
                "id": 1,
                "name": "Tower A View 2",
                "coordinates": [1309, 610],
                "target": 102
            }
        ],
        "require_transition": false,
        "hover_regions": [],
        "render_floor_on_collapse": true,
        "highlight_regions": [
            {
                "id": 1,
                "name": "Floor 1",
                "target": 103,
                "highlighted": false,
                "coordinates": [1042,808, 921,841, 799,874, 680,849, 561,823, 471,846, 382,868, 254,835, 127,803, 128,875, 256,914, 384,954, 472,927, 560,900, 680,930, 800,960, 921,921, 1042,881, 1042,808],
                "color": "#ffe200",
                "tooltip_coordinates": [1050,855]
            },
            {
                "id": 2,
                "name": "Floor 2",
                "target": 103,
                "highlighted": false,
                "coordinates": [1042,739, 921,765, 800,791, 679,771, 558,752, 469,769, 381,786, 267,765, 196,750, 125,734, 127,803, 254,835, 382,868, 471,846, 561,823, 680,849, 799,874, 921,841, 1042,808, 1042,739],
                "color": "#ffe200",
                "tooltip_coordinates": [1050,778]
            },
            {
                "id": 3,
                "name": "Floor 3",
                "target": 103,
                "highlighted": false,
                "coordinates": [1042,666, 921,686, 799,707, 678,694, 558,681, 468,692, 379,703, 266,689, 194,676, 123,663, 125,734, 196,750, 267,765, 381,786, 469,769, 558,752, 679,771, 800,791, 921,765, 1042,739, 1042,666],
                "color": "#ffe200",
                "tooltip_coordinates": [1050,702]
            },
            {
                "id": 4,
                "name": "Floor 4",
                "target": 103,
                "highlighted": false,
                "coordinates": [1042,596, 985,603, 892,614, 798,624, 678,615, 557,605, 467,612, 378,619, 264,610, 192,602, 121,593, 123,663, 194,676, 266,689, 379,703, 468,692, 558,681, 678,694, 799,707, 921,686, 1042,666, 1042,596],
                "color": "#ffe200",
                "tooltip_coordinates": [1050,630]
            },
            {
                "id": 5,
                "name": "Floor 5",
                "target": 103,
                "highlighted": false,
                "coordinates": [1042,526, 984,529, 891,533, 797,538, 677,533, 556,529, 466,533, 376,537, 263,532, 191,528, 118,524, 121,593, 192,602, 264,610, 378,619, 467,612, 557,605, 678,615, 798,624, 892,614, 985,603, 1042,596, 1042,526],
                "color": "#ffe200",
                "tooltip_coordinates": [1050,561]
            },
            {
                "id": 6,
                "name": "Floor 6",
                "target": 103,
                "highlighted": false,
                "coordinates": [984,529, 1042,526, 1042,455, 910,455, 777,455, 645,455, 513,455, 381,455, 248,455, 116,455, 118,524, 191,528, 263,532, 376,537, 466,533, 556,529, 677,533, 797,538, 891,533, 984,529],
                "color": "#ffe200",
                "tooltip_coordinates": [1050,490]
            },
            {
                "id": 7,
                "name": "Floor 7",
                "target": 103,
                "highlighted": false,
                "coordinates": [1042,384, 920,376, 798,369, 677,374, 555,379, 464,375, 373,371, 243,377, 114,384, 116,455, 248,455, 381,455, 513,455, 645,455, 777,455, 910,455, 1042,455, 1042,384],
                "color": "#ffe200",
                "tooltip_coordinates": [1050,417]
            },
            {
                "id": 8,
                "name": "Floor 8",
                "target": 103,
                "highlighted": false,
                "coordinates": [1042,312, 919,298, 797,284, 675,295, 554,306, 463,296, 372,287, 243,301, 113,316, 114,384, 243,377, 373,371, 464,375, 555,379, 677,374, 798,369, 920,376, 1042,384, 1042,312],
                "color": "#ffe200",
                "tooltip_coordinates": [1050,346]
            },
            {
                "id": 9,
                "name": "Floor 9",
                "target": 103,
                "highlighted": false,
                "coordinates": [1042,240, 919,220, 796,201, 677,216, 557,231, 463,217, 370,204, 241,224, 112,245, 113,316, 243,301, 372,287, 463,296, 554,306, 675,295, 797,284, 919,298, 1042,312, 1042,240],
                "color": "#ff4141",
                "tooltip_coordinates": [1050,275]
            },
            {
                "id": 10,
                "name": "Floor 10",
                "target": 103,
                "highlighted": false,
                "coordinates": [111,170, 240,144, 369,118, 461,136, 553,154, 675,136, 796,118, 919,143, 1042,169, 1042,240, 919,220, 796,201, 677,216, 557,231, 463,217, 370,204, 241,224, 112,245, 111,170],
                "color": "#ffe200",
                "tooltip_coordinates": [1050,205]
            }
        ],
        "tooltip_regions": [],
        "nearest_360": 908
    }',
    // Tower C View 2
    "102" => '{
        "id": 102,
        "level": 2,
        "sublevel": 0,
        "parent": 2,
        "name": "Tower A View 2",
        "data_string": "C",
        "img": {
            "desktop": "img/scene_data/nb-ta/B1_C_E2.jpg"
        },
        "menu_id": 4,
        "align_left": true,
        "compass_degree": -60,
        "alternate_view_points": [
            {
                "id": 1,
                "name": "Tower A View 1",
                "coordinates": [61, 637],
                "flip": true,
                "target": 101
            }
        ],
        "require_transition": false,
        "hover_regions": [],
        "render_floor_on_collapse": true,
        "highlight_regions": [
            {
                "id": 1,
                "name": "Floor 1",
                "target": 103,
                "highlighted": false,
                "coordinates": [1074,796, 983,817, 892,839, 774,829, 655,819, 529,844, 403,869, 288,851, 173,833, 173,908, 289,929, 404,951, 530,921, 655,891, 776,906, 896,922, 985,893, 1074,864, 1074,796],
                "color": "yellow",
                "tooltip_coordinates": [1081,832]
            },
            {
                "id": 2,
                "name": "Floor 2",
                "target": 103,
                "highlighted": false,
                "coordinates": [1074,736, 983,751, 892,767, 774,758, 655,749, 529,769, 402,789, 288,776, 173,763, 173,833, 288,851, 403,869, 529,844, 655,819, 774,829, 892,839, 983,817, 1074,796, 1074,736],
                "color": "yellow",
                "tooltip_coordinates": [1083,766]
            },
            {
                "id": 3,
                "name": "Floor 3",
                "target": 103,
                "highlighted": false,
                "coordinates": [1074,673, 984,684, 894,695, 775,688, 655,682, 529,695, 403,709, 288,701, 173,693, 173,763, 288,776, 402,789, 529,769, 655,749, 774,758, 892,767, 983,751, 1074,736, 1074,673],
                "color": "yellow",
                "tooltip_coordinates": [1086,700]
            },
            {
                "id": 4,
                "name": "Floor 4",
                "target": 103,
                "highlighted": false,
                "coordinates": [1074,610, 985,615, 896,621, 776,618, 655,615, 529,622, 402,629, 288,624, 173,620, 173,693, 288,701, 403,709, 529,695, 655,682, 775,688, 894,695, 984,684, 1074,673, 1074,610],
                "color": "yellow",
                "tooltip_coordinates": [1086,640]
            },
            {
                "id": 5,
                "name": "Floor 5",
                "target": 103,
                "highlighted": false,
                "coordinates": [1074,549, 986,549, 897,549, 776,549, 655,549, 529,549, 403,549, 288,549, 173,549, 173,620, 288,624, 402,629, 529,622, 655,615, 776,618, 896,621, 985,615, 1074,610, 1074,549],
                "color": "yellow",
                "tooltip_coordinates": [1087,577]
            },
            {
                "id": 6,
                "name": "Floor 6",
                "target": 103,
                "highlighted": false,
                "coordinates": [1074,485, 985,481, 895,477, 776,478, 656,480, 529,474, 402,469, 288,473, 173,478, 173,549, 288,549, 403,549, 529,549, 655,549, 776,549, 897,549, 986,549, 1074,549, 1074,485],
                "color": "yellow",
                "tooltip_coordinates": [1086,516]
            },
            {
                "id": 7,
                "name": "Floor 7",
                "target": 103,
                "highlighted": false,
                "coordinates": [1074,423, 985,413, 896,403, 776,408, 655,414, 529,401, 403,389, 288,397, 173,406, 173,478, 288,473, 402,469, 529,474, 656,480, 776,478, 895,477, 985,481, 1074,485, 1074,423],
                "color": "yellow",
                "tooltip_coordinates": [1087,453]
            },
            {
                "id": 8,
                "name": "Floor 8",
                "target": 103,
                "highlighted": false,
                "coordinates": [1074,361, 985,345, 896,329, 776,336, 655,343, 529,325, 403,308, 288,322, 173,336, 173,406, 288,397, 403,389, 529,401, 655,414, 776,408, 896,403, 985,413, 1074,423, 1074,361],
                "color": "yellow",
                "tooltip_coordinates": [1086,388]
            },
            {
                "id": 9,
                "name": "Floor 9",
                "target": 103,
                "highlighted": false,
                "coordinates": [1074,297, 985,275, 895,254, 776,266, 657,278, 530,254, 403,230, 288,247, 173,265, 173,336, 288,322, 403,308, 529,325, 655,343, 776,336, 896,329, 985,345, 1074,361, 1074,297],
                "color": "red",
                "tooltip_coordinates": [1080,328]
            },
            {
                "id": 10,
                "name": "Floor 10",
                "target": 103,
                "highlighted": false,
                "coordinates": [173,265, 288,247, 403,230, 530,254, 657,278, 776,266, 895,254, 985,275, 1074,297, 1074,240, 985,213, 896,187, 777,203, 657,219, 530,186, 403,154, 288,176, 173,198, 173,265],
                "color": "yellow",
                "tooltip_coordinates": [1080,268]
            }
        ],
        "tooltip_regions": [],
        "nearest_360": 900
    }',
    // Tower C Floor View
    "103" => '{
        "id": 103,
        "level": 3,
        "sublevel": 0,
        "parent": 102,
        "name": "Tower A Floor Plan",
        "img": {
            "desktop": "img/scene_data/nb-ta/FP_B1_A.jpg"
        },
        "align_left": false,
        "menu_id": 4,
        "compass_degree": -150, 
        "require_transition": false,
        "hover_regions": [],
        "highlight_regions": [
            {
                "id": 1,
                "name": "Type 8",
                "target": 1002,
                "highlighted": false,
                "coordinates": [469,418, 401,363, 503,286, 480,269, 540,224, 562,240, 592,215, 650,258, 707,302, 676,326, 707,348, 637,406, 592,370, 541,412, 508,383, 469,418],
                "color": "yellow",
                "tooltip_coordinates": [618,328]
            },
            {
                "id": 2,
                "name": "Type 1",
                "target": 1001,
                "highlighted": true,
                "coordinates": [677,150, 760,87, 822,131, 793,156, 827,179, 784,215, 827,246, 764,300, 734,278, 707,302, 650,258, 592,215, 623,194, 601,178, 656,137, 677,150],
                "color": "red",
                "tooltip_coordinates": [738,168]
            },
            {
                "id": 3,
                "name": "Type 2",
                "target": 1001,
                "highlighted": true,
                "coordinates": [836,238, 937,152, 1038,66, 1106,109, 1075,135, 1131,174, 1113,188, 1122,194, 1051,261, 980,327, 949,306, 920,331, 870,298, 896,277, 836,238],
                "color": "orange",
                "tooltip_coordinates": [1003,201]
            },
            {
                "id": 4,
                "name": "Type 3",
                "target": 1001,
                "highlighted": false,
                "coordinates": [1122,194, 1131,199, 1147,182, 1206,220, 1237,191, 1314,238, 1216,338, 1118,437, 1054,389, 1030,412, 980,377, 1010,348, 980,327, 1051,261, 1122,194],
                "color": "yellow",
                "tooltip_coordinates": [1150,318]
            },
            {
                "id": 5,
                "name": "Type 4",
                "target": 1001,
                "highlighted": false,
                "coordinates": [1061,570, 1088,540, 1050,513, 1092,469, 1122,490, 1170,437, 1273,509, 1376,580, 1478,651, 1420,727, 1365,685, 1319,743, 1288,723, 1281,733, 1171,651, 1061,570],
                "color": "yellow",
                "tooltip_coordinates": [1275,616]
            },
            {
                "id": 6,
                "name": "Type 5",
                "target": 1007,
                "highlighted": false,
                "coordinates": [1061,570, 1036,597, 996,565, 950,614, 980,637, 922,699, 1029,785, 1136,872, 1243,959, 1310,872, 1255,825, 1306,765, 1274,740, 1281,733, 1171,651, 1061,570],
                "color": "yellow",
                "tooltip_coordinates": [1129,768]
            },
            {
                "id": 7,
                "name": "Type 6",
                "target": 1007,
                "highlighted": false,
                "coordinates": [592,686, 648,736, 605,779, 679,845, 690,834, 765,903, 848,820, 834,807, 898,741, 868,714, 915,669, 847,614, 778,559, 740,595, 715,573, 654,629, 592,686],
                "color": "yellow",
                "tooltip_coordinates": [771,753]
            },
            {
                "id": 8,
                "name": "Type 7",
                "target": 1002,
                "highlighted": false,
                "coordinates": [377,550, 458,484, 467,494, 534,436, 556,458, 604,418, 666,468, 728,519, 689,552, 715,573, 654,629, 592,686, 537,639, 495,676, 430,618, 440,607, 377,550],
                "color": "yellow",
                "tooltip_coordinates": [535,565]
            }
        ],
        "tooltip_regions": []
    }',
    // South Block Tower A
    "201" => '{
        "id": 201,
        "level": 2,
        "sublevel": 0,
        "parent": 3,
        "name": "Tower D",
        "data_string": "A",
        "img": {
            "desktop": "img/scene_data/sb-ta/B2_A_1.jpg"
        },
        "align_left": true,
        "compass_degree": 180,
        "menu_id": 5,
        "alternate_view_points": [
            {
                "id": 1,
                "name": "Tower C View 2",
                "coordinates": [1221, 649],
                "target": 202
            }
        ],
        "require_transition": false,
        "hover_regions": [],
        "render_floor_on_collapse": true,
        "highlight_regions": [
            {
                "id": 1,
                "name": "Floor 10",
                "target": 203,
                "highlighted": false,
                "coordinates": [1102,821, 1005,823, 908,824, 811,826, 799,861, 676,862, 553,863, 430,863, 307,864, 305,838, 199,838, 199,909, 307,909, 308,943, 431,943, 554,943, 677,943, 800,943, 810,895, 908,893, 1005,891, 1102,890, 1102,821],
                "color": "#ffe200",
                "tooltip_coordinates": [1105,854]
            },
            {
                "id": 2,
                "name": "Floor 9",
                "target": 203,
                "highlighted": false,
                "coordinates": [1102,754, 1005,755, 908,755, 811,756, 798,786, 675,786, 552,786, 428,786, 305,786, 304,768, 198,768, 199,838, 305,838, 307,864, 430,863, 553,863, 676,862, 799,861, 811,826, 908,824, 1005,823, 1102,821, 1102,754],
                "color": "#ff4141",
                "tooltip_coordinates": [1105,783]
            },
            {
                "id": 3,
                "name": "Floor 8",
                "target": 203,
                "highlighted": false,
                "coordinates": [1102,685, 1005,686, 909,687, 812,688, 799,712, 676,712, 552,712, 429,712, 305,712, 303,696, 196,696, 198,768, 304,768, 305,786, 428,786, 552,786, 675,786, 798,786, 811,756, 908,755, 1005,755, 1102,754, 1102,685],
                "color": "#ffe200",
                "tooltip_coordinates": [1105,719]
            },
            {
                "id": 4,
                "name": "Floor 7",
                "target": 203,
                "highlighted": false,
                "coordinates": [1102,618, 1005,618, 908,618, 810,618, 797,634, 674,634, 551,634, 427,634, 304,634, 302,624, 194,624, 196,696, 303,696, 305,712, 429,712, 552,712, 676,712, 799,712, 812,688, 909,687, 1005,686, 1102,685, 1102,618],
                "color": "#ffe200",
                "tooltip_coordinates": [1105,651]
            },
            {
                "id": 5,
                "name": "Floor 6",
                "target": 203,
                "highlighted": false,
                "coordinates": [1102,550, 1004,550, 907,551, 809,551, 797,559, 674,559, 551,559, 427,559, 304,559, 301,552, 193,552, 194,624, 302,624, 304,634, 427,634, 551,634, 674,634, 797,634, 810,618, 908,618, 1005,618, 1102,618, 1102,550],
                "color": "#ffe200",
                "tooltip_coordinates": [1105,585]
            },
            {
                "id": 6,
                "name": "Floor 5",
                "target": 203,
                "highlighted": false,
                "coordinates": [1103,482, 973,482, 843,482, 713,482, 583,482, 452,482, 322,482, 192,482, 193,552, 301,552, 304,559, 427,559, 551,559, 674,559, 797,559, 809,551, 907,551, 1004,550, 1102,550, 1103,482],
                "color": "#ffe200",
                "tooltip_coordinates": [1105,517]
            },
            {
                "id": 7,
                "name": "Floor 4",
                "target": 203,
                "highlighted": false,
                "coordinates": [1103,410, 1005,410, 908,410, 810,410, 796,403, 673,402, 549,402, 426,401, 302,401, 299,410, 191,410, 192,482, 322,482, 452,482, 583,482, 713,482, 843,482, 973,482, 1103,482, 1103,410],
                "color": "#ffe200",
                "tooltip_coordinates": [1105,448]
            },
            {
                "id": 8,
                "name": "Floor 3",
                "target": 203,
                "highlighted": false,
                "coordinates": [1102,342, 1003,342, 904,342, 805,342, 795,327, 672,327, 548,327, 425,328, 301,328, 301,337, 190,337, 191,410, 301,410, 301,401, 425,401, 548,402, 672,402, 795,403, 809,410, 907,410, 1004,410, 1102,410, 1102,342],
                "color": "#ffe200",
                "tooltip_coordinates": [1105,375]
            },
            {
                "id": 9,
                "name": "Floor 2",
                "target": 203,
                "highlighted": false,
                "coordinates": [1102,342, 1003,342, 904,342, 805,342, 795,327, 672,327, 548,327, 425,328, 301,328, 301,337, 190,337, 190,263, 301,264, 301,247, 425,246, 549,246, 673,245, 797,245, 807,272, 905,272, 1004,273, 1102,273, 1102,342],
                "color": "#ffe200",
                "tooltip_coordinates": [1105,309]
            },
            {
                "id": 10,
                "name": "Floor 1",
                "target": 203,
                "highlighted": false,
                "coordinates": [190,197, 300,198, 300,176, 424,176, 549,176, 673,176, 797,176, 804,207, 903,207, 1003,208, 1102,208, 1102,273, 1004,273, 905,272, 807,272, 797,245, 673,245, 549,246, 425,246, 301,247, 301,264, 190,263, 190,197],
                "color": "#ffe200",
                "tooltip_coordinates": [1105,243]
            }
        ],
        "tooltip_regions": [],
        "nearest_360": 962
    }',
    // South Block Tower A View 2
    "202" => '{
        "id": 202,
        "level": 2,
        "sublevel": 0,
        "parent": 3,
        "name": "Tower D View 2",
        "data_string": "A",
        "img": {
            "desktop": "img/scene_data/sb-ta/B2_A_2.jpg"
        },
        "align_left": true,
        "menu_id": 5,
        "compass_degree": -80,
        "alternate_view_points": [
            {
                "id": 1,
                "name": "Tower A View 1",
                "coordinates": [58, 585],
                "flip": true,
                "target": 201
            }
        ],
        "require_transition": false,
        "hover_regions": [],
        "render_floor_on_collapse": true,
        "highlight_regions": [
            {
                "id": 1,
                "name": "Floor 10",
                "target": 203,
                "highlighted": false,
                "coordinates": [991,789, 922,818, 853,846, 775,840, 696,834, 610,865, 523,896, 416,888, 310,880, 203,872, 203,952, 310,961, 417,971, 524,980, 610,943, 696,906, 774,913, 853,919, 922,882, 991,846, 991,789],
                "color": "yellow",
                "tooltip_coordinates": [994,818]
            },
            {
                "id": 2,
                "name": "Floor 9",
                "target": 203,
                "highlighted": false,
                "coordinates": [991,727, 921,751, 852,775, 773,770, 695,766, 609,789, 524,812, 417,806, 310,800, 203,794, 203,872, 310,880, 416,888, 523,896, 610,865, 696,834, 775,840, 853,846, 922,818, 991,789, 991,727],
                "color": "red",
                "tooltip_coordinates": [994,759]
            },
            {
                "id": 3,
                "name": "Floor 8",
                "target": 203,
                "highlighted": false,
                "coordinates": [991,670, 852,702, 774,698, 696,695, 609,711, 523,728, 416,724, 310,720, 203,716, 203,794, 310,800, 417,806, 524,812, 609,789, 695,766, 773,770, 852,775, 921,751, 991,727, 991,670],
                "color": "yellow",
                "tooltip_coordinates": [994,698]
            },
            {
                "id": 4,
                "name": "Floor 7",
                "target": 203,
                "highlighted": false,
                "coordinates": [991,612, 850,630, 773,628, 696,626, 610,635, 524,645, 417,643, 310,640, 203,638, 203,716, 310,720, 416,724, 523,728, 609,711, 696,695, 774,698, 852,702, 991,670, 991,612],
                "color": "yellow",
                "tooltip_coordinates": [994,641]
            },
            {
                "id": 5,
                "name": "Floor 6",
                "target": 203,
                "highlighted": false,
                "coordinates": [991,555, 874,556, 758,557, 641,559, 524,560, 417,560, 310,560, 203,560, 203,638, 310,640, 417,643, 524,645, 610,635, 696,626, 773,628, 850,630, 991,612, 991,555],
                "color": "yellow",
                "tooltip_coordinates": [994,583]
            },
            {
                "id": 6,
                "name": "Floor 5",
                "target": 203,
                "highlighted": false,
                "coordinates": [991,495, 852,488, 774,488, 695,488, 609,483, 524,478, 417,479, 310,480, 203,482, 203,560, 310,560, 417,560, 524,560, 641,559, 758,557, 874,556, 991,555, 991,495],
                "color": "yellow",
                "tooltip_coordinates": [994,528]
            },
            {
                "id": 7,
                "name": "Floor 4",
                "target": 203,
                "highlighted": false,
                "coordinates": [991,438, 852,414, 773,416, 695,418, 610,406, 524,394, 417,397, 310,401, 203,404, 203,482, 310,480, 417,479, 524,478, 609,483, 695,488, 774,488, 852,488, 991,495, 991,438],
                "color": "yellow",
                "tooltip_coordinates": [994,446]
            },
            {
                "id": 8,
                "name": "Floor 3",
                "target": 203,
                "highlighted": false,
                "coordinates": [991,380, 852,342, 774,346, 696,349, 610,330, 525,310, 418,315, 310,321, 203,326, 203,404, 310,401, 417,397, 524,394, 610,406, 695,418, 773,416, 852,414, 991,438, 991,380],
                "color": "yellow",
                "tooltip_coordinates": [994,410]
            },
            {
                "id": 9,
                "name": "Floor 2",
                "target": 203,
                "highlighted": false,
                "coordinates": [991,317, 922,293, 854,270, 775,273, 697,276, 611,252, 524,227, 417,234, 310,241, 203,248, 203,326, 310,321, 418,315, 525,310, 610,330, 696,349, 774,346, 852,342, 991,380, 991,317],
                "color": "yellow",
                "tooltip_coordinates": [994,351]
            },
            {
                "id": 10,
                "name": "Floor 1",
                "target": 203,
                "highlighted": false,
                "coordinates": [203,174, 281,169, 330,183, 435,176, 435,155, 524,148, 611,181, 698,214, 775,209, 852,204, 922,236, 991,268, 991,317, 922,293, 854,270, 775,273, 697,276, 611,252, 524,227, 417,234, 310,241, 203,248, 203,174],
                "color": "yellow",
                "tooltip_coordinates": [994,291]
            }
        ],
        "tooltip_regions": [],
        "nearest_360": 951
    }',
    // South Block Tower A Floor View 
    "203" => '{
        "id": 203,
        "level": 3,
        "sublevel": 0,
        "parent": 202,
        "name": "Tower C Floor Plan",
        "img": {
            "desktop": "img/scene_data/sb-ta/FP-B2-A.jpg"
        },
        "align_left": false,
        "menu_id": 5,
        "compass_degree": -150,
        "require_transition": false,
        "hover_regions": [],
        "highlight_regions": [
            {
                "id": 1,
                "name": "Type 6",
                "target": 1002,
                "highlighted": false,
                "coordinates": [789,227, 829,195, 821,189, 872,147, 855,136, 912,89, 968,129, 979,118, 1037,158, 986,204, 1043,244, 965,315, 938,295, 910,319, 849,273, 789,227],
                "color": "yellow",
                "tooltip_coordinates": [976,241]
            },
            {
                "id": 2,
                "name": "Type 5",
                "target": 1002,
                "highlighted": false,
                "coordinates": [1043,244, 1102,286, 1152,240, 1215,283, 1203,295, 1267,338, 1212,395, 1193,380, 1144,429, 1136,424, 1098,461, 1031,412, 965,362, 992,336, 965,315, 1043,244],
                "color": "yellow",
                "tooltip_coordinates": [1173,337]
            },
            {
                "id": 3,
                "name": "Type 4",
                "target": 1001,
                "highlighted": false,
                "coordinates": [1033,587, 1060,559, 1023,531, 1069,486, 1103,512, 1157,458, 1224,507, 1213,518, 1280,569, 1286,561, 1356,615, 1426,668, 1369,736, 1287,675, 1227,741, 1130,664, 1033,587],
                "color": "yellow",
                "tooltip_coordinates": [1282,616]
            },
            {
                "id": 4,
                "name": "Type 3",
                "target": 1001,
                "highlighted": false,
                "coordinates": [1033,587, 1005,616, 968,587, 919,633, 953,662, 893,724, 960,782, 973,770, 1043,829, 1035,836, 1108,897, 1181,958, 1247,882, 1165,813, 1227,741, 1130,664, 1033,587],
                "color": "yellow",
                "tooltip_coordinates": [1153,756]
            },
            {
                "id": 5,
                "name": "Type 2",
                "target": 1002,
                "highlighted": true,
                "coordinates": [699,555, 602,643, 662,697, 594,762, 660,822, 675,807, 740,869, 816,795, 795,776, 856,716, 847,708, 893,666, 825,609, 758,551, 727,580, 699,555],
                "color": "orange",
                "tooltip_coordinates": [813,682]
            },
            {
                "id": 6,
                "name": "Type 1",
                "target": 1002,
                "highlighted": true,
                "coordinates": [602,643, 543,592, 475,651, 414,594, 430,581, 376,531, 450,469, 465,485, 527,434, 534,440, 579,402, 641,453, 702,505, 670,533, 699,555, 602,643],
                "color": "red",
                "tooltip_coordinates": [634,513]
            },
            {
                "id": 7,
                "name": "Type 8",
                "target": 1007,
                "highlighted": false,
                "coordinates": [373,350, 438,300, 433,296, 463,275, 441,258, 503,210, 524,226, 552,204, 650,282, 619,307, 660,339, 593,393, 552,361, 530,379, 491,348, 428,398, 373,350],
                "color": "yellow",
                "tooltip_coordinates": [594,292]
            },        
            {
                "id": 8,
                "name": "Type 7",
                "target": 1007,
                "highlighted": false,
                "coordinates": [552,204, 580,182, 561,167, 618,122, 638,138, 665,118, 669,121, 724,79, 778,118, 724,161, 764,190, 742,208, 781,237, 719,289, 679,258, 650,282, 552,204],
                "color": "yellow",
                "tooltip_coordinates": [711,130]
            }
        ],
        "tooltip_regions": []
    }',
    // South Block Tower B
    "211" => '{
        "id": 211,
        "level": 2,
        "sublevel": 0,
        "parent": 3,
        "name": "Tower E",
        "data_string": "B",
        "img": {
            "desktop": "img/scene_data/sb-tb/B2_B_1.jpg"
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
                "tooltip_coordinates": [1026,822]
            },
            {
                "id": 2,
                "name": "Floor 2",
                "target": 213,
                "highlighted": false,
                "coordinates": [1022,729, 993,744, 900,745, 807,745, 786,771, 662,771, 538,771, 414,771, 408,741, 266,741, 123,741, 123,810, 267,810, 411,810, 417,847, 541,847, 664,847, 788,847, 809,820, 902,817, 995,813, 1022,795, 1022,729],
                "color": "#ffe200",
                "tooltip_coordinates": [1026,791]
            },
            {
                "id": 3,
                "name": "Floor 3",
                "target": 213,
                "highlighted": false,
                "coordinates": [1022,659, 995,671, 902,671, 808,671, 787,691, 663,691, 538,691, 414,691, 411,670, 267,670, 123,670, 123,741, 266,741, 408,741, 414,771, 538,771, 662,771, 786,771, 807,745, 900,745, 993,744, 1022,729, 1022,659],
                "color": "#ffe200",
                "tooltip_coordinates": [1026,688]
            },
            {
                "id": 4,
                "name": "Floor 4",
                "target": 213,
                "highlighted": false,
                "coordinates": [1022,591, 994,599, 902,599, 809,599, 785,611, 661,611, 538,611, 414,611, 409,599, 266,599, 123,599, 123,670, 267,670, 411,670, 414,691, 538,691, 663,691, 787,691, 808,671, 902,671, 995,671, 1022,659, 1022,591],
                "color": "#ffe200",
                "tooltip_coordinates": [1026,624]
            },
            {
                "id": 5,
                "name": "Floor 5",
                "target": 213,
                "highlighted": false,
                "coordinates": [1022,525, 993,526, 902,526, 810,526, 784,533, 660,533, 537,533, 413,533, 409,527, 266,527, 123,526, 123,599, 266,599, 409,599, 414,611, 538,611, 661,611, 785,611, 809,599, 902,599, 994,599, 1022,591, 1022,525],
                "color": "#ffe200",
                "tooltip_coordinates": [1026,556]
            },
            {
                "id": 6,
                "name": "Floor 6",
                "target": 213,
                "highlighted": false,
                "coordinates": [1022,456, 893,456, 765,456, 637,456, 508,456, 380,456, 251,456, 123,456, 123,526, 266,527, 409,527, 413,533, 537,533, 660,533, 784,533, 810,526, 902,526, 993,526, 1022,525, 1022,456],
                "color": "#ffe200",
                "tooltip_coordinates": [1026,492]
            },
            {
                "id": 7,
                "name": "Floor 7",
                "target": 213,
                "highlighted": false,
                "coordinates": [1022,390, 997,385, 903,385, 808,385, 786,375, 661,375, 536,374, 411,373, 410,385, 267,385, 123,385, 123,456, 251,456, 380,456, 508,456, 637,456, 765,456, 893,456, 1022,456, 1022,390],
                "color": "#ffe200",
                "tooltip_coordinates": [1026,424]
            },
            {
                "id": 8,
                "name": "Floor 8",
                "target": 213,
                "highlighted": false,
                "coordinates": [1022,323, 994,316, 901,316, 808,315, 786,295, 661,295, 535,295, 410,295, 411,316, 267,316, 123,316, 123,385, 267,385, 410,385, 411,373, 536,374, 661,375, 786,375, 808,385, 903,385, 997,385, 1022,390, 1022,323],
                "color": "#ffe200",
                "tooltip_coordinates": [1026,358]
            },
            {
                "id": 9,
                "name": "Floor 9",
                "target": 213,
                "highlighted": false,
                "coordinates": [1022,252, 993,239, 899,238, 804,237, 786,216, 661,216, 537,216, 412,216, 412,243, 316,243, 219,243, 123,243, 123,316, 267,316, 411,316, 410,295, 535,295, 661,295, 786,295, 808,315, 901,316, 994,316, 1022,323, 1022,252],
                "color": "#ff4141",
                "tooltip_coordinates": [1026,289]
            },
            {
                "id": 10,
                "name": "Floor 10",
                "target": 213,
                "highlighted": false,
                "coordinates": [123,176, 219,176, 315,176, 411,175, 410,140, 535,140, 661,140, 786,140, 805,175, 900,175, 995,174, 1022,192, 1022,252, 993,239, 899,238, 804,237, 786,216, 661,216, 537,216, 412,216, 412,243, 316,243, 219,243, 123,243, 123,176],
                "color": "#ffe200",
                "tooltip_coordinates": [1026,223]
            }
        ],
        "tooltip_regions": [],
        "nearest_360": 960
    }',
    // South Block Tower B View 2
    "212" => '{
        "id": 212,
        "level": 2,
        "sublevel": 0,
        "parent": 3,
        "name": "Tower E View 2",
        "data_string": "B",
        "img": {
            "desktop": "img/scene_data/sb-tb/B2_B_2.jpg"
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
                "tooltip_coordinates": [938,865]
            },
            {
                "id": 2,
                "name": "Floor 2",
                "target": 213,
                "highlighted": false,
                "coordinates": [934,757, 794,777, 653,798, 567,778, 482,758, 350,777, 272,763, 193,750, 195,814, 273,833, 351,851, 482,827, 568,853, 653,879, 794,853, 934,827, 934,757],
                "color": "yellow",
                "tooltip_coordinates": [938,792]
            },
            {
                "id": 3,
                "name": "Floor 3",
                "target": 213,
                "highlighted": false,
                "coordinates": [934,688, 794,704, 654,720, 567,704, 480,688, 350,703, 271,695, 192,687, 193,750, 272,763, 350,777, 482,758, 567,778, 653,798, 794,777, 934,757, 934,688],
                "color": "yellow",
                "tooltip_coordinates": [938,721]
            },
            {
                "id": 4,
                "name": "Floor 4",
                "target": 213,
                "highlighted": false,
                "coordinates": [934,618, 793,629, 652,640, 564,629, 476,617, 348,628, 269,626, 190,623, 192,687, 271,695, 350,703, 480,688, 567,704, 654,720, 794,704, 934,688, 934,618],
                "color": "yellow",
                "tooltip_coordinates": [938,651]
            },
            {
                "id": 5,
                "name": "Floor 5",
                "target": 213,
                "highlighted": false,
                "coordinates": [934,547, 793,552, 652,558, 564,553, 477,548, 346,554, 267,552, 188,551, 190,623, 269,626, 348,628, 476,617, 564,629, 652,640, 793,629, 934,618, 934,547],
                "color": "yellow",
                "tooltip_coordinates": [938,582]
            },
            {
                "id": 6,
                "name": "Floor 6",
                "target": 213,
                "highlighted": false,
                "coordinates": [934,478, 810,478, 685,479, 561,479, 436,479, 312,479, 187,479, 188,551, 267,552, 346,554, 477,548, 564,553, 652,558, 793,552, 934,547, 934,478],
                "color": "yellow",
                "tooltip_coordinates": [938,513]
            },
            {
                "id": 7,
                "name": "Floor 7",
                "target": 213,
                "highlighted": false,
                "coordinates": [934,406, 836,403, 739,401, 642,398, 556,402, 470,407, 344,402, 265,406, 186,409, 187,479, 312,479, 436,479, 561,479, 685,479, 810,478, 934,478, 934,406],
                "color": "yellow",
                "tooltip_coordinates": [938,443]
            },
            {
                "id": 8,
                "name": "Floor 8",
                "target": 213,
                "highlighted": false,
                "coordinates": [934,335, 836,329, 739,323, 642,317, 556,325, 470,334, 342,327, 263,335, 185,343, 186,409, 265,406, 344,402, 470,407, 556,402, 642,398, 739,401, 836,403, 934,406, 934,335],
                "color": "yellow",
                "tooltip_coordinates": [938,374]
            },
            {
                "id": 9,
                "name": "Floor 9",
                "target": 213,
                "highlighted": false,
                "coordinates": [934,263, 836,253, 739,244, 642,234, 555,248, 469,263, 342,250, 264,263, 185,276, 185,343, 263,335, 342,327, 470,334, 556,325, 642,317, 739,323, 836,329, 934,335, 934,263],
                "color": "red",
                "tooltip_coordinates": [938,300]
            },
            {
                "id": 10,
                "name": "Floor 10",
                "target": 213,
                "highlighted": false,
                "coordinates": [184,217, 263,197, 341,177, 466,198, 554,178, 641,157, 738,170, 836,183, 933,195, 934,263, 836,253, 739,244, 642,234, 555,248, 469,263, 342,250, 264,263, 185,276, 184,217],
                "color": "yellow",
                "tooltip_coordinates": [938,231]
            }
        ],
        "tooltip_regions": [],
        "nearest_360": 959
    }',
    // South Block Tower B Floor View
    "213" => '{
        "id": 213,
        "level": 3,
        "sublevel": 0,
        "parent": 212,
        "name": "Tower C Floor Plan",
        "img": {
            "desktop": "img/scene_data/sb-tb/FP-B2-B.jpg"
        },
        "align_left": false,
        "menu_id": 5,
        "compass_degree": 210,
        "require_transition": false,
        "hover_regions": [],
        "highlight_regions": [
            {
                "id": 1,
                "name": "Type 3",
                "target": 1007,
                "highlighted": false,
                "coordinates": [1158,264, 1189,285, 1206,267, 1268,310, 1252,327, 1283,348, 1277,354, 1344,398, 1296,453, 1231,405, 1195,443, 1171,425, 1136,461, 1066,410, 1101,375, 1070,353, 1158,264],
                "color": "yellow",
                "tooltip_coordinates": [1222,369]
            },
            {
                "id": 2,
                "name": "Type 2",
                "target": 1007,
                "highlighted": true,
                "coordinates": [1137,633, 1164,603, 1115,568, 1173,505, 1221,540, 1240,519, 1288,553, 1337,498, 1407,546, 1358,605, 1365,610, 1342,638, 1368,658, 1318,721, 1290,700, 1264,730, 1200,682, 1137,633],
                "color": "orange",
                "tooltip_coordinates": [1296,628]
            },
            {
                "id": 3,
                "name": "Type 1",
                "target": 1007,
                "highlighted": true,
                "coordinates": [1137,633, 1108,663, 1062,625, 998,692, 1047,733, 1026,756, 1074,796, 1015,862, 1089,924, 1148,854, 1156,860, 1182,829, 1210,851, 1267,784, 1238,762, 1264,730, 1200,682, 1137,633],
                "color": "red",
                "tooltip_coordinates": [1176,783]
            },
            
            {
                "id": 4,
                "name": "Type 5",
                "target": 1005,
                "highlighted": false,
                "coordinates": [705,713, 777,774, 726,825, 800,893, 861,828, 922,762, 915,757, 975,694, 950,673, 996,625, 918,563, 887,593, 853,567, 779,640, 705,713],
                "color": "yellow",
                "tooltip_coordinates": [915,681]
            },
            {
                "id": 5,
                "name": "Type 6",
                "target": 1005,
                "highlighted": false,
                "coordinates": [778,453, 730,496, 708,479, 649,533, 642,528, 580,585, 519,642, 585,703, 638,655, 705,713, 779,640, 853,567, 821,540, 853,510, 778,453],
                "color": "yellow",
                "tooltip_coordinates": [787,571]
            },
            {
                "id": 6,
                "name": "Type 8",
                "target": 1001,
                "highlighted": false,
                "coordinates": [615,234, 553,285, 493,239, 428,291, 533,378, 539,372, 594,417, 580,428, 639,474, 698,422, 727,446, 774,403, 742,376, 769,352, 692,293, 615,234],
                "color": "yellow",
                "tooltip_coordinates": [703,375]
            },
            {
                "id": 7,
                "name": "Type 7",
                "target": 1001,
                "highlighted": false,
                "coordinates": [615,234, 675,184, 618,141, 675,95, 780,169, 774,173, 828,212, 839,203, 895,244, 842,291, 873,312, 828,353, 797,328, 769,352, 692,293, 615,234],
                "color": "yellow",
                "tooltip_coordinates": [810,279]
            },
            {
                "id": 8,
                "name": "Type 4",
                "target": 1007,
                "highlighted": false,
                "coordinates": [936,317, 973,283, 952,267, 986,234, 928,195, 979,150, 1036,189, 1041,185, 1068,203, 1085,187, 1146,227, 1128,244, 1158,264, 1070,353, 1040,330, 1003,365, 936,317],
                "color": "yellow",
                "tooltip_coordinates": [1069,274]
            }
        ],
        "tooltip_regions": []
    }',
    // South Block Tower C
    "221" => '{
        "id": 221,
        "level": 2,
        "sublevel": 0,
        "parent": 3,
        "name": "Tower E",
        "data_string": "C",
        "img": {
            "desktop": "img/scene_data/sb-tc/B2_C_1.jpg"
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
                "tooltip_coordinates": [777,862]
            },
            {
                "id": 2,
                "name": "Floor 2",
                "target": 223,
                "highlighted": false,
                "coordinates": [775,757, 679,771, 583,786, 486,800, 392,782, 298,764, 176,782, 138,775, 86,775, 53,764, 55,839, 85,850, 140,847, 176,860, 300,843, 393,863, 485,884, 582,866, 679,847, 775,829, 775,757],
                "color": "#ffe200",
                "tooltip_coordinates": [777,790]
            },
            {
                "id": 3,
                "name": "Floor 3",
                "target": 223,
                "highlighted": false,
                "coordinates": [775,685, 679,696, 583,707, 486,717, 392,704, 298,690, 175,703, 139,694, 84,698, 51,691, 53,764, 86,775, 138,775, 176,782, 298,764, 392,782, 486,800, 583,786, 679,771, 775,757, 775,685],
                "color": "#ffe200",
                "tooltip_coordinates": [777,719]
            },
            {
                "id": 4,
                "name": "Floor 4",
                "target": 223,
                "highlighted": false,
                "coordinates": [775,614, 679,620, 582,627, 486,633, 393,626, 300,619, 175,627, 140,621, 86,623, 49,619, 51,691, 84,697, 139,694, 175,703, 298,690, 392,704, 486,717, 583,707, 679,696, 775,685, 775,614],
                "color": "#ffe200",
                "tooltip_coordinates": [777,649]
            },
            {
                "id": 5,
                "name": "Floor 5",
                "target": 223,
                "highlighted": false,
                "coordinates": [49,619, 86,623, 140,621, 175,627, 300,619, 393,626, 486,633, 582,627, 679,620, 775,614, 775,540, 679,543, 582,547, 485,550, 391,545, 297,540, 172,543, 124,541, 81,540, 47,543, 49,619],
                "color": "#ffe200",
                "tooltip_coordinates": [777,579]
            },
            {
                "id": 6,
                "name": "Floor 6",
                "target": 223,
                "highlighted": false,
                "coordinates": [775,468, 676,467, 577,466, 478,465, 388,467, 298,468, 172,466, 129,466, 81,467, 46,470, 47,543, 81,540, 124,541, 172,543, 297,540, 391,545, 485,550, 582,547, 679,543, 775,540, 775,468],
                "color": "#ffe200",
                "tooltip_coordinates": [777,502]
            },
            {
                "id": 7,
                "name": "Floor 7",
                "target": 223,
                "highlighted": false,
                "coordinates": [775,398, 676,392, 576,386, 477,380, 387,387, 296,393, 171,389, 126,393, 78,391, 45,398, 46,470, 81,467, 129,466, 172,466, 298,468, 388,467, 478,465, 577,466, 676,467, 775,468, 775,398],
                "color": "#ffe200",
                "tooltip_coordinates": [777,434]
            },
            {
                "id": 8,
                "name": "Floor 8",
                "target": 223,
                "highlighted": false,
                "coordinates": [775,323, 675,314, 575,304, 474,295, 385,306, 295,317, 172,308, 127,315, 80,313, 44,323, 45,398, 78,391, 126,393, 171,389, 296,393, 387,387, 477,380, 576,386, 676,392, 775,398, 775,323],
                "color": "#ffe200",
                "tooltip_coordinates": [777,363]
            },
            {
                "id": 9,
                "name": "Floor 9",
                "target": 223,
                "highlighted": false,
                "coordinates": [775,250, 675,237, 574,223, 473,210, 383,226, 293,241, 170,227, 126,238, 78,233, 43,242, 44,323, 80,313, 127,315, 172,308, 295,317, 385,306, 474,295, 575,304, 675,314, 775,323, 775,250],
                "color": "#ff4141",
                "tooltip_coordinates": [777,256]
            },
            {
                "id": 10,
                "name": "Floor 10",
                "target": 223,
                "highlighted": false,
                "coordinates": [126,165, 168,153, 290,170, 381,150, 472,130, 573,148, 674,166, 775,184, 775,250, 675,237, 574,223, 473,210, 383,226, 293,241, 170,227, 126,238, 78,233, 43,242, 43,175, 79,162, 126,165],
                "color": "#ffe200",
                "tooltip_coordinates": [777,217]
            }
        ],
        "tooltip_regions": [],
        "nearest_360": 958
    }',
    // South Block Tower C View 2
    "222" => '{
        "id": 222,
        "level": 2,
        "sublevel": 0,
        "parent": 3,
        "name": "Tower E View 2",
        "data_string": "C",
        "img": {
            "desktop": "img/scene_data/sb-tc/B2_C_2.jpg"
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
                "tooltip_coordinates": [600,840]
            },
            {
                "id": 2,
                "name": "Floor 2",
                "target": 223,
                "highlighted": false,
                "coordinates": [595,746, 564,748, 564,781, 436,792, 308,804, 180,815, 136,801, 136,786, 65,779, 65,855, 136,866, 136,883, 181,901, 309,886, 437,871, 565,855, 565,812, 595,808, 595,746],
                "color": "yellow",
                "tooltip_coordinates": [600,773]
            },
            {
                "id": 3,
                "name": "Floor 3",
                "target": 223,
                "highlighted": false,
                "coordinates": [595,681, 564,683, 564,704, 437,713, 309,721, 182,730, 136,719, 136,704, 65,704, 65,779, 136,786, 136,801, 180,815, 308,804, 436,792, 564,781, 564,748, 595,746, 595,681],
                "color": "yellow",
                "tooltip_coordinates": [600,713]
            },
            {
                "id": 4,
                "name": "Floor 4",
                "target": 223,
                "highlighted": false,
                "coordinates": [65,629, 65,704, 136,704, 136,719, 182,730, 309,721, 437,713, 564,704, 564,683, 595,681, 595,614, 564,615, 563,630, 434,635, 306,639, 177,643, 134,638, 134,629, 65,629],
                "color": "yellow",
                "tooltip_coordinates": [600,649]
            },
            {
                "id": 5,
                "name": "Floor 5",
                "target": 223,
                "highlighted": false,
                "coordinates": [595,549, 564,549, 564,556, 435,557, 306,558, 177,559, 133,555, 65,556, 65,629, 134,629, 134,638, 177,643, 306,639, 434,635, 563,630, 564,615, 595,614, 595,549],
                "color": "yellow",
                "tooltip_coordinates": [600,582]
            },
            {
                "id": 6,
                "name": "Floor 6",
                "target": 223,
                "highlighted": false,
                "coordinates": [595,485, 563,485, 563,479, 434,477, 306,475, 177,472, 134,474, 134,479, 65,479, 65,556, 133,555, 177,559, 306,558, 435,557, 564,556, 564,549, 595,549, 595,485],
                "color": "yellow",
                "tooltip_coordinates": [600,515]
            },
            {
                "id": 7,
                "name": "Floor 7",
                "target": 223,
                "highlighted": false,
                "coordinates": [595,419, 565,419, 564,403, 436,397, 307,390, 179,383, 135,393, 135,409, 65,406, 65,479, 134,479, 134,474, 177,472, 306,475, 434,477, 563,479, 563,485, 595,485, 595,419],
                "color": "yellow",
                "tooltip_coordinates": [600,450]
            },
            {
                "id": 8,
                "name": "Floor 8",
                "target": 223,
                "highlighted": false,
                "coordinates": [595,355, 564,353, 564,329, 436,319, 307,309, 179,299, 134,309, 134,335, 65,330, 65,406, 135,409, 135,393, 179,383, 307,390, 436,397, 564,403, 565,419, 595,419, 595,355],
                "color": "yellow",
                "tooltip_coordinates": [600,386]
            },
            {
                "id": 9,
                "name": "Floor 9",
                "target": 223,
                "highlighted": false,
                "coordinates": [595,293, 565,288, 565,252, 436,239, 308,226, 179,212, 136,231, 136,257, 65,253, 65,330, 134,335, 134,309, 179,299, 307,309, 436,319, 564,329, 564,353, 595,355, 595,293],
                "color": "red",
                "tooltip_coordinates": [600,325]
            },
            {
                "id": 10,
                "name": "Floor 10",
                "target": 223,
                "highlighted": false,
                "coordinates": [127,180, 178,133, 307,150, 436,166, 565,182, 564,225, 594,230, 595,293, 565,288, 565,252, 436,239, 308,226, 179,212, 136,231, 136,257, 65,253, 65,174, 127,180],
                "color": "yellow",
                "tooltip_coordinates": [600,265]
            }
        ],
        "tooltip_regions": [],
        "nearest_360": 956
    }',
    // South Block Tower C Floor View
    "223" => '{
        "id": 223,
        "level": 3,
        "sublevel": 0,
        "parent": 222,
        "name": "Tower C Floor Plan",
        "img": {
            "desktop": "img/scene_data/sb-tc/FP-B2-C.jpg"
        },
        "align_left": false,
        "menu_id": 5,
        "compass_degree": 180,
        "require_transition": false,
        "hover_regions": [],
        "highlight_regions": [
            {
                "id": 1,
                "name": "Type 2",
                "target": 1007,
                "highlighted": true,
                "coordinates": [1005,396, 1074,448, 1111,409, 1134,425, 1168,389, 1232,434, 1278,381, 1215,339, 1219,332, 1191,315, 1207,295, 1145,253, 1126,273, 1098,253, 1012,339, 1042,360, 1005,396],
                "color": "orange",
                "tooltip_coordinates": [1171,361]
            },
            {
                "id": 2,
                "name": "Type 3",
                "target": 1005,
                "highlighted": false,
                "coordinates": [1246,716, 1301,649, 1358,690, 1410,623, 1342,575, 1273,527, 1268,532, 1202,485, 1184,505, 1130,468, 1069,534, 1104,559, 1077,588, 1161,652, 1246,716],
                "color": "yellow",
                "tooltip_coordinates": [1290,606]
            },
            {
                "id": 3,
                "name": "Type 4",
                "target": 1005,
                "highlighted": false,
                "coordinates": [1012,594, 946,664, 1001,709, 979,731, 1048,787, 1042,794, 1114,850, 1185,905, 1246,833, 1188,787, 1246,716, 1161,652, 1077,588, 1049,621, 1012,594],
                "color": "yellow",
                "tooltip_coordinates": [1167,730]
            },
            {
                "id": 4,
                "name": "Type 5",
                "target": 1007,
                "highlighted": false,
                "coordinates": [656,687, 688,712, 660,739, 726,797, 752,770, 782,797, 789,789, 858,846, 918,781, 851,727, 893,683, 868,662, 909,620, 838,564, 798,605, 765,579, 711,633, 656,687],
                "color": "yellow",
                "tooltip_coordinates": [846,687]
            },
            {
                "id": 5,
                "name": "Type 6",
                "target": 1007,
                "highlighted": false,
                "coordinates": [735,555, 776,515, 709,463, 668,501, 645,485, 605,523, 547,475, 484,530, 543,581, 537,587, 566,609, 537,634, 600,687, 626,661, 656,687, 711,633, 765,579, 735,555],
                "color": "yellow",
                "tooltip_coordinates": [697,577]
            },
            {
                "id": 6,
                "name": "Type 8",
                "target": 1001,
                "highlighted": false,
                "coordinates": [393,274, 455,222, 514,266, 576,216, 652,272, 727,328, 700,352, 732,377, 687,418, 657,396, 599,448, 544,404, 556,394, 501,349, 493,355, 393,274],
                "color": "yellow",
                "tooltip_coordinates": [660,355]
            },
            {
                "id": 7,
                "name": "Type 7",
                "target": 1001,
                "highlighted": false,
                "coordinates": [576,216, 634,167, 576,126, 634,79, 737,151, 732,155, 785,192, 795,183, 851,223, 800,268, 828,289, 786,328, 754,306, 727,328, 652,272, 576,216],
                "color": "yellow",
                "tooltip_coordinates": [777,249]
                
            },
            {
                "id": 8,
                "name": "Type 1",
                "target": 1007,
                "highlighted": true,
                "coordinates": [1012,339, 979,318, 943,350, 879,306, 913,272, 891,256, 926,224, 871,185, 922,143, 976,180, 981,175, 1008,194, 1028,176, 1085,216, 1069,234, 1098,253, 1012,339],
                "color": "red",
                "tooltip_coordinates": [1027,262]
            }
        ],
        "tooltip_regions": []
    }',
    // Flat View
    "1001" => '{
        "id": 1001,
        "level": 3,
        "sublevel": 1,
        "parent": 103,
        "name": "Tower A 3BHK Type A",
        "img": {
            "desktop": "img/scene_data/floor_plans/TYPE-A.jpg"
        },
        "align_left": false,
        "menu_id": 4,
        "compass_degree": 180,
        "require_transition": false,
        "has_content": true,
        "content": "<strong>3 BHK</strong> <p>Area : 1300 Sqft<br>Status : Available<br>Booking Price <strong>INR 27,000 (Refundable)</strong></p>",
        "hover_regions": [],
        "highlight_regions": [],
        "tooltip_regions": []
    }',

    "1002" => '{
        "id": 1002,
        "level": 3,
        "sublevel": 1,
        "parent": 103,
        "name": "Tower A 3BHK Type A1",
        "img": {
            "desktop": "img/scene_data/floor_plans/TYPE-A1.jpg"
        },
        "align_left": false,
        "menu_id": 4,
        "compass_degree": 180,
        "require_transition": false,
        "has_content": true,
        "content": "<strong>3 BHK</strong> <p>Area : 1300 Sqft<br>Status : Available<br>Booking Price <strong>INR 27,000 (Refundable)</strong></p>",
        "hover_regions": [],
        "highlight_regions": [],
        "tooltip_regions": []
    }',

    "1003" => '{
        "id": 1003,
        "level": 3,
        "sublevel": 1,
        "parent": 103,
        "name": "Tower A 3BHK Type AE",
        "img": {
            "desktop": "img/scene_data/floor_plans/TYPE-AE.jpg"
        },
        "align_left": false,
        "menu_id": 4,
        "compass_degree": 180,
        "require_transition": false,
        "has_content": true,
        "content": "<strong>3 BHK</strong> <p>Area : 1300 Sqft<br>Status : Available<br>Booking Price <strong>INR 27,000 (Refundable)</strong></p>",
        "hover_regions": [],
        "highlight_regions": [],
        "tooltip_regions": []
    }',

    "1004" => '{
        "id": 1004,
        "level": 3,
        "sublevel": 1,
        "parent": 103,
        "name": "Tower A 3BHK Type AW",
        "img": {
            "desktop": "img/scene_data/floor_plans/TYPE-AW.jpg"
        },
        "align_left": false,
        "menu_id": 4,
        "compass_degree": 180,
        "require_transition": false,
        "has_content": true,
        "content": "<strong>3 BHK</strong> <p>Area : 1300 Sqft<br>Status : Available<br>Booking Price <strong>INR 27,000 (Refundable)</strong></p>",
        "hover_regions": [],
        "highlight_regions": [],
        "tooltip_regions": []
    }',

    "1005" => '{
        "id": 1005,
        "level": 3,
        "sublevel": 1,
        "parent": 103,
        "name": "Tower A 3BHK Type B",
        "img": {
            "desktop": "img/scene_data/floor_plans/TYPE-B.jpg"
        },
        "align_left": false,
        "menu_id": 4,
        "compass_degree": 180,
        "require_transition": false,
        "has_content": true,
        "content": "<strong>3 BHK</strong> <p>Area : 1300 Sqft<br>Status : Available<br>Booking Price <strong>INR 27,000 (Refundable)</strong></p>",
        "hover_regions": [],
        "highlight_regions": [],
        "tooltip_regions": []
    }',

    "1006" => '{
        "id": 1006,
        "level": 3,
        "sublevel": 1,
        "parent": 103,
        "name": "Tower A 3BHK Type B1",
        "img": {
            "desktop": "img/scene_data/floor_plans/TYPE-B1.jpg"
        },
        "align_left": false,
        "menu_id": 4,
        "compass_degree": 180,
        "require_transition": false,
        "has_content": true,
        "content": "<strong>3 BHK</strong> <p>Area : 1300 Sqft<br>Status : Available<br>Booking Price <strong>INR 27,000 (Refundable)</strong></p>",
        "hover_regions": [],
        "highlight_regions": [],
        "tooltip_regions": []
    }',

    "1007" => '{
        "id": 1007,
        "level": 3,
        "sublevel": 1,
        "parent": 103,
        "name": "Tower A 3BHK Type B2",
        "img": {
            "desktop": "img/scene_data/floor_plans/TYPE-B2.jpg"
        },
        "align_left": false,
        "menu_id": 4,
        "compass_degree": 180,
        "require_transition": false,
        "has_content": true,
        "content": "<strong>3 BHK</strong> <p>Area : 1300 Sqft<br>Status : Available<br>Booking Price <strong>INR 27,000 (Refundable)</strong></p>",
        "hover_regions": [],
        "highlight_regions": [],
        "tooltip_regions": []
    }'
  ];
 }
}
