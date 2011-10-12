<?php

/**
 * membresia actions.
 *
 * @package    achihcl
 * @subpackage membresia
 * @author     Rodrigo Campos H. <contacto [at] webdevel.cl>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class membresiaActions extends sfActions {

  public function executeNew(sfWebRequest $request) {
    $this->form = new MiembroForm();
  }

  public function executeCreate(sfWebRequest $request) {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new MiembroForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  protected function processForm(sfWebRequest $request, sfForm $form) {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));

    $captcha = array(
        'recaptcha_challenge_field' => $request->getParameter('recaptcha_challenge_field'),
        'recaptcha_response_field' => $request->getParameter('recaptcha_response_field'),
    );
    $this->form->bind(array_merge($request->getParameter('miembro'), array('captcha' => $captcha)));

    if ($form->isValid()) {
      $miembro = $form->save();

      $this->redirect('membresia/gracias');
    }
  }

  public function executeGracias(sfWebRequest $request) {
    
  }

}
