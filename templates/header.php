<!DOCTYPE html>
<html lang="<?=$this->language?>">
<meta charset="utf-8">
<title><?=$this->printTitle()?></title>
<?php
// Alternate language links; see
// <http://googlewebmastercentral.blogspot.se/2011/12/new-markup-for-multilingual-content.html>.
foreach (array_keys($site->pages[$this->page]) as $language) {
    ?>
<link rel="alternate" hreflang="<?=$language?>" href="<?=$site->link($this->page, $language)?>">
<?php
}
?>
<link rel="stylesheet" href="css/standard.css">
<meta name="description" content="<?=$site->config->metaDescription?>">
<meta name="keywords" content="<?=$site->config->metaKeywords?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<header>
  <a href="<?=$site->link($site->config->startPage)?>">
    <h1>FRTemplate</h1>
  </a>

<?php require 'navigation.php';?>
</header>

<section>

