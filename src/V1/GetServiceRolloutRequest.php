<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/servicemanager.proto

namespace Google\Cloud\ServiceManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for GetServiceRollout method.
 *
 * Generated from protobuf message <code>google.api.servicemanagement.v1.GetServiceRolloutRequest</code>
 */
class GetServiceRolloutRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the service.  See the
     * [overview](https://cloud.google.com/service-management/overview) for naming
     * requirements.  For example: `example.googleapis.com`.
     *
     * Generated from protobuf field <code>string service_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $service_name = '';
    /**
     * Required. The id of the rollout resource.
     *
     * Generated from protobuf field <code>string rollout_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $rollout_id = '';

    /**
     * @param string $serviceName Required. The name of the service.  See the
     *                            [overview](https://cloud.google.com/service-management/overview) for naming
     *                            requirements.  For example: `example.googleapis.com`.
     * @param string $rolloutId   Required. The id of the rollout resource.
     *
     * @return \Google\Cloud\ServiceManagement\V1\GetServiceRolloutRequest
     *
     * @experimental
     */
    public static function build(string $serviceName, string $rolloutId): self
    {
        return (new self())
            ->setServiceName($serviceName)
            ->setRolloutId($rolloutId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service_name
     *           Required. The name of the service.  See the
     *           [overview](https://cloud.google.com/service-management/overview) for naming
     *           requirements.  For example: `example.googleapis.com`.
     *     @type string $rollout_id
     *           Required. The id of the rollout resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Servicemanagement\V1\Servicemanager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the service.  See the
     * [overview](https://cloud.google.com/service-management/overview) for naming
     * requirements.  For example: `example.googleapis.com`.
     *
     * Generated from protobuf field <code>string service_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getServiceName()
    {
        return $this->service_name;
    }

    /**
     * Required. The name of the service.  See the
     * [overview](https://cloud.google.com/service-management/overview) for naming
     * requirements.  For example: `example.googleapis.com`.
     *
     * Generated from protobuf field <code>string service_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_name = $var;

        return $this;
    }

    /**
     * Required. The id of the rollout resource.
     *
     * Generated from protobuf field <code>string rollout_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRolloutId()
    {
        return $this->rollout_id;
    }

    /**
     * Required. The id of the rollout resource.
     *
     * Generated from protobuf field <code>string rollout_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRolloutId($var)
    {
        GPBUtil::checkString($var, True);
        $this->rollout_id = $var;

        return $this;
    }

}

