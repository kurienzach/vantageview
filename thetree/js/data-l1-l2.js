/********************** Ariel View **********************/
scenes_data["1"] = {
    "id": 1,
    "level": 1,
    "sublevel": 0,
    "parent": null,
    "name": "Ariel",
    "img": {
        "desktop": "img/scene_data/base/ARIEL.jpg",
        "topview": "img/scene_data/base/keymapAriel.jpg"
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
            },
            "transition": {
                x: "2%",
                y: 0,
                scale: "1.2"
            },
            "tooltip_text": "Building 1 ",
            "tooltip_coordinates": [1100,450] ,
        },
        {
            "id": 2,
            "name": "South Block",
            "target": 3,
            "coordinates": [932, 154, 1000, 117, 1034, 132, 1034, 104, 1084, 74, 1094, 80, 1153, 44, 1314, 98, 1292, 250, 1334, 267, 1305, 430, 1259, 462, 1198, 435, 1178, 453, 960, 344, 932, 304],
            "img": {
                "desktop": "img/scene_data/base/ARIEL_B2.jpg"
            },
            "transition": {
                x: "-5%",
                y: "15%",
                scale: "1.4"
            },
            "tooltip_text": "Building 2 ",
            "tooltip_coordinates": [1334, 267] ,
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
        },

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
        },
    ]
}; /********************** End of Ariel View **********************/

/********************** North Block View **********************/
scenes_data["2"] = {
    "id": 2,
    "level": 1,
    "sublevel": 1,
    "parent": 1,
    "name": "North Block",
    "data_string": "1",
    "img": {
        "desktop": "img/scene_data/nb/B1.jpg",
        "topview": "img/scene_data/nb/keymapBuilding1.jpg"
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
            },
            "tooltip_text": "Tower 1A ",
            "tooltip_coordinates": [868,177] ,
        },
        {
            "id": 2,
            "name": "Group B",
            "target": 111,
            "coordinates": [923,801, 786,757, 681,670, 661,527, 640,385, 675,369, 673,352, 708,330, 687,320, 776,272, 865,225, 907,248, 956,216, 1079,274, 1071,356, 989,410, 907,463, 907,588, 908,712, 923,801],
            "img": {
                "desktop": "img/scene_data/nb/B1_B.jpg"
            },
            "tooltip_text": "Tower 1B ",
            "tooltip_coordinates": [1079,274] ,
        },
        {
            "id": 3,
            "name": "Group C",
            "target": 101,
            "coordinates": [1330,511, 1418,550, 1395,649, 1371,747, 1348,846, 1257,933, 1138,863, 1079,920, 1001,860, 923,801, 908,712, 907,588, 907,463, 989,410, 1071,356, 1138,400, 1198,352, 1270,387, 1341,422, 1330,511],
            "img": {
                "desktop": "img/scene_data/nb/B1_C.jpg"
            },
            "tooltip_text": "Tower 1C",
            "tooltip_coordinates": [ 1270,387] ,
        },
        {
            "id": 4,
            "name": "South Block",
            "target": 3,
            "coordinates": [1012,0, 1012,121, 1012,242, 1079,274, 1076,305, 1198,352, 1270,387, 1341,422, 1413,453, 1485,484, 1584,400, 1619,277, 1654,153, 1559,122, 1581,100, 1525,79, 1542,0, 1410,0, 1277,0, 1145,0, 1012,0],
            "img": {
                "desktop": "img/scene_data/nb/B1_B2.jpg"
            },
             "tooltip_text": "Building 2",
            "tooltip_coordinates": [ 1619,277] ,
        },
    ],
    "highlight_regions": [],
    "tooltip_regions": [],
    "nearest_360": 908
};/********************** End of North Block View **********************/

/********************** South Block View **********************/
scenes_data["3"] = {
    "id": 3,
    "level": 1,
    "sublevel": 1,
    "parent": 1,
    "name": "South Block",
    "data_string": "2",
    "img": {
        "desktop": "img/scene_data/sb/B2.jpg",
        "topview": "img/scene_data/sb/keymapBuilding2.jpg"
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
            },
             "tooltip_text": "Tower 2A ",
            "tooltip_coordinates": [1429,608] ,

        },
        {
            "id": 2,
            "name": "Group B",
            "target": 211,
            "coordinates": [902,771, 897,629, 893,487, 966,437, 1038,388, 996,362, 1023,345, 946,305, 869,265, 813,273, 745,236, 673,271, 601,306, 621,442, 640,579, 672,683, 777,762, 902,771],
            "img": {
                "desktop": "img/scene_data/sb/B2_B.jpg"
            },
             "tooltip_text": "Tower 2B ",
            "tooltip_coordinates": [1038,388] ,
        },
        {
            "id": 3,
            "name": "Group C",
            "target": 221,
            "coordinates": [1227,433, 1149,395, 1111,421, 1038,388, 996,362, 1023,345, 946,305, 869,265, 834,270, 831,192, 929,144, 1016,180, 1051,162, 1126,193, 1201,224, 1196,257, 1248,280, 1238,357, 1227,433],
            "img": {
                "desktop": "img/scene_data/sb/B2_C.jpg"
            },
             "tooltip_text": "Tower 2C ",
            "tooltip_coordinates": [1248,280] ,
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
};/********************** End of South Block View **********************/
