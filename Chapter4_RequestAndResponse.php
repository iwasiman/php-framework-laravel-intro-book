<?php
function handle($request, Closure $next)
{
  // このメソッドを実装。
  // $request->merge([連想配列]) すると、画面から渡ってきた値が
  // 入っているリクエストの中にデータを追加できる。
  // $response = $next($request); でレスポンスの操作もできる。

  return $next($request); // アクション前に処理差し込み
  return $response; // アクション後に処理差し込み
}

$validate_rule = [
    '[画面側のname属性値]' => '[定義済みのバリデーションのルール]',
    '[画面側のname属性値]' => '[定義済みのバリデーションのルール]',
];
$this->validate($request, $validate_rule);

return  [
    '[画面側のname属性値]' => '[定義済みのバリデーションのルール]',
    '[画面側のname属性値]' => '[定義済みのバリデーションのルール]',
];
// '[定義済みのバリデーションのルール]' => '[日本語で返したいメッセージ]'

$rules = [
    '[name属性値]'=>'[適用したいルール]',
    '[name属性値]'=>'[適用したいルール]',
];
$messages = [
    '[適用したいルール]' => '[返したいメッセージ]',
    '[適用したいルール]' => '[返したいメッセージ]',
];
$validator = Validator::make('チェックしたい値の配列', $rules, $messages);
if ($validator->fails()) {
    // エラーがあるときの処理の分岐
}

return redirect('パス')->withErrors($validator)->withInput();

$validator->sometimes([name属性値], [適用したいルール], function($input){ [クロージャ内に条件]});