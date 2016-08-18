 /********************** Tower E View 1 **********************/
scenes_data["211"] = {
    "id": 211,
    "level": 2,
	"sublevel": 0,
    "parent": 2,
    "name": "Tower E",
    "data_string": "T11",
    "img": {
        "desktop": "img/scene_data/sb-tb/B2_B_E1.jpg",
        "topview": "img/scene_data/sb-tb/keymapTower11.jpg"
    },
    "align_left": true,
    "compass_degree": 100,
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
            "coordinates": [15.5,667.5, 1206.5,662.5, 1206.5,616.5, 15.5,621.5],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [1195,642]
        },
        {
            "id": 2,
            "name": "Floor 2",
            "target": 213,
            "highlighted": false,
            "coordinates": [15.5,621.5, 1206.5,616.5, 1206.5,572.5, 15.5,576.5, 15.5,624.5],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [1195,595]
        },
        {
            "id": 3,
            "name": "Floor 3",
            "target": 213,
            "highlighted": false,
            "coordinates": [15.5,576.5, 1206.5,572.5, 1206.5,527.5, 15.5,530.5],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [1195,550]
        },
        {
            "id": 4,
            "name": "Floor 4",
            "target": 213,
            "highlighted": false,
            "coordinates": [15.5,530.5, 1206.5,527.5, 1206.5,481.5, 15.5,483.5],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [1195,503]
        },
        {
            "id": 5,
            "name": "Floor 5",
            "target": 213,
            "highlighted": false,
            "coordinates": [15.5,483.5, 1206.5,481.5, 1206.5,435.5, 15.5,435.5],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [1195,455]
        },
        {
            "id": 6,
            "name": "Floor 6",
            "target": 213,
            "highlighted": false,
            "coordinates": [15.5,435.5, 1206.5,435.5, 1206.5,388.5, 17.5,388.5],
            "color": "#ffe200",
            "tooltip_text": "<strong>Floor 6</strong><br><small>2 BHK: 2 avail, 2 sold<br>4 BHK: 2 avail, 2 sold</small>",
            "tooltip_coordinates": [1195,409]
        },
        {
            "id": 7,
            "name": "Floor 7",
            "target": 213,
            "highlighted": false,
            "coordinates": [17.5,388.5, 1206.5,388.5, 1206.5,343.5, 18.5,341.5],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [1195,370]
        },
        {
            "id": 8,
            "name": "Floor 8",
            "target": 213,
            "highlighted": false,
            "coordinates": [18.5,341.5, 1206.5,343.5, 1206.5,297.5, 18.5,295.5],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [1195,320]
        },
        {
            "id": 9,
            "name": "Floor 9",
            "target": 213,
            "highlighted": false,
            "coordinates": [18.5,295.5, 1206.5,297.5, 1206.5,251.5, 18.5,249.5],
            "color": "#ff4141",
            "tooltip_text": "<strong>Floor 9</strong><br><small>2 BHK: 0 avail, 4 sold<br>4 BHK: 0 avail, 4 sold</small>",
            "tooltip_coordinates": [1195,275]
        },
        {
            "id": 10,
            "name": "Floor 10",
            "target": 213,
            "highlighted": false,
            "coordinates": [18.5,249.5, 1206.5,251.5, 1206.5,204.5, 18.5,198.5],
            "color": "#ffe200",
            "tooltip_text": "Text",
            "tooltip_coordinates": [1195,227]
        }
    ],
    "tooltip_regions": [],
    "nearest_360": 904
}/********************** End of Tower C View **********************/

