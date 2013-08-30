<?php

/**
 * story actions.
 *
 * @package    lat
 * @subpackage story
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class storyActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->storys = Doctrine_Core::getTable('Story')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->story = $this->getRoute()->getObject();
    $this->forward404Unless($this->story);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new StoryForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new StoryForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($story = Doctrine_Core::getTable('Story')->find(array($request->getParameter('id'))), sprintf('Object story does not exist (%s).', $request->getParameter('id')));
    $this->form = new StoryForm($story);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($story = Doctrine_Core::getTable('Story')->find(array($request->getParameter('id'))), sprintf('Object story does not exist (%s).', $request->getParameter('id')));
    $this->form = new StoryForm($story);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($story = Doctrine_Core::getTable('Story')->find(array($request->getParameter('id'))), sprintf('Object story does not exist (%s).', $request->getParameter('id')));
    $story->delete();

    $this->redirect('story/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $story = $form->save();

      $this->redirect('story/edit?id='.$story->getId());
    }
  }
}
