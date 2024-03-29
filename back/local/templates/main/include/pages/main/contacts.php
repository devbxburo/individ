<div class="contacting">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-xl-3">
                <div class="contacting-block">
                    <div class="contacting-block-item">
                        <div class="contacting-block-item-img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="59"
                                viewBox="0 0 44 59" fill="none">
                                <path
                                    d="M21.9952 37.7912C30.5486 37.7912 37.4826 30.8572 37.4826 22.3038C37.4826 13.7503 30.5486 6.81641 21.9952 6.81641C13.4418 6.81641 6.50781 13.7503 6.50781 22.3038C6.50781 30.8572 13.4418 37.7912 21.9952 37.7912Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M44 22.3399C43.9988 10.2074 34.1314 0.339844 21.9992 0.339844C9.86752 0.339844 0 10.2075 0 22.3401C0 25.4948 0.646902 28.5254 1.92978 31.3347C7.05902 42.5587 16.8169 54.2985 19.6398 57.5817L19.6412 57.5833C20.2322 58.2693 21.0933 58.6644 21.9998 58.6644C22.9062 58.6644 23.7673 58.2692 24.3583 57.5833L24.3597 57.5816C27.1815 54.2992 36.939 42.5604 42.0699 31.3353C43.3537 28.5256 44 25.4943 44 22.3399ZM40.2509 30.5039C35.2489 41.447 25.6619 52.9988 22.8431 56.2778C22.6319 56.523 22.3239 56.6644 21.9998 56.6644C21.6756 56.6644 21.3676 56.523 21.1563 56.2778C18.3365 52.9982 8.7494 41.4459 3.74906 30.5039C2.58876 27.9631 2 25.2167 2 22.3401C2 11.312 10.9722 2.33984 21.9992 2.33984C33.0268 2.33984 41.9989 11.312 42 22.3401C42 25.2167 41.4118 27.9631 40.2509 30.5039Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="contacting-block-item-txt">
                            <div class="contacting-block-item-txt-title">
                                Комплекс
                            </div>
                            <div class="contacting-block-item-txt-msg">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include", 
                                    ".default", 
                                    array(
                                        "COMPONENT_TEMPLATE" => ".default",
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => "/include/main/address.php",
                                        "EDIT_TEMPLATE" => ""
                                    ),
                                    false
                                );?>
                            </div>
                        </div>
                    </div>
                    <div class="contacting-block-item">
                        <div class="contacting-block-item-txt">
                            <div class="contacting-block-item-txt-title">
                                Офис продаж
                            </div>
                            <div class="contacting-block-item-txt-subtitle">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include", 
                                    ".default", 
                                    array(
                                        "COMPONENT_TEMPLATE" => ".default",
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => "/include/main/phone.php",
                                        "EDIT_TEMPLATE" => ""
                                    ),
                                    false
                                );?>
                            </div>
                            <div class="contacting-block-item-txt-msg">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include", 
                                    ".default", 
                                    array(
                                        "COMPONENT_TEMPLATE" => ".default",
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => "/include/main/address2.php",
                                        "EDIT_TEMPLATE" => ""
                                    ),
                                    false
                                );?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-9">
                <div class="contacting-map">
                    <div class="contacting-map-body" id="contacting-map-body"></div>
                </div>
            </div>
        </div>
    </div>
</div>