<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/mobile_device_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Enums;

class MobileDeviceType
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
6google/ads/googleads/v6/enums/mobile_device_type.protogoogle.ads.googleads.v6.enums"`
MobileDeviceTypeEnum"H
MobileDeviceType
UNSPECIFIED 
UNKNOWN

MOBILE

TABLETB�
!com.google.ads.googleads.v6.enumsBMobileDeviceTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

