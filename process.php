<?php
if (
        isset($_POST["in1"]) &&
        isset($_POST["in2"]) &&
        isset($_POST["in3"]) &&
        isset($_POST["in4"]) &&
        isset($_POST["in5"]) &&
        isset($_POST["in6"]) &&
        isset($_POST["in7"]) &&
        isset($_POST["in8"]) &&
        strlen($_POST["in1"]) == 1 &&
        strlen($_POST["in2"]) == 1 &&
        strlen($_POST["in3"]) == 1 &&
        strlen($_POST["in4"]) == 1 &&
        strlen($_POST["in5"]) == 1 &&
        strlen($_POST["in6"]) == 1 &&
        strlen($_POST["in7"]) == 1 &&
        strlen($_POST["in8"]) == 1
) {
    $pass = $_POST["in1"] . $_POST["in2"] . $_POST["in3"] . $_POST["in4"] . $_POST["in5"] . $_POST["in6"] . $_POST["in7"] . $_POST["in8"];
    if ($pass == "E2C0H2O2") {
?>
        <div id="heading">
            найди нас
        </div>
        <div id="cords">
            59.9564, 30.30999<br>
            59.92707, 30.33825<br>
            59.944346, 30.295189<br>
            59.929524, 30.315051<br>
            56.76612, 54.12767<br>
            62.52102, 149.61835<br>
            59.93675, 30.4998<br>
            59.972618, 30.302618<br>
            59.859628, 30.324079<br>
            59.972938, 30.295099<br>
            59.852109, 30.376181
        </div>
<?php
        return;
    }
}
echo "-1";