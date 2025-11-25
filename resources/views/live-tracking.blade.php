<!DOCTYPE html>
<html>
<head>
    <title>Live Tracker</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>
</head>
<body>

<div id="map" style="height:600px;"></div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
@vite(['resources/js/app.js'])

<script type="module">

var map = L.map('map').setView([23.8103, 90.4125], 13);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

var marker = L.marker([23.8103, 90.4125]).addTo(map);

window.Echo.channel('tracker')
    .listen('.location.updated', (e) => {
        console.log("Received:", e);
        marker.setLatLng([e.lat, e.lng]);
    });

</script>



<script>
let lat = 23.8103;
let lng = 90.4125;

// Increment step (0.0001)
const step = 0.00001;

setInterval(function() {
    // Increment coordinates
    lat += step;
    // lng += step;

    fetch(`/update-location?user_id=1&lat=${lat}&lng=${lng}`)
        .then(response => response.json())
        .then(data => {
            console.log('Location updated:', data, 'Lat:', lat, 'Lng:', lng);
        });
}, 2000); // every 3 seconds
</script>
</body>
</html>
