# Route规则

```
'urlManager' => [
  'enablePrettyUrl' => true,
  'showScriptName' => false,
  'enableStrictParsing' => true,
  'suffix' => '.html',
  'rules' => [
      '' => 'site/index',//别名
      '<controller:[\w-]+>/<action:[\w-]+>'=>'<controller>/<action>',
      '<controller:(post|comment)>/<id:\d+>/<action:(create|update|delete)>' => '<controller>/<action>',
      '<controller:(post|comment)>/<id:\d+>' => '<controller>/view',
      '<controller:(post|comment)>s' => '<controller>/index',
  ],
],
         
```
