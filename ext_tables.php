<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'FREESIXTYFIVE.FsfZollerCompare',
            'Zollercompare',
            'Zoller Compare'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('fsf_zoller_compare', 'Configuration/TypoScript', 'Zoller Compare');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_fsfzollercompare_domain_model_zollercompare', 'EXT:fsf_zoller_compare/Resources/Private/Language/locallang_csh_tx_fsfzollercompare_domain_model_zollercompare.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_fsfzollercompare_domain_model_zollercompare');

    }
);
