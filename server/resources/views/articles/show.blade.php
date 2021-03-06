<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<h1>論文詳細</h1>

<p>
    タイトル: {{ $article->title }}
</p>

<p>
    {{ $article->body }}
</p>

<a href="/articles"><button>一覧へ戻る</button></a>
<a href="/articles/{{ $article->id }}/edit"><button>編集する</button></a>
<form action="/articles/{{ $article->id }}" method="post" style="display: inline;">
    @csrf
    @method('DELETE')
    <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
</form>
