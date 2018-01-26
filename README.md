# Site Search plugin for OJS

This plugin extends the Navigation block for PKP Open Journal Systems to leverage site search rather than journal search.

## Requirements

* OJS 2.4.x

## Installation

Install this as a "block" plugin in OJS.  To install manually via the filesystem, extract the contents of this archive to a directory (e.g. "sitesearch") under "plugins/blocks" in your OJS root.  To install via Git submodule, target that same directory path: `git submodule add https://github.com/ulsdevteam/ojs-sitesearch-plugin plugins/blocks/sitesearch` and `git submodule update --init --recursive plugins/blocks/sitesearch`.  Run the upgrade script to register this plugin, e.g.: `php tools/upgrade.php upgrade`

## Usage

You can move this block into a journal sidebar by using the Journal Setup, Step 5.6: Journal Layout.

## Author / License

Written by Clinton Graham for the [University of Pittsburgh](http://www.pitt.edu).  Copyright (c) University of Pittsburgh.

Released under a license of GPL v2 or later.
