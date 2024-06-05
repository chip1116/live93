<x-base>

    <main class="post-main">

        <inner class="inner">

            <div class="top">
                <h2 class="buck">新規投稿</h2>
            </div>

            <div class="content">
                <form action="{{ route('post.newstore') }}" class="form" id="form1" method="POST">
                    @csrf
                    <p>名称</p>
                    <input type="search" name="name" class="input-bg">

                    <p>ジャンル</p>
                    <input type="text" name="category" class="input-bg">

                    <p>住所</p>
                    <select>
                    @foreach(App\Models\Location::all() as $location)
                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                    @endforeach
                    </select>
                    <input type="text" name="address" class="input-bg">

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
            <a href="toppage">
                <h2 class="buck">戻る</h2>
            </a>

        </inner>

    </main>
</x-base>