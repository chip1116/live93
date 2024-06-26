<x-base>
    <main class="register-main">

        <inner class="inner">
        @if (session('message'))
{{ session('message') }}
@endif
            <div class="top">
                <h2 class="buck">新規登録</h2>
            </div>

            <div class="content">
                <form action="{{ route('regist') }}" class="form" method="post">
                    @csrf
                    <p>アカウント名<span class="required">*必須</span></p>
                    <input type="text" name="name" class="input-bg" value="{{ old('name') }}">

                    <p>メールアドレス<span class="required">*必須</span></p>
                    <input type="email" name="email" class="input-bg" value="{{ old('email') }}">

                    <p>パスワード<span class="required">*必須</span></p>
                    <input type="password" name="password" class="input-bg">

                    <p>パスワード（確認）<span class="required">*必須</span></p>
                    <input type="password" name="password_confirmation" class="input-bg" >
                    <div class="flex">
                        <button type="submit" class="reg1-button"><a href="{{route('user.login')}}">すでに登録済みの方</a></button>
                        <button type="submit" class="reg2-button">登 録</button>
                    </div>
                </form>
            </div>

            <a href="{{ route('user.index') }}">
                <h2 class="buck">戻る</h2>
            </a>

        </inner>

    </main>
</x-base>