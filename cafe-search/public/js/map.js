// Load the Google Maps API script
function loadMapScript() {
    const script = document.createElement('script');
    script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBWPKDhRX8k1kn24gVasffU0TSaiB9VsrQ&callback=initMap';
    script.defer = true;
    script.async = true;
    document.head.appendChild(script);
}

// Initialize the map
function initMap() {
    const mapOptions = {
        center: {lat: 35.6585769, lng: 139.7454506}, // Set the initial map center
        zoom: 15 // Set the initial zoom level
    };

    const map = new google.maps.Map(document.getElementById('map'), mapOptions);
}

// Load the map script
loadMapScript();

