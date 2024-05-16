    <!DOCTYPE html>
        <html lang="jp">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Cafe Search</title>
                <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
                <link rel="stylesheet" href="{{ asset('css/top-page.css') }}">

                <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" />
                <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto Sans:weight@400&display=swap" />
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
                

                <div class="iphone-14-15-pro-3">
                    <b class="b">近くのカフェを検索する</b>
                    <a href="javascript:void(0);" id="search-button" class="rectangle-parent">
                        <div class="group-child"></div>
                        <b class="search"> Search</b>
                    </a>
                    
                    <a href="{{ route('cafe-search-2') }}" class="div">キーワード入力の場合はこちら</a>
                    <div class="rectangle-group">
                        <div class="group-item"> </div>
                        
                    </div>


                    <form id="search-form" action="{{ route('cafe.search') }}" method="GET">
                    <input type="hidden" id="latitude" name="latitude">
                    <input type="hidden" id="longitude" name="longitude">
                        <select name="radius" class="pull-down" required>
                                <option style="display: none;" value="-km">-km</option>
                                <option value="1">1km</option>
                                <option value="2">2km</option>
                                <option value="3">3km</option>
                                <option value="4">4km</option>
                                <option value="5">5km</option>
                        </select>
                    </form>
                </div>
                <script src="{{ asset('js/nowLocation.js') }}"></script>
            </body>

            <footer>
            </footer>

        </html>