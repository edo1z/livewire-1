# livewire-1

Livewireの勉強をするぜえ。

## 仕様
- TODOをつくるぜえ。userは自分のTODOを作ったり削除したりできるぜえ。
- アクション: 作成、編集、削除、完了・未完了への変更
- 各TODOは優先順位があるぜえ。基本的には古い方が優先順位高いぜえ。
- 画面上では優先順位が高い（古い）者ほど上に表示されるぜえ。
- 並び替えすることで、優先順位を変えられるぜえ。
- 各TODOには画像を1枚登録できるぜえ

## DB
- todos
  - id(int)
  - user_id(uuid)
  - title(string)
  - description(string) null ok
  - is_completed(bool)
  - priority(int)
  - image(string) null ok
  - created_at(datetime)
  - updated_at(datetime)

- users
  - id(int)
  - name(string)
  - email(string)
  - password(string)
  - created_at(datetime)
  - updated_at(datetime)

## 画面
- アカウント新規登録
- ログイン
- パスワード忘れ
- TODO一覧(編集、削除、並び替え、ステータス変更もできる)
- TODO作成

