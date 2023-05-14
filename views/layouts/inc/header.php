<header class="header">
    <div class="container">
        <ul class="menu">
            <li class="menu__item">
                <?= \yii\helpers\Html::a('Home', ['site/index'], ['class' => 'menu__link']) ?>
            </li>
            <li class="menu__item">
                <?= \yii\helpers\Html::a('About', ['site/about'], ['class' => 'menu__link']) ?>
            </li>
            <li class="menu__item">
                <?= \yii\helpers\Html::a('Contact', ['site/contact'], ['class' => 'menu__link']) ?>
            </li>
            <li class="menu__item">
                <?= \yii\helpers\Html::a('Login', ['site/login'], ['class' => 'menu__link']) ?>
            </li>
        </ul>
    </div>
</header>