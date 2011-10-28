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
    <h3 style="cursor: s-resize; "><?php echo $empleo->getTitulo(); ?></h3>
    <ul class="content-box-tabs">
      <a class="button" href="<?php echo url_for('empleos/index'); ?>">Atr&aacute;s</a>
    </ul>   
    <div class="clear"></div>
  </div>
  <div class="content-box-content">
    <div class="tab-content default-tab" id="tab1" style="display: block; ">
      <table>
	<tr>
	  <td><strong>T&iacute;tulo:</strong></td>
	  <td><?php echo $empleo->getTitulo(); ?></td>
	</tr>
	<tr>
	  <td><strong>Tipo:</strong></td>
	  <td><?php echo tipo($empleo->getTipo()); ?></td>
	</tr>
	<tr>
	  <td><strong>Ciudad:</strong></td>
	  <td><?php echo $empleo->getCiudad(); ?></td>
	</tr>
	<tr>
	  <td><strong>Regi&oacute;n:</strong></td>
	  <td><?php echo $empleo->getRegion(); ?></td>
	</tr>
	<?php if($empleo->getSueldo()) : ?>
	<tr>
	  <td><strong>Sueldo:</strong></td>
	  <td><?php echo $empleo->getSueldo(); ?></td>
	</tr>
	<?php endif; ?>
	<?php if($empleo->getDuracion()) : ?>
	<tr>
	  <td><strong>Duraci&oacute;n:</strong></td>
	  <td><?php echo $empleo->getDuracion(); ?></td>
	</tr>
	<?php endif; ?>
	<tr><td colspan="2">&nbsp;</td></tr>
	<?php if($empleo->getEmpresa()) : ?>
	<tr>
	  <td><strong>Empresa / Insituci&oacute;n:</strong></td>
	  <td><?php echo $empleo->getEmpresa(); ?></td>
	</tr>
	<?php endif; ?>
	<tr>
	  <td><strong>Contacto:</strong></td>
	  <td><?php echo $empleo->getNombreContacto(); ?></td>
	</tr>
	<?php if($empleo->getTelefonoContacto()) : ?>
	<tr>
	  <td><strong>Fono:</strong></td>
	  <td><?php echo $empleo->getTelefonoContacto(); ?></td>
	</tr>
	<?php endif; ?>
	<tr>
	  <td><strong>Email:</strong></td>
	  <td><?php echo $empleo->getEmailContacto(); ?></td>
	</tr>
      </table>
      <div style="clear:both; padding-top: 30px;"></div>
	<?php echo $empleo->getRawValue()->getDescripcion(); ?>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>

</div>

<div id="right">
    <div class="box1">
        <h2>Men&uacute;</h2>
        <ul class="catlist">
          <li><a href="<?php echo url_for('static/index'); ?>">Inicio</a></li>
          <li><a href="http://comision.achih.cl" target="_blank">Comisiones</a></li>
          <li><a href="<?php echo url_for('static/eventos'); ?>">Eventos</a></li>
          <li><a href="<?php echo url_for('membresia/new'); ?>">Membres&iacute;a</a></li>
          <li><a href="<?php echo url_for('static/docs'); ?>">Banco de Documentos</a></li>
          <li><a href="<?php echo url_for('empleos/index'); ?>">Bolsa de Trabajo</a></li>
          <li><a href="<?php echo url_for('static/links'); ?>">Links</a></li>
          <li><a href="<?php echo url_for('static/contact'); ?>">Contacto</a></li>
        </ul>
      </div>
  </div>
</div>
