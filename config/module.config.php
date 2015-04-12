<?php
return array(
    'translator' => array(
        'translation_file_patterns' => array(
            array(
                'type' => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern' => '%s.mo',
            ),
        ),
    ),

    'view_manager' => array('template_path_stack' => array(__DIR__ . '/../view')),
    'controllers' => array(
        'invokables' => array(
            'Zf2ForumAdmin' => 'Zf2ForumAdmin\Controller\Zf2ForumAdminController'
        ),
    ),

    'navigation' => array(
        'admin' => array(
            'zf2forumadmin' => array(
                'label' => 'Forum',
                'route' => 'zfcadmin/zf2forumadmin',
            ),
        ),
        'Zf2ForumAdminList' => array(
            'zf2forumadmin' => array(
                'label' => 'Forum',
                'route' => 'zfcadmin/zf2forumadmin',
            ),
        ),
    ),

    'router' => array(
        'routes' => array(
            'zfcadmin' => array(
                'child_routes' => array(
                    'zf2forumadmin' => array(
                        'type' => 'Literal',
                        'priority' => 1000,
                        'options' => array(
                            'route' => '/forum',
                            'defaults' => array(
                                'controller' => 'Zf2ForumAdmin',
                                'action'     => 'index',
                            ),
                        ),
                        'child_routes'  => array(
                            'category' => array(
                                'type' => 'Literal',
                                'priority' => 1000,
                                'options' => array(
                                    'route' => '/category',
                                    'defaults' => array(
                                        'controller' => 'Zf2ForumAdmin',
                                        'action'     => 'category',
                                    ),
                                ),
                                'child_routes'  => array(
                                    'add' => array(
                                        'type' => 'Literal',
                                        'priority' => 1000,
                                        'options' => array(
                                            'route' => '/add',
                                            'defaults' => array(
                                                'controller' => 'Zf2ForumAdmin',
                                                'action'     => 'addCategory',
                                            ),
                                        ),
                                    ),
                                ),
                                'may_terminate' => true,
                            ),
                        ),
                        'may_terminate' => true,
                    ),
                ),
            ),
        ),
    ),
);
