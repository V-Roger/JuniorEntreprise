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
                array('label'=>'Accueil', 'url'=>array('/site/index')),
                array('label'=>'Gestion', 'url'=>array('/site/page', 'view'=>'gestion')),
                array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Connexion', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Déconnexion ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>

<div class="container-fluid" id="page">
        
    <div class="row-fluid">

        <div class="span12">
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
