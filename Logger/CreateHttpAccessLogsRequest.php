<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: http_access_log_service.proto

namespace Logger;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>logger.CreateHttpAccessLogsRequest</code>
 */
class CreateHttpAccessLogsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .logger.HttpAccessLog httpAccessLogs = 1;</code>
     */
    private $httpAccessLogs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Logger\HttpAccessLog>|\Google\Protobuf\Internal\RepeatedField $httpAccessLogs
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\HttpAccessLogService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .logger.HttpAccessLog httpAccessLogs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHttpAccessLogs()
    {
        return $this->httpAccessLogs;
    }

    /**
     * Generated from protobuf field <code>repeated .logger.HttpAccessLog httpAccessLogs = 1;</code>
     * @param array<\Logger\HttpAccessLog>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHttpAccessLogs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Logger\HttpAccessLog::class);
        $this->httpAccessLogs = $arr;

        return $this;
    }

}

