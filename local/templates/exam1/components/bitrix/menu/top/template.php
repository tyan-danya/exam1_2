<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<? if (!empty($arResult)) { ?>
	<!-- nav -->
	<nav class="nav">
		<div class="inner-wrap">
			<div class="menu-block popup-wrap">
				<a href="" class="btn-menu btn-toggle"></a>
				<div class="menu popup-block">
					<ul class="">
						<?
						$previousLevel = 0;
						foreach($arResult as $arItem) { ?>

							<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel) { ?>
								<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
							<? } ?>
							</li>
							<?if ($arItem["PERMISSION"] > "D") { ?>
								<?if ($arItem["IS_PARENT"]) { ?>

									<li <? if ($arItem["LINK"] == "/"){ ?> class="main-page" <? } ?>>
										<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
										<ul>
											<? if ($arItem["PARAMS"]["TEXT"]) { ?> 
												<div class="menu-text"><?= $arItem["PARAMS"]["TEXT"] ?></div>
											<? } ?>

								<? } else { ?>

									<li <? if ($arItem["LINK"] == "/"){ ?> class="main-page" <? } ?>>
										<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
									</li>

								<? } ?>
							<? } ?>
							<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
						<? } ?>
					</ul>
					<? if ($previousLevel > 1) { ?>
						<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
					<? } ?>
					<a href="" class="btn-close"></a>
				</div>
				<div class="menu-overlay"></div>
			</div>
		</div>
	</nav>
	<!-- /nav -->
<? } ?>