<?php
//   Toán tử so sánh
    // > , >= , < , <= ,==  , !=

// Toán tử logic
    // ! , && , ||

            // 3>5  False
            // 5>=2  true
            // 8<=2   False
            // 8==8  true
            // 7!=3  true

            // (5>=2) && (8<=2) && (8==8) false

            // (8==8) || (7!=3) && (3>5)   true

            // (5>=2) && (8<=2) || (8==8) || (7!=3) true


            // (8==8) || (7!=3) && (5>=2) && (8<=2) true
// toán tử kết hợp : ++ , -- , += , -= ,*= , /= ,%=
    $a=5;
    $a++;
    echo 'a sau khi được cộng ='.$a.'<br>';
    $a--;
    echo 'a sau khi được trừ ='.$a.'<br>';

    $a+=8;
    echo 'a sau khi được công với 8 ='.$a.'<br>';


$a=4;
if ($a==1) {  echo 'đây là số 1';  }
    else if($a==2) {  echo 'đây là số 2';   }
    else if($a==3) {   echo 'đây là số 3';  }
else{  echo 'Đây không phải số 1 ,2 , 3 <hr> ';  }

// vòng lặp for

// Cấu trúc
// for (Khởi_tạo; so_sánh ; Cập_nhật) { 
//    KHối lệnh chạy
// }

for ($i=0; $i <=10 ; $i++) { 
    echo $i.'<br>';
}
echo ' <hr> ';

// while (Đk) {
//     # code...
// }

// $b=1;
// while ($b < 10) {
//    echo $b.'<br>';
//    $b++;
// }

// $b=1;
// do {
//     echo $b.'<br>';
//     $b++;
// } while ($b <= 10);

echo ' <h1>Bảng cửu chương</h1> ';
echo '<hr>';
for ($i=2; $i<=9 ; $i++) { 
    
   echo '<h3>Đây là bảng nhân '.$i.'</h3>';

   for ($j=1; $j <=9 ; $j++) { 
       echo $i.' X '.$j .' = '.($i*$j);
       echo '<br>';
   }
}