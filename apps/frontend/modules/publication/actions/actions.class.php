<?php

/**
 * publication actions.
 *
 * @package    lat
 * @subpackage publication
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class publicationActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->publications = Doctrine_Core::getTable('Publication')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->publication = Doctrine_Core::getTable('Publication')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->publication);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PublicationForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PublicationForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($publication = Doctrine_Core::getTable('Publication')->find(array($request->getParameter('id'))), sprintf('Object publication does not exist (%s).', $request->getParameter('id')));
    $this->form = new PublicationForm($publication);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($publication = Doctrine_Core::getTable('Publication')->find(array($request->getParameter('id'))), sprintf('Object publication does not exist (%s).', $request->getParameter('id')));
    $this->form = new PublicationForm($publication);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($publication = Doctrine_Core::getTable('Publication')->find(array($request->getParameter('id'))), sprintf('Object publication does not exist (%s).', $request->getParameter('id')));
    $publication->delete();

    $this->redirect('publication/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $publication = $form->save();

      $this->redirect('publication/edit?id='.$publication->getId());
    }
  }
}
