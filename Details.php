<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.detail.css" rel="stylesheet">
</head>
<body>
<header>
        <div class="header">
                <div class="header_post"><a class="header_post_link" href="post.php">画像を投稿する</a></div>
        </div>
    </header>
<?php include("getDatas.php") ?> 
<div class="detail_image">
    <img src="images/<?php echo $data["image"]["filename"]; ?>" alt="投稿画像">
    <!-- <div class="Button">
            <button class="update">更新</button>
            <button class="delete">削除</button>
    </div> -->
    <button onclick="location.href='./index.php';">戻る</button>
    </div>
    <div class="comment">
    <p class="title">コメント</p>
    <p>コメントコメントコメント</p>
</div>
</body>
</html>