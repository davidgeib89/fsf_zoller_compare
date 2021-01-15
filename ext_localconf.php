<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'FREESIXTYFIVE.FsfZollerCompare',
            'Zollercompare',
            [
                'ZollerCompare' => 'list'
            ],
            // non-cacheable actions
            [
                'ZollerCompare' => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        zollercompare {
                            iconIdentifier = fsf_zoller_compare-plugin-zollercompare
                            title = LLL:EXT:fsf_zoller_compare/Resources/Private/Language/locallang_db.xlf:tx_fsf_zoller_compare_zollercompare.name
                            description = LLL:EXT:fsf_zoller_compare/Resources/Private/Language/locallang_db.xlf:tx_fsf_zoller_compare_zollercompare.description
                            tt_content_defValues {
                                CType = list
                                list_type = fsfzollercompare_zollercompare
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'fsf_zoller_compare-plugin-zollercompare',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:fsf_zoller_compare/Resources/Public/Icons/zoller_z.svg']
			);
		
    }
);
