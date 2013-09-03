<?php

/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 * @package    MetaModels
 * @subpackage AttributeTranslatedFile
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author     Andreas Isaak <info@andreas-isaak.de>
 * @copyright  The MetaModels team.
 * @license    LGPL.
 * @filesource
 */

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'MetaModels\Attribute\TranslatedFile\TranslatedFile' => 'system/modules/metamodelsattribute_translatedfile/MetaModels/Attribute/TranslatedFile/TranslatedFile.php',
	'MetaModels\Dca\AttributeTranslatedFile'             => 'system/modules/metamodelsattribute_translatedfile/MetaModels/Dca/AttributeTranslatedFile.php',

	'MetaModelAttributeTranslatedFile'                   => 'system/modules/metamodelsattribute_translatedfile/deprecated/MetaModelAttributeTranslatedFile.php',
	'TableMetaModelsAttributeTranslatedFile'             => 'system/modules/metamodelsattribute_translatedfile/deprecated/TableMetaModelsAttributeTranslatedFile.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mm_attr_translatedfile'              => 'system/modules/metamodelsattribute_translatedfile/templates',
));
