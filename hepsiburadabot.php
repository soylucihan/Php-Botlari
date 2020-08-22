<?php

require 'vendor/autoload.php';


use Goutte\Client;

$client = new Client();

//hepsiburada ürün çekme

$crawler = $client->request('GET', 'https://www.hepsiburada.com/ara?q=cep%20telefonu');

$status_code = $client->getResponse()->getStatus();

if($status_code==200){

    echo "<b>Bağlantı başarılı.</b><br />";
}

//Site Başlığını Getir

echo $crawler->filterXPath('html/head/title')->text();

//Sayfadaki Link Sayısını Bul

echo $crawler->filter('a')->count();

if($crawler->filter('a')->count() > 0){
   
   echo "Sayfada link bulundu devam edebiliriz.";
}

//Anasayfada Listelenen Ürünlerin Başlıklarını Getir
$ss;
$crawler->filter('h3.product-title')->each(function ($node ,$i) {


		$ss=$node->text(); echo $ss."------";
    print $node->text();
    echo "<br />";
});
echo $ss[0];
/*//Ürün Linklerini Getir
$crawler->filter('div.product a')->each(function ($node ,$i) {

    print $node->attr('href');
    echo "<br />";
});*/
?>
