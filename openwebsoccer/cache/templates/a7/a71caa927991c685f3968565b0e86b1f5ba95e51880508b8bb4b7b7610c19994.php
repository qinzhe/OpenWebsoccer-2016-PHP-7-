<?php

/* blocks/sif_sidebar.twig */
class __TwigTemplate_36f2d75396f49e95d28c4c623057d141b38c1090f767acd39468a27049a4be6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 29
        $context["adcode"] = $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "frontend_sif_code_sidebar"), "method");
        // line 30
        $this->loadTemplate("adcode.twig", "blocks/sif_sidebar.twig", 30)->display($context);
    }

    public function getTemplateName()
    {
        return "blocks/sif_sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 30,  19 => 29,);
    }
}
/* {#*/
/* **/
/* * This file is part of OpenWebSoccer-Sim.*/
/* **/
/* * OpenWebSoccer-Sim is free software: you can redistribute it*/
/* * and/or modify it under the terms of the*/
/* * GNU Lesser General Public License*/
/* * as published by the Free Software Foundation, either version 3 of*/
/* * the License, or any later version.*/
/* **/
/* * OpenWebSoccer-Sim is distributed in the hope that it will be*/
/* * useful, but WITHOUT ANY WARRANTY; without even the implied*/
/* * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.*/
/* * See the GNU Lesser General Public License for more details.*/
/* **/
/* * You should have received a copy of the GNU Lesser General Public*/
/* * License along with OpenWebSoccer-Sim.*/
/* * If not, see <http://www.gnu.org/licenses/>.*/
/* **/
/* * Author: Ingo Hofmann*/
/* * Base Version: OpenWebSoccer-Sim 5.2.4-Snapshot vom 21. Juni 2015*/
/* **/
/* * This Version called "OpenWebsoccer" is a advanced modification*/
/* * by Rolf Joseph / ErdemCan 2015 - 2016*/
/* **/
/* * For comparison of the code look at the original at*/
/* * https://github.com/ihofmann/open-websoccer*/
/* #}*/
/* {% set adcode = env.getConfig('frontend_sif_code_sidebar') %}*/
/* {% include "adcode.twig" %}*/
