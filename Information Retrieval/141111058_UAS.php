<?php
    include "koneksi.php";

    //INISIALISASI VARIABEL KOSONG;
    $keyword="";

    if(isset($_POST['submit'])){ //JIKA TOMBOL SUBMIT DIKLIK
    $keyword=$_POST['cari'];

    //MEMBUAT LIST TANDA BACA ATAU SIMBOL
    $tandabaca="' ,  ; . : < > / | \ # - = @ ! # $ % ^ & * ( ) + ~ `";
    //MERUBAHNYA MENJADI BENTUK ARRAY
    $tandabaca=explode(" ",$tandabaca);

    //PREPROSESING TEXT MENGHILANGKAN SEMUA SIMBOL DAN TANDA BACA
    foreach ($tandabaca as $simbol){
    $keyword=str_replace($simbol," ",$keyword);
    }

     //DAFTAR KATA SLANG INDONESIA
    $kataslang=array(
    'bahenol'=>'seksi',
    'semok'=>'seksi',
    'semlohe'=>'seksi',
    'galau'=>'dilema',
    'yang lek'=>'young lex',
    'yogs'=>'young lex',
    'rokum'=>'rumah',
    'afgan banget'=>'sadis',
    'woles'=>'santai',
    'selaw'=>'santai',
    'gokil'=>'gila',
    'selon'=>'pelan pelan',
    'pertamax'=>'pertama',
    'saiko'=>'gila',
    'cukstaw'=>'cukup tau',
    'curcol'=>'curhat',
    'gws'=>'cepat sembuh',
    'hoax'=>'palsu',
    'kamseupay'=>'kampungan',
    'kicep'=>'nangis',
    'kongkow'=>'nongkrong',
    'LDR'=>'pacaran jarak jauh',
    'mager'=>'malas gerak',
    'malay'=>'malas',
    'lebay'=>'berlebihan',
    'norbek'=>'norak',
    'pelo'=>'bodoh',
    's2pid'=>'bodoh',
    'saik'=>'asik',
    'cucok'=>'cocok',
    'yogs'=>'young lex',
    'toket'=>'payudara',
    'younglex'=>'young lex',
    'keles'=>'kali',
    'cr9'=>'christiano ronaldo',
    'jombs'=>'jomblo',
    'yutub'=>'youtube',
    'patu'=>'sepatu',
    'kolah'=>'sekolah',
    'swag'=>'keren',
    'kepo'=>'ingin tahu',
    'kepo'=>'penasaran',
    'rempong'=>'repot',
    'sosmed'=>'sosial media',
    'jgn'=>'jangan',
    'wkwk'=>'tertawa',
    'wkwkwk'=>'tertawa',
    'hehe'=>'tertawa',
    'haha'=>'tertawa',
    );

    //PROSES STEMMING MENGGANTI KATA SLANG MENJADI KATA BAKU
    foreach ($kataslang as $kata=>$katabaku){
    $keyword=str_replace($kata,$katabaku,$keyword);
    }
    $keyword=explode(' ',$keyword);

    //PROSES NGILANGIN KATA IMBUHAN DI DEPAN
     foreach (array_keys($keyword) as $i)  {
    	if(substr($keyword[$i],0,4)=="meng" || substr($keyword[$i],0,4)=="peng"){
    		$keyword[$i]=substr($keyword[$i],4);
    	}else if(substr($keyword[$i],0,3)=="mem" || substr($keyword[$i],0,3)=="pem"){
        $keyword[$i]=substr($keyword[$i],3);
      }else if(substr($keyword[$i],0,3)=="ber" || substr($keyword[$i],0,2)=="per"){
        $keyword[$i]=substr($keyword[$i],3);
      }else if(substr($keyword[$i],0,2)=="me" || substr($keyword[$i],0,2)=="pe" || substr($keyword[$i],0,2)=="se"){
        $keyword[$i]=substr($keyword[$i],2);

      }
     }

     //PROSES NGILANGIN KATA IMBUHAN DI BELAKANG
     foreach (array_keys($keyword) as $i)  {
      if(substr($keyword[$i],-3)=="kan" && substr($keyword[$i],-4)!="akan" && substr($keyword[$i],-4)!="pakan"){
        $keyword[$i]=substr($keyword[$i],0,-3);
      }else if((substr($keyword[$i],-2)=="an" && $keyword[$i]!="jangan" && substr($keyword[$i],-4)!="akan") || (substr($keyword[$i],-2)=="in" && $keyword[$i]!="makin")){
        $keyword[$i]=substr($keyword[$i],0,-2);
      }else if(substr($keyword[$i],-1)=="i" && substr($keyword[$i],-2)!="ri" && substr($keyword[$i],-2)!="di"){
        $keyword[$i]=substr($keyword[$i],0,-1);
      }else if (substr($keyword[$i],-3)=="nya" && $keyword[$i]!="punya"){
        $keyword[$i]=substr($keyword[$i],0,-3);
      }

     }

     var_dump($keyword);

    $or_query=array();

    //PROSES UNTUK MEMBUAT QUERY "LIKE" PADA MYSQL DALAM BENTUK ARRAY
    foreach ($keyword as $key){
    $or_query[]=" '%$key%' || isi like";
    }

    //MENGKONVERT ARRAY OR_QUERY JADI KALIMAT QUERY BIASA BUKAN ARRAY
    $or_query=implode("",$or_query);

    //PROSES MENGHILANGKAN KATA DARI BELAKANG 11 HURUF (UNTUK NGILANGIN  'ISI LIKE')
    $or_query=substr($or_query,0,-11);


    try{
    		$sintaks="select * from artikel where isi like $or_query";
        $sintaks_lanjut = $my_koneksi->prepare($sintaks);


    	$sintaks_lanjut->execute();

    	} catch (PDOException $e) {
    		die("Error: ".$e->getMessage());
    	}
      $row=$sintaks_lanjut->fetchAll();
    	$jml_row=$sintaks_lanjut->rowCount();

      var_dump($or_query);
      
    	if($jml_row>0){

      foreach ($row as $baris){
        echo "<br>".$baris['isi']."<br>";
      }
      }else{
    	echo "pencarian tidak ditemukan";

    }
    //UAS INFORMATION RETRIEVAL 141111058 Fiqh Rizki Saputra

    }
 ?>

<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
  <input type="text" name="cari"/>
  <input type="submit" name="submit" value="cari"/>
</form>
