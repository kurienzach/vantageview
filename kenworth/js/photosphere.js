THREE.Photosphere = function (domEl, image, options) {
	options = options || {};

	var camera, controls, scene, renderer, sphere;
	var mouse = { x: 0, y: 0 };
	var targetList = [];
    var id;
    var isAnimating = true;

	var webglSupport = (function(){ 
		try { 
			var canvas = document.createElement( 'canvas' ); 
			return !! (window.WebGLRenderingContext && (canvas.getContext('webgl') || canvas.getContext('experimental-webgl'))); 
		} catch(e) { 
			return false; 
		} 
	})();

	init();

	function init () {

		// Create a new scene
		scene = new THREE.Scene();

		// http://threejs.org/docs/#Reference/Cameras/PerspectiveCamera
		camera = new THREE.PerspectiveCamera(options.view || 60, domEl.offsetWidth / domEl.offsetHeight, 1, 1000);
		camera.position.x = options.x || 0.1;
		camera.position.y = options.y || 0;
		scene.add(camera);

		// Initialize renderer
		renderer = webglSupport ? new THREE.WebGLRenderer() : new THREE.CanvasRenderer();
		renderer.setSize(domEl.offsetWidth, domEl.offsetHeight);
		domEl.appendChild(renderer.domElement);

		var sprites = [];
		targetList = [];
		// Add sprite images for other 360 ponts in the panorama
		var crateTexture = THREE.ImageUtils.loadTexture( 'img/crate.png' );
		crateTexture.minFilter = THREE.LinearFilter;

		var crateMaterial = new THREE.SpriteMaterial( { map: crateTexture, useScreenCoordinates: false, color: 0xffffff } );

		curr_scene_data["360_points"].forEach(function(point) {
			var new_sprite = new THREE.Sprite( crateMaterial );
			new_sprite.position.set(point["coordinates"][0], point["coordinates"][1], point["coordinates"][2]);
			new_sprite.scale.set(point["scale"][0], point["scale"][1], point["scale"][2]);
			new_sprite.target = point["target"];
			new_sprite.camera_coordinates = point["camera_coordinates"];
			new_sprite.targetCam = point["target_cam"];
			targetList.push(new_sprite);
			sprites.push(new_sprite);
		});

		// Add orbit controls for mouse based rotation
		controls = new THREE.OrbitControls(camera, domEl);
		controls.noPan = true;
		controls.noZoom = true;
        controls.autoRotate = false;
		controls.autoRotateSpeed = options.speed || 0.5;

		// controls.addEventListener('change', render);
	
		// Add event listeners for mouse and keyboard
		domEl.addEventListener('mousewheel', onMouseWheel, false);
		domEl.addEventListener('DOMMouseScroll', onMouseWheel, false);
		domEl.addEventListener( 'mousedown', onDocumentMouseDown, false );
		domEl.addEventListener( 'mousemove', onDocumentMouseMove, false );


		// Load the photosphere image as texture
		// Hide the loader once the texture is loaded
		curr_scene_state.$scene_360.find('canvas').not('.prev').css("opacity", 0);
		// Start render loop
		render();

		// if there is initial camera rotation specified then start camera from
		// that pos
		if (options.initialCamPos) {
			var targetCamCoord = curr_scene_data["360_points"][options.initialCamPos - 1]["camera_coordinates"];
			var angle = Math.atan2((camera.position.x * -targetCamCoord[2] - camera.position.z * -targetCamCoord[0]), 
					(camera.position.x * -targetCamCoord[0] + camera.position.z * -targetCamCoord[2]));
			console.log(angle);
			controls.rotateLeft(angle);
		}

		fake_loader(true);

		var texture = THREE.ImageUtils.loadTexture(image,null,function() {
			fake_loader(false);
			sprites.forEach(function(sprite){
				scene.add(sprite);
			});			

			controls.autorotateTimer =  setTimeout(function(){
				controls.autorotateTimer = null;
	            controls.autoRotate = true;
			}, 2000); 

			// Fade in current canvas and remove loader
			curr_scene_state.$scene_360.find('canvas').not('.prev').velocity({"opacity": 1}, 1000,  "ease-in", function() {
				curr_scene_state.$scene_360.find('.prev').remove();
				loader_hide(true, true);
			});

		});

		texture.minFilter = THREE.LinearFilter;

		// Create a sphere with the texture
		sphere = new THREE.Mesh(
			new THREE.SphereGeometry(100, 125, 125),
			new THREE.MeshBasicMaterial({
				map: texture
			})
		);
		sphere.scale.x = -1;
		scene.add(sphere);

	}


	function render () {
		controls.update();
		if (isAnimating)
			id = requestAnimationFrame(render);
		renderer.render(scene, camera);
	}

	function onMouseWheel (evt) {
		evt.preventDefault();
			
		if (evt.wheelDeltaY) { // WebKit
			camera.fov -= evt.wheelDeltaY * 0.05;
		} else if (evt.wheelDelta) { 	// Opera / IE9
			camera.fov -= evt.wheelDelta * 0.05;
		} else if (evt.detail) { // Firefox
			camera.fov += evt.detail * 1.0;
		}
		camera.fov = Math.max(20, Math.min(100, camera.fov));
		camera.updateProjectionMatrix();
        console.log ("Update zoom");
	}

	function resize () {
		camera.aspect = domEl.offsetWidth / domEl.offsetHeight;
		camera.updateProjectionMatrix();
		renderer.setSize(domEl.offsetWidth, domEl.offsetHeight);
		render();
	}

	// http://stackoverflow.com/questions/21548247/clean-up-threejs-webgl-contexts
	function remove () {
        cancelAnimationFrame(id);
        isAnimating = false;
        domEl.removeEventListener('mousewheel', onMouseWheel, false);
		domEl.removeEventListener('DOMMouseScroll', onMouseWheel, false);
		domEl.removeEventListener( 'mousedown', onDocumentMouseDown, false );
		domEl.removeEventListener( 'mousemove', onDocumentMouseMove, false );
		controls.remove();
		// curr_scene_state.$scene_360.empty();
	}

	function onDocumentMouseMove(event) {

		var raycaster = new THREE.Raycaster(); // create once
		var mouse = new THREE.Vector2(); // create once
			
		// update the mouse variable
		mouse.x = ( (event.clientX - (curr_scene_state.$scene.offset().left - $(window).scrollLeft())) / curr_scene_state.$scene.width() ) * 2 - 1;
		mouse.y = - ( (event.clientY - (curr_scene_state.$scene.offset().top - $(window).scrollTop())) / curr_scene_state.$scene.height() ) * 2 + 1;
		
		// find intersections
		raycaster.setFromCamera( mouse, camera );
		var intersects = raycaster.intersectObjects( targetList, false );
		
		// if there is one (or more) intersections
		if ( intersects.length > 0 )
		{
			// console.log("Hit @ " + toString( intersects[0].point ) );
			// change the color of the closest face.
			curr_scene_state.$scene_360.css({"cursor": "pointer"});
		}
		else {
			curr_scene_state.$scene_360.css({"cursor": "default"});
		}

	}

	var tweenValue = 0;
	var targetCam = new THREE.Vector3();
	var currLeft = 0.0;
	var currUp = 0.0;
	var angleLeft = 0.0;
	var angleUp = 0.0;
	var moveUp = true;
	var currFov = 0;
	var that = this;

	function onDocumentMouseDown(event) {

		var raycaster = new THREE.Raycaster(); // create once
		var mouse = new THREE.Vector2(); // create once
			
		// update the mouse variable
		mouse.x = ( (event.clientX - (curr_scene_state.$scene.offset().left - $(window).scrollLeft())) / curr_scene_state.$scene.width() ) * 2 - 1;
		mouse.y = - ( (event.clientY - (curr_scene_state.$scene.offset().top - $(window).scrollTop())) / curr_scene_state.$scene.height() ) * 2 + 1;
		
		// console.log("Click.", mouse.x, mouse.y);
		// find intersections

		raycaster.setFromCamera( mouse, camera );

		var intersects = raycaster.intersectObjects( targetList, false );

		// if there is one (or more) intersections
		if ( intersects.length > 0 )
		{
			console.log("Hit @ " + toString( intersects[0].point ) + " on scene " + options.id);

			// Disable mouse click and hover
			curr_scene_state.$scene_360.css({"cursor": "default"});
			domEl.removeEventListener( 'mousemove', onDocumentMouseMove, false );
			domEl.removeEventListener('mousewheel', onMouseWheel, false);
			domEl.removeEventListener('DOMMouseScroll', onMouseWheel, false);
			domEl.removeEventListener( 'mousedown', onDocumentMouseDown, false );

			controls.autoRotate = false;
			controls.enabled = false;

			// Camera Rotation code
			targetCam.copy(new THREE.Vector3(intersects[0].object.camera_coordinates[0],
						intersects[0].object.camera_coordinates[1],
						intersects[0].object.camera_coordinates[2]));

			var currCamPos = new THREE.Vector3();
			currCamPos.copy(camera.position);
			that.angleLeft = Math.atan2((currCamPos.x * targetCam.z - currCamPos.z * targetCam.x), (currCamPos.x * targetCam.x + currCamPos.z * targetCam.z));
			that.angleUp = Math.atan2((currCamPos.y * 1 - currCamPos.x * 0), (currCamPos.y * 0 + currCamPos.x * 1));
			that.angleUp = currCamPos.angleTo(new THREE.Vector3(currCamPos.x,targetCam.y,currCamPos.z));
			if (targetCam.y - currCamPos.y < 0) 
				that.moveUp = false;
			else
				that.moveUp = true;
			
			that.currFov = Number.parseInt(camera.fov);
			that.currLeft = 0.0;
			that.currUp = 0.0;

			that.tweenValue = 0;

			TweenLite.to(that, 1, { tweenValue:1, onUpdate:function() {
				/*	var angle = that.angleLeft * that.tweenValue - that.currLeft;
					controls.rotateLeft(angle);
					that.currLeft += angle;
					angle = that.angleUp * that.tweenValue - that.currUp;
					if (that.moveUp)
						controls.rotateUp(angle);
					else
						controls.rotateUp(-angle);
					that.currUp += angle;
					if (camera.fov > 30)
						camera.fov = that.currFov - (that.currFov - 30) * that.tweenValue;
					camera.updateProjectionMatrix();*/
				},
				onComplete: function() {
					console.log("Goto next panorama " + intersects[0].object.target);
					curr_scene_state.$scene_360.children().first().addClass('prev');
					curr_scene_state.$scene_360.unbind();
					remove();
					render_next_scene(intersects[0].object.target,null, {initialCamPos: intersects[0].object.targetCam});
				}
			});
		}

	}

	return {
		resize: resize,
		remove: remove
	}
};

function fake_loader (start) {
	var intr;
	if (start) {
		fake_loader_stopflag = false;
		fake_loader_perc = 0.0;
		fake_loader_acc = 0.10;
		var interval_count = 0;
		intr = setInterval(function() {
			fake_loader_perc += fake_loader_acc;

			if (fake_loader_perc >= 100.0){
				fake_loader_perc = 100;
				clearInterval(intr);
				intr = undefined;
			}
			else if (fake_loader_perc >= 80 && !fake_loader_stopflag) {
				fake_loader_acc = 0;
			}
			else if (fake_loader_perc >= 70 && !fake_loader_stopflag) {
				fake_loader_acc = 0.075;
			}
			else if (fake_loader_perc >= 50 && !fake_loader_stopflag) {
				fake_loader_acc -= 0.06;
			}
			else {
				fake_loader_acc += 0.05;
			}


			interval_count++;
			if (interval_count == 5){
				console.log(fake_loader_perc);
				$loader.find("p span").html(Math.floor(fake_loader_perc));
				interval_count = 0;
			}
		}, 100);
	}
	else {
		// if (intr != undefined) {
			fake_loader_acc = 10;
			fake_loader_stopflag = true;
		// }
	}
}
