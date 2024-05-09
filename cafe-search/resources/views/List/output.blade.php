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
                                    <span class="info-text">カフェ・レストラン</span>
                                    <span class="info-text">/</span>
                                    <span class="info-text">Wi-Fiあり</span>
                                    <span class="info-text">/</span>
                                    <span class="info-text">電源あり</span>
                                    <span class="info-text">/</span>
                                    <span class="info-text">¥500~1500</span>
                                    <a class="bookmark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="20" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 48C0 21.5 21.5 0 48 0l0 48V441.4l130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4V48H48V0H336c26.5 0 48 21.5 48 48V488c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/></svg>
                                    </a>
                                </div>

                                <div class="cafe-time">
                                    <span>営業時間：</span>
                                    <span>07:00〜18:00</span>
                                </div>
                            </div>
                            <div class="cafe-images">
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe1">
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe2">
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe3"> 
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe4"> 
                            </div>
                        </div>
                    </div>
                    <div class="border"></div>

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
                                    <span class="info-text">カフェ・レストラン</span>
                                    <span class="info-text">/</span>
                                    <span class="info-text">Wi-Fiあり</span>
                                    <span class="info-text">/</span>
                                    <span class="info-text">電源あり</span>
                                    <span class="info-text">/</span>
                                    <span class="info-text">¥500~1500</span>
                                    <a class="bookmark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="20" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 48C0 21.5 21.5 0 48 0l0 48V441.4l130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4V48H48V0H336c26.5 0 48 21.5 48 48V488c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/></svg>
                                    </a>
                                </div>

                                <div class="cafe-time">
                                    <span>営業時間：</span>
                                    <span>07:00〜18:00</span>
                                </div>
                            </div>
                            <div class="cafe-images">
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe1">
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe2">
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe3"> 
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe4"> 
                            </div>
                        </div>
                    </div>
                    <div class="border"></div>


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
                                    <span class="info-text">カフェ・レストラン</span>
                                    <span class="info-text">/</span>
                                    <span class="info-text">Wi-Fiあり</span>
                                    <span class="info-text">/</span>
                                    <span class="info-text">電源あり</span>
                                    <span class="info-text">/</span>
                                    <span class="info-text">¥500~1500</span>
                                    <a class="bookmark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="20" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 48C0 21.5 21.5 0 48 0l0 48V441.4l130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4V48H48V0H336c26.5 0 48 21.5 48 48V488c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/></svg>
                                    </a>
                                </div>

                                <div class="cafe-time">
                                    <span>営業時間：</span>
                                    <span>07:00〜18:00</span>
                                </div>
                            </div>
                            <div class="cafe-images">
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe1">
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe2">
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe3"> 
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe4"> 
                            </div>
                        </div>
                    </div>
                    <div class="border"></div>

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
                                    <span class="info-text">カフェ・レストラン</span>
                                    <span class="info-text">/</span>
                                    <span class="info-text">Wi-Fiあり</span>
                                    <span class="info-text">/</span>
                                    <span class="info-text">電源あり</span>
                                    <span class="info-text">/</span>
                                    <span class="info-text">¥500~1500</span>
                                    <a class="bookmark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="20" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 48C0 21.5 21.5 0 48 0l0 48V441.4l130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4V48H48V0H336c26.5 0 48 21.5 48 48V488c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/></svg>
                                    </a>
                                </div>

                                <div class="cafe-time">
                                    <span>営業時間：</span>
                                    <span>07:00〜18:00</span>
                                </div>
                            </div>
                            <div class="cafe-images">
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe1">
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe2">
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe3"> 
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe4"> 
                            </div>
                        </div>
                    </div>
                    <div class="border"></div>
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
                                    <span class="info-text">カフェ・レストラン</span>
                                    <span class="info-text">/</span>
                                    <span class="info-text">Wi-Fiあり</span>
                                    <span class="info-text">/</span>
                                    <span class="info-text">電源あり</span>
                                    <span class="info-text">/</span>
                                    <span class="info-text">¥500~1500</span>
                                    <a class="bookmark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="20" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 48C0 21.5 21.5 0 48 0l0 48V441.4l130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4V48H48V0H336c26.5 0 48 21.5 48 48V488c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/></svg>
                                    </a>
                                </div>

                                <div class="cafe-time">
                                    <span>営業時間：</span>
                                    <span>07:00〜18:00</span>
                                </div>
                            </div>
                            <div class="cafe-images">
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe1">
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe2">
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe3"> 
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe4"> 
                            </div>
                        </div>
                    </div>
                    <div class="border"></div>
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
                                    <span class="info-text">カフェ・レストラン</span>
                                    <span class="info-text">/</span>
                                    <span class="info-text">Wi-Fiあり</span>
                                    <span class="info-text">/</span>
                                    <span class="info-text">電源あり</span>
                                    <span class="info-text">/</span>
                                    <span class="info-text">¥500~1500</span>
                                    <a class="bookmark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="20" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 48C0 21.5 21.5 0 48 0l0 48V441.4l130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4V48H48V0H336c26.5 0 48 21.5 48 48V488c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/></svg>
                                    </a>
                                </div>

                                <div class="cafe-time">
                                    <span>営業時間：</span>
                                    <span>07:00〜18:00</span>
                                </div>
                            </div>
                            <div class="cafe-images">
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe1">
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe2">
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe3"> 
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe4"> 
                            </div>
                        </div>
                    </div>
                    <div class="border"></div>
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
                                    <span class="info-text">カフェ・レストラン</span>
                                    <span class="info-text">/</span>
                                    <span class="info-text">Wi-Fiあり</span>
                                    <span class="info-text">/</span>
                                    <span class="info-text">電源あり</span>
                                    <span class="info-text">/</span>
                                    <span class="info-text">¥500~1500</span>
                                    <a class="bookmark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="20" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 48C0 21.5 21.5 0 48 0l0 48V441.4l130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4V48H48V0H336c26.5 0 48 21.5 48 48V488c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/></svg>
                                    </a>
                                </div>

                                <div class="cafe-time">
                                    <span>営業時間：</span>
                                    <span>07:00〜18:00</span>
                                </div>
                            </div>
                            <div class="cafe-images">
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe1">
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe2">
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe3"> 
                                <img class="cafe-img" src="https://dummyimage.com/86x80/000/fff" alt="cafe4"> 
                            </div>
                        </div>
                    </div>
                    <div class="border"></div>

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>


                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
            </body>

            <footer>
            </footer>

        </html>