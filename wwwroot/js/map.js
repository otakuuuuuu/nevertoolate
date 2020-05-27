/* 
 * Linked to map.php
 * Last Modified: 27 May 2020
*/

window.onload = function() {
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
        
      map.addControl(geocoder, 'top-left');
      map.on('load', function (e) {
          // This is where your '.addLayer()' used to be, instead add only the source without styling a layer
          map.addSource("places2", {
            "type": "geojson",
            "data": place2
          });
          map.addSource("places1", {
            "type": "geojson",
            "data": place1
          });
          map.addSource("places3", {
            "type": "geojson",
            "data": place3
          });
          // Initialize the list  
      });
     
      var locationDiv1 = document.getElementById("location1");
      locationDiv1.onclick=function() {
        document.getElementById("drop").innerHTML = "Dietitian"
        //call back the map size and recenter
        callback();
        //remove the popup
        var re = document.getElementsByClassName('mapboxgl-popup'); 
        for (var i = re.length-1;i >=0;i--) { 
          re[i].remove(); 
            
        } 
        //remove the list
        var re = document.getElementsByClassName('item'); 
        for (var i = re.length-1;i >=0;i--) { 
          re[i].remove(); 
            
        } 
        buildLocationList(place1);
       
        //remove the marker
        var re = document.getElementsByClassName('markerred mapboxgl-marker mapboxgl-marker-anchor-center'); 
        for (var i = re.length - 1;i >= 0;i--) { 
          re[i].remove(); 
            
        }
        var re = document.getElementsByClassName('markerblue mapboxgl-marker mapboxgl-marker-anchor-center'); 
        for (var i = re.length - 1;i >= 0;i--) { 
          re[i].remove(); 
            
        }
        var re = document.getElementsByClassName('markergreen mapboxgl-marker mapboxgl-marker-anchor-center'); 
        for (var i = re.length - 1;i >= 0;i--) { 
          re[i].remove(); 
            
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
          
      }   
      var re = document.getElementsByClassName('item'); 
      for (var i = re.length-1;i >=0;i--) { 
        re[i].remove(); 
          
      } 
    
      buildLocationList(place2);
    
    
      //remove the marker
      var re = document.getElementsByClassName('markerred mapboxgl-marker mapboxgl-marker-anchor-center'); 
      for (var i = re.length - 1;i >= 0;i--) { 
        re[i].remove(); 
          
      }
      var re = document.getElementsByClassName('markerblue mapboxgl-marker mapboxgl-marker-anchor-center'); 
      for (var i = re.length - 1;i >= 0;i--) { 
        re[i].remove(); 
          
      }
      var re = document.getElementsByClassName('markergreen mapboxgl-marker mapboxgl-marker-anchor-center'); 
      for (var i = re.length - 1;i >= 0;i--) { 
        re[i].remove(); 
          
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
          
      } 
    
      var re = document.getElementsByClassName('item'); 
      for (var i = re.length - 1;i >= 0;i--) { 
        re[i].remove(); 
          
      } 
      var re = document.getElementsByClassName('markerred mapboxgl-marker mapboxgl-marker-anchor-center'); 
      for (var i = re.length - 1;i >= 0;i--) { 
        re[i].remove(); 
          
      }
      var re = document.getElementsByClassName('markerblue mapboxgl-marker mapboxgl-marker-anchor-center'); 
      for (var i = re.length - 1;i >= 0;i--) { 
        re[i].remove(); 
          
      }
      var re = document.getElementsByClassName('markergreen mapboxgl-marker mapboxgl-marker-anchor-center'); 
      for (var i = re.length-1;i >=0;i--) { 
        re[i].remove(); 
          
      }
    buildLocationList(place3);
    
    
      // Initialize the list
    
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
          
      } 
      var re = document.getElementsByClassName('markerred mapboxgl-marker mapboxgl-marker-anchor-center'); 
      for (var i = re.length - 1;i >= 0;i--) { 
        re[i].remove(); 
          
      }
      var re = document.getElementsByClassName('markerblue mapboxgl-marker mapboxgl-marker-anchor-center'); 
      for (var i = re.length - 1;i >= 0;i--) { 
        re[i].remove(); 
          
      }
      var re = document.getElementsByClassName('markergreen mapboxgl-marker mapboxgl-marker-anchor-center'); 
      for (var i = re.length-1;i >=0;i--) { 
        re[i].remove(); 
          
      }
      //remove the list
      var re = document.getElementsByClassName('item'); 
      for (var i = re.length-1;i >=0;i--) { 
        re[i].remove(); 
          
      } 
    
      buildLocationList(place1);
      // This adds the data to the map
    
          // Initialize the list
    
      buildLocationList(place2);
    
      buildLocationList(place3);
      // This adds the data to the map
    
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
};