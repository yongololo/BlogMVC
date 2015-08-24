<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
use yii\helpers\Html;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Blog</h1>

        <p class="lead">Welcome on my blog.</p>
    </div>

    <div class="body-content">
        <?php foreach($posts as $post): ?>
            <article>
                <div class="row">
                    <div class="col-lg-12 col-md-4">
                        <h2><?php echo Html::decode(Html::a($post->name, ['/post/view/', 'id' => $post->id])); ?></h2>

                        <p>
                            Category: <?php echo Html::a($post->category->name, '#'); ?>, by <?php echo Html::a(ucfirst($post->user->username), '#'); ?> on <?php echo Yii::$app->formatter->asDate($post->created, 'long'); ?>
                        </p>
                        <p>
                            <?php echo Html::decode(nl2br($post->content)); ?>
                        </p>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</div>