/********************** Tower E View 2 **********************/
scenes_data["212"] = {
    "id": 212,
    "level": 2,
	"sublevel": 0,
    "parent": 2,
    "name": "Tower E View 2",
    "data_string": "T11",
    "img": {
        "desktop": "img/scene_data/sb-tb/B2_B_2.jpg",
        "topview": "img/scene_data/sb-tb/keymapTower11.jpg"
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
        "topview": "img/scene_data/sb-tb/keymapTower11.jpg"
    },
    "align_left": false,
    "menu_id": 5,
    "compass_degree": 100,
    "require_transition": false,
    "hover_regions": [],
    "highlight_regions": [
        {
            "id": 9,
            "name": "Type 2",
            "target": 1004,
            "highlighted": true,
            "coordinates": [220.25,153.625, 370.75,153.625, 370.75,272.291, 293.875,272.291,293.75,319.625, 266.75,319.625,   266.75,272.291, 220.25,272.291, 220.25,210.864  
],
            "color": "orange",
            "tooltip_text": "<strong>3 BHK</strong><br><small>Area: 1300 SqFt<br>Status: On Hold</small>",
            "tooltip_coordinates": [297,206]
        },
        {
            "id": 10,
            "name": "Type 1",
            "target": 1004,
            "highlighted": true,
            "coordinates": [415.75,152.625, 566.25,152.625, 566.25,271.291, 494.375,271.291, 494.25,319.625, 464.5,319.625,464.167,295.329, 453.167,295.495, 453.25,271.291, 415.75,271.291,415.75,209.864 ],
            "color": "red",
            "tooltip_text": "<strong>2 BHK</strong><br><small>Area: 1000 SqFt<br>Status: Booked</small>",
            "tooltip_coordinates": [498,206]
        },
        
        {
            "id": 11,
            "name": "Type 5",
            "target": 1004,
            "highlighted": false,
            "coordinates": [610.25,152.625, 760.75,152.625, 760.75,271.291, 687.875,271.291, 687.75,318.625, 660.75,318.625,   660.75,271.291, 610.25,271.291, 610.25,209.864 ],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [678,206]
        },
        {
            "id": 12,
            "name": "Type 6",
            "target": 1004,
            "highlighted": false,
            "coordinates": [804.334,152.625, 954.834,152.625, 954.834,271.291, 881.959,271.291, 881.834,318.625, 854.834,318.625,   854.834,271.291, 804.334,271.291, 804.334,209.864 ],
            "color": "yellow",
            "tooltip_text": "<strong>3 BHK</strong><br><small>Area: 1300 SqFt<br>Status: Available</small>",
            "tooltip_coordinates": [875,210]
        },
        {
            "id": 1,
            "name": "Type 8",
            "target": 1004,
            "highlighted": false,
            "coordinates": [1150.75,152.625, 1000.25,152.625, 1000.25,272.291, 1051.125,272.291, 1051.25,319.625, 1081,319.625,   1081.333,295.329, 1092.333,295.495, 1092.25,272.291, 1150.75,272.291, 1150.75,209.864 ],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [1062,210]
        },
        {
            "id": 2,
            "name": "Type 7",
            "target": 1004,
            "highlighted": false,
            "coordinates": [1195.083,152.625, 1345.583,152.625, 1345.583,271.291, 1272.708,271.291, 1272.583,318.625,  1245.583,318.625, 1245.583,271.291, 1195.083,271.291, 1195.083,209.864 ],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [1252,210]
        },
        {
            "id": 8,
            "name": "Type 4",
            "target": 1003,
            "highlighted": false,
            "coordinates": [219.667,347, 366,347, 366,453, 219.667,453, 219.667,402.835 ],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [303,391]
        },
        {
            "id": 7,
            "name": "Type 3",
            "target": 1003,
            "highlighted": false,
            "coordinates": [414.667,347, 561,347, 561,453, 414.667,453, 414.667,402.835 ],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [493,391]
        },
        {
            "id": 6,
            "name": "Type 3",
            "target": 1003,
            "highlighted": false,
            "coordinates": [609.333,347, 755.667,347, 755.667,453, 609.333,453, 609.333,402.835 ],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [682,391]
        },
        {
            "id": 5,
            "name": "Type 3",
            "target": 1003,
            "highlighted": false,
            "coordinates": [803.334,347, 949.667,347, 949.667,453, 803.334,453, 803.334,402.835],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [871,391]
        },
        {
            "id": 4,
            "name": "Type 3",
            "target": 1003,
            "highlighted": false,
            "coordinates": [998,347, 1144.333,347, 1144.333,453, 998,453, 998,402.835  ],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [1065,391]
        },
        {
            "id": 3,
            "name": "Type 3",
            "target": 1004,
            "highlighted": false,
            "coordinates": [1194.666,347, 1346,347, 1346,466.667, 1194.666,466.667, 1194.666,410.035 ],
            "color": "yellow",
            "tooltip_text": "Text",
            "tooltip_coordinates": [1255,391]
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
