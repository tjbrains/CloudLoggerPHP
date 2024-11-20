<?php

require dirname(__FILE__) . '/vendor/autoload.php';

class HttpAccessLogService extends \Logger\HttpAccessLogServiceStub
{
    public function createHTTPAccessLogs(
        \Logger\CreateHttpAccessLogsRequest $request,
        \Grpc\ServerContext $serverContext
    ): ?\Logger\CreateHttpAccessLogsResponse {
        // 这里写你自己的代码
        //foreach ($request->getHttpAccessLogs() as $accessLog) {
    	// echo $accessLog->getNodeId() . "\n";
        //}
        return new \Logger\CreateHttpAccessLogsResponse();
    }
}

$port = 8010;
$server = new \Grpc\RpcServer();
$server->addHttp2Port('0.0.0.0:'.$port);
$server->handle(new HttpAccessLogService());
echo 'Listening on port :' . $port . PHP_EOL;
$server->run();
