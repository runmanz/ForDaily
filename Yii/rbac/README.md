# rbac

common\config\main.php
```
'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'itemTable' => 'member_auth',               //该表存放授权条目（译者注：即角色和权限）。默认表名为 "auth_item" 。
            'assignmentTable' => 'auth_assignment',     //该表存放授权条目对用户的指派情况。默认表名为 "auth_assignment"。
            'itemChildTable' => 'auth_item_child',      //该表存放授权条目的层次关系。默认表名为 "auth_item_child"。
            'ruleTable' => 'auth_rule',                 //该表存放规则。默认表名为 "auth_rule"。
        ],
    ],
```
