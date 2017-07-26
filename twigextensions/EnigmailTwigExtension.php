<?php
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class EnigmailTwigExtension extends \Twig_Extension
{
    public function getName()
    {
        return 'Enigmail';
    }

    public function getFilters()
    {
        return array(
            'enigmail' => new Twig_Filter_Method($this, 'enigmail'),
        );
    }

    public function enigmail($email)
    {
        return str_rot13($email);
    }
}
