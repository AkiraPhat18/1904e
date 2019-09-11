<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $locations = array();
        $locations[1] = "bac ninh";
        $locations[2] = "bac giang";
        $locations[3] = "quang ninh";
        $locations[4] = "hai phong";
        $locations[5] = "nam dinh";
        $locations[6] = "thanh hoa";
        $locations[7] = "nghe an";
        $locations[8] = "lao cai";
        $locations[9] = "ha nam";
        $locations[10] = "ha noi";

        $location = 10;
        $gender = 1;
    ?>
    <form action="#" name="demo" method="post">
        <fieldset>
            <label>Địa điểm</label>
            <select name="location" >
                <?php foreach ($locations as $location_key => $location_value) : ?>
                    <option value="<?php echo $location_key ?>" <?php if ($location == $location_key) {echo "selected"; }else {echo "";} ?>><?php echo $location_value ; ?></option>
                <?php endforeach; ?>
            </select>
        </fieldset>
        <fieldset>
            <label>Giới tính</label>
            <input type="radio" name="gender"  value="1" <?php if ($gender == 1) { echo "checked"; } else { echo "";} ?>/>Nam
            <input type="radio" name="gender" value="0" <?php if ($gender == 0) { echo "checked"; } else { echo ""; } ?>/>Nữ
        </fieldset>
    </form>

</body>
</html>