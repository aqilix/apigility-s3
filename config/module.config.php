<?php
return array(
    'service_manager' => array(
        'invokables' => array(
            'AqilixAPI\\S3\\SharedEventListener' => 'AqilixAPI\\S3\\Service\\SharedEventListener',
            'AqilixAPI\\S3\\Stdlib\\Hydrator\\Strategy\\S3LinkStrategy' =>
                'AqilixAPI\\S3\\Stdlib\\Hydrator\\Strategy\\S3LinkStrategy',
        ),
        'shared' => array(
            'AqilixAPI\\S3\\Stdlib\\Hydrator\\Strategy\\S3LinkStrategy' => false
        )
    ),
    's3' => array(
        'client' => array(
            'key' => '',
            'secret' => ''
        ),
        'bucket' => array(
            'name' => '',
            'acl'  => '',
        ),
        'fields' => array(
            'path'  => array('key_prefix' => ''),
            'thumbPath' => array('key_prefix' => '')
        )
    )
);
