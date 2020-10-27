<h1>
    <b>論文一覧</b>
</h1>

<ul style="list-style-type:none; padding-left:0">
    
    @foreach ($articles as $article)
        <!-- // リンク先をidで取得し名前で出力 -->
        <li><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></li><br />
    @endforeach
</ul>


<!-- 新規登録画面へジャンプする -->
<a href="/articles/create"><button>新規論文投稿</button></a>