<?php defined( '_JEXEC' ) or die; ?>

<form action="index.php?option=com_boilerplate&amp;id=<?php echo $this->item->id ?>"
  method="post" name="adminForm" class="form-validate">
  <div class="width-60 fltlft">
    <fieldset class="adminform">
      <ul class="adminformlist">
        <?php foreach ($this->form->getFieldset('essential') as $field): ?>
          <li><?php echo $field->label; ?>
          <?php echo $field->input; ?></li>
        <?php endforeach ?>
      </ul>
    </fieldset>
  </div>
  <input type="hidden" name="task" value="" />
  <?php echo JHtml::_('form.token'); ?>
</form>