<?require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
foreach ($arResult['ITEMS'] as $key => $item) {
    if ($item['PREVIEW_PICTURE']) {
        $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['resize'] = CFile::ResizeImageGet($item['PREVIEW_PICTURE']['ID'], array('width'=>217, 'height'=>90), BX_RESIZE_IMAGE_PROPORTIONAL, true); 
    }
}