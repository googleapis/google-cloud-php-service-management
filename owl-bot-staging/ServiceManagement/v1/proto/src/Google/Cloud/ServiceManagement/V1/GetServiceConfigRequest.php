<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/servicemanager.proto

namespace Google\Cloud\ServiceManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for GetServiceConfig method.
 *
 * Generated from protobuf message <code>google.api.servicemanagement.v1.GetServiceConfigRequest</code>
 */
class GetServiceConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the service.  See the
     * [overview](/service-management/overview) for naming requirements.  For
     * example: `example.googleapis.com`.
     *
     * Generated from protobuf field <code>string service_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $service_name = '';
    /**
     * Required. The id of the service configuration resource.
     * This field must be specified for the server to return all fields, including
     * `SourceInfo`.
     *
     * Generated from protobuf field <code>string config_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $config_id = '';
    /**
     * Specifies which parts of the Service Config should be returned in the
     * response.
     *
     * Generated from protobuf field <code>.google.api.servicemanagement.v1.GetServiceConfigRequest.ConfigView view = 3;</code>
     */
    protected $view = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service_name
     *           Required. The name of the service.  See the
     *           [overview](/service-management/overview) for naming requirements.  For
     *           example: `example.googleapis.com`.
     *     @type string $config_id
     *           Required. The id of the service configuration resource.
     *           This field must be specified for the server to return all fields, including
     *           `SourceInfo`.
     *     @type int $view
     *           Specifies which parts of the Service Config should be returned in the
     *           response.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Servicemanagement\V1\Servicemanager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the service.  See the
     * [overview](/service-management/overview) for naming requirements.  For
     * example: `example.googleapis.com`.
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
     * [overview](/service-management/overview) for naming requirements.  For
     * example: `example.googleapis.com`.
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
     * Required. The id of the service configuration resource.
     * This field must be specified for the server to return all fields, including
     * `SourceInfo`.
     *
     * Generated from protobuf field <code>string config_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getConfigId()
    {
        return $this->config_id;
    }

    /**
     * Required. The id of the service configuration resource.
     * This field must be specified for the server to return all fields, including
     * `SourceInfo`.
     *
     * Generated from protobuf field <code>string config_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setConfigId($var)
    {
        GPBUtil::checkString($var, True);
        $this->config_id = $var;

        return $this;
    }

    /**
     * Specifies which parts of the Service Config should be returned in the
     * response.
     *
     * Generated from protobuf field <code>.google.api.servicemanagement.v1.GetServiceConfigRequest.ConfigView view = 3;</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Specifies which parts of the Service Config should be returned in the
     * response.
     *
     * Generated from protobuf field <code>.google.api.servicemanagement.v1.GetServiceConfigRequest.ConfigView view = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ServiceManagement\V1\GetServiceConfigRequest\ConfigView::class);
        $this->view = $var;

        return $this;
    }

}

