<x-base>

    <main class="post-main">

        <inner class="inner">

            <div class="top">
                <h2 class="buck">新規投稿</h2>
            </div>

            <div class="content">
                <form action="#" class="form" id="form1">
                    <p>投稿日</p>
                    <input type="date" name="date" class="input-bg">

                    <p>ジャンル</p>
                    <input type="text" name="category" class="input-bg">

                    <p>名称</p>
                    <input type="text" name="name" class="input-bg">

                    <p>住所</p>
                    <input type="text" name="address" class="input-bg">

                    <p>おすすめ度</p>
                    <input type="checkbox" name="favorite" value="1">じゃが1
                    <input type="checkbox" name="favorite" value="2">じゃが2
                    <input type="checkbox" name="favorite" value="3">じゃが3
                    <input type="checkbox" name="favorite" value="4">じゃが4

                    <p>コメント</p>
                    <textarea name="comment" class="area-bg"></textarea>
                    <p>写真</p>
                    <input type="file" src="" alt="投稿画像">
                </form>
            </div>
            <button type="submit" form="form1" class="post-button">投稿</button>
            <a href="toppage">
                <h2 class="buck">戻る</h2>
            </a>

        </inner>

    </main>
</x-base>