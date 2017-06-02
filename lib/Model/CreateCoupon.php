<?php
/**
 * CreateCoupon
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Reepay API
 *
 * REST API to manage Reepay resources
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * CreateCoupon Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateCoupon implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CreateCoupon';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'handle' => 'string',
        'code' => 'string',
        'discount' => 'string',
        'all_plans' => 'bool',
        'eligible_plans' => 'string[]',
        'max_redemptions' => 'int',
        'valid_until' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'handle' => 'handle',
        'code' => 'code',
        'discount' => 'discount',
        'all_plans' => 'all_plans',
        'eligible_plans' => 'eligible_plans',
        'max_redemptions' => 'max_redemptions',
        'valid_until' => 'valid_until'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'handle' => 'setHandle',
        'code' => 'setCode',
        'discount' => 'setDiscount',
        'all_plans' => 'setAllPlans',
        'eligible_plans' => 'setEligiblePlans',
        'max_redemptions' => 'setMaxRedemptions',
        'valid_until' => 'setValidUntil'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'handle' => 'getHandle',
        'code' => 'getCode',
        'discount' => 'getDiscount',
        'all_plans' => 'getAllPlans',
        'eligible_plans' => 'getEligiblePlans',
        'max_redemptions' => 'getMaxRedemptions',
        'valid_until' => 'getValidUntil'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['handle'] = isset($data['handle']) ? $data['handle'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['all_plans'] = isset($data['all_plans']) ? $data['all_plans'] : null;
        $this->container['eligible_plans'] = isset($data['eligible_plans']) ? $data['eligible_plans'] : null;
        $this->container['max_redemptions'] = isset($data['max_redemptions']) ? $data['max_redemptions'] : null;
        $this->container['valid_until'] = isset($data['valid_until']) ? $data['valid_until'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['handle'] === null) {
            $invalid_properties[] = "'handle' can't be null";
        }
        if ($this->container['code'] === null) {
            $invalid_properties[] = "'code' can't be null";
        }
        if ($this->container['discount'] === null) {
            $invalid_properties[] = "'discount' can't be null";
        }
        if (!is_null($this->container['max_redemptions']) && ($this->container['max_redemptions'] < 1)) {
            $invalid_properties[] = "invalid value for 'max_redemptions', must be bigger than or equal to 1.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['handle'] === null) {
            return false;
        }
        if ($this->container['code'] === null) {
            return false;
        }
        if ($this->container['discount'] === null) {
            return false;
        }
        if ($this->container['max_redemptions'] < 1) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Internal name for the coupon.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets handle
     * @return string
     */
    public function getHandle()
    {
        return $this->container['handle'];
    }

    /**
     * Sets handle
     * @param string $handle Per account unique handle for the coupon
     * @return $this
     */
    public function setHandle($handle)
    {
        $this->container['handle'] = $handle;

        return $this;
    }

    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code The coupon code. Maximum 100 characters.
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets discount
     * @return string
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     * @param string $discount Discount to use for coupon
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets all_plans
     * @return bool
     */
    public function getAllPlans()
    {
        return $this->container['all_plans'];
    }

    /**
     * Sets all_plans
     * @param bool $all_plans Whether all plans are eligible for this coupon. Defaults to false.
     * @return $this
     */
    public function setAllPlans($all_plans)
    {
        $this->container['all_plans'] = $all_plans;

        return $this;
    }

    /**
     * Gets eligible_plans
     * @return string[]
     */
    public function getEligiblePlans()
    {
        return $this->container['eligible_plans'];
    }

    /**
     * Sets eligible_plans
     * @param string[] $eligible_plans If not all_plans are set to true, then the set of eligible plan handles must be defined.
     * @return $this
     */
    public function setEligiblePlans($eligible_plans)
    {
        $this->container['eligible_plans'] = $eligible_plans;

        return $this;
    }

    /**
     * Gets max_redemptions
     * @return int
     */
    public function getMaxRedemptions()
    {
        return $this->container['max_redemptions'];
    }

    /**
     * Sets max_redemptions
     * @param int $max_redemptions Optional maximum number of times this coupon can be redeemed.
     * @return $this
     */
    public function setMaxRedemptions($max_redemptions)
    {

        if (!is_null($max_redemptions) && ($max_redemptions < 1)) {
            throw new \InvalidArgumentException('invalid value for $max_redemptions when calling CreateCoupon., must be bigger than or equal to 1.');
        }

        $this->container['max_redemptions'] = $max_redemptions;

        return $this;
    }

    /**
     * Gets valid_until
     * @return string
     */
    public function getValidUntil()
    {
        return $this->container['valid_until'];
    }

    /**
     * Sets valid_until
     * @param string $valid_until Optional date and time until which the coupon is redeemable. Date and time on the form `yyyy-MM-dd`, `yyyyMMdd`, `yyyy-MM-ddTHH:mm` and `yyyy-MM-ddTHH:mm:ss`.
     * @return $this
     */
    public function setValidUntil($valid_until)
    {
        $this->container['valid_until'] = $valid_until;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

