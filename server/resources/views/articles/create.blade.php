<h1>新規論文投稿</h1>
<form action="/articles" method="post">
    @csrf
    <p>
        論文タイトル<br>
        <input type="string" name="title" value="{{ old('title') }}">
    </p>

    <p>
        本文<br>
        <textarea type="text" name="body" value="{{ old('body') }}"></textarea>
    </p>

    <input type="submit" value="投稿">
</form>
