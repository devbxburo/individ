<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
global $APPLICATION;
?>
<!doctype html>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <?$APPLICATION->ShowHead();?>
    <? include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/assets.php'; ?>
</head>
<body>
    <div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
    <div class="wrapper">
	<? include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/header.php'; ?>
	<main>
        <div class="m-inner">
        