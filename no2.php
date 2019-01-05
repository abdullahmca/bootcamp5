<?php
/**
*
*/
class no2
{
  function validasi(){echo "";
    ?><form action="no2.php" method="POST">
    <input type="password" name="pass" minlength="8" maxlength="8">
    <button name="submit">Cek Pass</button>
    </form>
    <?php
    if(isset($_POST['submit'])){
      $pass=$_POST['pass'];
      $cek=preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $pass);
      if(!$cek){
            echo "Masukan password minimal 8 karakter yang berisi huruf besar,huruf kecil,angka dan karakter sepesial";
        }
      else if($cek){
    echo "password memenuhi kriteria";
      }
    }

  }
}
$val=new no2();
$val->validasi();
?>