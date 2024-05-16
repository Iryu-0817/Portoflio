document.getElementById('search-button').addEventListener('click', function(event) {
    event.preventDefault();
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            
            // 下記のコードはフォーム内のhiddenフィールドの値を現在地の緯度と経度で書き換えている。
            document.getElementById('latitude').value = position.coords.latitude;
            document.getElementById('longitude').value = position.coords.longitude;
            document.getElementById('search-form').submit();
        }, function(error) {
            console.error('Geolocation error: ' + error.message);
            alert('現在地を取得できませんでした。位置情報の利用を許可してください。');
        });
    } else {
        alert('Geolocationはこのブラウザではサポートされていません。');
    }
});