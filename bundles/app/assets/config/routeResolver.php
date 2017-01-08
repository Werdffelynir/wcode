<?php

return array(
    'type'      => 'group',
    'resolvers' => array(

        
        'processor' => array(
            'type'     => 'pattern',
            'path'     => '(<processor>)',
            'defaults' => array(
                'processor' => 'main',
                'action'    => 'default'
            )
        )
    )
);
