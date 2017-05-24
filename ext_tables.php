<?php
/**
 * ext tables config file for ext: "formhandler"
 *
 * @author Reinhard Führicht <rf@typoheads.at>
 * @package    Tx_Formhandler
 */

if (!defined('TYPO3_MODE')) die ('Access denied.');

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'Typoheads.' . $_EXTKEY,
        'web',
        'log',
        'bottom',
        [
            'Module' => 'index, view, selectFields, export, deleteLogRows'
        ],
        [
            'access' => 'user,group',
            'icon'   => 'EXT:formhandler/Resources/Public/Icons/moduleicon.gif',
            'labels' => 'LLL:EXT:formhandler/Resources/Private/Language/locallang_mod.xml'
        ]
    );
}
