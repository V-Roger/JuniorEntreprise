<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
            <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'fluid'=>'true',
    'items'=>array(
        array(
            'htmlOptions'=>array('class'=>'container-fluid pull-right'),
            'type'=>'tabs',
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>

<div class="container-fluid" id="page">
        
    <div class="row-fluid">
    
        <div class="span2">
            <?php $this->widget('bootstrap.widgets.TbMenu', array(
                'type'=>'list',
                'items'=>array(
                    array('label'=>'LIST HEADER'),
                    array('label'=>'Home', 'icon'=>'home', 'url'=>'index.php', 'active'=>true),
                    array('label'=>'Etudiants', 'icon'=>'book', 'url'=>'index.php?r=Etudiant'),
                    array('label'=>'Convention', 'icon'=>'pencil', 'url'=>'index.php?r=Convention'),
                    array('label'=>'ANOTHER LIST HEADER'),
                    array('label'=>'Profile', 'icon'=>'user', 'url'=>'#'),
                    array('label'=>'Settings', 'icon'=>'cog', 'url'=>'#'),
                    array('label'=>'Help', 'icon'=>'flag', 'url'=>'#'),
                ),
            )); ?>
        </div>
        <div class="span10">
            <?php $this->beginWidget('bootstrap.widgets.TbHeroUnit') ?>
            <?php echo $content; ?>
            <?php $this->endWidget(); ?>
        </div>
            

    </div>
        
        <div class="clear"></div>
    
	<footer id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Virgil,Hugo,Thomas.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</footer><!-- footer -->

</div><!-- page -->

</body>
</html>
