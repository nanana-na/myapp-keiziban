## 仕様書
### 開発環境
- Windows(OS)
- PHP 8.0.19
- laravel 6
- Node.js 16.13.1
- MarinaDB(SQL)
- エックスサーバー(クラウドサーバ)

### 環境準備
`git clone`した後

`composer install`

で補足部分を補う。(PHPのversionが違うとエラーが起きる)

`php artisan storage:link`

でシンボリックを通し画像を表示できるようにする。

**storage/app/public/images/**配下に**circle,friend,job,user,yet,yetuser**が存在するか確認(なければ作成)する。

`php artisan migrate`

でDBを製作。

`php artisan db:seed`

で初期データを挿入。

※作成されたユーザのパスワードは、各自違うのでwebで管理者の新規登録をし一旦登録し、DBのyetテーブルに保存してあるハッシュ化されたpasswordをusrテーブルのpasswordに変更。

### 工夫した点
1. 画像はサーバに保存し、DBに画像のリンクを保存。画像を編集(update)した際は、元の画像をサーバから削除する。
1. バリデーションを設定し入力項目を確認する。
1. 管理者の学籍番号の時に管理者画面を表示する(ユーザ一覧、作成、バイト作成、サークル作成、等)。
1. ヘッダーなどのアイコンにはサイズの小さいSVGを使用。
1. アンケートではユーザが投票してるか確認し一回のみ投票可能。最初の項目に王冠を付ける。
1. 新規会員登録された場合は、gmailで管理者に通知。
1. プロフィール機能を追加。
