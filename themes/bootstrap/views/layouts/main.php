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

<?php 
    $current_url=Yii::app()->request->requestUri;
    $active_tab=parse_url($current_url,PHP_URL_QUERY);
//    $isActive = 'r=site/page&view=gestion' == $active_tab || 'r=Etudiant' == $active_tab || 'r=Convention' == $active_tab || 'r=Acompte' == $active_tab || 'r=Frais' == $active_tab;
    $isActive = 'r=site/page&view=gestion' == $active_tab || Yii::app()->controller->id == 'etudiant' || Yii::app()->controller->id == 'convention' || Yii::app()->controller->id == 'frais' || Yii::app()->controller->id == 'acompte';

    $this->widget('bootstrap.widgets.TbNavbar',array(
    'fluid'=>'true',
    'items'=>array(
        array(
            'htmlOptions'=>array('class'=>'container-fluid pull-right'),
            'type'=>'tabs',
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Accueil', 'url'=>array('/site/index')),
                array('label'=>'Gestion', 'url'=>array('/site/page', 'view'=>'gestion'), 'active'=>$isActive ? true : false),
                array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Connexion', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Déconnexion ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>

<div class="container-fluid" id="page">
        
    <div class="row-fluid">
    
        <div class="span2">
            <?php 
                $this->widget('bootstrap.widgets.TbMenu', array(
                'type'=>'list',
                'items'=>array(
                    array('label'=>'Gestion'),
                    array('label'=>'Accueil', 'icon'=>'home', 'url'=>'index.php?r=site/page&view=gestion', 'active'=>('r=site/page&view=gestion' == $active_tab ? true : false)),
                    array('label'=>'Etudiants', 'icon'=>'user', 'url'=>'index.php?r=Etudiant', 'active'=>('r=Etudiant' == $active_tab ? true : false)),
                    array('label'=>'Conventions', 'icon'=>'book', 'url'=>'index.php?r=Convention', 'active'=>('r=Convention' == $active_tab ? true : false)),
                    array('label'=>'Acomptes', 'icon'=>'magnet', 'url'=>'index.php?r=Acompte', 'active'=>('r=Acompte' == $active_tab ? true : false)),
                    array('label'=>'Frais', 'icon'=>'shopping-cart', 'url'=>'index.php?r=Frais', 'active'=>('r=Frais' == $active_tab ? true : false)),
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
