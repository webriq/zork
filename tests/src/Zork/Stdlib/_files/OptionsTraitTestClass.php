<?php

namespace Zork\Stdlib;

/**
 * Zork\Stdlib\OptionsTraitTestClass
 *
 * @author David Pozsar <david.pozsar@megaweb.hu>
 */
class OptionsTraitTestClass
{

    use OptionsTrait;

    public $publicProperty;

    public $_hiddenPublicProperty;

    protected $protectedProperty;

    protected $_hiddenProtectedProperty;

    private $privateProperty;

    private $_hiddenPrivateProperty;

    public function setPublicPropertyWithSetter( $value )
    {
        $this->publicProperty = $value;
    }

    public function setProtectedPropertyWithSetter( $value )
    {
        $this->protectedProperty = $value;
    }

    public function setPrivatePropertyWithSetter( $value )
    {
        $this->privateProperty = $value;
    }

}
