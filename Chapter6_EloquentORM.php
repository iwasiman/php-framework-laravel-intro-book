<?php

$items = Person:all(); // 既存レコードのselect
$items = Person::where('[カラム名]', [セットする値])->first(); 

$person = new Person();
$person->prop1 = [セットする値];
$person->fill([連想配列で一気にセット]);
$person->save(); //新規レコードのinsert

$person = Person::find([キー項目で検索]);
// 更新するカラムの値をセット
$person->save(); //レコードのupdate
Person::find([キー項目で検索])->delete(); // レコードのdelete