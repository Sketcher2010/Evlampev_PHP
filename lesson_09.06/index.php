<?php
include 'UserInterface.php';
include 'Document.php';
include 'User.php';
include 'VkUser.php';
include 'GoogleUser.php';

$user = new User();
$user->setName("Viktor");
$vkuser = new VkUser();
$vkuser->setName("Ne Viktor");
$googleuser = new GoogleUser();
$googleuser->setName("Sovsem ne Viktor");

$documents = [];

$documents[] = new Document();
$documents[] = new Document();
$documents[] = new Document();

$documents[0]->setExecutor($user);
$documents[1]->setExecutor($vkuser);
$documents[2]->setExecutor($googleuser);


foreach ($documents as $document) {
    echo $document->getExecutor()->getName() . "\n";
}
