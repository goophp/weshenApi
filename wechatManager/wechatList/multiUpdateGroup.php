<?php
/**
 * @api {put} /WechatAccount/multiUpdateWechatGroup 微信批量分组
 * @apiName    multiUpdateWechatGroup
 * @apiDescription 微信批量分组
 * @apiVersion 1.0.0
 * @apiGroup   WechatAccount
 *
 * @apiParam {Number} groupId           分组id
 * @apiParam {Array} wechatAccountIds  微信列表id
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
 * @api {put}   /WechatAccount/updateWechatGroup 微信分组
 * @apiName     updateWechatGroup
 * @apiDescription  微信分组
 * @apiVersion  1.0.0
 * @apiGroup   WechatAccount
 *
 * @apiParam {Number} groupId           分组id
 * @apiParam {Number}   id              微信列表id
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
 * @api {put}   /WechatAccount/updateWechatAccountMemo 修改备注
 * @apiName     updateWechatAccountMemo
 * @apiDescription  修改备注
 * @apiVersion  1.0.0
 * @apiGroup   WechatAccount
 *
 * @apiParam {String}  memo                         备注
 * @apiParam {Number}  wechatAccountId              微信列表id
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