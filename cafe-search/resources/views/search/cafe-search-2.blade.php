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
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
                


                <a href="#" class="back-link" onclick="goBack()">
                    <i class="fa-solid fa-arrow-right rotate180"></i>
                </a>


                <div class="iphone-14-15-pro-3">
                    <b class="b">近くのカフェを検索する</b>
                    <a href="" class="rectangle-parent">
                        <div class="group-child"></div>
                        <b class="search"> Search</b>
                    </a>


                    

                    
                    
                    <select name="-km" class="pull-down" required>
                            <option style="display: none;" value="-km">-km</option>
                            <option value="distance">1km</option>
                            <option value="distance">2km</option>
                            <option value="distance">3km</option>
                            <option value="distance">4km</option>
                            <option value="distance">5km</option>
                            <option value="distance">6km</option>
                            <option value="distance">7km</option>
                            <option value="distance">8km</option>
                            <option value="distance">9km</option>
                            <option value="distance">10km</option>
                    </select>

                    <form  id="form1" action="自分のサイトURL">
                        <input id="sbox2" name="s" type="text" placeholder="キーワードを入力" />
                        <button id="sbtn2" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>

                    </div>
                    

                   
                </div>

                <script src="{{ asset('js/index.js') }}"></script>
            </body>



        </html>