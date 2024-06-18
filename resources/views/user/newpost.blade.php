<x-base>

    <main class="post-main">

        <inner class="inner">

            <div class="top">
                <h2 class="buck">新規投稿</h2>
            </div>

            <div class="content">
                <form action="{{ route('post.newstore') }}" class="form" id="form1" method="POST" enctype="multipart/form-data" >
                @csrf
                    @if (session('message'))
                        <p class="message">{{ session('message') }}</p>
                    @endif
                    <p>名称</p>
                    <input type="search" name="name" list="keyword-list" placeholder="名称を入力してください" class="input-bg" value="{{ old('name') }}">
                    <datalist id="keyword-list">
                        @foreach(App\Models\Store::all() as $store)
                        <option value="{{ $store->name }}">
                        @endforeach
                    </datalist>
                    <p>ジャンル</p> 
                    @foreach(App\Models\Category::all() as $category)
                    <label class="font">
                        <input type="checkbox" name="category_id[]" class="input-bg" value="{{$category->id}}" {{ old('category_id') !== null && in_array($category->id, old('category_id')) ? 'checked': '' }}>
                        <!-- <input type="checkbox" name="category_id[]" class="input-bg" value="{{$category->id}}" {{ !(old('category_id') !== null && in_array($category->id, old('category_id'))) ?:'checked' }}> -->
                        {{ $category->id }}.{{ $category->category_name }}
                    </label>
                    @endforeach

                    <p>市・郡</p>
                    <select name="location_id" class="input-bg" value="{{ old('location_id') }}">
                    @foreach(App\Models\Location::all() as $location)
                        <option value="{{ $location->id }}" {{old('location_id') != $location->id ?: 'selected'}}>{{ $location->name }}</option>
                    @endforeach
                    </select>
                    <p>電話番号<span class="required">*必須</span></p>
                    <input type="text" name="tel" class="input-bg" value="{{ old('tel') }}">

                    <p>写真</p>
                    @livewire('preview')
                    <p>コメント</p>
                    <textarea name="newpostComment" class="area-bg">{{ old('newpostComment') }}</textarea>
                </form>
            </div>
            <button type="submit" form="form1" class="post-button">投稿</button>
            <a href="{{ route('user.index') }}">
                <h2 class="buck">戻る</h2>
            </a>

        </inner>

    </main>
</x-base>