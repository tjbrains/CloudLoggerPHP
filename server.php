<?php
/*
 *
 * Copyright 2020 gRPC authors.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

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
