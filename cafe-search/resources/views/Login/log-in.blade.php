<!DOCTYPE html>
        <html lang="jp">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Cafe Search</title>
                <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
                <link rel="stylesheet" href="{{ asset('css/top-page.css') }}">
                <link rel="stylesheet" href="{{ asset ('css/log-in.css') }}">

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
                <div class="container">
                    <h1>Welcome</h1>
                    <p>Please login here</p>
                    <form class="login-form">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Iryu11111@gmail.com" required>
                        
                        <label for="password">Password</label>
                        <div class="password-container">
                            <input type="password" id="password" name="password" required>
                            <button type="button" class="toggle-password">
                                <img src="eye-icon.png" alt="Toggle visibility">
                            </button>
                        </div>
                        
                        <div class="remember-forgot">
                            <label>
                                <input class="remember_box" type="checkbox" name="remember"> Remember Me
                            </label>
                            <a href="#" class="forgot-password">Forgot Password?</a>
                        </div>
                        

                            <button type="submit" class="login-button">Login</button>
                            <button type="button" class="register-button">Register now</button>

                    </form>
                    <div class="login-container">
                        <a href="{{ route('login.google') }}" class="google-login-btn">
                            <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google Logo" class="google-logo">
                            <span class="btn-text">Login with Google</span>
                        </a>
                    </div>
                 </div>      

            </body>

            <footer>
            </footer>

        </html>