<?php defined( '_JEXEC' ) or die; ?>

<form action="index.php?option=com_boilerplate&amp;view=list" method="post" name="adminForm" id="adminForm">
    <table class="adminlist">
    <thead>
      <tr>
        <th width="1%">
          <input type="checkbox" name="checkall-toggle" value="" onclick="checkAll(this)" />
        </th>
          <th>ID</th>
          <th>Item</th>
          <th>Description</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <td colspan="4">
          <?php echo $this->pagination->getListFooter(); ?>
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php foreach ($this->items as $i => $item): ?>
        <tr class="row<?php echo $i % 2 ?>">
          <td class="center">
            <?php echo JHtml::_('grid.id', $i, $item->id); ?>
          </td>
          <td class="center"><?php echo $item->id ?></td>
          <td><?php echo $item->item ?></td>
          <td><?php echo $item->description ?></td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
    
  <input type="hidden" name="task" value="" />
  <input type="hidden" name="boxchecked" value="0" />
  <?php echo JHtml::_('form.token'); ?>
</form>