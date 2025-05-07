<div class="article-card">
    <? if ((!isset($arParams["DISPLAY_NAME"])
	    || $arParams["DISPLAY_NAME"]!="N") && $arResult["NAME"]) : ?>

        <div class="article-card__title">
            <?php echo $arResult["NAME"] ?>
        </div>

    <?endif;?>
    <? if((!isset($arParams["DISPLAY_DATE"])
    || $arParams["DISPLAY_DATE"]!="N") && $arResult["DISPLAY_ACTIVE_FROM"]) : ?>

        <div class="article-card__date">
            <?php echo $arResult["DISPLAY_ACTIVE_FROM"]; ?>
        </div>

    <?endif;?>

    <div class="article-card__content">
    <? if((!isset($arParams["DISPLAY_PICTURE"])
        || $arParams["DISPLAY_PICTURE"]!="N")
        && is_array($arResult["DETAIL_PICTURE"])) : ?>

        <div class="article-card__image sticky">
            <img
                class="detail_picture"
                border="0"
                src="<?php echo $arResult["DETAIL_PICTURE"]["SRC"]?>"
                width="<?php echo $arResult["DETAIL_PICTURE"]["WIDTH"]?>"
                height="<?php echo $arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
                alt="<?php echo $arResult["DETAIL_PICTURE"]["ALT"]?>"
                title="<?php echo $arResult["DETAIL_PICTURE"]["TITLE"]?>"
                />
            </div>

    <?endif?>
        <div class="article-card__text">
        <? if($arResult["DETAIL_TEXT"] <> '') : ?>

            <div class="block-content" data-anim="anim-3">
                <?php echo $arResult["DETAIL_TEXT"];?>
            </div>

        <?endif?>
            <a class="article-card__button" href="
                <?php 
                    $arCurSection = CIBlockSection::GetByID($arResult["IBLOCK_SECTION_ID"])->GetNext();
                    echo $arCurSection["SECTION_PAGE_URL"]; 
                ?>
            ">Назад к новостям</a></div>
    </div>
</div>