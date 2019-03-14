<?php
/**
 * @api {post} /AppDisplaySetting/all  显示所有应用
 * @apiName    AppDisplayList
 * @apiDescription  显示所有应用
 * @apiVersion 1.0.0
 * @apiGroup  AppDisplayList
 *
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      {
 *          "appName": "",   // 应用名称
 *          "appPackage": "", // 包名称
 *          "count": "",      // 已添加设备数
 *          "createTime": "",
 *          "creatorId": 12,
 *          "id": 11,
 *          "tenantId": 3
 *      },...
 * }
 *
 */


/**
 * @api {get} /device/listDeviceForSelect   列出可选设备
 * @apiName   listDeviceForSelect
 * @apiDescription  列出可选设备
 * @apiVersion 1.0.0
 * @apiGroup  AppDisplayList
 *
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      {
 *          "groupId": 0,
 *          "id": 3,
 *          "imei": "",
 *          "memo": ""
 *      },...
 * }
 *
 */

/**
 * @api {get} /device/listCascaderDevice   列出分组的设备
 * @apiName   listCascaderDevice
 * @apiDescription  列出分组的设备
 * @apiVersion 1.0.0
 * @apiGroup   AppDisplayList
 *
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      {
 *         "id": 5,
 *          "imei": "",
 *          "label": "",
 *          "memo": "",
 *          "value": "",
 *          "children": [
 *                  {
 *                      "id": "",
 *                      "imei": "",
 *                      "label": "",
 *                      "memo": "",
 *                      "value": "",
 *                      "children": []
 *                   }, ...
 *              ]
 *      },...
 *
 * }
 *
 */



/**
 * @api {get} /AppDisplaySetting/getDefaultAppDisplay  获取默认应用包
 * @apiName   getDefaultAppDisplay
 * @apiDescription 获取默认应用包
 * @apiVersion 1.0.0
 * @apiGroup AppDisplayList
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      "com.tencent.mm",
 *      "com.tencent.mm",
 *      "com.tencent.mm"
 * }
 *
 */

/**
 * @api {get} /AppDisplayRelation/allDeviceId  获取应用与设备分配关系
 * @apiName   AppDisplayRelation
 * @apiDescription  获取应用与设备分配关系
 * @apiVersion 1.0.0
 * @apiGroup   AppDisplayList
 *
 * @apiParam {Number}  settingId    应用id
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      11,12,13
 * }
 *
 */