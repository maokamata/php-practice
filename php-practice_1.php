<?php
// Q1 変数と文字列

$name = '鎌田';

$myName = '私の名前は「' . $name . '」です。';
echo $myName;

// Q2 四則演算

$num1 = 5 * 4;
echo $num1 . "\n";

$num2 = $num1 / 2;
echo $num2;

// Q3 日付操作

$now = date("Y年m月d日 H時i分s秒");
echo '現在時刻は、' . $now . 'です。';

// Q4 条件分岐-1 if文

$device = 'mac';

if ($device === 'mac' || $device === 'windows') {
  echo '使用OSは、' . $device . 'です。';
} else {
  echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子

$age = 25;
$age = ($age >= 18) ? '成人です。' : '未成年です。';

echo $age

// Q6 配列

$prefectures = [
  '東京都',
  '神奈川県',
  '埼玉県',
  '栃木県',
  '千葉県',
  '群馬県',
  '茨城県'
];

echo $prefectures[3] . 'と' . $prefectures[4] . 'は関東地方の都道府県です。';

// Q7 連想配列-1

$cities = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];

foreach ($cities as $city) {
  echo $city . "\n";
}

// Q8 連想配列-2

$cities = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];

foreach ($cities as $prefecture => $city) {
  if ($prefecture === '埼玉県') {
    echo $prefecture . 'の県庁所在地は、' . $city . 'です。';
    break;
  }
}

// Q9 連想配列-3

$cities = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];

$cities += [
  '愛知県' => '名古屋市',
  '大阪府' => '大阪市'
];

foreach ($cities as $prefecture => $city) {
  if (
    $prefecture === '東京都' ||
    $prefecture === '神奈川県' ||
    $prefecture === '千葉県' ||
    $prefecture === '埼玉県' ||
    $prefecture === '栃木県' ||
    $prefecture === '群馬県' ||
    $prefecture === '茨城県'
  ) {
    echo $prefecture . 'の県庁所在地は、' . $city . 'です。';
    echo "\n";
  } else {
    echo $prefecture . 'は関東地方ではありません。';
    echo "\n";
  }
}

// Q10 関数-1

function hello($name)
{
  return $name . 'さん、こんにちは。';
}

echo hello('金谷') . "\n";
echo hello('安藤');

// Q11 関数-2

$price = '1000';

function calcTaxInPrice($price)
{
  $taxInPrice = $price * 1.1;
  return $taxInPrice;
}

echo $price . "円の商品の税込価格は" . calcTaxInPrice($price) . "円です。";

// Q12 関数とif文

function distinguishNum($num)
{

  if ($num % 2 == 0) {
    return $num . 'は偶数です。';
  } else {
    return $num . 'は奇数です。';
  }
}

echo distinguishNum(11);
echo "\n";
echo distinguishNum(24);

// Q13 関数とswitch文

function evaluateGrade($grade)
{
  switch ($grade) {
    case 'A':
    case 'B':
      return '合格です。';
      break;

    case 'C':
      return '合格ですが追加課題があります。';
      break;

    case 'D':
      return '不合格です。';
      break;

    default:
      return '判定不明です。講師に問い合わせてください。';
      break;
  }
}
echo evaluateGrade('A');
echo "\n";
echo evaluateGrade('E');
