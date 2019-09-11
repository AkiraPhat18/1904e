<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <pre>
    lặp mảng đa chiều
        Yêu cầu : in được ra tên của các quốc gia và thành phố của nó
    </pre>


    <?php
    $arr3 = array();
    $arr3["japan"]=array("name"=>"nhật bản","city"=>array("tokyo"));
    $arr3["china"]=array("name"=>"trung quốc","city"=>array("bắc kinh","thượng hải","thành đô"));
    $arr3["vn"]=array("name"=>"việt nam","city"=>array("hà nội", "hồ chí minh","nam đinh","ninh bình","thái bình"
    ,"đồng nai"));
    foreach($arr3 as $keyCountry => $country) {
     echo "<ul>";
        foreach ($country as $keyNames => $names) {
            if ($keyNames == "name") {
                echo "<ul>";
                echo "<li>" . $names;
                echo "</ul>";
            } else
                foreach ($country as $keyCities => $cities) {
                    echo "<ul>";
                    if ($keyCities == "city") {
                        foreach ($cities as $keyCity => $city) {
                            echo "<li>" . $city;
                        }
                    }
                    echo "</ul>";
                }
        }
     echo "</ul>";
    }
    ?>
</body>
</html>