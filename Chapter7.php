<?php

$items = DB::table('[テーブル名]')->.simplePaginate('[１ページの表示件数]');
$items = Person::orderby('age', 'asc')->simplePaginate('[１ページの表示件数]');
$items = Person::orderby('age', 'asc')->paginate('[１ページの表示件数]'); // リンクを出す場合