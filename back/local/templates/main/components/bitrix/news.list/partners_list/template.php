<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="places-list">
	<?foreach($arResult["ITEMS"] as $key => $item) {?>
	<?
	$this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="places-list-item" id="<?=$this->GetEditAreaId($item['ID']);?>">
		<a href="<?=$item['PROPERTIES']['url']['VALUE']?>">
			<?if ($item['PREVIEW_PICTURE']) {?>
			<img src="<?=$item['PREVIEW_PICTURE']['resize']['src']?>" alt="<?=$item['NAME']?>">
			<?}?>
		</a>
	</div>
	<?}?>
</div>