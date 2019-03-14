<?php

/**
 * @api {get}    /WechatChatroom/oneWechatChatroom  聊天室列表
 * @apiName      oneWechatChatroom
 * @apiDescription   聊天室列表
 * @apiVersion 1.0.0
 * @apiGroup     WechatAccount
 *
 * @apiParam {String}  keyword       // 聊天内容
 * @apiParam {Number}  pageIndex     //
 * @apiParam {Number}  pageSize      //
 * @apiParam {Number}  wechatAccountId   // 微信帐号id
 * @apiParam {Number} onlyWechatChatroomId
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      {
 *           "accountId": 34,
 *           "chatroomAvatar": "",
 *           "chatroomId": "",
 *           "chatroomOwner": "",
 *           "conRemark": "",
 *           "createTime": "",
 *           "deleteTime": "",
 *           "groupId": "",
 *           "id": "",
 *           "isDeleted": false,
 *           "lastUpdateTime": "",
 *           "nickname": "",
 *           "pyInitial": "",
 *           "quanPin": "",
 *           "tenantId": "",
 *           "todayMsgCount": "",               // 今日消息数
 *           "wechatAccountId": "",
 *            "members": [
 *                          {
 *                               "avatar": "",    // 头像
 *                               "nickname": "",  // 群成员昵称
 *                               "wechatId": ""
 *                          },...
 *                         ]
 *      },...
 * }
 *
 */


/**
 * @api {get} /ChatroomMessage/searchChatroomMessage  群聊天记录
 * @apiName   searchChatroomMessage
 * @apiDescription 群聊天记录
 * @apiVersion 1.0.0
 * @apiGroup WechatAccount
 *
 * @apiParam {Number}   keyword            // 聊天内容
 * @apiParam {Number}   messageId
 * @apiParam {Number}   wechatAccountId    // 微信列表id
 * @apiParam {Number}   wechatChatroomId   // 群聊id
 * @apiParam {String}   from               // 开始时间
 * @apiParam {String}   to                 // 结束时间
 *
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      {
 *          "accountId": "",
 *          "content": "wxid_bs918cr6uyh821:↵那你明天不来了呗就",
 *          "createTime": "",
 *          "deleteTime": "",
 *          "id": 11,
 *          "isDeleted": false,
 *          "msgId": 1001,
 *          "msgSubType": 0,
 *          "msgSvrId": "7929597941289639234",
 *          "msgType": 1,
 *          "origin": 0,
 *          "recalled": false,
 *          "sendStatus": 0,
 *          "synergyAccountId": 0,
 *          "tenantId": 3,
 *          "wechatAccountId": 167,
 *          "wechatChatroomId": 270,
 *          "wechatTime": "",
 *      }
 *
 * }
 *
 */



/**
 * @api {get} /ChatroomMessage/listOneChatroomMessagesPageByPage 查找最近或最新群聊天记录
 * @apiName   listOneChatroomMessagesPageByPage
 * @apiDescription 查找最近或最新群聊天记录
 * @apiVersion 1.0.0
 * @apiGroup WechatAccount
 *
 * @apiParam {Number}   keyword
 * @apiParam {Number}   messageId
 * @apiParam {Number}   smallerThenWechatTime
 * @apiParam {Number}   biggerThenWechatTime
 * @apiParam {Number}   wechatAccountId
 * @apiParam {Number}   wechatChatroomId
 * @apiParam {Number}   pageSize
 * @apiParam {bool}     upward
 *
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      {
 *          "accountId": "",
 *          "content": "wxid_bs918cr6uyh821:↵那你明天不来了呗就",
 *          "createTime": "",
 *          "deleteTime": "",
 *          "id": 11,
 *          "isDeleted": false,
 *          "msgId": 1001,
 *          "msgSubType": 0,
 *          "msgSvrId": "7929597941289639234",
 *          "msgType": 1,
 *          "origin": 0,
 *          "recalled": false,
 *          "sendStatus": 0,
 *          "synergyAccountId": 0,
 *          "tenantId": 3,
 *          "wechatAccountId": 167,
 *          "wechatChatroomId": 270,
 *          "wechatTime": "",
 *      }
 *
 * }
 *
 */