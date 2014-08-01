<?php

namespace Zf2ForumAdmin\Navigation\Service;

use Zend\Navigation\Service\DefaultNavigationFactory;

/**
 * Factory for the Zf2ForumAdmin admin navigation
 *
 * @package    Zf2ForumAdmin
 * @subpackage Navigation\Service
 */
class AdminNavigationFactory extends DefaultNavigationFactory
{
    /**
     * @{inheritdoc}
     */
    protected function getName()
    {
        return 'Zf2ForumAdminList';
    }
}
