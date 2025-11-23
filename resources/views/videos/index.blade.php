<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>MP4 ファイル一覧</title>
</head>
<body>
    <h1>{{ $directory }} ディレクトリのMP4 ファイル一覧</h1>
    
    @if (count($videoList) > 0)
        <ul>
            @foreach ($videoList as $video)
                <li>
                    <strong>{{ $video['name'] }}</strong>
                    <a href="{{ $video['url'] }}" target="_blank">再生リンク</a>
                    <video width="320" height="240" controls>
                        <source src="{{ $video['url'] }}" type="video/mp4">
                        お使いのブラウザは動画タグに対応していません。
                    </video>
                </li>
            @endforeach
        </ul>
    @else
        <p>MP4 ファイルが見つかりません。</p>
    @endif
</body>
</html>