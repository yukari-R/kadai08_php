<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- データを登録するページ -->
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/style.post.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
            <div class="header">
                <div class="header_post"><a class="header_post_link" href="post.php">画像を投稿する</a></div>
            </div>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="./insertimg.php" enctype="multipart/form-data">
        <div class="jumbotron">
            <img id ="preview">
            <input type ="file" name="file" onchange="previewFile(this);"><br>
                <textArea name="content" rows="4" cols="40"></textArea><br>
                <button><input type="submit" value="送信"></button>
        </div>
    </form>
    <!-- Main[End] -->

</body>
</html>
<script>
function previewFile(event){
    var fileData = new FileReader();
    fileData.onload = (function() {
    document.getElementById('preview').src = fileData.result;
    });
    fileData.readAsDataURL(event.files[0]);
}
</script>
