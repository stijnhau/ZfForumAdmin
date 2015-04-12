<?php
namespace Zf2ForumAdmin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Zf2ForumAdminController
 *
 * @author      Stijn Haulotte
 * @version
 *
 */
class Zf2ForumAdminController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function categoryAction()
    {
        return new ViewModel();
    }

    public function addCategoryAction()
    {
        return new ViewModel();
    }
}