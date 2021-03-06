<?php
/**
 * CancelStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  EbayFulfillmentApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Fulfillment API
 *
 * Use the Fulfillment API to complete the process of packaging, addressing, handling, and shipping each order on behalf of the seller, in accordance with the payment method and timing specified at checkout.
 *
 * The version of the OpenAPI document: v1.15.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace EbayFulfillmentApi\Model;

use \ArrayAccess;
use \EbayFulfillmentApi\ObjectSerializer;

/**
 * CancelStatus Class Doc Comment
 *
 * @category Class
 * @description This type contains information about any requests that have been made to cancel an order.
 * @package  EbayFulfillmentApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CancelStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CancelStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cancelled_date' => 'string',
        'cancel_requests' => '\EbayFulfillmentApi\Model\CancelRequest[]',
        'cancel_state' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'cancelled_date' => null,
        'cancel_requests' => null,
        'cancel_state' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'cancelled_date' => 'cancelledDate',
        'cancel_requests' => 'cancelRequests',
        'cancel_state' => 'cancelState'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cancelled_date' => 'setCancelledDate',
        'cancel_requests' => 'setCancelRequests',
        'cancel_state' => 'setCancelState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cancelled_date' => 'getCancelledDate',
        'cancel_requests' => 'getCancelRequests',
        'cancel_state' => 'getCancelState'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['cancelled_date'] = isset($data['cancelled_date']) ? $data['cancelled_date'] : null;
        $this->container['cancel_requests'] = isset($data['cancel_requests']) ? $data['cancel_requests'] : null;
        $this->container['cancel_state'] = isset($data['cancel_state']) ? $data['cancel_state'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets cancelled_date
     *
     * @return string|null
     */
    public function getCancelledDate()
    {
        return $this->container['cancelled_date'];
    }

    /**
     * Sets cancelled_date
     *
     * @param string|null $cancelled_date The date and time the order was cancelled, if applicable. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. Format: [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2015-08-04T19:09:02.768Z
     *
     * @return $this
     */
    public function setCancelledDate($cancelled_date)
    {
        $this->container['cancelled_date'] = $cancelled_date;

        return $this;
    }

    /**
     * Gets cancel_requests
     *
     * @return \EbayFulfillmentApi\Model\CancelRequest[]|null
     */
    public function getCancelRequests()
    {
        return $this->container['cancel_requests'];
    }

    /**
     * Sets cancel_requests
     *
     * @param \EbayFulfillmentApi\Model\CancelRequest[]|null $cancel_requests This array contains details of one or more buyer requests to cancel the order. For the getOrders call: This array is returned but is always empty. For the getOrder call: This array is returned fully populated with information about any cancellation requests.
     *
     * @return $this
     */
    public function setCancelRequests($cancel_requests)
    {
        $this->container['cancel_requests'] = $cancel_requests;

        return $this;
    }

    /**
     * Gets cancel_state
     *
     * @return string|null
     */
    public function getCancelState()
    {
        return $this->container['cancel_state'];
    }

    /**
     * Sets cancel_state
     *
     * @param string|null $cancel_state The state of the order with regard to cancellation. This field is always returned, and if there are no cancellation requests, a value of NONE_REQUESTED is returned. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/CancelStateEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setCancelState($cancel_state)
    {
        $this->container['cancel_state'] = $cancel_state;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


