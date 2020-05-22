<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->   
    <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/flaticon/flaticon.css">
    <link rel="stylesheet" href="vendors/slick/slick.css">
    <link rel="stylesheet" href="vendors/slick/slick-theme.css">
    <link rel="stylesheet" href="vendors/magnify-pop/magnific-popup.css">
    <link rel="stylesheet" href="css/style.css?v=16">
    <link rel="stylesheet" href="css/responsive.css">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet'>
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.2.1/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.2.1/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.1/mapbox-gl-geocoder.min.js'></script>
    <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.1/mapbox-gl-geocoder.css' type='text/css' />
    
    <title>never too late</title>
    
    
    <style>
  
        * {
          -webkit-box-sizing:border-box;
          -moz-box-sizing:border-box;
          box-sizing:border-box;
        }
        #mp{
          margin-top: 5%;
          margin-bottom: 5%;
        }
        .sidebar {
       
         
          width:25%;
          height:633px;
          overflow:hidden;
          border-right:1px solid rgba(0,0,0,0.25);
        }
        .pad2 {
          padding:20px;
        }

        .map {
        
         
          width:75%;
          height:633px;
        }

        h1 {
          font-size:25px;
          margin:0;
          font:400;
          line-height: 20px;
          padding: 20px 2px;
        }

        a {
          color:#404040;
          text-decoration:none;
        }

        a:hover {
          color:#101010;
        }

        .heading {
          background:#fff;
          border-bottom:1px solid #eee;
          min-height:60px;
          line-height:60px;
          padding:0 10px;
          background-color: rgb(223, 238, 240);
          color: #fff;
        }

        .listings {
          
          height:100%;
          overflow:auto;
          padding-bottom:60px;
        }

        .listings .item {
          display:block;
          border-bottom:1px solid #eee;
          padding:10px;
          text-decoration:none;
        }

        .listings .item:last-child { border-bottom:none; }
        .listings .item .title {
          display:block;
          color:#00853e;
          font-weight:700;
        }

        .listings .item .title small { font-weight:400; }
        .listings .item.active .title,
        .listings .item .title:hover { color:#8cc63f; }
        .listings .item.active {
          background-color:#f8f8f8;
        }

        .markerred {
          border: none;
          cursor: pointer;
          height: 36px;
          width: 32px;
          background-image: url(img/markerred.png);
          background-color: rgba(0, 0, 0, 0);
        }
        .markerblue {
          border: none;
          cursor: pointer;
          height: 36px;
          width: 32px;
          background-image: url(img/markerblue.png);
          background-color: rgba(0, 0, 0, 0);
        }
        .markergreen {
          border: none;
          cursor: pointer;
          height: 36px;
          width: 32px;
          background-image: url(img/markergreen.png);
          background-color: rgba(0, 0, 0, 0);
        }
        .clearfix { display:block; }
        .clearfix:after {
          content:'.';
          display:block;
          height:0;
          clear:both;
          visibility:hidden;
        }

        /* Marker tweaks */
        .mapboxgl-popup {
          padding-bottom: 50px;
        }

        .mapboxgl-popup-close-button {
          display:none;
        }
        .mapboxgl-popup-content {
          font:400 15px/22px 'Source Sans Pro', 'Helvetica Neue', Sans-serif;
          padding:0;
          width:300px;
        }
        .mapboxgl-popup-content-wrapper {
          padding:1%;
        }
        .mapboxgl-popup-content h3 {
          background:#91c949;
          color:#fff;
          margin:0;
          display:block;
          padding:10px;
          border-radius:3px 3px 0 0;
          font-size: 20px;
          font:100;
          margin-top:-15px;
        }

        .mapboxgl-popup-content h4 {
          margin:0;
          display:block;
          padding: 10px 10px 10px 10px;
          font-size: 15px;
          font-weight:50;
        }

        .mapboxgl-popup-content div {
          padding:10px;
        }

        .mapboxgl-container .leaflet-marker-icon {
          cursor:pointer;
        }

        .mapboxgl-popup-anchor-top > .mapboxgl-popup-content {
          margin-top: 15px;
        }

        .mapboxgl-popup-anchor-top > .mapboxgl-popup-tip {
          border-bottom-color: #91c949;
        }

        .icon {
          position:absolute;
        }
      </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg" id="header">
        <div class="container">
         <a href="index.php"><img src="img/logohealth.png" alt=""></a>
            
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu_toggle">
                    <span class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <span class="hamburger-cross">
                        <span></span>
                        <span></span>
                    </span>
                </span>
            </button></button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="calculator.php">Nutrition Calculator</a></li>
                    <li class="nav-item"><a class="nav-link" href="recipe.php">recipe</a></li>
                    <li class="nav-item"><a class="nav-link" href="map.php">Map</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation Bar -->
    
    <!-- Breadcrumb Area -->
    <section class="breadcrumb_area parallax_effect"  style="background: url(img/slider_img2.jpg) no-repeat;">
        <div class="overlay_bg"></div>
        <div class="container">
            <div class="breadcrumb_content text-center">
                <h1>Map</h1>
                <ol class="breadcrumb"> 
                  <li class="active" style=" font-size: 35px;">Enter your location to locate nearest dietitians, farmers markets and health food stores.</li> 
                </ol>
                  <a class="theme_btn" href="#mp" style="margin-top: 50px;">Get Started</a>
            </div>
        </div>
        <div id="mp"></div>
    </section>
    <!-- Breadcrumb Area -->

    <!-- Map Area -->
    <div class="row col-md-12" id="mp">
      <div class='sidebar col-md-3'>
        <div class='heading'>
          <div class="dropdown" id="mapaa"><img src="img/filter.png"> &nbsp
          <button type="button" class="btn btn-primary dropdown-toggle" id="drop" data-toggle="dropdown">Category</button>
          
              <div class="dropdown-menu">
                  <a class="dropdown-item" id="location1">Dietitian</a>
                  <a class="dropdown-item" id="location2">Farmers Market</a>
                  <a class="dropdown-item" id="location3">Health Food Store</a>
                  <a class="dropdown-item" id="location">Show All</a>
              </div>
          </div>
        </div>
        <div id='listings' class='listings'></div>
      </div>
      <div id='map' class='map col-md-9'></div>
    </div>
    <!-- Map Area -->

    <!-- Footer Area -->
    <footer class="footer_area">

        <div class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <p>Copyright © 2020 All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-7 col-md-6 text-right">
                        <ul class="list-unstyled f_menu">
                            <li><a href="calculator.php">Nutrition Calculator</a></li>
                            <li><a href="recipe.php">Recipes</a></li>
                            <li><a href="map.php">Map</a></li>
                            <li><a href="disclaimer.php">Disclaimer</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area -->
    
<script>
  if (!('remove' in Element.prototype)) {
    Element.prototype.remove = function() {
      if (this.parentNode) {
        this.parentNode.removeChild(this);
      }
    };
  }
  mapboxgl.accessToken = 'pk.eyJ1Ijoic2t5bGVvcyIsImEiOiJjazh4YWJxc2gwNDM0M2VtODlkMHNtMGpzIn0.yhcNd5xlxqKfljZx8KhQ_Q';

  // This adds the map
  var map = new mapboxgl.Map({
    // container id specified in the HTML
    container: 'map',
    // style URL
    style: 'mapbox://styles/mapbox/streets-v11',
    // initial position in [long, lat] format
    center: ["144.96681", "-37.818078"],
    // initial zoom
    zoom: 13,
    scrollZoom: true
  });
  var geocoder = new MapboxGeocoder({
    accessToken: mapboxgl.accessToken,
    language: 'en-EN',
    mapboxgl: mapboxgl
    });
    
  map.addControl(geocoder, 'top-left');<?php include 'Dietitian.php';include 'Farmers.php';include 'HealthFood.php';?>
  var place1 = <?php echo($Dietitian);?>;
  var place2 = <?php echo($Farmers);?>;
  var place3= <?php echo($HealthFood);?>;



  var locationDiv1 = document.getElementById("location1");
  locationDiv1.onclick=function() {
    document.getElementById("drop").innerHTML = "Dietitian"
    //call back the map size and recenter
    callback();
    //remove the popup
    var re = document.getElementsByClassName('mapboxgl-popup'); 
    for (var i = re.length-1;i >=0;i--) { 
      re[i].remove(); 
      console.log(i); 
    } 
    //remove the list
    var re = document.getElementsByClassName('item'); 
    for (var i = re.length-1;i >=0;i--) { 
      re[i].remove(); 
      console.log(i); 
    } 
    buildLocationList(place1);
    
    // This adds the data to the map
    map.on('load', function (e) {
    // This is where your '.addLayer()' used to be, instead add only the source without styling a layer
      map.addSource("places", {
        "type": "geojson",
        "data": place1
      });
    // Initialize the list
    });

    //remove the marker
    var re = document.getElementsByClassName('markerred mapboxgl-marker mapboxgl-marker-anchor-center'); 
    for (var i = re.length - 1;i >= 0;i--) { 
      re[i].remove(); 
      console.log(i); 
    }
    var re = document.getElementsByClassName('markerblue mapboxgl-marker mapboxgl-marker-anchor-center'); 
    for (var i = re.length - 1;i >= 0;i--) { 
      re[i].remove(); 
      console.log(i); 
    }
    var re = document.getElementsByClassName('markergreen mapboxgl-marker mapboxgl-marker-anchor-center'); 
    for (var i = re.length - 1;i >= 0;i--) { 
      re[i].remove(); 
      console.log(i); 
    }
    
    // Interactions with DOM markers
    place1.features.forEach(function(marker, i) {
      // Create an img element for the marker
      var el = document.createElement('div');
      el.id = "marker-" + i;
      el.className = 'markerred';
      // Add markers to the map at all points
      new mapboxgl.Marker(el, {offset: [0, -23]}).setLngLat(marker.geometry.coordinates).addTo(map);
      el.addEventListener('click', function(e){
        // 1. Fly to the point
        flyToStore(marker);
        // 2. Close all other popups and display popup for clicked place
        createPopUp(marker);
        // 3. Highlight listing in sidebar (and remove highlight for all other listings)
        var activeItem = document.getElementsByClassName('active');
        e.stopPropagation();
        if (activeItem[0]) {
           activeItem[0].classList.remove('active');
        }
        var listing = document.getElementById('listing-' + i);
        listing.classList.add('active');
    });
  });
}

  //second category shown on the map
  var locationDiv2 = document.getElementById("location2");
  locationDiv2.onclick=function(){
    //call back the map size and recenter
    callback();

  document.getElementById("drop").innerHTML = "Farmers market"
  //remove the popup
  var re = document.getElementsByClassName('mapboxgl-popup'); 
  for (var i = re.length-1;i >=0;i--) { 
    re[i].remove(); 
    console.log(i); 
  }   
  var re = document.getElementsByClassName('item'); 
  for (var i = re.length-1;i >=0;i--) { 
    re[i].remove(); 
    console.log(i); 
  } 

  buildLocationList(place2);
    // This adds the data to the map
    map.on('load', function (e) {
      // This is where your '.addLayer()' used to be, instead add only the source without styling a layer
      map.addSource("places", {
        "type": "geojson",
        "data": place2
      });
      // Initialize the list  
  });

  //remove the marker
  var re = document.getElementsByClassName('markerred mapboxgl-marker mapboxgl-marker-anchor-center'); 
  for (var i = re.length - 1;i >= 0;i--) { 
    re[i].remove(); 
    console.log(i); 
  }
  var re = document.getElementsByClassName('markerblue mapboxgl-marker mapboxgl-marker-anchor-center'); 
  for (var i = re.length - 1;i >= 0;i--) { 
    re[i].remove(); 
    console.log(i); 
  }
  var re = document.getElementsByClassName('markergreen mapboxgl-marker mapboxgl-marker-anchor-center'); 
  for (var i = re.length - 1;i >= 0;i--) { 
    re[i].remove(); 
    console.log(i); 
  }

  // Interactions with DOM markers
  place2.features.forEach(function(marker, i) {
    // Create an img element for the marker
    var el = document.createElement('div');
    el.id = "marker-" + i;
    el.className = 'markerblue';
    // Add markers to the map at all points
    new mapboxgl.Marker(el, {offset: [0, -23]}).setLngLat(marker.geometry.coordinates).addTo(map);
    el.addEventListener('click', function(e){
        // 1. Fly to the point
        flyToStore(marker);
        // 2. Close all other popups and display popup for clicked place
        createPopUp(marker);
        // 3. Highlight listing in sidebar (and remove highlight for all other listings)
        var activeItem = document.getElementsByClassName('active');
        e.stopPropagation();
        if (activeItem[0]) {
           activeItem[0].classList.remove('active');
        }
        var listing = document.getElementById('listing-' + i);
        listing.classList.add('active');
    });
  });  
}

  //third category shown on the map
  var locationDiv3 = document.getElementById("location3");
  locationDiv3.onclick=function(){
    //call back the map size and recenter
    callback();
  document.getElementById("drop").innerHTML = "Health food store"
  //remove the popup
  var re = document.getElementsByClassName('mapboxgl-popup'); 
  for (var i = re.length-1;i >=0;i--) { 
    re[i].remove(); 
    console.log(i); 
  } 

  var re = document.getElementsByClassName('item'); 
  for (var i = re.length - 1;i >= 0;i--) { 
    re[i].remove(); 
    console.log(i); 
  } 
  var re = document.getElementsByClassName('markerred mapboxgl-marker mapboxgl-marker-anchor-center'); 
  for (var i = re.length - 1;i >= 0;i--) { 
    re[i].remove(); 
    console.log(i); 
  }
  var re = document.getElementsByClassName('markerblue mapboxgl-marker mapboxgl-marker-anchor-center'); 
  for (var i = re.length - 1;i >= 0;i--) { 
    re[i].remove(); 
    console.log(i); 
  }
  var re = document.getElementsByClassName('markergreen mapboxgl-marker mapboxgl-marker-anchor-center'); 
  for (var i = re.length-1;i >=0;i--) { 
    re[i].remove(); 
    console.log(i); 
  }
buildLocationList(place3);

  // This adds the data to the map
  map.on('load', function (e) {
    // This is where your '.addLayer()' used to be, instead add only the source without styling a layer
    map.addSource("places", {
      "type": "geojson",
      "data": place3
    });
    // Initialize the list
    buildLocationList(place3);
});
  //remove the marker

  // Interactions with DOM markers
  place3.features.forEach(function(marker, i) {
    // Create an img element for the marker
    var el = document.createElement('div');
    el.id = "marker-" + i;
    el.className = 'markergreen';
    // Add markers to the map at all points
    new mapboxgl.Marker(el, {offset: [0, -23]}).setLngLat(marker.geometry.coordinates).addTo(map);
    el.addEventListener('click', function(e){
        // 1. Fly to the point
        flyToStore(marker);
        // 2. Close all other popups and display popup for clicked place
        createPopUp(marker);
        // 3. Highlight listing in sidebar (and remove highlight for all other listings)
        var activeItem = document.getElementsByClassName('active');
        e.stopPropagation();
        if (activeItem[0]) {
           activeItem[0].classList.remove('active');
        }
        var listing = document.getElementById('listing-' + i);
        listing.classList.add('active');
    });
  });
}
  var locationDiv = document.getElementById("location");
  locationDiv.onclick=function(){
    //call back the map size and recenter
    callback();
  document.getElementById("drop").innerHTML = "All Locations"
  //remove the popup
  var re = document.getElementsByClassName('mapboxgl-popup'); 
  for (var i = re.length - 1;i >= 0;i--) { 
    re[i].remove(); 
    console.log(i); 
  } 
  var re = document.getElementsByClassName('markerred mapboxgl-marker mapboxgl-marker-anchor-center'); 
  for (var i = re.length - 1;i >= 0;i--) { 
    re[i].remove(); 
    console.log(i); 
  }
  var re = document.getElementsByClassName('markerblue mapboxgl-marker mapboxgl-marker-anchor-center'); 
  for (var i = re.length - 1;i >= 0;i--) { 
    re[i].remove(); 
    console.log(i); 
  }
  var re = document.getElementsByClassName('markergreen mapboxgl-marker mapboxgl-marker-anchor-center'); 
  for (var i = re.length-1;i >=0;i--) { 
    re[i].remove(); 
    console.log(i); 
  }
  //remove the list
  var re = document.getElementsByClassName('item'); 
  for (var i = re.length-1;i >=0;i--) { 
    re[i].remove(); 
    console.log(i); 
  } 

  buildLocationList(place1);
  // This adds the data to the map
  map.on('load', function (e) {
      // This is where your '.addLayer()' used to be, instead add only the source without styling a layer
      map.addSource("places", {
        "type": "geojson",
        "data": place1
      });
      // Initialize the list
  });
  buildLocationList(place2);
  // This adds the data to the map
  map.on('load', function (e) {
      // This is where your '.addLayer()' used to be, instead add only the source without styling a layer
      map.addSource("places", {
        "type": "geojson",
        "data": place3
      });
      // Initialize the list
  });
  buildLocationList(place3);
  // This adds the data to the map
  map.on('load', function (e) {
      // This is where your '.addLayer()' used to be, instead add only the source without styling a layer
      map.addSource("places", {
        "type": "geojson",
        "data": place3
      });
      // Initialize the list
  });
//remove the marker

  // Interactions with DOM markers
  place1.features.forEach(function(marker, i) {
    // Create an img element for the marker
    var el = document.createElement('div');
    el.id = "marker-" + i;
    el.className = 'markerred';
    // Add markers to the map at all points
    new mapboxgl.Marker(el, {offset: [0, -23]}).setLngLat(marker.geometry.coordinates).addTo(map);
    el.addEventListener('click', function(e){
        // 1. Fly to the point
        flyToStore(marker);
        // 2. Close all other popups and display popup for clicked place
        createPopUp(marker);
        // 3. Highlight listing in sidebar (and remove highlight for all other listings)
        var activeItem = document.getElementsByClassName('active');
        e.stopPropagation();
        if (activeItem[0]) {
           activeItem[0].classList.remove('active');
        }
        var listing = document.getElementById('listing-' + i);
        listing.classList.add('active');
    });
});
   place2.features.forEach(function(marker, i) {
    // Create an img element for the marker
    var el = document.createElement('div');
    el.id = "marker-" + i;
    el.className = 'markerblue';
    // Add markers to the map at all points
    new mapboxgl.Marker(el, {offset: [0, -23]})
        .setLngLat(marker.geometry.coordinates)
        .addTo(map);
    el.addEventListener('click', function(e){
        // 1. Fly to the point
        flyToStore(marker);
        // 2. Close all other popups and display popup for clicked place
        createPopUp(marker);
        // 3. Highlight listing in sidebar (and remove highlight for all other listings)
        var activeItem = document.getElementsByClassName('active');
        e.stopPropagation();
        if (activeItem[0]) {
           activeItem[0].classList.remove('active');
        }
        var listing = document.getElementById('listing-' + i);
        listing.classList.add('active');
    });
  });
   place3.features.forEach(function(marker, i) {
    // Create an img element for the marker
    var el = document.createElement('div');
    el.id = "marker-" + i;
    el.className = 'markergreen';
    // Add markers to the map at all points
    new mapboxgl.Marker(el, {offset: [0, -23]})
        .setLngLat(marker.geometry.coordinates)
        .addTo(map);
    el.addEventListener('click', function(e){
        // 1. Fly to the point
        flyToStore(marker);
        // 2. Close all other popups and display popup for clicked place
        createPopUp(marker);
        // 3. Highlight listing in sidebar (and remove highlight for all other listings)
        var activeItem = document.getElementsByClassName('active');
        e.stopPropagation();
        if (activeItem[0]) {
           activeItem[0].classList.remove('active');
        }
        var listing = document.getElementById('listing-' + i);
        listing.classList.add('active');
    });
  });
}
 
  //focus on the point that user select
    function flyToStore(currentFeature) {
      map.flyTo({
          center: currentFeature.geometry.coordinates,
          zoom: 15
        });
    }
  
  //call back the map size, and recenter
    function callback() {
      map.flyTo({
        center: ["144.96681", "-37.818078"],
        zoom: 13
        });
    }

  function createPopUp(currentFeature) {
    var popUps = document.getElementsByClassName('mapboxgl-popup');
    if (popUps[0]) popUps[0].remove();
    
    var popup = new mapboxgl.Popup({closeOnClick: false})
          .setLngLat(currentFeature.geometry.coordinates)
          .setHTML('<h3>' + currentFeature.properties.Sub_Theme + '</h3>' +
            '<h4>' + currentFeature.properties.Feature_Name + '</h4>'+
            '<h4>Address : ' + currentFeature.properties.Address + '</h4>'+
            '<h4>Website : ' + currentFeature.properties.Website + '</h4>'+
            '<h4>Phone : ' + currentFeature.properties.Phone + '</h4>')
          .addTo(map);
  }

  function buildLocationList(data) {
    for (i = 0; i < data.features.length; i++) {
      var currentFeature = data.features[i];
      var prop = currentFeature.properties;
      var listings = document.getElementById('listings');
      var listing = listings.appendChild(document.createElement('div'));
      listing.className = 'item';
      listing.id = "listing-" + i;
      var link = listing.appendChild(document.createElement('a'));
      link.href = '#mp';
      link.className = 'title';
      link.dataPosition = i;
      link.innerHTML = prop.Sub_Theme;
      var details = listing.appendChild(document.createElement('div'));
      details.innerHTML = prop.Feature_Name;
      if (prop.phone) {
        details.innerHTML += ' &middot; ' + prop.phoneFormatted;
      }

      link.addEventListener('click', function(e){
        // Update the currentFeature to the place associated with the clicked link
        var clickedListing = data.features[this.dataPosition];
        // 1. Fly to the point
        flyToStore(clickedListing);
        // 2. Close all other popups and display popup for clicked place
        createPopUp(clickedListing);
        // 3. Highlight listing in sidebar (and remove highlight for all other listings)
        var activeItem = document.getElementsByClassName('active');
        if (activeItem[0]) {
           activeItem[0].classList.remove('active');
        }
        this.parentNode.classList.add('active');
      });
    }
  }
  document.getElementById("location").click();

</script>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="static/jquery-3.2.1.min.js"></script>
    <script src="vendors/bootstrap/js/popper.min.js"></script>
    <script src="vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.parallax-scroll.js"></script>
    <script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/slick/slick.min.js"></script>
    <script src="js/parallaxie.js"></script>
    <script src="vendors/counterup/jquery.counterup.min.js"></script>
    <script src="vendors/counterup/jquery.waypoints.min.js"></script>
    <script src="vendors/magnify-pop/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>