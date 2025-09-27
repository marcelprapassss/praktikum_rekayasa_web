<!--VARIABEL ARRAY, DIENCODE KE FORMAT JSON-->
<?php
$person_name = array("Marcel", "Ardhan", "Ayu", "Albert");

echo json_encode($person_name);

$name_age = '{"Marcel":22, "Ardhan":22, "Ayu":18, "Albert":23}';
echo '<br>';
$obj = json_decode($name_age);

//mengakses nilai object
echo $obj->Marcel;
echo $obj->Ardhan;
echo $obj->Ayu;
echo $obj->Albert;
?>