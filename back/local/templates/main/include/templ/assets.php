<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
use Bitrix\Main\Page\Asset;

Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600&display=swap&subset=cyrillic" rel="stylesheet">');  
Asset::getInstance()->addString('<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">');
Asset::getInstance()->addString('<script src="https://api-maps.yandex.ru/2.1/?apikey=ad5e7ab5-dd9e-4c56-8d47-07e1ec341441&lang=ru_RU&load=Map,Placemark" type="text/javascript"></script>');
Asset::getInstance()->addString('<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>');
Asset::getInstance()->addString('<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"> </script>');
Asset::getInstance()->addString('<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"> </script>');

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/styles/styles.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/styles/styles-1200.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/styles/styles-991.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/styles/styles-768.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/styles/styles-576.css');

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/src/map.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/src/events.js');
