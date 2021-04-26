<div><h2 class="name"><strong><?php echo $product['Product']['name']?></strong>
</div>

<div>
    <h2>Price: <span class="price">$<?php echo $product['Product']['price']?></span></h2>
</div>


<?php if (!empty($product['Tag'])):?>
<h2>Tags:

<?php foreach ($product['Tag'] as $tags):?>
<span class="tag">
<?php echo $tags['Tag']['name']?>
</span>
<?php endforeach?>
</h2>
<?php endif?>
