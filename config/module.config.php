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
            'Zf2ForumAdmin\Controller\Zf2ForumAdmin' => 'Zf2ForumAdmin\Controller\Zf2ForumAdmin'
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
                            'route' => '/forum[/]',
                            'defaults' => array(
                                'controller' => 'zf2forumadmin',
                                'action'     => 'index',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);
