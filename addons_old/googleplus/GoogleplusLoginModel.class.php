<?php

/******************************************************
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
 ******************************************************/

/**
 * Determines whether Google+ login-button shall disappear and provides log-in URL.
 */
class GoogleplusLoginModel
{
    /**
     * @var DbConnection
     */
    private $_db;
    /**
     * @var I18n
     */
    private $_i18n;
    /**
     * @var WebSoccer
     */
    private $_websoccer;

    /**
     * GoogleplusLoginModel constructor.
     * @param DbConnection $db
     * @param I18n $i18n
     * @param WebSoccer $websoccer
     */
    public function __construct($db, $i18n, $websoccer)
    {
        $this->_db = $db;
        $this->_i18n = $i18n;
        $this->_websoccer = $websoccer;
    }

    /**
     * @return general
     * @throws Exception
     */
    public function renderView()
    {
        return $this->_websoccer->getConfig("googleplus_enable_login");
    }

    /**
     * @return array
     */
    public function getTemplateParameters()
    {

        return ["loginurl" => GoogleplusSdk::getInstance($this->_websoccer)->getLoginUrl()];
    }

}

?>