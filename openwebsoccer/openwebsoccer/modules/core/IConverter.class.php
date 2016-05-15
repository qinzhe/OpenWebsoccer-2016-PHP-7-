<?php
/******************************************************************
*
* This file is part of OpenWebSoccer-Sim.
*
* OpenWebSoccer-Sim is free software: you can redistribute it
* and/or modify it under the terms of the
* GNU Lesser General Public License
* as published by the Free Software Foundation, either version 3 of
* the License, or any later version.
*
* OpenWebSoccer-Sim is distributed in the hope that it will be
* useful, but WITHOUT ANY WARRANTY; without even the implied
* warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
* See the GNU Lesser General Public License for more details.
*
* You should have received a copy of the GNU Lesser General Public
* License along with OpenWebSoccer-Sim.
* If not, see <http://www.gnu.org/licenses/>.
*
* Author: Ingo Hofmann
* Base Version: OpenWebSoccer-Sim 5.2.4-Snapshot vom 21. Juni 2015
*
* This Version called "OpenWebsoccer" is a advanced modifikation
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
defined('OpenWebsoccer') or header('location: ../../index.php');
/**
 * Any converter must implement this interface.
 * <strong>Note:</strong> Converter Names must end with 'Converter', e.g. 'MyFooConverter'.
 */
interface IConverter
{
	/**
	 * @param I18n $i18n i18n instance.
	 * @param WebSoccer $websoccer Websoccer instance.
	 */
	public function __construct($i18n, $websoccer);
	/**
	 * Converts specified value into a secure (i.e. escaped) HTML string, ready for output.
	 *
	 * @param mixed $value value to be converted.
	 * @return HTML representation of specified value.
	 */
	public function toHtml($value);
	/**
	 * Converts specified value into an unescaped, but properly formatted text.
	 *
	 * @param mixed $value value to be converted.
	 * @return formatted value for output.
	 */
	public function toText($value);
	/**
	 * Converts specified value into a value that can be stored into the data base.
	 *
	 * @param mixed $value value to be converted.
	 * @return formatted value for the database.
	 */
	public function toDbValue($value);
}