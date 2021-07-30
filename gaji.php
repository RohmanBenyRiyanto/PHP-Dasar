<form method="post">
  <label>Gaji Pokok         : </label>
  <input type="text" name="pokok"><br><br>
  <label>Jenis kelamin      : </label>
  <input type="text" name="jKELAMIN"><br><br>
  <label>Jumlah Jam Lembur  : </label>
  <input type="text" name="jLEMBUR"><br><br>
  <input type="submit" name="HITUNG" value="Hitung total">
</form>

<?php

if(isset($_POST['HITUNG']))
{
    //Input
    $pokok    = $_POST ['pokok'];
    $jKELAMIN = $_POST ['jKELAMIN'];
    $jLEMBUR  = $_POST ['jLEMBUR'];

    //Proses
    $tGAJI             = $pokok;
    if($jKELAMIN       == 'L'){
        $tunjangan     = $pokok * 20 / 100; 
    }elseif ($jKELAMIN == 'P'){
        $tunjangan     = $pokok * 10 / 100;
    }
    if($jKELAMIN       == 'L'){
        $lembur        = 0.01 * $pokok; 
    }elseif ($jKELAMIN == 'P'){
        $lembur     = 0.02 * $pokok;
    }
    $PAJAK    = $pokok + $tunjangan + $lembur;
    $pajak    = 0.05 * $PAJAK; 
    $tSEMUA   = $tGAJI  + $tunjangan + $lembur - $pajak;
    

    //Output
    echo "Tunjangan   : " .number_format($tunjangan). "<br>";
    echo "Upah Lembur : " .number_format($lembur). "<br>";
    echo "Pajak       : " .number_format($pajak). "<br>";
    echo "Total Gaji  : " .number_format($tSEMUA). "<br>";
}
    //Emi Sulistyaningsih 19.0.M.036
?>