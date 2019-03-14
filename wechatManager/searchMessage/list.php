<?php
/**
 * @api {post}   /WechatFriend/listWechatFriendForMsgPagination  聊天搜索列表
 * @apiName      listWechatFriendForMsgPagination
 * @apiDescription  聊天搜索列表
 * @apiVersion 1.0.0
 * @apiGroup   searchWechatMsg
 *
 * @apiParam  {Number}  chatroomKeyword
 * @apiParam  {Number}  friendKeyword
 * @apiParam  {Number}  kefuId
 * @apiParam  {String}  msgFrom
 * @apiParam  {String}  msgKeyword           // 聊天内容记录
 * @apiParam  {String}  msgTo
 * @apiParam  {Number}  pageIndex
 * @apiParam  {Number}  pageSize
 * @apiParam  {Bool}    reverse
 * @apiParam  {String}  type
 * @apiParam  {array}   wechatAccountIds
  *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
        accountId: 49
        accountRealName: "wuyanfei"
        accountUserName: "wuyanfei"
        addFrom: 14
        alias: "a18946655760"
        avatar: ""
        conRemark: ""
        gender: 1
        msgCount: 9
        nickname: ""
        ownerAlias: "meijiahezi"
        ownerAvatar: ""
        ownerNickname: "忠文汽贸"
        ownerWechatId: "wxid_4ymdjeskpsdo22"
        phone: ""
        region: "北京昌平"
        sendCount: 0
        signature: ""
        wechatAccountId: 15
        wechatFriendId: 5032
        wechatId: "wxid_sagjvuaydwg512"
 * }
 *
 */