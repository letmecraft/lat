<?php

/**
 * journey module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage journey
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseJourneyGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'journey' : 'journey_'.$action;
  }
}
