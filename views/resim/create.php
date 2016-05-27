<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\admin\models\resim */

$this->title = 'Create Resim';
$this->params['breadcrumbs'][] = ['label' => 'Resims', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resim-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>




<?php
if($_POST){//Form gönderildi mi?
	if ($_FILES["resim"]["size"]<1024*1024){//Dosya boyutu 1Mb tan az olsun
		if ($_FILES["resim"]["type"]=="image/jpeg"){//dosya tipi jpeg olsun
			$aciklama=$_POST["aciklama"];
			$dosya_adi=$_FILES["resim"]["name"];
			//Dosyaya yeni bir isim oluşturuluyor
			$uret=array("as","rt","ty","yu","fg");
			$uzanti=substr($dosya_adi,-4,4);
			$sayi_tut=rand(1,10000);
			$yeni_ad="dosyalar/".$uret[rand(0,4)].$sayi_tut.$uzanti;
			//Dosya yeni adıyla dosyalar klasörüne kaydedilecek
			if (move_uploaded_file($_FILES["resim"]["tmp_name"],$yeni_ad)){
				echo 'Dosya başarıyla yüklendi.';
				//Bilgiler veri tabanına kaydedilsin
				$sorgu=mysql_query("insert into resim (resimad,resimicerik) values ('$yeni_ad','$aciklama')");
				if ($sorgu){
					echo 'Veritabanına kaydedildi.';
				}else{
					echo 'Kayıt sırasında hata oluştu!';
				}
			}else{
				echo 'Dosya Yüklenemedi!';
			}
		}else{
			echo 'Dosya yalnızca jpeg formatında olabilir!';
		}
	}else{			
		echo 'Dosya boyutu 1 Mb ı geçemez!';
	}
}



?>








</div>
