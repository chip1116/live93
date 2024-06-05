<x-base>
    <main class="login-main">

        <inner class="inner">

            <div class="top">
                <h2 class="buck">ログイン</h2>
            </div>

            <div class="content">
                <form action="{{ route('login') }}" class="form" method="post">
                    @csrf
                    <p>メールアドレス<span class="required">*必須</span></p>
                    <input type="email" name="email" class="input-bg" required>

                    <p>パスワード<span class="required">*必須</span></p>
                    <input type="password" name="password" class="input-bg" required>
                    <div class="flex">
                        <button type="submit" class="login1-button">パスワードを忘れた方</button>
                        <button type="submit" class="login2-button">ログイン</button>
                    </div>
                </form>
            </div>

            <a href="toppage">
                <h2 class="buck">戻る</h2>
            </a>

        </inner>

    </main>
</x-base>