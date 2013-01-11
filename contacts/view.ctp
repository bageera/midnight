<div id="contact-<?php echo $contact['Contact']['id']; ?>" class="">
    <h2><?php echo $contact['Contact']['title']; ?></h2>
	<p>If you would like to get in contact with me fill out the form below and I will try to get back to you as soon as possible.</p>
    <div class="contact-body">
    <?php echo $contact['Contact']['body']; ?>
    </div>

    <?php if ($contact['Contact']['message_status']) { ?>
    <div class="contact-form">
    <fieldset>
    	<legend>Contact Form</legend>
    <?php
        echo $form->create('Message', array(
            'url' => array(
                'controller' => 'contacts',
                'action' => 'view',
                $contact['Contact']['alias'],
            ),
            'inputDefaults' => array(
            'div' => array(
                'class' => 'control-group'
            ),

            ),
            'class' => 'form-horizontal'
        ));
        echo $form->input('Message.name', array('placeholder' => 'Full Name'));

        echo $form->input('Message.email', array('placeholder' => 'Email Address','label' => __('Email', true)));

		echo $form->input('Message.title', array('placeholder' => 'Subject','label' => __('Subject', true)));

		echo $form->input('Message.body', array('label' => __('Message', true)));

        echo $form->button(__('Send Message', true), array('class' => 'btn'));
    ?>
	</fieldset>
    </div>
    <?php } ?>
</div>