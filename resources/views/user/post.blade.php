<x-base>

    <main class="post-main">

        <inner class="inner">

            <div class="top">
                <h2 class="buck">クチコミ投稿</h2>
            </div>

            <div class="content">
                <form action="#" class="form" id="form1">
                    <p>写真</p>
                    <input type="file" src="" alt="投稿画像" class="file-button">

                    <p>おすすめ度</p>
                    <input type="radio" id="favorite1" name="favorite" value="1" />
                    <label for="contactChoice1">てげ1</label>
              
                    <input type="radio" id="favorite2" name="favorite" value="2" />
                    <label for="contactChoice2">てげ2</label>
              
                    <input type="radio" id="favorite3" name="favorite" value="3" />
                    <label for="contactChoice3">てげ3</label>

                    <input type="radio" id="favorite4" name="favorite" value="4" />
                    <label for="contactChoice3">てげ4</label>
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