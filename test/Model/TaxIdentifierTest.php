<?php
/**
 * TaxIdentifierTest
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
 * The version of the OpenAPI document: v1.13.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace EbayFulfillmentApi;

use PHPUnit\Framework\TestCase;

/**
 * TaxIdentifierTest Class Doc Comment
 *
 * @category    Class
 * @description This type is used by the taxIdentifier container that is returned in getOrder. The taxIdentifier container consists of taxpayer identification information for buyers from Italy, Spain, or Guatemala. It is currently only returned for orders occurring on the eBay Italy or eBay Spain marketplaces. Note: Currently, the taxIdentifier container is only returned in getOrder and not in getOrders. So, if a seller wanted to view a buyer&#39;s tax information for a particular order returned in getOrders, that seller would need to use the orderId value for that particular order, and then run a getOrder call against that order ID.
 * @package     EbayFulfillmentApi
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class TaxIdentifierTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "TaxIdentifier"
     */
    public function testTaxIdentifier()
    {
    }

    /**
     * Test attribute "taxpayer_id"
     */
    public function testPropertyTaxpayerId()
    {
    }

    /**
     * Test attribute "tax_identifier_type"
     */
    public function testPropertyTaxIdentifierType()
    {
    }

    /**
     * Test attribute "issuing_country"
     */
    public function testPropertyIssuingCountry()
    {
    }
}
