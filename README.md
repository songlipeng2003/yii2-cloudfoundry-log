## Yii2 CloudFoundry Log Target

### config
update config/web.php

```
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning']
                ],
                [
                    'class' => 'songlipeng2003\yii2_cloud_foundry\log\CloudfoundryTarget',
                    'levels' => ['error']
                ]
            ],
        ],
```