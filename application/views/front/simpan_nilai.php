<?php

// include("koneksi_db.php");
$id = $this->input->get('id_user');
$tgl_sekarang = date('Y-m');
$a = $this->modgizi->get_variabel();
$idvar = $this->modgizi->get_idvariabel();
// var_dump($a);
// die();
foreach($a as $b)
{
    // var_dump($b['idvariabel']);
    // die();
    //  $nilai=$this->db->query("SELECT * from kalkulator_gizi where idpasien='$id' and idvariabel='$b[idvariabel]'");
 $nilai=$this->modgizi->get_nilai($id, $b['idvariabel']);
//  var_dump($nilai['nilai']);
//  die();
foreach ($nilai as $n){
  $x=$n['nilai'];
 
  $nilaiturun1=round(($b['nilai11']-$x)/($b['nilai11']-$b['nilai2']),6);
  $nilainaik1=round(($x-$b['nilai2'])/($b['nilai11']-$b['nilai2']),6);
  $nilaiturun2=round(($b['nilai22']-$x)/($b['nilai22']-$b['nilai3']),6);
  $nilainaik2=round(($x-$b['nilai3'])/($b['nilai22']-$b['nilai3']),6);
// var_dump($nilaiturun1);
// die();
if(empty($b['atr3']))
{
  if($x<=$b['nilai2'])
  {
   $predikat1=$b['atr1'];
   $nilai1=1;
   $nilai2=0;
   $nilai3=0;
  }
  elseif($x>$b['nilai2'] and $x<$b['nilai11'])
  {
   $nilai1=$nilaiturun1;
   $nilai2=$nilainaik1;
   $nilai3=0;
   if($nilaiturun1<=$nilainaik1)
   {
    $predikat1=$b['atr1'];
   }
   else
   {
    $predikat1=$b['atr2'];
   }
  }
  else
  {
   $nilai1=0;
   $nilai2=1;
   $nilai3=0;
   $predikat1=$b['atr2'];
  } 
}
else 
{
  if($x<=$b['nilai2'])
  {
   $predikat1=$b['atr1'];
   $nilai1=1;
   $nilai2=0;
   $nilai3=0;
  }
  elseif($x>$b['nilai2'] and $x<$b['nilai11'])
  {
   $nilai1=$nilaiturun1;
   $nilai2=$nilainaik1;
   $nilai3=0;
   if($nilaiturun1<=$nilainaik1)
   {
    $predikat1=$b['atr1'];
   }
   else
   {
    $predikat1=$b['atr2'];
   }
  }
  elseif($x==$b['nilai11'])
  {
   $nilai1=0;
   $nilai2=1;
   $nilai3=0;
   $predikat1=$b['atr2'];
  }

  elseif($x>$b['nilai11'] and $x<$b['nilai22'])
  {
   $nilai1=0;
   $nilai2=$nilaiturun2;
   $nilai3=$nilainaik2;
   if($nilai2==0)
   {
    $predikat1=$b['atr2'];
   }
   elseif($nilai2<=$nilai3)
   {
    $predikat1=$b['atr2'];
   }
   else
   {
    $predikat1=$b['atr3'];
   }
  }

  else
  {
   $nilai1=0;
   $nilai2=0;
   $nilai3=1;
   $predikat1=$b['atr3'];
  }
}

}
    $data = array(
        'predikat' => $predikat1,
        'nilai1' => $nilai1,
        'nilai2' => $nilai2,
        'nilai3' => $nilai3,
        'id' => $id,
        'variabel' => $b['idvariabel']
    );
// var_dump($data);
// die();
////////skrip input nilai fuzzy variabel ke dalam tabel nilai////////////////////////////////////////
$this->db->query("UPDATE kalkulator_gizi set predikat='$predikat1',nilai1='$nilai1',nilai2='$nilai2',nilai3='$nilai3' where id_user='$id' and idvariabel='$b[idvariabel]' AND tgl_cek LIKE '$tgl_sekarang%'");
//////----------------------------------------------------------------------------
}

//  echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php?page=14&id=$_GET[id]\">";
redirect('user/nilai_gizi?id_user='.$id);