<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$this->layout = 'home';
?>

<?php
    echo '<h1>Bienvenue à '.CHtml::encode(Yii::app()->name).'</h1>';
?>

<p>Les étudiants coûtent moins cher que les ingénieurs.</p>

<div style='height:200px;'></div>


<!--<p>Je change le contenu de index.php</p>

<ul>
    <li>View file: <code><?php echo __FILE__; ?></code></li>
    <li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
    the <a href="http://www.yiiframework.com/doc/">documentation</a>.
    Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
    should you have any questions.</p>

<button>TEST</button>-->