<?php

$param = ['id' => [セットする値] ];
$items = DB::select('select * from tableName where id = :id', $param);

$item = DB::table('[テーブル名]')->where('id', [セットする値] )->first();