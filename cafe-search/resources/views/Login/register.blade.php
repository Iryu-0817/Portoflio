<!DOCTYPE html>
        <html lang="jp">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Cafe Search</title>
                <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
                <link rel="stylesheet" href="{{ asset('css/top-page.css') }}">
                <link rel="stylesheet" href="{{ asset ('css/register.css') }}">


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
                    <h1>Register</h1>
                    <form class="register-form" method="POST" action="{{ route('register-form') }}">
                        @csrf


                            <div class="your_name">
                                <label for="your_name">Your Name</label>
                                <input type="text" id="your_name" name="your_name" placeholder="Enter your name" required>
                            </div>

                        
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="password-container">
                                <input type="password" id="password" name="password" placeholder="must contain 8 char." required>
                                <button type="button" class="toggle-password">
                                    <img src="{{ asset('images/eyeSlash.png') }}" width="20" height="20" alt="Toggle visibility">
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <div class="password-container">
                                <input type="password" id="password_confirmation" name="password_confirmation" required>
                                <button type="button" class="toggle-password">
                                    <img src="{{ asset('images/eyeSlash.png') }}" width="20" height="20" alt="Toggle visibility">
                                </button>
                            </div>
                        </div>
                        <button type="submit" class="register-button">Create account</button>
                    </form>
                </div>



                <script>
                    // 全てのトグルボタンを取得し、クリックイベントを追加
                    document.querySelectorAll('.toggle-password').forEach(button => {

                    // 各ボタンにクリックイベントを追加
                    button.addEventListener('click', function() {
                        const input = this.previousElementSibling;
                        // 現在の入力タイプを確認し、'password'であれば'text'に、'text'であれば'password'に切り替える
                        const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                        input.setAttribute('type', type);
                        this.querySelector('img').src = type === 'password' ? `{{ asset('images/eyeSlash.png') }}` : `{{ asset('images/eyeOpen.png') }}`;
                    });
                    });
                </script>
            </body>

            <footer>
            </footer>

        </html>