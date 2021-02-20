<?php
view('[テンプレートの在り処のフォルダ名.ファイル名]');

$data = [
    'value1' => 'Controllerから渡す値1',
    'value2' => 'Controllerから渡す値2',
];

return view('hello.index', $data);

{{ 変数 }}
{!! エスケープしないで出したい値!!}

function compose(View $view)
{
  // このメソッドを実装すればよい。
}

View::composer('アドレス', '[登録したビューコンポーザクラスのフル名前空間指定]');