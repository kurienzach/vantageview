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
    "compass_degree": 110,
    "menu_id": 1,
    "require_transition": false,
    "hover_regions": [
        {
            "id": 1,
            "name": "North Block",
            "target": 2,
            "coordinates": [372.333,450, 337,320.333, 451,219.667, 445,189.667, 578.333,61.667, 781,94.333, 797,299.667, 770.333,464.333, 714.333,567.667],
            "img": {
                "desktop": "img/scene_data/base/ARIEL_B1.jpg"
            },
            "transition": {
                x: "2%",
                y: 0,
                scale: "1.2"
            },
            "tooltip_text": "Bulding 1 ",
            "tooltip_coordinates": [789,188] ,
        },
        {
            "id": 2,
            "name": "South Block",
            "target": 3,
            "coordinates": [824,636, 816,396, 820,245, 1208,236, 1326,489, 1288,629],
            "img": {
                "desktop": "img/scene_data/base/ARIEL_B2.jpg"
            },
            "transition": {
                x: "-5%",
                y: "15%",
                scale: "1.4"
            },
            "tooltip_text": "Bulding 2 ",
            "tooltip_coordinates": [1244, 315] ,
        }
    ],
    "highlight_regions": [],
    "tooltip_regions": [
        {
            "id": 1,
            "coordinates": [451,571, 602,597, 540,688, 404,693],
            "tooltip_text": "Multi Court",
            "tooltip_coordinates": [503,601]  
        },
        {
            "id": 2,
            "coordinates": [837,236, 837,201,853,188,1003,236],
            "tooltip_text": "Basket Ball Court and Play Area",
            "tooltip_coordinates": [902,220]  
        },
        {
            "id": 3,
            "coordinates": [298,392, 269,327, 465,117, 455,75, 94,0, 0,73],
            "tooltip_text": "Future Development",
            "tooltip_coordinates": [270,134]  
        },
        {
            "id": 4,
            "coordinates": [1131,230, 1150,208, 1171,85, 1149,11, 1113,0, 629,0, 636,50, 850,94, 850,153, ],
            "tooltip_text": "Future Development",
            "tooltip_coordinates": [960,75]  
        },
        

    ],
    "360_points": [
        {
            "id": 1,
            "coordinates": [720, 550],
            "target": 900
        },
        {
            "id": 2,
            "coordinates": [1020, 600],
            "target": 902
        },
        {
            "id": 3,
            "coordinates": [1285, 590],
            "target": 903
        },
        {
            "id": 4,
            "coordinates": [495, 500],
            "target": 918
        },
        {
            "id": 5,
            "coordinates": [325, 385],
            "target": 917
        },
        {
            "id": 6,
            "coordinates": [770, 385],
            "target": 906
        },
        {
            "id": 7,
            "coordinates": [775, 260],
            "target": 907
        },
        {
            "id": 11,
            "coordinates": [780, 150],
            "target": 911
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
    "compass_degree": 125,
    "menu_id": 2,
    "require_transition": false,
    "hover_regions": [
        {
            "id": 1,
            "name": "Group A",
            "target": 121,
            "coordinates": [1088.5,311.5, 753.911,146.712, 753.911,90.5, 829.5,33.5, 1130.5,149.5],
            "img": {
                "desktop": "img/scene_data/nb/B1_A.jpg"
            },
            "tooltip_text": "Tower 7 ",
            "tooltip_coordinates": [954,129] ,
        },
        {
            "id": 2,
            "name": "Group B",
            "target": 111,
            "coordinates": [1040.5,587.5, 628.5,342.5, 607.5,214.5, 719.5,129.5, 1120.5,324.5],
            "img": {
                "desktop": "img/scene_data/nb/B1_B.jpg"
            },
            "tooltip_text": "Tower 8 ",
            "tooltip_coordinates": [882,253] ,
        },
        {
            "id": 3,
            "name": "Group C",
            "target": 101,
            "coordinates": [430.5,406.5, 563.5,299.5, 1041.5,586.5, 1001.5,728.5, 901.5,863.5, 481.5,558.5],
            "img": {
                "desktop": "img/scene_data/nb/B1_C.jpg"
            },
            "tooltip_text": "Tower 9",
            "tooltip_coordinates": [ 788,437] ,
        },
        {
            "id": 4,
            "name": "South Block",
            "target": 3,
            "coordinates": [1166.5,444.5, 1103.5,592.5, 1055.5,900.888, 1600.8,900.888, 1600.8,525.5],
            "img": {
                "desktop": "img/scene_data/nb/B1_B2.jpg"
            },
             "tooltip_text": "Building 2",
            "tooltip_coordinates": [ 1361,551] ,
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
    "compass_degree": 120,
    "menu_id": 3,
    "require_transition": false,
    "hover_regions": [
        {
            "id": 1,
            "name": "Group A",
            "target": 201,
            "coordinates": [454.5,575.5, 371.5,404.5, 471.5,250.5, 1201.5,413, 1178.5,609.5, 1093.5,761.5],
            "img": {
                "desktop": "img/scene_data/sb/B2_A.jpg"
            },
             "tooltip_text": "Tower 10 ",
            "tooltip_coordinates": [1198,450] ,

        },
        {
            "id": 2,
            "name": "Group B",
            "target": 211,
            "coordinates": [1174.19,406.92, 579.067,274.445, 552.5,144.5, 619.5,34.5, 1243.5,147.5, 1229.5,286.5],
            "img": {
                "desktop": "img/scene_data/sb/B2_B.jpg"
            },
             "tooltip_text": "Tower 11 ",
            "tooltip_coordinates": [1240,181] ,
        },
        {
            "id": 3,
            "name": "North Block",
            "target": 2,
            "coordinates": [46.5,194.5, 375.5,450.056, 388.5,434.5, 373.5,398.5, 617.214,39.342, 669.5,47.5, 725.5,0, 0.2,0.112, 0,123.5],
            "img": {
                "desktop": "img/scene_data/sb/B2_B1.jpg"
            },
            "tooltip_text": "Building 1",
            "tooltip_coordinates": [331, 75]
        }
    ],
    "highlight_regions": [],
    "tooltip_regions": [],
    "nearest_360": 903
};/********************** End of South Block View **********************/
