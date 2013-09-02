<?php
/**
 * This file is part of
 * Kimai - Open Source Time Tracking // http://www.kimai.org
 * (c) 2006-2012 Kimai-Development-Team
 *
 * Kimai is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; Version 3, 29 June 2007
 *
 * Kimai is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Kimai; If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Returns the HTML for the loader animation.
 *
 * @author Kevin Papst
 */
class Zend_View_Helper_Floater extends Zend_View_Helper_Abstract
{
    /**
     * @var string
     */
    protected $title = '';

    /**
     * @param $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return $this
     */
    public function floater()
    {
        return $this;
    }

    // ---------------------- SKIN SPECIFIC ----------------------

    /**
     * Returns the main structure of the floater.
     *
     * @return string
     */
    public function floaterBody()
    {
        return '<div id="floater">floater</div>';
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $html = '';

        return $html;
    }

} 
