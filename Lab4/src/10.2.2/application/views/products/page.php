<h2>Products List <span><?php echo '(Page '.$currentPageNumber.'/ '.$totalPages.')' ?></span></h2>
<?php foreach ($products as $product) : ?>
    <div class="category">
        <!--<?php echo $product['Product']['name'] ?>-->
        <?php echo $html->link($product['Product']['name'], 'products/view/' . $product['Product']['id'] . '/' . $product['Product']['name']) ?>
    </div>
<?php endforeach ?>

<div class="container-page-number">
<?php for ($i = 1; $i <= $totalPages; $i++) : ?>
    <div>
        <?php if ($i == $currentPageNumber) : ?>
            <div class="current-page-number">
                <?php echo $currentPageNumber ?>
            </div>
        <?php else : ?>
            <div class="link-page-number">
                <?php echo $html->link($i, 'products/page/' . $i) ?>
            </div>
        <?php endif ?>
    </div>
<?php endfor ?>
</div>