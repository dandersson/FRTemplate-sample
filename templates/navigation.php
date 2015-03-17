<?php
$alt_lang_sv_en = $this->alternateLanguageSvEn();
?>
  <nav>
    <ul id="alternate-language">
      <li><a href="<?=$site->link($this->page, $alt_lang_sv_en)?>" class="language-switch"><?=$site->config->languageLinkText[$alt_lang_sv_en]?></a>
    </ul>

    <ul id="internal">
<?php
foreach ($site->pages as $pagename => $header) {
    ?>
      <li<?=($this->page == $pagename ? ' class="current">' . $header[$this->language] : '><a href="' . $site->link($pagename) . '">' . $header[$this->language] . '</a>')?>

<?php
}
?>
    </ul>

    <ul id="external">
      <li><a href="https://github.com/dandersson/FRTemplate">FRTemplate @ Github</a>
    </ul>
  </nav>
