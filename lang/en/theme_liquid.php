<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Liquid.
 *
 * @package    theme_liquid
 * @copyright  2023 Agiledrop ltd.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die(); 

$string['developedby'] = 'Developed by <a href="https://agiledrop.com">Agiledrop ltd.</a>';
$string['pluginname'] = 'Liquid';
$string['configtitle'] = 'Liquid';
$string['advancedsettings'] = 'Advanced settings';
$string['unaddableblocks'] = 'Unneeded blocks';
$string['unaddableblocks_desc'] = 'The blocks specified are not needed when using this theme and will not be listed in the \'Add a block\' menu.';
$string['preset'] = 'Theme preset';
$string['preset_desc'] = 'Pick a preset to broadly change the look of the theme.';
$string['presetfiles'] = 'Additional theme preset files';
$string['presetfiles_desc'] = 'Preset files can be used to dramatically alter the appearance of the theme. See <a href="https://docs.moodle.org/dev/Boost_Presets">Boost presets</a> for information on creating and sharing your own preset files.';
$string['rawscss'] = 'Raw SCSS';
$string['rawscss_desc'] = 'Use this field to provide SCSS or CSS code which will be injected at the end of the style sheet.';
$string['rawscsspre'] = 'Raw initial SCSS';
$string['rawscsspre_desc'] = 'In this field you can provide initialising SCSS code, it will be injected before everything else. Most of the time you will use this setting to define variables.';
$string['colorssettings'] = 'Colors settings';
$string['primarycolor'] = 'Primary color';
$string['textprimarycolor'] = 'Text color on primary color';
$string['successcolor'] = 'Success color';
$string['infocolor'] = 'Info color';
$string['warningcolor'] = 'Warning color';
$string['dangercolor'] = 'Danger color';
$string['secondarycolor'] = 'Secondary color';
$string['textsecondarycolor'] = 'Text color on secondary color';
$string['typographysettings'] = 'Typography settings';
$string['googlefonturl'] = 'Google font URL';
$string['googlefonturl_desc'] = 'If you would like to use different font, you should paste <a href="https://fonts.google.com" target="_blank">Google font</a> URL in this field.';
$string['fontfamily'] = 'Font family';
$string['fontfamily_desc'] = 'Enter a CSS value of font-family you want to use in this field.';
$string['bodyfont'] = 'Body font size, rem';
$string['borderssettings'] = 'Borders settings';
$string['borderwidth'] = 'Border width';
$string['roundedbase'] = 'Rounded base';
$string['roundedsm'] = 'Rounded SM';
$string['roundedlg'] = 'Rounded LG';
$string['additionalsettings'] = 'Additional settings';
$string['leftnavigation'] = 'Display navigation on left';
$string['frontpageslider'] = 'Frontpage slider';
$string['showslider'] = 'Show/hide slider';
$string['showsliderdesc'] = 'Checkbox should be checked to display slider on frontpage.';
$string['numberslides'] = 'Number of slides';
$string['numberslidesdesc'] = 'Select a number of slides in slider.';
$string['slidenumber'] = 'Slide {$a->slide}';
$string['slideshow'] = 'Show/hide slide';
$string['slideshowdesc'] = 'Checkbox should be check to display this slide in slider.';
$string['slideimage'] = 'Slide image';
$string['slideimagedesc'] = 'Select an image to display in background of a slide.';
$string['slidetext'] = 'Slide text';
$string['slidetextdesc'] = 'This content will be displayed on slide. You can use HTML code here.';
$string['slidelink'] = 'Slide URL';
$string['slidelinkdesc'] = 'Click on the slide will redirect user to entered URL.';