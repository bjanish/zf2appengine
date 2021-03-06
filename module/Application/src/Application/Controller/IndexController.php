<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function localstoragetestAction()
    {

		$handle = fopen('gs://zf2gae/today.txt','w');
		fwrite($handle, date('l'));
		fclose($handle);

		$today = file_get_contents('gs://zf2gae/today.txt');

        return new ViewModel(array(
        		'today' => $today
        ));
    }
    public function appenginetestAction()
    {
        return new ViewModel();
    }
}
