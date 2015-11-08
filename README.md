# yii2-bootstrap-AdminLTE
The Bootstrap template AdminLTE widgets for yii2 framework. 
It make it easy to build a bootstrap admin panel.


Get started
===

Bulid the layout file(`@app/views/layouts/main.php`);
---

    use cszchen\alte\AdminLTE; 
    use cszchen\alte\widgets\NavBar; 
    use cszchen\alte\widgets\Sidebar; 

Then you can set the layout and the options, it will create the css class whitch will used in some tag

    AdminLTE::register($this);
    AdminLTE::setLayout(AdminLTE::LAYOUT_WRAPPER, AdminLTE::OPTION_FIXED);
    AdminLTE::setSkin('skin-blue');
    ...
    
    $option = [];
    Html::addCssClass($option, AdminLTE::getOptionCssClass());
    echo Html::beginTag("body", $option);//bigen the body tag
  
    $this->beginBody();
    $option = [];
    Html::addCssClass($option, AdminLTE::getLayoutCssClass());
    echo Html::beginTag("div", $option);//the tag whitch layout the view
    

NavBar
---

    NavBar::begin([
        'brandLabel' => 'NavBar Test',
        'brandLabelSm' => 'Nbt',
        'items' => [
              ['label' => 'Home', 'url' => ['/site/index'], 'items'=>[['label'=>'yes'],['label'=>'no', 'url'=>'#']]],
              ['label' => 'About', 'url' => ['/site/about']],
         ],
            
    ]);
          
    NavBar::end();


SideBar
---

    echo Sidebar::widget([
        //'search' => false,
        'items' => [
            ['label'=>'level1', 'url'=>'#', 'small'=>1, 'items'=>[['label'=>'level2', 'url'=>'sg', 'items'=>[['label'=>'level3']]]]]
        ],
    ]);

Box
---

    Box::begin([
        'type' => 'primary',
        'refreshUrl' => '/user/login',
        'tools' => ['refresh', 'collapse', 'remove']
    ]);
    echo "cszchen alte";
    Box::end();


Installed
===
