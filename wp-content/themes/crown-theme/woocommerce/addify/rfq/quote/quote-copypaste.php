<?php
/**
 * Textarea for adding items to quote's cart from copypaste value
 */
?>
<h4><?php echo __( 'Paste SKUs & Quantities to Create a Quote.', 'crown-theme' ); ?></h4>
<label for="create-quote-from-copypaste">
                            <textarea class="create-quote--textarea"
                                      placeholder="SKU QUANTITY
SKU QUANTITY
SKU QUANTITY"
                                      id="create-quote-from-copypaste"></textarea>
</label>
<span style="font-size: 14px;">* Each SKU and Quantity pair must be in a new line.</span>
<div class="create-quote--actions">
    <div class="create-quote--errors"></div>
    <button class="btn btn-primary" id="create-new-quote"><?php
        echo __( 'Add to quote', 'crown-theme' );
    ?></button>
</div>