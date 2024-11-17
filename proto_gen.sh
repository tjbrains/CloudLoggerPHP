#!/bin/bash

set -e

# protoc and grpc_*_plugin binaries can be obtained by running
# $ bazel build @com_google_protobuf//:protoc //src/compiler:all
PROTOC=protoc
PLUGIN=protoc-gen-grpc=/usr/local/bin/grpc_php_plugin

$PROTOC --proto_path=./protos \
       --php_out=. \
       --grpc_out=generate_server:./ \
       --plugin=$PLUGIN ./protos/http_access_log_service.proto
