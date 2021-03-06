<?php

/**
 * LICENSE
 *
 * This source file is subject to the GNU General Public License, Version 3
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @package    BitsyBay Engine
 * @copyright  Copyright (c) 2015 The BitsyBay Project (http://bitsybay.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU General Public License, Version 3
 */

// COMMON
define('PROJECT_NAME', 'BitsyBay');
define('HOST_COUNTRY', 'Sweden'); // Law

// HTTP
define('HTTP_SERVER', 'http://localhost/');
define('HTTP_IMAGE_SERVER', 'http://localhost/image/');

// HTTPS
define('HTTPS_SERVER', 'https://localhost/');
define('HTTPS_IMAGE_SERVER', 'https://localhost/image/');

// DIR
define('DIR_BASE', '/var/www/html/');
define('DIR_STORAGE', '/var/www/html/storage/');
define('DIR_IMAGE', '/var/www/html/public/image/');
define('DIR_SEPARATOR', '/');

// DB
define('DB_HOSTNAME', 'localhost');
define('DB_DATABASE', '');
define('DB_USERNAME', '');
define('DB_PASSWORD', '');

// USERS
define('NEW_USER_STATUS', 1);
define('NEW_USER_VERIFIED', 0);

// COMPRESSION
define('GZIP_COMPRESSION_LEVEL', 0);

// LOCALIZATION
define('DEFAULT_LANGUAGE_ID', 1);
define('DEFAULT_CURRENCY_ID', 1);
define('DATE_FORMAT_DEFAULT', 'j M, Y');

// EXTENSIONS
define('ALLOWED_FILE_EXTENSION', 'zip');
define('ALLOWED_IMAGE_EXTENSION', 'jpg');

// IMAGES
define('PRODUCT_IMAGE_ORIGINAL_WIDTH', 800);
define('PRODUCT_IMAGE_ORIGINAL_HEIGHT', 800);
define('PRODUCT_IMAGE_ORIGINAL_MIN_WIDTH', 400);
define('PRODUCT_IMAGE_ORIGINAL_MIN_HEIGHT', 400);

define('USER_IMAGE_ORIGINAL_JPEG_COMPRESSION', 100);
define('USER_IMAGE_ORIGINAL_WIDTH', 400);
define('USER_IMAGE_ORIGINAL_HEIGHT', 400);
define('USER_IMAGE_ORIGINAL_MIN_WIDTH', 200);
define('USER_IMAGE_ORIGINAL_MIN_HEIGHT', 200);

// PRICES
define('FEE_PER_ORDER', 11); // Percent
define('ALLOWED_PRODUCT_MIN_PRICE', 0.01);
define('ALLOWED_PRODUCT_MAX_PRICE', 1000000);

// ORDERS
define('ORDER_PENDING_STATUS_ID', 1);  // INT order_status_id in order_status table
define('ORDER_APPROVED_STATUS_ID', 2); // INT order_status_id in order_status table
define('ORDER_PROCESSED_STATUS_ID', 3); // INT order_status_id in order_status table

// DOWNLOADS
define('FILENAME_PREFIX_PRODUCT', 'product_');

// QUOTA
define('QUOTA_FILE_SIZE_BY_DEFAULT', 100); // int Mb
define('QUOTA_BONUS_SIZE_PER_ORDER', 1);   // int Mb
define('QUOTA_IMAGE_MAX_FILE_SIZE', 500);  // int Kb
define('QUOTA_IMAGES_PER_PRODUCT', 6);     // int Qty
define('QUOTA_DEMO_PER_PRODUCT', 5);       // int Qty
define('QUOTA_VIDEO_PER_PRODUCT', 5);      // int Qty
define('QUOTA_SPECIALS_PER_PRODUCT', 5);   // int Qty

// VALIDATORS
define('VALIDATOR_PRODUCT_TITLE_MIN_LENGTH', 2);
define('VALIDATOR_PRODUCT_TITLE_MAX_LENGTH', 60);
define('VALIDATOR_PRODUCT_DESCRIPTION_MIN_LENGTH', 2);
define('VALIDATOR_PRODUCT_DESCRIPTION_MAX_LENGTH', 100000);
define('VALIDATOR_PRODUCT_URL_MIN_LENGTH', 5);
define('VALIDATOR_PRODUCT_URL_MAX_LENGTH', 1000);
define('VALIDATOR_PRODUCT_TAGS_MIN_LENGTH', 2);
define('VALIDATOR_PRODUCT_TAGS_MAX_LENGTH', 100);
define('VALIDATOR_PRODUCT_TAG_MIN_LENGTH', 2);
define('VALIDATOR_PRODUCT_TAG_MAX_LENGTH', 20);

// MAIL
define('MAIL_BILLING', '');
define('MAIL_INFO', '');
define('MAIL_FROM', '');
define('MAIL_SENDER', PROJECT_NAME);

// BITCOIN PRC API
define('BITCOIN_RPC_PORT', '8332');
define('BITCOIN_RPC_HOST', 'localhost');
define('BITCOIN_RPC_USERNAME', '');
define('BITCOIN_RPC_PASSWORD', '');

// ORDER PROCESSOR
define('ORDER_PROCESSOR_DEBUG_MODE', true);
define('ORDER_PROCESSOR_MIN_BTC_TRANSACTION_CONF_TO_ORDER_APPROVE', 6); // Minimum BTC transaction confirmations requires before the order will be marked as APPROVED

// BANK
define('BITCOIN_STORAGE_WITHDRAW_ENABLED', true);
define('BITCOIN_STORAGE_WITHDRAW_MINIMUM_AMOUNT', 0.01);
define('BITCOIN_STORAGE_WITHDRAW_ADDRESS', '');
