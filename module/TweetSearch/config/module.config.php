<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


return array(
    'controllers' => array(
        'invokables' => array(
            'TweetSearch\Controller\TweetSearch' => 'TweetSearch\Controller\TweetSearchController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'tweetsearch' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/tweetsearch[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'TweetSearch\Controller\TweetSearch',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'TweetSearch' => __DIR__ . '/../view',
        ),
    ),
);