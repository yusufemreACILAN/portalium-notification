<?php

namespace portalium\notification;

class Module extends \portalium\base\Module
{
    public $apiRules = [
        [
            'class' => 'yii\rest\UrlRule',
            'controller' => [
                'notification/default',
            ]
        ],
    ];
    
    public static function moduleInit()
    {
        self::registerTranslation('notification','@portalium/notification/messages',[
            'notification' => 'notification.php',
        ]);
    }

    public static function t($message, array $params = [])
    {
        return parent::coreT('notification', $message, $params);
    }
}