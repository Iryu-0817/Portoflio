let map;
let service;
let infowindow;
let userLocation;

function initMap() {
  // ユーザーの現在位置を取得
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(position => {
      userLocation = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      
    });
}

function initialize() {


  map = new google.maps.Map(document.getElementById('map'), {
      center: userLocation,
      zoom: 15
    });

  var request = {
    location: userLocation,
    radius: '500',
    type: ['cafe']
  };

  service = new google.maps.places.PlacesService(map);
  service.nearbySearch(request, callback);
}

function callback(results, status) {
  if (status == google.maps.places.PlacesServiceStatus.OK) {
    for (var i = 0; i < results.length; i++) {
      createMarker(results[i]);
    }
  }
}

function createMarker(place) {
  // カフェの位置情報がない場合はマーカーを作成しない
  if (!place.geometry || !place.geometry.location) return;

  const marker = new google.maps.Marker({
    map: map,
    position: place.geometry.location,
  });

  // マーカーがクリックされたときに情報ウィンドウを表示
  google.maps.event.addListener(marker, "click", () => {
    infowindow.setContent(place.name || "");
    infowindow.open(map, marker);
  });

 }
}
