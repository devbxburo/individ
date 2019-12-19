<?php
define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
use Bitrix\Main\Application,
    Bitrix\Main\Loader,
    Bitrix\Main\Type\DateTime,
    Bitrix\Main\Mail\Event,
    Bitrix\Highloadblock\HighloadBlockTable;

$request = Application::getInstance()->getContext()->getRequest();

Loader::IncludeModule("highloadblock");

if ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' && $request->isPost())
{
    $sessid = $request->getPost("sessid");
    $email = $request->getPost("email");
    $name = $request->getPost("name");
    $phone = $request->getPost("phone");
    $text = $request->getPost("text");

    header('Content-Type: application/json');

    if ($sessid != bitrix_sessid() or !$email or !$name or !$phone or !$text) {
        echo json_encode(['error' => 1, 'comment' => 'no data']);
        die();
    }

    $arFields = [
        "UF_DATE" => new DateTime(),
        "UF_NAME" => $name,
        "UF_EMAIL" => $email,
        "UF_PHONE" => $phone,
        "UF_TEXT" => $text,
    ];

    $hlblock = HighloadBlockTable::getById(1)->fetch();
    $entity = HighloadBlockTable::compileEntity($hlblock);
    $entity_data_class = $entity->getDataClass();

    $result = $entity_data_class::add($arFields);
    if ($result->isSuccess())
    {
        $newID = $result->getId();
        $arElement = $entity_data_class::getById($newID)->fetch();

        $resultSend = Event::send(array(
            'EVENT_NAME' => 'FORM',
            'C_FIELDS' => array(
                "NAME" => $arElement["UF_NAME"],
                "EMAIL" => $arElement["UF_EMAIL"],
                "PHONE" => $arElement["UF_PHONE"],
                "TEXT" => $arElement["UF_TEXT"],
                "URL" => 'http://' . SITE_SERVER_NAME . '/bitrix/admin/highloadblock_row_edit.php?ENTITY_ID=1&ID=' . $arElement["ID"] . '&lang=ru'
            ),
            'LID' => SITE_ID
        ));
    }

    echo json_encode(['error' => 0, 'comment' => '']);
    die();
}

