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

namespace theme_liquid\output;

use theme_config;
use moodle_url;
use html_writer;

class core_renderer extends \theme_boost\output\core_renderer {
  public function standard_head_html() {
    $output = parent::standard_head_html();
    $theme = theme_config::load('liquid');
    $google_font = $theme->settings->googlefonturl;

    $output .= '<link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="' . $google_font . '" rel="stylesheet">';

    return $output;
  }

  protected function render_context_header(\context_header $contextheader) {
    if (!isset($contextheader->heading)) {
      $heading = $this->heading($this->page->heading, $contextheader->headinglevel, 'h1');
    } else {
      $heading = $this->heading($contextheader->heading, $contextheader->headinglevel, 'h1');
    }

    $html = html_writer::start_div('page-context-header');

    if (isset($contextheader->imagedata)) {
      $html .= html_writer::div($contextheader->imagedata, 'page-header-image mr-2');
    }

    if (isset($contextheader->prefix)) {
      $prefix = html_writer::div($contextheader->prefix, 'text-muted text-uppercase small line-height-3');
      $heading = $prefix . $heading;
    }
    $html .= html_writer::tag('div', $heading, array('class' => 'page-header-headings'));

    if (isset($contextheader->additionalbuttons)) {
      $html .= html_writer::start_div('btn-group header-button-group');
      foreach ($contextheader->additionalbuttons as $button) {
        if (!isset($button->page)) {
          if ($button['buttontype'] === 'togglecontact') {
            \core_message\helper::togglecontact_requirejs();
          }
          if ($button['buttontype'] === 'message') {
            \core_message\helper::messageuser_requirejs();
          }
          $image = $this->pix_icon($button['formattedimage'], $button['title'], 'moodle', array(
            'class' => 'iconsmall',
            'role' => 'presentation'
          ));
          $image .= html_writer::span($button['title'], 'header-button-title');
        } else {
          $image = html_writer::empty_tag('img', array(
            'src' => $button['formattedimage'],
            'role' => 'presentation'
          ));
        }
        $html .= html_writer::link($button['url'], html_writer::tag('span', $image), $button['linkattributes']);
      }
      $html .= html_writer::end_div();
    }
    $html .= html_writer::end_div();

    return $html;
  }
}