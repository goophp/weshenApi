<?php
/**
 * @api {get}  /WechatGroup/list  群聊分组
 * @apiName    chatroomGroup
 * @apiDescription 群聊分组
 * @apiVersion 1.0.0
 * @apiGroup   common
 *
 * @apiParam {Number}  [ groupType = 2 ]
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      {
 *          "createTime": "",
 *          "departmentId": 0,
 *          "groupMemo": ""
 *          "groupName": "",
 *          "groupOwnerType": "",
 *          "groupType": 2,
 *          "id": 5,
 *          "sortIndex": 11111,
 *          "tenantId": 3
 *      },...
 * }
 *
 */


/**
 * @api {get} /WechatChatroom/pagelist   聊天室列表
 * @apiName WechatChatroomList
 * @apiDescription 聊天室列表
 * @apiVersion 1.0.0
 * @apiGroup   wechatroomList
 *
 * @apiParam {Number}  keyword          // 聊天群信息
 * @apiParam {Number}  wechatAccountKeyword
 * @apiParam {Bool}    isDeleted        // 是否删除
 * @apiParam {Number}  allotAccountId   // 分配客服id
 * @apiParam {Number}  groupId
 * @apiParam {Number}  pageIndex
 * @apiParam {Number}  pageSize
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      {
 *          "accountId": "",
 *          "accountNickname": "",
 *          "accountRealname": "",
 *          "accountUserName": "",
 *          "chatroomAvatar": "",
 *          "chatroomId": "",
 *          "chatroomOwnerAvatar": "",
 *          "chatroomOwnerNickname": "",
 *          "conRemark": "",
 *          "createTime": "",
 *          "deleteTime": "",
 *          "groupId": 14,
 *          "hasMe": true,
 *          "id": 281,
 *          "isDeleted": false,
 *          "members": [                   // 群成员
 *                         {"avatar": "",
 *                         "nickname": "",
 *                         "wechatId": ""},....
 *                     ],
 *          "nickname": "",
 *          "pyInitial": "",
 *          "quanPin": "",
 *          "wechatAccountAlias": "",
 *          "wechatAccountAvatar": "",
 *          "wechatAccountId": 12,
 *          "wechatAccountNickname": "",
 *          "wechatAccountWechatId": ""
 *      }, ...
 * }
 *
 */