<div class="container-fluid p-0">
    <div class="row">
        <div class="col">
            <div class="promo-banner">
                <div class="promo-banner-bg">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include", 
                        ".default", 
                        array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/include/main/bg.php",
                            "EDIT_TEMPLATE" => ""
                        ),
                        false
                    );?>
                </div>
                <div class="promo-banner-logo">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include", 
                        ".default", 
                        array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/include/main/logo.php",
                            "EDIT_TEMPLATE" => ""
                        ),
                        false
                    );?>
                </div>
            </div>
        </div>
    </div>
</div>