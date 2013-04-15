<?php

namespace Zork\Form\Element;

use Zend\Form\Element\Textarea as ElementBase;
use Zend\InputFilter\InputProviderInterface;
use Zork\Form\TranslatorSettingsAwareInterface;

/**
 * Element
 *
 * @author David Pozsar <david.pozsar@megaweb.hu>
 */
class Textarea extends ElementBase
            implements InputProviderInterface,
                       TranslatorSettingsAwareInterface
{

    use InputProviderTrait;

}
