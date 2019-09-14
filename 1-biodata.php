<?php
function getDataJSON($name__,$age__,$address__,$hobbies__,$is_married__,$list_school__,$skill_name__,$interest_in_coding__)
{
$data = array(
'name' => $name__,
'age' => $age__,
'address' => $address__,
'hobbies' => $hobbies__,
'is_married' => $is_married__,
'list_school' => $list_school__,
'skills_name' => $skill_name__,
'interest_in_coding' => $interest_in_coding__,
);

return json_encode($data);
}

$nama = "Dwi Rizanul Anwar";
$umur = "25";
$alamat = "Kp. Karanggan Tua - Ds. Karanggan - Kec. Gunung Putri - Kab. Bogor";
$hoby = array("olahraga","coding");
$menikah = false;
$sekolah = array(
'highSchool' => "SMK Budiniah",
'university' => "Universitas Bina Sarana Informatika",
'year_in' => "2015",
'year_out' => "2018"
);

$kemampuan = array(
  'Microsoft Office' => "Expert",
  'Web programming' => "beginner"
);
$ketertarikan = true;

echo getDataJSON($nama,$umur,$alamat,$hoby,$menikah,$sekolah,$kemampuan,$ketertarikan);
?>
