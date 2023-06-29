# 課題8 -フォーム２-

２０２３/06/30 8:25 更新削除ボタンとコメント追記、デザインが未了ですが、一旦アップロードします

## 紹介と使い方
  - 何を作成するか悩みYoutubeで検索していたところ、画像投稿機能の作り方の紹介動画を発見した
  - 画像投稿にこれまでチャレンジしていなかったので、今回はこちらの動画を真似して作成してみることとした
　　　　　　　https://www.youtube.com/watch?v=SO0elAgPsHs　＊HTMLコードは一部お借りしました

## 工夫した点
  - 

## 苦戦した点
  - $_FILES　が空っぽになってしまう　→ input typeに「enctype="multipart/form-data」を追加することで解消
  - move_uploaded_filesが効かない→ フォルダの権限の変更が必要

## 参考にした web サイトなど
  -　　⭐️全体の参考（この動画を見ながら真似して同じように作成、デザイン面をアレンジ）
  - https://www.youtube.com/watch?v=SO0elAgPsHs
  - グローバル変数、＄＿FILESの理解
  - https://wepicks.net/phpref-files/
  - グローバル変数、＄_SERVERの理解
  - https://wepicks.net/phpref-server/
  - move_uploaded_filesが効かない時の対処
  - http://blog.livedoor.jp/kmiwa_project/archives/1061206725.html
