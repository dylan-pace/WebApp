<?php
include 'header.php';

if (!isset($_SESSION['admin_id'])&&empty($_SESSION['admin_id'])){

    print "You do not have permisson to access this page.";
    header("location: login.php");
    
}
?>

<h3>API page</h3>

  <link rel="stylesheet" href="assets/jquery/jq/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
  } );
  </script>

<div id="accordion">
  <h3>Weather API</h3>
  <div>
      
      
      <h2>Search a city for weather:</h2>
    <form name="form1" method="GET" action="API.php"> 
    <p>Search city: <input name="searchCity"  type="text" id="searchTitle" size="15"></p> 
    </form>
    
      <?php
      
      $city = $_GET['searchCity'];
      
      $content =  file_get_contents("http://api.apixu.com/v1/current.json?key=1b59ef589249472c909111432181011&q=".$city);
  
    function get_string_between($string, $start, $end){
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }
    
    $location = get_string_between($content, 'name":"', '","region');
    
    echo "Location: ".$location;
    echo '<br/>';
    
    $celsius = get_string_between($content, '"temp_c":', ',"temp_f');
    
    echo "Degrees in celsius: ".$celsius;
    echo '<br/>';
    
    $condition = get_string_between($content, 'condition":{"text":"', '","icon"');
    
    echo "Weather condition: ".$condition;
    ?>
    
    
  </div>
  <h3>Twitter API</h3>
  <div>
    <a class="twitter-timeline" data-width="350" data-height="500" data-theme="dark" href="https://twitter.com/TwitterDev?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  </div>
  <h3>Google Maps API</h3>
  <div>
      
      <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .title {
        font-weight: bold;
      }
      #infowindow-content {
        display: none;
      }
      #map #infowindow-content {
        display: inline;
      }
    </style>
      
<div id="map"></div>
    <div id="infowindow-content">
      <img id="place-icon" src="" height="16" width="16">
      <span id="place-name"  class="title"></span><br>
      Place ID <span id="place-id"></span><br>
      <span id="place-address"></span>
    </div>
    <script>
      function initMap() {
        var origin = {lat: 53.8270, lng: -1.5945};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: origin
        });
        var clickHandler = new ClickEventHandler(map, origin);
      }

      /**
       * @constructor
       */
      var ClickEventHandler = function(map, origin) {
        this.origin = origin;
        this.map = map;
        this.directionsService = new google.maps.DirectionsService;
        this.directionsDisplay = new google.maps.DirectionsRenderer;
        this.directionsDisplay.setMap(map);
        this.placesService = new google.maps.places.PlacesService(map);
        this.infowindow = new google.maps.InfoWindow;
        this.infowindowContent = document.getElementById('infowindow-content');
        this.infowindow.setContent(this.infowindowContent);

        // Listen for clicks on the map.
        this.map.addListener('click', this.handleClick.bind(this));
      };

      ClickEventHandler.prototype.handleClick = function(event) {
        console.log('You clicked on: ' + event.latLng);
        // If the event has a placeId, use it.
        if (event.placeId) {
          console.log('You clicked on place:' + event.placeId);

          // Calling e.stop() on the event prevents the default info window from
          // showing.
          // If you call stop here when there is no placeId you will prevent some
          // other map click event handlers from receiving the event.
          event.stop();
          this.calculateAndDisplayRoute(event.placeId);
          this.getPlaceInformation(event.placeId);
        }
      };

      ClickEventHandler.prototype.calculateAndDisplayRoute = function(placeId) {
        var me = this;
        this.directionsService.route({
          origin: this.origin,
          destination: {placeId: placeId},
          travelMode: 'WALKING'
        }, function(response, status) {
          if (status === 'OK') {
            me.directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      };

      ClickEventHandler.prototype.getPlaceInformation = function(placeId) {
        var me = this;
        this.placesService.getDetails({placeId: placeId}, function(place, status) {
          if (status === 'OK') {
            me.infowindow.close();
            me.infowindow.setPosition(place.geometry.location);
            me.infowindowContent.children['place-icon'].src = place.icon;
            me.infowindowContent.children['place-name'].textContent = place.name;
            me.infowindowContent.children['place-id'].textContent = place.place_id;
            me.infowindowContent.children['place-address'].textContent =
                place.formatted_address;
            me.infowindow.open(me.map);
          }
        });
      };
    </script>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAez4fnjAZ7HhpR7FYpo6UgxFb75muv3NE&libraries=places&callback=initMap"
        async defer></script>
  </div>
  <h3>Date Picker</h3>
  <div>
      
       <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
      
  </script>
  

</head>
<body>
 
<p>Date: <input type="text" id="datepicker"></p>
 
    
  </div>
</div>


<?php
include 'footer.php';
?>