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
 * Helps building a breadcrumb navigation.
 */
class BreadcrumbBuilder
{
	/**
	 * Provides the breadcrump path to the specified page ID according to the hierarchical pages configuration at module.xml.
	 *
	 * @param WebSoccer $website Websoccer context.
	 * @param I18n $i18n Messages context
	 * @param array $pages Array of all available pages configurations.
	 * @param string $currentPageId current page ID.
	 * @return array Array of page items with key=pageId, value=Navigation label; hierarchically sorted.
	 */
	public static function getBreadcrumbItems($website, $i18n, $pages, $currentPageId)
	{
		if (!isset($pages[$currentPageId])) {
			return;
		}
		$items = array();
		$nextPageId = $currentPageId;
		while($nextPageId) {
			$pageConfig = json_decode($pages[$nextPageId], TRUE);
			$items[$nextPageId] = $i18n->getNavigationLabel($nextPageId);
			if (isset($pageConfig['parentItem']) && strlen($pageConfig['parentItem'])) {
				$nextPageId = $pageConfig['parentItem'];
			} else {
				$nextPageId = FALSE;
			}
		}
		return array_reverse($items);
	}
}