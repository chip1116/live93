   <x-base>
    <main class="mypage_main">

        <inner class="mypage_inner">

            <div class="mypage_top">
                <h2>マイページ</h2>
            </div>

            <div class="mypage_content">
                <dl>
                    <dt>アカウント名</dt>
                    <dd>{{ $item->name }}</dd>
                    <dt>メールアドレス</dt>
                    <dd>{{ $item->mail }}</dd>
                    <dt>パスワード</dt>
                    <dd>{{ $item->password }}</dd>
                    <dt>じゃが数&#9825;</dt>
                    <dd class="heart">{{ $item2 }}じゃが&#9825;</dd>
                    <dt>お気に入り&#9825;</dt>
                    <dd class="heart">5件登録済み</dd>
                </dl>
                <dl class="flex">
                    <div class="flex_item">
                        <dt>投稿ログ</dt>
                    </div>
                    <div class="flex_item">
                        <dt>投稿ログ</dt>
                    </div>
                </dl>
            </div>
            <div class="back">
                <a href="../toppage/area/1">
                    <h2>戻る</h2>
                </a>
            </div>

        </inner>

    </main>
</x-base>