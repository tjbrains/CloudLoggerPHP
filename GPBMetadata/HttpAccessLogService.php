<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: http_access_log_service.proto

namespace GPBMetadata;

class HttpAccessLogService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            "\x0A\x88\x0D\x0A\x1Dhttp_access_log_service.proto\x12\x06logger\"L\x0A\x1BCreateHttpAccessLogsRequest\x12-\x0A\x0EhttpAccessLogs\x18\x01 \x03(\x0B2\x15.logger.HttpAccessLog\"\x1E\x0A\x1CCreateHttpAccessLogsResponse\"\xCA\x0A\x0A\x0DHttpAccessLog\x12\x11\x0A\x09requestId\x180 \x01(\x09\x12\x10\x0A\x08serverId\x18\x01 \x01(\x03\x12\x0E\x0A\x06nodeId\x18\x02 \x01(\x03\x12\x10\x0A\x08originId\x18\x05 \x01(\x03\x12\x12\x0A\x0AremoteAddr\x18\x06 \x01(\x09\x12\x15\x0A\x0DrawRemoteAddr\x18\x07 \x01(\x09\x12\x12\x0A\x0AremotePort\x18\x08 \x01(\x05\x12\x12\x0A\x0AremoteUser\x18\x09 \x01(\x09\x12\x12\x0A\x0ArequestURI\x18\x0A \x01(\x09\x12\x13\x0A\x0BrequestPath\x18\x0B \x01(\x09\x12\x15\x0A\x0DrequestLength\x18\x0C \x01(\x03\x12\x13\x0A\x0BrequestTime\x18\x0D \x01(\x01\x12\x15\x0A\x0DrequestMethod\x18\x0E \x01(\x09\x12\x17\x0A\x0FrequestFilename\x18\x0F \x01(\x09\x12\x13\x0A\x0BrequestBody\x183 \x01(\x0C\x12\x0E\x0A\x06scheme\x18\x10 \x01(\x09\x12\x0D\x0A\x05proto\x18\x11 \x01(\x09\x12\x11\x0A\x09bytesSent\x18\x12 \x01(\x03\x12\x15\x0A\x0DbodyBytesSent\x18\x13 \x01(\x03\x12\x0E\x0A\x06status\x18\x14 \x01(\x05\x12\x15\x0A\x0DstatusMessage\x18\x15 \x01(\x09\x129\x0A\x0AsentHeader\x18\x16 \x03(\x0B2%.logger.HttpAccessLog.SentHeaderEntry\x12\x13\x0A\x0BtimeISO8601\x18\x17 \x01(\x09\x12\x11\x0A\x09timeLocal\x18\x18 \x01(\x09\x12\x0C\x0A\x04msec\x18\x19 \x01(\x01\x12\x11\x0A\x09timestamp\x18\x1A \x01(\x03\x12\x0C\x0A\x04host\x18\x1B \x01(\x09\x12\x0F\x0A\x07referer\x18\x1C \x01(\x09\x12\x11\x0A\x09userAgent\x18\x1D \x01(\x09\x12\x0F\x0A\x07request\x18\x1E \x01(\x09\x12\x13\x0A\x0BcontentType\x18\x1F \x01(\x09\x121\x0A\x06cookie\x18  \x03(\x0B2!.logger.HttpAccessLog.CookieEntry\x12\x0C\x0A\x04args\x18\" \x01(\x09\x12\x13\x0A\x0BqueryString\x18# \x01(\x09\x121\x0A\x06header\x18\$ \x03(\x0B2!.logger.HttpAccessLog.HeaderEntry\x12\x12\x0A\x0AserverName\x18% \x01(\x09\x12\x12\x0A\x0AserverPort\x18& \x01(\x05\x12\x16\x0A\x0EserverProtocol\x18' \x01(\x09\x12\x10\x0A\x08hostname\x18( \x01(\x09\x12\x15\x0A\x0DoriginAddress\x18) \x01(\x09\x12\x14\x0A\x0CoriginStatus\x184 \x01(\x05\x12\x0E\x0A\x06errors\x18* \x03(\x09\x12/\x0A\x05attrs\x18+ \x03(\x0B2 .logger.HttpAccessLog.AttrsEntry\x12\x18\x0A\x10firewallPolicyId\x18, \x01(\x03\x12\x1B\x0A\x13firewallRuleGroupId\x18- \x01(\x03\x12\x19\x0A\x11firewallRuleSetId\x18. \x01(\x03\x12\x16\x0A\x0EfirewallRuleId\x18/ \x01(\x03\x12\x17\x0A\x0FfirewallActions\x181 \x03(\x09\x12\x0C\x0A\x04tags\x182 \x03(\x09\x1AB\x0A\x0FSentHeaderEntry\x12\x0B\x0A\x03key\x18\x01 \x01(\x09\x12\x1E\x0A\x05value\x18\x02 \x01(\x0B2\x0F.logger.Strings:\x028\x01\x1A-\x0A\x0BCookieEntry\x12\x0B\x0A\x03key\x18\x01 \x01(\x09\x12\x0D\x0A\x05value\x18\x02 \x01(\x09:\x028\x01\x1A>\x0A\x0BHeaderEntry\x12\x0B\x0A\x03key\x18\x01 \x01(\x09\x12\x1E\x0A\x05value\x18\x02 \x01(\x0B2\x0F.logger.Strings:\x028\x01\x1A,\x0A\x0AAttrsEntry\x12\x0B\x0A\x03key\x18\x01 \x01(\x09\x12\x0D\x0A\x05value\x18\x02 \x01(\x09:\x028\x01\"\x19\x0A\x07Strings\x12\x0E\x0A\x06values\x18\x01 \x03(\x092y\x0A\x14HttpAccessLogService\x12a\x0A\x14createHttpAccessLogs\x12#.logger.CreateHttpAccessLogsRequest\x1A\$.logger.CreateHttpAccessLogsResponseB\x06Z\x04./pbb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

