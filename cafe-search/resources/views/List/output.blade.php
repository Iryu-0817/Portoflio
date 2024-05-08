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

            <!-- Toggle Button -->
                <div class="toggle-button">
                    <!-- <div class="toggle toggle-1">
                        <p>一覧表示</p>
                    </div>
                    <div class="toggle toggle2">
                        <p>地図表示</p>
                    </div> -->

                    <button type="button" class="btn btn-primary btn-sm">一覧表示</button>
                    <button type="button" class="btn btn-secondary btn-sm">地図表示</button>
                </div>
                <div class="your-distance">
                    <span>現在地から</span>
                    <span>〇〇km</span>
                    <span>圏内のカフェ</span>
                </div>

            
                <div class="list-form">
                    <div class="list">
                            <div class="list-top">
                                <div class="cafe-name">
                                    <h2>〜カフェ名〜</h2>
                                </div>
                                
                                <div class="star">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.01135 0L10.3233 5.48516L16 6.12418L11.7497 10.1297L12.9255 16L7.98699 12.9902L3.037 15.9795L4.23497 10.1137L0 6.09081L5.67875 5.47543L8.01135 0Z" fill="#FFB400"/></svg>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.01135 0L10.3233 5.48516L16 6.12418L11.7497 10.1297L12.9255 16L7.98699 12.9902L3.037 15.9795L4.23497 10.1137L0 6.09081L5.67875 5.47543L8.01135 0Z" fill="#FFB400"/></svg>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.01135 0L10.3233 5.48516L16 6.12418L11.7497 10.1297L12.9255 16L7.98699 12.9902L3.037 15.9795L4.23497 10.1137L0 6.09081L5.67875 5.47543L8.01135 0Z" fill="#FFB400"/></svg>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.01135 0L10.3233 5.48516L16 6.12418L11.7497 10.1297L12.9255 16L7.98699 12.9902L3.037 15.9795L4.23497 10.1137L0 6.09081L5.67875 5.47543L8.01135 0Z" fill="#FFB400"/></svg>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.01135 0L10.3233 5.48516L16 6.12418L11.7497 10.1297L12.9255 16L7.98699 12.9902L3.037 15.9795L4.23497 10.1137L0 6.09081L5.67875 5.47543L8.01135 0Z" fill="black" fill-opacity="0.06"/></svg>
                                </div>
                            </div>
                            <div class="cafe-details">
                                <div class="cafe-distance">
                                    <span>現在地から</span>
                                    <span>〇〇km</span>
                                </div>
                                
                                <div class="cafe-information">
                                    <span>カフェ・レストラン</span>
                                    <span>/</span>
                                    <span>Wi-Fiあり</span>
                                    <span>/</span>
                                    <span>電源あり</span>
                                    <span>/</span>
                                    <span>¥500~1500</span>
                                </div>

                                <div class="cafe-time">
                                    <span>営業時間：</span>
                                    <span>07:00〜18:00</span>
                                </div>
                            </div>
                            <div class="cafe-images">
                                <img src="{{ asset('images/cafe1.jpg') }}" alt="cafe1">
                                <img src="{{ asset('images/cafe2.jpg') }}" alt="cafe2">
                                <img src="{{ asset('images/cafe3.jpg') }}" alt="cafe3"> 
                            </div>
                    </div>
                </div>


                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
            </body>

            <footer>
            </footer>

        </html>