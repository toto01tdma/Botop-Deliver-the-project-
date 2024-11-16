/**
 * @license Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
  config.extraPlugins = 'textmatch';
  config.extraPlugins = 'autocomplete';
  config.extraPlugins = 'textwatcher';
  config.extraPlugins = 'emoji';
  config.contentsCss = '/assets/fonts.css';
  config.font_names = 'Ekkamai/Ekkamai;' + config.font_names;
  config.font_names = 'FC Daisy/FC-Daisy;' + config.font_names;
  config.font_names = 'FC Friday/FC-Friday;' + config.font_names;
  config.font_names = 'FC Iconic/FC-Iconic;' + config.font_names;
  config.font_names = 'FC Marshmallow/FC-Marshmallow;' + config.font_names;
  config.font_names = 'FC Motorway/FC-Motorway;' + config.font_names;
  config.font_names = 'FC Palette/FC-Palette;' + config.font_names;
  config.font_names = 'FC SaveSpace/FC-SaveSpace;' + config.font_names;
  config.font_names = 'Whale/Whale;' + config.font_names;
};
