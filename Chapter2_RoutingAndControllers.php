<?php

Route::get('[URL/{変数名は最後に?}]'), [無名関数のクロージャで直接書くか、'Controllerクラス@アクションメソッド名'] );
Route::post('[URL/{変数名は最後に?}]'), [無名関数のクロージャで直接書くか、'Controllerクラス@アクションメソッド名'] );

Route::get('[アドレス]'), '[コントローラクラス名]');