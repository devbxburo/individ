<div class="project">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col">
                <div class="project-head">
                    <div class="project-head-txt">
                        Жилой комплекс
                    </div>
                    <div class="project-head-name">
                        <h1>Новые Котельники</h1>
                        <div class="project-head-name-status">
                            <a href="#">
                                <span>Идут продажи</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                    <path
                                        d="M13.3234 8.54002C12.9548 8.54002 12.656 8.8423 12.656 9.21523V14.3369C12.656 14.906 12.1984 15.3689 11.6359 15.3689H2.35486C1.79241 15.3689 1.33479 14.906 1.33479 14.3369V4.94718C1.33479 4.37813 1.79241 3.91516 2.35486 3.91516H7.41726C7.78584 3.91516 8.08466 3.61285 8.08466 3.23995C8.08466 2.86705 7.78584 2.56474 7.41726 2.56474H2.35486C1.0564 2.56474 0 3.63351 0 4.94718V14.3369C0 15.6506 1.0564 16.7194 2.35486 16.7194H11.6359C12.9344 16.7194 13.9908 15.6506 13.9908 14.3369V9.21523C13.9908 8.8423 13.692 8.54002 13.3234 8.54002Z"
                                        fill="white" />
                                    <path
                                        d="M15.8545 0.00390625H10.7921C10.4235 0.00390625 10.1247 0.306221 10.1247 0.679119C10.1247 1.05202 10.4235 1.35433 10.7921 1.35433H15.1871V5.80081C15.1871 6.1737 15.4859 6.47602 15.8545 6.47602C16.2231 6.47602 16.5219 6.1737 16.5219 5.80081V0.679119C16.5219 0.306221 16.2231 0.00390625 15.8545 0.00390625Z"
                                        fill="white" />
                                    <path
                                        d="M16.3265 0.201681C16.0659 -0.0619789 15.6433 -0.0619789 15.3826 0.201681L6.1016 9.59139C5.84096 9.85508 5.84096 10.2826 6.1016 10.5463C6.2319 10.6782 6.40274 10.7441 6.57354 10.7441C6.74437 10.7441 6.91518 10.6781 7.04548 10.5463L16.3265 1.15658C16.5871 0.892891 16.5871 0.465374 16.3265 0.201681Z"
                                        fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="tabs pr">
                        <div class="tabs-block">
                            <div class="tabs-block-item active">
                                <a href="#">
                                    О проекте
                                </a>
                            </div>
                            <div class="tabs-block-item">
                                <a href="#">
                                    Документы
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="project-body">
        <div class="project-body-item">
            <div class="container-fluid p-0">
                <div class="row adp-reverse">
                    <div class="col-lg-6 nopadding">
                        <div class="project-body-item-title">
                            <h2>О проекте</h2>
                        </div>
                        <div class="project-body-item-txt">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include", 
                                ".default", 
                                array(
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/include/main/project.php",
                                    "EDIT_TEMPLATE" => ""
                                ),
                                false
                            );?>
                        </div>
                    </div>
                    <div class="col-lg-6 nopadding">
                        <div class="project-body-item-img">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include", 
                                ".default", 
                                array(
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/include/main/project_img.php",
                                    "EDIT_TEMPLATE" => ""
                                ),
                                false
                            );?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-body-item video">
            <div class="container-fluid p-0">
                <div class="row adp-reverse">
                    <div class="col-lg-6 nopadding">
                        <div class="project-body-item-video">
                            <div class="project-body-item-video-body">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include", 
                                    ".default", 
                                    array(
                                        "COMPONENT_TEMPLATE" => ".default",
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => "/include/main/video.php",
                                        "EDIT_TEMPLATE" => ""
                                    ),
                                    false
                                );?>
                            </div>
                            <div class="project-body-item-video-txt">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include", 
                                    ".default", 
                                    array(
                                        "COMPONENT_TEMPLATE" => ".default",
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => "/include/main/video_name.php",
                                        "EDIT_TEMPLATE" => ""
                                    ),
                                    false
                                );?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 nopadding">
                        <div class="project-body-item-title">
                            <h2>Расположение</h2>
                        </div>
                        <div class="project-body-item-txt">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include", 
                                ".default", 
                                array(
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/include/main/place.php",
                                    "EDIT_TEMPLATE" => ""
                                ),
                                false
                            );?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>