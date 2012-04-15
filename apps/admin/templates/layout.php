<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div id="body-wrapper"> 
      <div id="sidebar">
        <div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->

          <h1 id="sidebar-title"><a href="<?php echo url_for('@homepage'); ?>">Usuarios</a></h1>

          <!-- Logo (221px wide) -->
          <a href="<?php echo url_for('@homepage'); ?>">
            <?php echo image_tag('logo-med-icon.png', 'class=logo'); ?>
          </a>

          <br/><br/><br/><br/><br/>

          <!-- Sidebar Profile links -->
          <?php if ($sf_user->isAuthenticated()): ?>
            <div id="profile-links">
  				Bienvenido, <a href="#" title="Editar Perfil"><?php echo $sf_user->getGuardUser()->getName(); ?></a><br />
              <br />
              <a href="http://www.achih.cl/" title="Ver el sitio" target="_blank">Ver el sitio</a> | <a href="<?php echo url_for('@sf_guard_signout'); ?>" title="Logout">Logout</a>
            </div>
            <!-- END-Sidebar Profile links -->

            <ul id="main-nav">  <!-- Accordion Menu -->

              <li>
                <a href="<?php echo url_for('noticia/index');?>" class="nav-top-item <?php if($sf_context->getModuleName()=='noticia') echo "current"; ?> ">
                  Noticias
                </a>
                <ul>
                  <li><a <?php if($sf_context->getActionName()=='new' && $sf_context->getModuleName()=='noticia') echo "class='current'"; ?> href="<?php echo url_for('noticia/new'); ?>">Nueva</a></li>
                  <li><a <?php if($sf_context->getActionName()=='index' && $sf_context->getModuleName()=='noticia') echo "class='current'"; ?> href="<?php echo url_for('noticia/index'); ?>">Ver todas</a></li>
                </ul>
              </li>
              <li>
                <a href="<?php echo url_for('banner/index');?>" class="nav-top-item <?php if($sf_context->getModuleName()=='banner') echo "current"; ?> ">
                  Banners
                </a>
                <ul>
                  <li><a <?php if($sf_context->getActionName()=='new' && $sf_context->getModuleName()=='banner') echo "class='current'"; ?> href="<?php echo url_for('banner/new'); ?>">Nuevo</a></li>
                  <li><a <?php if($sf_context->getActionName()=='index' && $sf_context->getModuleName()=='banner') echo "class='current'"; ?> href="<?php echo url_for('banner/index'); ?>">Ver todos</a></li>
                </ul>
              </li>
              <li>
                <a href="<?php echo url_for('empleos/index');?>" class="nav-top-item <?php if($sf_context->getModuleName()=='empleos') echo "current"; ?> ">
                  Bolsa de Trabajo
                </a>
                <ul>
                  <li><a <?php if($sf_context->getActionName()=='new' && $sf_context->getModuleName()=='empleos') echo "class='current'"; ?> href="<?php echo url_for('empleos/new'); ?>">Nuevo empleo</a></li>
                  <li><a <?php if($sf_context->getActionName()=='index' && $sf_context->getModuleName()=='empleos') echo "class='current'"; ?> href="<?php echo url_for('empleos/index'); ?>">Ver todos</a></li>
                </ul>
              </li>
              <li>
                <a href="<?php echo url_for('eventos/index');?>" class="nav-top-item <?php if($sf_context->getModuleName()=='eventos') echo "current"; ?> ">
                  Eventos
                </a>
                <ul>
                  <li><a <?php if($sf_context->getActionName()=='new' && $sf_context->getModuleName()=='eventos') echo "class='current'"; ?> href="<?php echo url_for('eventos/new'); ?>">Nuevo</a></li>
                  <li><a <?php if($sf_context->getActionName()=='index' && $sf_context->getModuleName()=='eventos') echo "class='current'"; ?> href="<?php echo url_for('eventos/index'); ?>">Ver todos</a></li>
                </ul>
              </li>
              <li>
                <a href="<?php echo url_for('docs/index');?>" class="nav-top-item <?php if($sf_context->getModuleName()=='docs') echo "current"; ?> ">
                  Banco de Documentos
                </a>
                <ul>
                  <li><a <?php if($sf_context->getActionName()=='new' && $sf_context->getModuleName()=='docs') echo "class='current'"; ?> href="<?php echo url_for('docs/new'); ?>">Publicar documento</a></li>
                  <li><a <?php if($sf_context->getActionName()=='index' && $sf_context->getModuleName()=='docs') echo "class='current'"; ?> href="<?php echo url_for('docs/index'); ?>">Ver todos</a></li>
                </ul>
              </li>
              <li>
                <a href="<?php echo url_for('membresia/index');?>" class="nav-top-item <?php if($sf_context->getModuleName()=='membresia') echo "current"; ?> ">
                  Membres&iacute;a
                </a>
                <ul>
                  <li><a <?php if($sf_context->getActionName()=='new' && $sf_context->getModuleName()=='membresia') echo "class='current'"; ?> href="<?php echo url_for('membresia/new'); ?>">Nuevo miembro</a></li>
                  <li><a <?php if($sf_context->getActionName()=='aprobarMiembros' && $sf_context->getModuleName()=='membresia') echo "class='current'"; ?> href="<?php echo url_for('membresia/aprobarMiembros'); ?>">Ver postulantes</a></li>
                  <li><a <?php if($sf_context->getActionName()=='index' && $sf_context->getModuleName()=='membresia') echo "class='current'"; ?> href="<?php echo url_for('membresia/index'); ?>">Ver todos</a></li>
                  <li><a <?php if($sf_context->getActionName()=='email' && $sf_context->getModuleName()=='membresia') echo "class='current'"; ?> href="<?php echo url_for('membresia/email'); ?>">Email Masivo</a></li>
                </ul>
              </li>
              <li>
                <a href="<?php echo url_for('empresas/index');?>" class="nav-top-item <?php if($sf_context->getModuleName()=='empresas') echo "current"; ?> ">
                  Emp. Colaboradoras
                </a>
                <ul>
                  <li><a <?php if($sf_context->getActionName()=='new' && $sf_context->getModuleName()=='empresas') echo "class='current'"; ?> href="<?php echo url_for('empresas/new'); ?>">Nueva</a></li>
                  <li><a <?php if($sf_context->getActionName()=='index' && $sf_context->getModuleName()=='empresas') echo "class='current'"; ?> href="<?php echo url_for('empresas/index'); ?>">Ver todas</a></li>
                </ul>
              </li>
              <li>
                <a href="<?php echo url_for('links/index');?>" class="nav-top-item <?php if($sf_context->getModuleName()=='links') echo "current"; ?> ">
                  Links
                </a>
                <ul>
                  <li><a <?php if($sf_context->getActionName()=='new' && $sf_context->getModuleName()=='links') echo "class='current'"; ?> href="<?php echo url_for('links/new'); ?>">Nuevo</a></li>
                  <li><a <?php if($sf_context->getActionName()=='index' && $sf_context->getModuleName()=='links') echo "class='current'"; ?> href="<?php echo url_for('links/index'); ?>">Ver todos</a></li>
                </ul>
              </li>

            </ul> <!-- End #main-nav -->
          <?php endif; ?>

        </div>
      </div> <!-- End #sidebar -->

      <div id="main-content"> <!-- Main Content Section with everything -->

        <noscript> <!-- Show a notification if the user has disabled javascript -->
          <div class="notification error png_bg">
            <div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
            </div>
          </div>
        </noscript>

        <div class="clear"></div> <!-- End .clear -->
        <?php echo $sf_content; ?>


        <div class="clear"></div>

        <div id="footer">
          <small>
            &#169; Copyright 2011 | Powered by <a href="http://www.webdevel.cl">WebDevel.cl</a>
          </small>
        </div><!-- End #footer -->

      </div> <!-- End #main-content -->

    </div>
  </body>
</html>
