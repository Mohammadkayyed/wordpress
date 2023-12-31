<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/services/merchant_center_link_service.proto

namespace Google\Ads\GoogleAds\V14\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [MerchantCenterLinkService.ListMerchantCenterLinks][google.ads.googleads.v14.services.MerchantCenterLinkService.ListMerchantCenterLinks].
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.services.ListMerchantCenterLinksRequest</code>
 */
class ListMerchantCenterLinksRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the customer onto which to apply the Merchant Center
     * link list operation.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           Required. The ID of the customer onto which to apply the Merchant Center
     *           link list operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Services\MerchantCenterLinkService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the customer onto which to apply the Merchant Center
     * link list operation.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Required. The ID of the customer onto which to apply the Merchant Center
     * link list operation.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

}

