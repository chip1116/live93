<x-base>

    <main class="post-main">

        <inner class="inner">

            <div class="top">
                <h2 class="buck">クチコミ投稿</h2>
            </div>

            <div class="content">
                <form action="{{ route('post.store') }}" class="form" id="form1" method="POST">
                    @csrf
                    <input type="hidden" name="store_id" value="1">
                    <p>写真</p>
                    <div class="deco-file">
                        <label>
                            <input type="file" name="uploads[]" multiple>
                        </label>
                        <p class="file-names"></p>
                        ＋ファイルを追加
                    </div>

                    <p>コメント</p>
                    <textarea name="comment" class="area-bg"></textarea>
                </form>
            </div>
            <button type="submit" form="form1" class="post-button">投稿</button>
            <a href="{{ route('user.index') }}">
                <h2 class="buck">戻る</h2>
            </a>

        </inner>

    </main>
</x-base>