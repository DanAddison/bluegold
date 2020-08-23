<?php
$field = get_field_object('spacing');
$value = $field['value'];
?>

<div class="block block-spacing block-spacing--<?php echo $value; ?>">
</div>