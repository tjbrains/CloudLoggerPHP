<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Logger;

/**
 */
class HttpAccessLogServiceStub {

    /**
     * @param \Logger\CreateHttpAccessLogsRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Logger\CreateHttpAccessLogsResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function createHttpAccessLogs(
        \Logger\CreateHttpAccessLogsRequest $request,
        \Grpc\ServerContext $context
    ): ?\Logger\CreateHttpAccessLogsResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * Get the method descriptors of the service for server registration
     *
     * @return array of \Grpc\MethodDescriptor for the service methods
     */
    public final function getMethodDescriptors(): array
    {
        return [
            '/logger.HttpAccessLogService/createHttpAccessLogs' => new \Grpc\MethodDescriptor(
                $this,
                'createHttpAccessLogs',
                '\Logger\CreateHttpAccessLogsRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
