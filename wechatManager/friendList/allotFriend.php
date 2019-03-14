<?php

/**
 * @api {put} /WechatFriend/allot   好友分配客服
 * @apiName   wechatFriendAllot
 * @apiDescription 好友分配客服
 * @apiVersion 1.0.0
 * @apiGroup  friendList
 *
 * @apiParam {Number}   wechatFriendId     // 微信好友id
 * @apiParam {Bool}     notifyReceiver     // 消息
 * @apiParam {String}   comment            //
 * @apiParam {Number}   toAccountId        // 指定客服id
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
 * @api {put} /WechatFriend/autoAllot   按照规则分配客服
 * @apiName   autoAllot
 * @apiDescription 按照规则分配客服
 * @apiVersion 1.0.0
 * @apiGroup  friendList
 *
 * @apiParam {Number}   wechatFriendId     // 微信好友id
 * @apiParam {Bool}     notifyReceiver     // 是否消息通知
 * @apiParam {String}   comment            //
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