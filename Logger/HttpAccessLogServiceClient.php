<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Logger;

/**
 */
class HttpAccessLogServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Logger\CreateHttpAccessLogsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function createHttpAccessLogs(\Logger\CreateHttpAccessLogsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/logger.HttpAccessLogService/createHttpAccessLogs',
        $argument,
        ['\Logger\CreateHttpAccessLogsResponse', 'decode'],
        $metadata, $options);
    }

}
