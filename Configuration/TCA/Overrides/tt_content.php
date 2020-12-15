<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {
    // Add the FlexForm
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['fsfzollercompare_zollercompare'] = 'recursive,select_key,pages';
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['fsfzollercompare_zollercompare'] = 'pi_flexform';
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        'fsfzollercompare_zollercompare',
        'FILE:EXT:fsf_zoller_compare/Configuration/FlexForms/flexform.xml'
    );
});
