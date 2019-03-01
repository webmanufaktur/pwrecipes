<?php namespace ProcessWire; ?>

<h1><?php echo $page->title; ?></h1>

<hr>
<h2>All recipes</h2>
<ul>
<?php
    foreach($page->children as $recipe) {
        echo "<li><a href='{$recipe->url}'>{$recipe->title}</a></<li>";
    };
?>
</ul>
<hr>
<div class="breadcrumb">
    <div class="container small">
    <ol itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php
    $i = 1;
    $parents = $page->parents;
    $parentsCount = count($parents);
    foreach($parents as $parent): ?>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="<?php echo $parent->httpUrl; ?>" title="<?php echo $parent->title; ?>">
            <span itemprop="name"><?php echo $parent->title; ?></span></a>
            <meta itemprop="position" content="<?php echo $i++ ?>" />
        </li>
    <?php endforeach; ?>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <span itemprop="item" href="<?php echo $page->httpUrl; ?>" title="<?php echo $page->title; ?>">
            <span itemprop="name"><?php echo $page->title; ?></span></span>
            <meta itemprop="position" content="<?php echo $i++ ?>" />
        </li>
    </ol>
    </div>
</div>
<hr>
<strong>pwRecipes - ProcessWire Site Profile</strong><br>License: Creative Commons Attribution-ShareAlike 4.0 International License<br>Author: <a href="https://webmanufaktur.net/">webmanufaktur</a><br>Github: <a href="https://github.com/webmanufaktur/pwrecipes">https://github.com/webmanufaktur/pwrecipes</a>