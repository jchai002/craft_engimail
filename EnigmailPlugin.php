<?php
namespace Craft;
/**
* Enigmail Plugin
*/
class EnigmailPlugin extends BasePlugin
{
  public function getName()
  {
    return Craft::t('Enigmail');
  }

  public function getVersion()
  {
    return '1.0.0';
  }

  public function getDeveloper()
  {
    return 'Jerry Chai';
  }

  public function getDeveloperUrl()
  {
    return 'http://jerrychai.us';
  }

  public function hasCpSection()
  {
    return false;
  }

  public function addTwigExtension()
  {
    Craft::import('plugins.enigmail.twigextensions.EnigmailTwigExtension');

    return new EnigmailTwigExtension();
  }
}
