<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Example</title>
  <script type="text/javascript"
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXQmYEQ82h9L8QoggkpabFlypyS3QPASo&callback=Function.prototype"></script>
  <script src="https://unpkg.com/location-picker/dist/location-picker.min.js"></script>
  <style type="text/css">
    #map {
      width: 100%;
      height: 480px;
    }
  </style>
</head>

<body>
<div id="map"></div>
<br>
<button id="confirmPosition">تأكيد العنوان</button>
<br>
<p>العنوان: <span id="onIdlePositionView"></span></p>
<p>العنوان المؤكد : <span id="onClickPositionView"></span></p>
<script>
  // Get element references

var x,y;
  navigator.geolocation.getCurrentPosition((position)=> {
    const p=position.coords;
    console.log(p.latitude,p.longitude);
    x=p.latitude;
    y=p.longitude;
    //alert(x+"   "+y);
})
  var confirmBtn = document.getElementById('confirmPosition');
  var onClickPositionView = document.getElementById('onClickPositionView');
  var onIdlePositionView = document.getElementById('onIdlePositionView');
  var map = document.getElementById('map');

  // Initialize LocationPicker plugin
  var lp = new locationPicker(map, {
    setCurrentPosition: true, // You can omit this, defaults to true
    lat: x,
    lng: y
  }, {
    zoom: 15 // You can set any google map options here, zoom defaults to 15
  });

  // Listen to button onclick event
  confirmBtn.onclick = function () {
    // Get current location and show it in HTML
    var location = lp.getMarkerPosition();
    onClickPositionView.innerHTML = '' + location.lat + ',' + location.lng;
    localStorage.setItem("final_x", location.lat);
    localStorage.setItem("final_y", location.lng);
    //alert(localStorage.getItem("final_y"));




    window.location.replace("index.php") ;









  };

  // Listen to map idle event, listening to idle event more accurate than listening to ondrag event
  google.maps.event.addListener(lp.map, 'idle', function (event) {
    // Get current location and show it in HTML
    var location = lp.getMarkerPosition();
    onIdlePositionView.innerHTML = '' + location.lat + ',' + location.lng;

  
  });
</script>

</body>
</html>
