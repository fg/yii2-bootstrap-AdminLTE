# yii2-bootstrap-AdminLTE
The Bootstrap template AdminLTE widgets for yii2 framework. 
It make it easy to build a bootstrap admin panel.


Install
=======

`composer require "cszchen/alte": ">=2.0.0"`

Layout file
===
 `@vendor/cszchen/alte/veiws/main-layout.php`
  

NavBar
---
```php
NavBar::begin([
    'brandLabel' => 'cszchen/alte',
    'brandLabelSm' => 'Alte',
    'items' => [
        [
            'label' => 'Home', 
            'url' => ['/site/index'],
            'icon' => 'fa fa-dashboard test-green',
            'items'=>[
                ['label' => 'child#1', 'icon' => 'fa fa-user'],
                ['label' => 'child#2', 'url' => '#']
            ]
        ],
        ['label' => 'About', 'small' => 15, 'url' => ['/site/about']]
     ] 
]);
NavBar::end();
```

SideBar
---
```php
echo Sidebar::widget([
    //'search' => false,
    'items' => [
        [
            'label' => 'level1', 
            'url' => '#', 
            'small' => 1, 
            'items' => [
                ['label' => 'level2', 'url' => 'sg'],
                ['label' => 'level2', 'url' => 'sg', 'items' => [['label' => 'level3']]]
            ]
        ]
    ],
]);
```

Box
---

```php
Box::begin([
    'type' => 'primary',
    'refreshUrl' => '/userinfo',
    'tools' => ['refresh', 'collapse', 'remove']
]);
echo "cszchen/alte";
Box::end();
```
