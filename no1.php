<?php

/**
*

*/
class no1
{
   var $hight_school;
   var $univ;
}
class skill{
  var $skilku;
}


?><br><?php
class cetak{
function cetaku(){
$jawaban = new no1();
$jawaban->hight_school="SMK N NUSAWUNGU";
$jawaban->univ='UNIV BSI';

$skill1=new skill();
$skill1->skilku="php";

$skill2=new skill();
$skill2->skilku="java";


$skill3=new skill();
$skill3->skilku="c++";

$myskill = array($skill1, $skill2, $skill3);
$biodata = array(
    'name' =>'Slamet'
    ,'address'=>'cilacap'
    ,'bobbies'=>'membaca,game,berenang'
    ,'is_maried'=>'false'
    ,'school'=>$jawaban
    , 'skill'=>$myskill
  );
$cetak=json_encode($biodata);
echo $cetak;}

}

$cetak=new cetak();
$cetak->cetaku();
 // mencetak nilainya (pengolahan data)

?>
