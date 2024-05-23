<x-base>
    <main class="register-main">

        <inner class="inner">

            <div class="top">
                <h2 class="buck">新規登録</h2>
            </div>

            <div class="content">
                <form action="#" class="form">
                    <p>アカウント名<span class="required">*必須</span></p>
                    <input type="text" name="name" size="90" class="input-bg" required>

                    <p>メールアドレス<span class="required">*必須</span></p>
                    <input type="email" name="mail" size="90" class="input-bg" required>

                    <p>パスワード<span class="required">*必須</span></p>
                    <input type="password" name="password" size="90" class="input-bg" required>

                    <p>パスワード（確認）<span class="required">*必須</span></p>
                    <input type="password" name="confirm" size="90" class="input-bg" required>
                    <div class="flex">
                        <button type="submit" class="reg1-button">すでに登録済みの方</button>
                        <button type="submit" class="reg2-button">登 録</button>
                    </div>
                </form>
            </div>

            <a href="toppage">
                <h2 class="buck">戻る</h2>
            </a>

        </inner>

    </main>
</x-base>