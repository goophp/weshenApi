<?php

/**
 * @api {get} /WechatAccount/list 微信列表
 * @apiName  wechatList
 * @apiDescription 微信列表
 * @apiVersion 1.0.0
 * @apiGroup   WechatAccount
 *
 * @apiParam {Number}  [ wechatAlive = null]     // 状态 true - 在线 false - 离线
 * @apiParam {String}  [ keyword = null ]        // 关键词
 * @apiParam {Number}  [ groupId = null ]        // 分组id
 * @apiParam {Number}  [ departmentId = null ]   // 部门id
 * @apiParam {Number}  [ pageIndex = null ]      // 当前页数
 * @apiParam {Number}  [ pageSize = null ]       // 每页数
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      "results": [
 *          {
 *              "accountNickname": "",
 *              "accountRealName": "",
 *              "accountUserName": "",
 *              "alias": "",               // 微信号
 *              "avatar": ""               // 头像
 *              "bindEmail": ""
 *              "bindMobile": ""           // 微信手机号
 *              "bindQQ": "",
 *              "createTime": ""
 *              "currentDeviceId": 2,
 *              "deleteTime": "",
 *              "deviceAccountId": 4,
 *              "deviceAlive": false,
 *              "deviceMemo": "",             // 设备名称
 *              "femaleFriend": 0
 *              "gender": 0,                  // 性别
 *              "groupId": 0,
 *              "id": 0,
 *              "imei": "",                   // 手机imei
 *              "isDeleted": false,
 *              "keFuAlive": false,
 *              "labels":  {"大客户", "老板"},
 *              "maleFriend": 0,
 *              "memo": "",                  // 备注
 *              "nickname": "",              // 昵称
 *              "region": "",
 *              "sevenDayMsgCount": 1,       // 一周对话数
 *              "signature": "",
 *              "tenantId": 3,
 *              "thirtyDayMsgCount": 20,     // 30天对话数
 *              "totalFriend": 20,           // 好友总数
 *              "wechatAlive": false,        // 是否在线
 *              "wechatGroupName": "",       // 所属分组
 *              "wechatId": "",              // 微信Id
 *              "wechatVersion": "",         // 微信版本
 *              "yesterdayMsgCount": 11,     // 昨天对话数
 *
 *          },
 *          ...
 *      ]
 * }
 *
 */




/**
 * @api {get}   /WechatAccount/listTenantWechatPartial   微信列表部分信息
 * @apiName     listTenantWechatPartial
 * @apiDescription   微信列表部分信息
 * @apiVersion 1.0.0
 * @apiGroup     WechatAccount
 *
 * @apiParam {Array}  wechatAccountIdsStr   // 微信列表id
 * @apiParam {Array}  deviceIdsStr          // 当前设备id
 * @apiParam {Array}  accountIdsStr         // 设备账户id
 * @apiParam {Number} groupId               // 分组id
 *
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      "deviceAlive": {2: false, 4: true},   // 设备是否在线 {"currentDevicedId": true}
 *      "femaleFriend": {9: 4, 15: 12},       // 女性好友数 {"id": 4}
 *      "keFuAlive": {4: true, 47: false},    // 客服是否在线 {"deviceAccountId": true}
 *      "maleFriend": {9: 4, 12: 11},         // 男性好友数 {"id": 4}
 *      "sevenDayMsgCount": {9: 30, 15: 2220}, // 七天对话统计数 {"id": 30}
 *      "thirtyDayMsgCount": {9: 20},           // 三十天对话统计数
 *      "totalFriend": {1: 1},                 // 好友总数
 *      "unknowFriend": {1: 1},                // 未知好友数
 *      "wechatAlive": {}                      // 微信是否在线{"id": true}
 *      "yesterdayMsgCount": {}                // 昨天对话统计数
 * }
 *
 */
