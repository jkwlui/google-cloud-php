<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1\ListFindingsResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Result containing the Finding and its StateChange.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.ListFindingsResponse.ListFindingsResult</code>
 */
class ListFindingsResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Finding matching the search request.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.Finding finding = 1;</code>
     */
    private $finding = null;
    /**
     * State change of the finding between the points in time.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.ListFindingsResponse.ListFindingsResult.StateChange state_change = 2;</code>
     */
    private $state_change = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\SecurityCenter\V1\Finding $finding
     *           Finding matching the search request.
     *     @type int $state_change
     *           State change of the finding between the points in time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Finding matching the search request.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.Finding finding = 1;</code>
     * @return \Google\Cloud\SecurityCenter\V1\Finding
     */
    public function getFinding()
    {
        return $this->finding;
    }

    /**
     * Finding matching the search request.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.Finding finding = 1;</code>
     * @param \Google\Cloud\SecurityCenter\V1\Finding $var
     * @return $this
     */
    public function setFinding($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V1\Finding::class);
        $this->finding = $var;

        return $this;
    }

    /**
     * State change of the finding between the points in time.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.ListFindingsResponse.ListFindingsResult.StateChange state_change = 2;</code>
     * @return int
     */
    public function getStateChange()
    {
        return $this->state_change;
    }

    /**
     * State change of the finding between the points in time.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.ListFindingsResponse.ListFindingsResult.StateChange state_change = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStateChange($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\SecurityCenter\V1\ListFindingsResponse_ListFindingsResult_StateChange::class);
        $this->state_change = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ListFindingsResult::class, \Google\Cloud\SecurityCenter\V1\ListFindingsResponse_ListFindingsResult::class);

