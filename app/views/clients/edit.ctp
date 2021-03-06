<?php
    $html->css("form",null,array(),false);
    $javascript->link('prototype', false);
    $javascript->link('scriptaculous.js', false);
    $javascript->link('autoExpandContract', false);
?>

<div class="clients form">
<h2><?php __('Add Client');?></h2>

<?php echo $form->create('Client');?>
    <?php echo $form->input('id'); ?>
	<fieldset>
        <ol>
            <li>
                <?php echo $form->input('name', array("label"=>"<abbr>*</abbr> ".__("Name", true))); ?>
                <p class="helper"><?php __("Company, organization, or community name.") ?></p>
            </li>
            <li>
                <?php echo $form->input('address', array("class"=>"expand")); ?>
                <p class="helper"><?php __("Full address.") ?></p>
            </li>
            <li class="separator"></li>
            <li>
                <?php echo $form->input('contact_person'); ?>
                <p class="helper"><?php __("Contact person name.") ?></p>
            </li>
            <li><?php echo $form->input('email'); ?></li>
            <li><?php echo $form->input('phone'); ?></li>
            <li class="separator"></li>
            <p><em><abbr title="required">*</abbr> indicates required fields</em></p>
        </ol>
        <?php echo $form->end('Submit');?>
	</fieldset>
</div>
