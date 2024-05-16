<!DOCTYPE html>
        <html lang="jp">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Cafe Search</title>
                <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
                <link rel="stylesheet" href="{{ asset('css/top-page.css') }}">
                <link rel="stylesheet" href="{{ asset ('css/output.css') }}">

                <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" />
                <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto Sans:weight@400&display=swap" /> -->
                <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" />
            </head>

            <header>
                        <div class="cafe-search-parent">
                            <d class="cafe-search">Cafe Search</d>

                            <!-- ハンバーガーメニュー -->
                            <div class="hotdog">

                                <!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
                                <input id="drawer_input" class="drawer_hidden" type="checkbox">
                                
                                <!-- ハンバーガーアイコン -->
                                <label for="drawer_input" class="drawer_open"><span></span></label>

                                <!-- メニュー -->
                                <nav class="nav_content">
                                <ul class="nav_list">
                                    <li class="nav_item"><a href="">Home</a></li>
                                    <li class="nav_item"><a href="">About Service</a></li>
                                    <li class="nav_item"><a href="">Profile</a></li>
                                </ul>
                                </nav>
                            </div>
                        </div>
            </header>

            <body>
                <div class="toggle-button">
                    <button type="button" onclick="window.location.href='/cafe-list'" class="btn btn-primary btn-sm">一覧表示</button>
                    <button type="button" onclick="window.location.href='/cafe-list/map'" class="btn btn-secondary btn-sm">地図表示</button>
                </div>

                <div class="your-distance">
                    <span>現在地から</span>
                    <span>〇〇km</span>
                    <span>圏内のカフェ</span>
                </div>

                
                <div id="map" style="height: 630px; width:auto; margin-top: 20px;"></div>

                


                <script src="{{ asset('js/map.js') }}"></script>
                <script
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWPKDhRX8k1kn24gVasffU0TSaiB9VsrQ&callback=initMap&libraries=places&v=weekly"
                    defer
                ></script>
            </body>

            <footer>
            </footer>

        </html>