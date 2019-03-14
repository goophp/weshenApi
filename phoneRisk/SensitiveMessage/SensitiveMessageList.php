<?php

/**
 * @api {get} /SensitiveOperate/list  敏感短信列表
 * @apiName  sensitiveOperateList
 * @apiDescription   敏感短信列表
 * @apiVersion 1.0.0
 * @apiGroup SensitiveOperate
 *
 * @apiParam {Number}  deviceOwnerId  // 设备所属客服id
 * @apiParam {Number}  opTypes[]
 * @apiParam {String}  keyword    // IMEI,微信信息关键词
 * @apiParam {String}  opType
 * @apiParam {String}  status     // 处理状态 1 - 已处理 2 - 未处理
 * @apiParam {Bool}    isNormal    // 行为类型 true - 正常 false 异常
 * @apiParam {String}  departmentId
 * @apiParam {String}  deviceGroupId   // 设备分组id
 * @apiParam {String}  wechatGroupId   // 微信分组id
 * @apiParam {String}  begin           // 开始时间
 * @apiParam {String}  end             // 结束时间
 * @apiParam {String}  pageIndex
 * @apiParam {String}  pageSize
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      "code": 0,
 *      "msg": "",
 *      "data": [
 *      ]
 * }
 *
 */


/**
 * @api {get} /DeviceGroup/list   设备分组列表
 * @apiName   deviceGroupList
 * @apiDescription  设备分组列表
 * @apiVersion 1.0.0
 * @apiGroup SensitiveOperate
 *
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      {
 *          "count": 1,
 *          "createTime": "",
 *          "groupMemo": "",
 *          "groupName": "",   // 分组名称
 *          "id": 5,
 *          "tenantId": 2
 *      },
 * }
 *
 */


/**
 * @api {get} /WechatGroup/list   微信分组列表
 * @apiName   wechatGroupList
 * @apiDescription  微信分组列表
 * @apiVersion 1.0.0
 * @apiGroup SensitiveOperate
 *
 * @apiParam {Number}  [ groupType = null ]
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      {
 *          "createTime": "2018-12-04T11:07:28.367221"
 *          "departmentId": 0
 *          "groupMemo": null
 *          "groupName": "公共存放"
 *          "groupOwnerType": 1
 *          "groupType": 0
 *          "id": 3
 *          "sortIndex": 1543892848378
 *          "tenantId": 3
 *      },
 *      .....
 * }
 *
 */


/**
 * @api {get} /Account/listNormalAccountsForSelect   设备所属客服列表
 * @apiName   listNormalAccounts
 * @apiDescription  设备所属客服列表
 * @apiVersion 1.0.0
 * @apiGroup SensitiveOperate
 *
 * @apiParam {Number}  [ containAllotFriendCount = null ]
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      {
 *          "accountType": ""
 *          "allotChatroomCount": 0
 *          "allotFriendCount": null
 *          "avatar": ""
 *          "dailyAllotFriendCount": 1
 *          "id": 0
 *          "nickname": 3
 *          "todayFriendFristAllotCount": ""
 *          "userName": 3
 *      },
 *      .....
 * }
 *
 */




