<?php
defined('_JEXEC') or die;
?>

<article class="custom-article-layout">
    <h1><?php echo $this->item->title; ?></h1>

    <div class="article-meta">
        Published on <?php echo $this->item->publish_up; ?>
    </div>

    <div class="article-content">
        <?php echo $this->item->text; ?>
    </div>
</article>
