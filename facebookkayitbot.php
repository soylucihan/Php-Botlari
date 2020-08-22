<?php

require 'vendor/autoload.php';


use Goutte\Client;

$client = new Client();

//facebook oto hesap aç

$crawler = $client->request('GET', 'https://www.facebook.com/');


$form = $crawler->selectButton('Kaydol')->form(); // Formu belirliyoruz
$form['firstname'] = 'wagner'; // Kullanıcı adı veya email alanı
$form['lastname'] = 'astn martin'; // Parola alanı
$form['reg_email__'] = 'exampleemail@hotmail.com'; // Parola alanı
$form['reg_passwd__'] = 'password'; // Parola alanı
$form['sex'] = '2'; // Parola alanı
$form['birthday_day'] = '2'; // Parola alanı
$form['birthday_month'] = '2'; // Parola alanı
$form['birthday_year'] = '2002'; // Parola alanı
$crawler = $client->submit($form); //  submit 

echo $crawler->html(); // Dönen sonucu ekrana bas

$form = $crawler->selectButton('Kaydol')->form();;$crawler = $client->submit($form);
echo $crawler->html(); // Dönen sonucu ekrana bas
$form = $crawler->selectButton('Tamam')->form();;$crawler = $client->submit($form);
echo $crawler->html(); // Dönen sonucu ekrana bas
$form = $crawler->selectButton('Telefonla Onayla')->form();$crawler = $client->submit($form);
echo $crawler->html(); // Dönen sonucu ekrana bas
$form = $crawler->selectButton('Ekle')->form();
$form['new'] = '5368578978'; // Parola alanı
$crawler = $client->submit($form);
echo $crawler->html(); // Dönen sonucu ekrana bas
$form = $crawler->selectButton('Kodu Gönder')->form();
$form['p_pn'] = '5368578978'; // Parola alanı
$crawler = $client->submit($form);
echo $crawler->html(); // Dönen sonucu ekrana bas


?>
