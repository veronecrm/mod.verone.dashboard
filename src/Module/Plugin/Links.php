<?php
/**
 * Verone CRM | http://www.veronecrm.com
 *
 * @copyright  Copyright (C) 2015 Adam Banaszkiewicz
 * @license    GNU General Public License version 3; see license.txt
 */

namespace App\Module\Dashboard\Plugin;

use CRM\App\Module\Plugin;

class Links extends Plugin
{
    public function mainMenu()
    {
        return [
            [
                'ordering' => 100,
                'name'  => $this->t('dashboard'),
                'href'   => $this->createUrl('Dashboard', 'Dashboard'),
                'icon-type' => 'class',
                'icon' => 'fa fa-dashboard',
                'module' => 'Dashboard'
            ]
        ];
    }
}
