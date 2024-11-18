# CloudLoggerPHP

接收访问日志服务PHP gRPC示例，详情请参考 [访问日志接收服务](https://flexcdn.cn/docs/node/accesslog/endpoint) 。

## 使用前提

* 你已经安装了 protoc 和 grpc_php_plugin，相关参考文档：https://github.com/grpc/grpc/tree/master/src/php ，安装后需要修改 `proto_gen.sh` 中的相关路径
* 你的PHP已经安装了grpc模块，如果还没安装请参考 https://pecl.php.net/package/gRPC

## 运行

~~~bash
php server.php
~~~

默认端口为 `8010`，如需修改端口，请修改 `logger_server.php` 文件中的 `$port` 变量。

如果要尝试从 `proto` 文件中重新生成PHP文件，可以运行 `proto_gen.sh` 。

## 实现你自己的存储方式

请修改 `server.php` 中的 `createHTTPAccessLogs` 方法来实现你自己的存储方式。