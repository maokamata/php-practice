<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {

  if (
    $i % 4 == 0 && $i % 5 == 0
  ) {
    echo  "tic-tac" . "\n";
  }
  if (
    $i % 4 == 0
  ) {
    echo "tic" . "\n";
  } else if ($i % 5 == 0) {
    echo "tac" . "\n";
  } else {
    echo $i . "\n";
  }
}

// Q2 多次元連想配列

// 問題１
$personalInfos = [
  [
    'name' => 'Aさん',
    'mail' => 'aaa@mail.com',
    'tel'  => '09011112222'
  ],
  [
    'name' => 'Bさん',
    'mail' => 'bbb@mail.com',
    'tel'  => '08033334444'
  ],
  [
    'name' => 'Cさん',
    'mail' => 'ccc@mail.com',
    'tel'  => '09055556666'
  ],
];

echo $personalInfos['1']['name'] . "の電話番号は" . $personalInfos['1']['tel'] . "です。";

// 問題２

foreach ($personalInfos as $index => $personalInfo) {
  $index++;
  echo  $index . "番目の" . $personalInfo['name'] . "のメールアドレスは" . $personalInfo['mail'] . "です。" . "\n";
}

// 問題3

$ageList = [25, 30, 18];

foreach ($personalInfos as $index => $info) {
  $personalInfos[$index]['age'] = $ageList[$index];
  // $info = $ageList[$index]; // ＄infoはコピーなので、元の$personalInfos内のバリューは変えられない
}

// 別解
foreach ($ageList as $index => $age) {
  $personalInfos[$index]['age'] = $age;
}

// foreach (配列名 as キーもしくはインデックス番号 => バリュー) {
//     // 繰り返したい処理
// }

var_dump($personalInfos);



// Q3 オブジェクト-1
class Student
{
  public $studentId;
  public $studentName;

  public function _construct($id, $name)
  {
    $this->studentId = $id;
    $this->studentName = $name;
  }

  public function attend($studentLang)
  {
    echo $this->studentName . "は" . $studentLang . "の授業に参加しました。学籍番号：" . $this->studentId;
  }
}

$yamada = new Student(120, "山田");
echo "学籍番号" . $this->studentId . "番の生徒は" . $this->studentName . "です。";



// Q4 オブジェクト-2

$yamada = new Student(120, '山田');
$yamada->attend('PHP');


// Q5 定義済みクラス
// 問題１

$date = new DateTime(); // 現在時刻にしたいので引数なし

// $lastMonth = $date->modify('-1 month');
// echo $lastMonth->format('Y-m-d') . "\n";

// メソッドチェーンを使うと・・・
echo $date->modify('-1 month')->format('Y-m-d') . "\n";

// 問題２
$origin = new DateTime(); // 現在時刻にしたいので引数なし
$target = new DateTime('1992-04-25');

// $interval = $origin->diff($target);
// echo $interval->format('あの日から%a日経過しました。');

// メソッドチェーンを使うと・・・
echo $$origin->diff($target)->format('あの日から%a日経過しました。') . "\n";
