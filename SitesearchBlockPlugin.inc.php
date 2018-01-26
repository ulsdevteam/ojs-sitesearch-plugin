<?php

/**
 * @file plugins/blocks/sitesearch/SitesearchBlockPlugin.inc.php
 *
 * Copyright (c) 2013-2017 Simon Fraser University
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class SitesearchBlockPlugin
 * @ingroup plugins_blocks_sitesearch
 *
 * @brief Class for sitesearch block plugin
 */

import('lib.pkp.classes.plugins.BlockPlugin');
import('plugins.blocks.navigation.NavigationBlockPlugin');

class SitesearchBlockPlugin extends NavigationBlockPlugin {

	/**
	 * Load our parent's locale files as well
	 *
	 * @see PKPPlugin::getLocaleFilename()
	 *
	 */
	function getLocaleFilename($locale) {
		$pluginPath = $this->pluginPath;
		$this->pluginPath = 'plugins/blocks/navigation';
		$parentLocale = parent::getLocaleFilename($locale);
		$this->pluginPath = $pluginPath;
		return array_merge($parentLocale, parent::getLocaleFilename($locale));
	}


	/**
	 * Get the display name of this plugin.
	 * @return String
	 */
	function getDisplayName() {
		return __('plugins.block.sitesearch.displayName');
	}

	/**
	 * Get a description of the plugin.
	 */
	function getDescription() {
		return __('plugins.block.sitesearch.description');
	}

}

?>
