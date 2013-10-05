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
  public function executeShow(sfWebRequest $request)
  {
    $this->story = $this->getRoute()->getObject();
    $this->forward404Unless($this->story);
  }
}
