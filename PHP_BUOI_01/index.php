<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  
 <!-- vùng làm việc của php -->
    <?php 
        // hiển thị nội dung ra web
        echo '<h1>vietpro</h1>';

        // biến
            // kiểu số
            $ten_bien=15;
            //kiểu chuỗi
            $chuoi='Nguyễn thế phúc';
            $chuoi='vietpro';
            echo $chuoi;
            
        //hằng   define('tên_hằng',giá_trị);            (lưu trữ dữ liệu nhưng không bị thay đổi)
        define('PI',3.14);
    
        // constant('tên_hằng') // lấy giá trị của hằng
        echo constant('PI');
        echo '<hr>';
        // các toán tử
            //toán tử số học : + - * / %
            $a=5;
            $b=10;
            $c=$a+$b;
            echo $c;
            echo '<hr>';
            //toán tử nối chuỗi dùng dấu . (chấm)
            $chuoi1='học viện';
            $chuoi2=' vietpro';
            $noi_chuoi=$chuoi1.$chuoi2;
            echo $noi_chuoi;

        // biểu thức điều kiện
        // true thực thi khối lệnh trong dấu {} 
        // false Không thực thi
        // if ( 10==10 ) {
        //   echo '<h1> XIN CHÀO MỌI NGƯỜI </h1>';
        // }

        //  && và
        //  || hoặc
            if ( 10==10 || 6<3 ) {
              echo '<h1> XIN CHÀO MỌI NGƯỜI </h1>';
            }
    ?>

</body>
</html>