<x-base>
    <main class="contact-main">

        <inner class="inner">

            <div class="top">
                <h2 class="buck">お問い合わせ</h2>
            </div>

            <div class="content">
                <form action="{{ route('post.contact') }}" class="form" method="POST">
                    @csrf
                    <p>お名前<span class="required">&emsp;*必須</span></p>
                    <input type="text" name="name" class="input-bg" value="{{ old('name') }}">

                    <p>メールアドレス<span class="required">&emsp;*必須</span></p>
                    <input type="email" name="email" class="input-bg" value="{{ old('email') }}">
                    
                    <p>件 名</p>
                    <input type="text" name="title" class="input-bg" value="{{ old('title') }}">
                    
                    <p>お問い合わせ内容<span class="required">&emsp;*必須</span></p>
                    <textarea name="comment" class="area-bg">{{ old('comment') }}</textarea>
                    <p class="submit"><button type="submit" class="button">送 信</button></p>
                </form>
            </div>

            <a href="{{ route('user.index') }}">
                <h2 class="buck">戻る</h2>
            </a>

        </inner>

    </main>
</x-base>
