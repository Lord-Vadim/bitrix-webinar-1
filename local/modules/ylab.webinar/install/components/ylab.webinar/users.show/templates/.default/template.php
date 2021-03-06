<?php
/**
 * Created by PhpStorm
 * User: Vadim Epifanov
 * Date: 18.08.2018
 * Time: 15:31
 *
 * @var array $arResult
 */

use Bitrix\Main\Localization\Loc;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<br>
<div class="user-table">
    <table>
        <tr>
            <th><?= Loc::getMessage('ID')?></th>
            <th><?= Loc::getMessage('NAME')?></th>
            <th><?= Loc::getMessage('BIRTHDAY')?></th>
            <th><?= Loc::getMessage('PHONE')?></th>
            <th><?= Loc::getMessage('CITY')?></th>
        </tr>
        <? foreach ($arResult as $arItem) { ?>
            <tr>
                <td><?= $arItem['ID'] ?></td>
                <td><?= $arItem['NAME'] ?></td>
                <td><?= $arItem['BIRTHDAY'] ?></td>
                <td><?= $arItem['PHONE'] ?></td>
                <td><?= $arItem['CITY'] ?></td>
            </tr>
        <? } ?>
    </table>
</div>
