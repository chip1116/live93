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
                    <input type="search" name="name" list="keyword-list" placeholder="名称を入力してください" class="input-bg">
                    <datalist id="keyword-list">
                        @foreach(App\Models\Store::all() as $store)
                        <option value="{{ $store->name }}">
                        @endforeach
                    </datalist>
                    @if($errors->first('name'))
                        error
                    @endif
                    <p>ジャンル</p>
                    @foreach(App\Models\Category::all() as $category)
                    <input type="checkbox" name="category_id[]" class="input-bg" value="{{$category->id}}">
                    {{ $category->id }}.{{ $category->category_name }}
                    @endforeach

                    <p>市・郡</p>
                    <select name="location_id" class="input-bg">
                    @foreach(App\Models\Location::all() as $location)
                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                    @endforeach
                    </select>
                    <p>電話番号<span class="required">*必須</span></p>
                    <input type="text" name="tel" class="input-bg">

                    <p>写真</p>
                    <div class="deco-file">
                        <label>
                            <input type="file" name="upload" multiple>
                        </label>
                        <p class="file-names"></p>
                        ＋ファイルを追加
                    </div>

                    <p>コメント</p>
                    <textarea name="newpostComment" class="area-bg"></textarea>
                </form>
            </div>
            <button type="submit" form="form1" class="post-button">投稿</button>
            <a href="{{ route('user.index') }}">
                <h2 class="buck">戻る</h2>
            </a>

        </inner>

    </main>
</x-base>