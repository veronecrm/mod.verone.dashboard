<?php
/**
 * Verone CRM | http://www.veronecrm.com
 *
 * @copyright  Copyright (C) 2015 Adam Banaszkiewicz
 * @license    GNU General Public License version 3; see license.txt
 */

namespace App\Module\Dashboard\Controller;

use CRM\App\Controller\BaseController;

class Dashboard extends BaseController
{
	public function indexAction()
	{
		$result = [];
		$base   = [
			'ordering'  => 0,
			'icon'      => 'fa fa-asterisk',
			'icon-type' => 'class',
			'name'      => 'EMPTY',
			'href'      => $this->createUrl('Home', 'Home')
		];

		foreach($this->callPlugins('Links', 'dashboard') as $module)
		{
			if(is_array($module) === false)
			{
				continue;
			}

			foreach($module as $link)
			{
				$result[] = array_merge($base, $link);
			}
		}

		array_multisort($result, SORT_REGULAR);

		return $this->render('', [
			'eventResult' => $result
		]);
	}
}
