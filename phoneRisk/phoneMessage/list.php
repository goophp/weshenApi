<?php

/**
 * @api {post} /PhoneMsg/list  手机短信列表
 * @apiName    phoneMessageList
 * @apiDescription  手机短信列表
 * @apiVersion 1.0.0
 * @apiGroup phoneMsg
 *
 * @apiParam {String}  keyword         IMEI关键词
 * @apiParam {String}  from            开始时间
 * @apiParam {String}  to              结束时间
 * @apiParam {Number}  pageIndex       当前页
 * @apiParam {Number}  pageSize        页数
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      "result": [
 *          {
 *             "createTime": "",
 *              "deviceOwnerId": 1,
 *              "id": 11,
 *              "imei": "xx",
 *              "isDeleted": false,
 *              "isSend": false,
 *              "msgContent": "",  // 短信内容
 *              "nickname": "",
 *              "phone": "",     // 手机号
 *              "realName": "",
 *              "sendOrReceiveTime": "",   // 发送/接受时间
 *              "tenantId": 3,
 *              "userName": ""
 *          },
 *          ...
 *      ]
 * }
 *
 */

