<?php use_stylesheet('empleos-front.css'); ?>

<?php 
function tipo($id){
  if($id == 0) return "Full Time";
  else if($id == 1) return "Part Time";
  else if($id == 2) return "Por Horas";
  else if($id == 3) return "Temporal";
  else if($id == 4) return "Freelance";
}
?>

<div id="two-col" class="border">
<div style="width:740px;float:left;padding-right:20px;">

<div class="content-box">
  <div class="content-box-header">
    <h3 style="cursor: s-resize; ">Empleos</h3>
    <div class="clear"></div>
  </div>
  <div class="content-box-content">
    <div class="tab-content default-tab" id="tab1" style="display: block; ">
      <table class="listados">
        <thead>
          <tr>
            <th>Publicado el</th>
            <th>T&iacute;tulo</th>
            <th>Localidad</th>
            <th>Tipo</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($pager->getResults() as $empleo): ?>
          <?php $i = 0; ?>
            <tr <?php if ($i % 2 != 0)echo "class='alt-row'"; ?>>
              <td><?php echo tools::formatDate($empleo->getCreatedAt()) ?></td>
              <td><?php echo link_to($empleo->getTitulo(),'empleos/show?id='.$empleo->getId()); ?></td>
              <td><?php echo $empleo->getLocalidad(); ?></td>
	      <td><?php echo tipo($empleo->getTipo()); ?></td>
            </tr>
          <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
        <?php if ($pager->haveToPaginate()): ?>
        <tfoot>
          <tr>
            <td colspan="4">
              <center>
              <div class="pagination">
                <?php echo link_to('« Primera', 'empleos/index?page='.$pager->getFirstPage()) ?>
                <?php echo link_to('« Anterior', 'empleos/index?page='.$pager->getPreviousPage()) ?>

                <?php foreach ($pager->getLinks() as $page): ?>
                  <?php if ($page == $pager->getPage()): ?>
                    <a href="<?php echo url_for('empleos/index') ?>?page=<?php echo $page ?>" class="number current"><?php echo $page ?></a>
                  <?php else: ?>
                    <a href="<?php echo url_for('empleos/index') ?>?page=<?php echo $page ?>" class="number"><?php echo $page ?></a>
                  <?php endif; ?>
                <?php endforeach; ?>

                <?php echo link_to('Siguiente »', 'empleos/index?page='.$pager->getNextPage()) ?>
                <?php echo link_to('&Uacute;ltima »', 'empleos/index?page='.$pager->getLastPage()) ?>
              </div>
              </center>
              <div class="clear"></div>
            </td>
          </tr>
        </tfoot>
        <?php endif; ?>
      </table>
    </div>
  </div>
</div>

</div>

<div id="right">
      <?php include_partial('static/menu_right'); ?>
</div>
</div>
