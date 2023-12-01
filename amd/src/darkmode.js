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
 * @copyright  2023 Agiledrop ltd.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

export const init = () => {
  const darkThemeToggle = document.getElementById("darktheme-checkbox");
  const storedDarkThemeSetting = localStorage.getItem("darkThemeEnabled");

  const setTheme = (theme) => {
    document.documentElement.setAttribute('data-theme', theme);
  };

  if (storedDarkThemeSetting === null) {
    localStorage.setItem("darkThemeEnabled", "0");
    darkThemeToggle.checked = false;
    setTheme('light');
  } else {
    darkThemeToggle.checked = storedDarkThemeSetting === "1";
    setTheme(darkThemeToggle.checked ? 'dark' : 'light');
  }

  darkThemeToggle.addEventListener("change", (e) => {
    const isDarkThemeEnabled = e.target.checked;

    setTheme(isDarkThemeEnabled ? 'dark' : 'light');
    localStorage.setItem("darkThemeEnabled", isDarkThemeEnabled ? "1" : "0");
  });
};
