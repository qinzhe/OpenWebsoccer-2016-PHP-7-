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
* This Version called "OpenWebsoccer" is a advanced modification
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
SEC;
class MessagesInboxModel extends BaseModel
{
	FUNCTION getTemplateParameters()
	{
		$count = MessagesDataService::countInboxMessages($this->_websoccer, $this->_db);
		$eps = $this->_websoccer->getConfig('entries_per_page');
		$paginator = new Paginator($count, $eps, $this->_websoccer);
		if ($count > 0) {
			$messages = MessagesDataService::getInboxMessages($this->_websoccer, $this->_db, $paginator->getFirstIndex(), $eps);
		} else {
			$messages = [];
		}
		return ['messages' => $messages, 'paginator' => $paginator];
	}
}