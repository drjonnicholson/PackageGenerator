<?php

namespace Api\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfError ArrayType
 * @package Api
 * @subpackage Arrays
 * @release 1.1.0
 */
class ApiArrayOfError extends AbstractStructArrayBase
{
    /**
     * The Error
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Api\StructType\ApiError[]
     */
    public $Error;
    /**
     * Constructor method for ArrayOfError
     * @uses ApiArrayOfError::setError()
     * @param \Api\StructType\ApiError[] $error
     */
    public function __construct(array $error = array())
    {
        $this
            ->setError($error);
    }
    /**
     * Get Error value
     * @return \Api\StructType\ApiError[]|null
     */
    public function getError()
    {
        return $this->Error;
    }
    /**
     * Set Error value
     * @throws \InvalidArgumentException
     * @param \Api\StructType\ApiError[] $error
     * @return \Api\ArrayType\ApiArrayOfError
     */
    public function setError(array $error = array())
    {
        foreach ($error as $arrayOfErrorErrorItem) {
            // validation for constraint: itemType
            if (!$arrayOfErrorErrorItem instanceof \Api\StructType\ApiError) {
                throw new \InvalidArgumentException(sprintf('The Error property can only contain items of \Api\StructType\ApiError, "%s" given', is_object($arrayOfErrorErrorItem) ? get_class($arrayOfErrorErrorItem) : gettype($arrayOfErrorErrorItem)), __LINE__);
            }
        }
        $this->Error = $error;
        return $this;
    }
    /**
     * Add item to Error value
     * @throws \InvalidArgumentException
     * @param \Api\StructType\ApiError $item
     * @return \Api\ArrayType\ApiArrayOfError
     */
    public function addToError(\Api\StructType\ApiError $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Api\StructType\ApiError) {
            throw new \InvalidArgumentException(sprintf('The Error property can only contain items of \Api\StructType\ApiError, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Error[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Api\StructType\ApiError|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Api\StructType\ApiError|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Api\StructType\ApiError|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Api\StructType\ApiError|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Api\StructType\ApiError|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Error
     */
    public function getAttributeName()
    {
        return 'Error';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Api\ArrayType\ApiArrayOfError
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
