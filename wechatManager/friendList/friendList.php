<?php

/**
 * @api {get} /WechatGroup/list   分组列表
 * @apiName    wechatgroupList
 * @apiDescription 分组列表
 * @apiVersion 1.0.0
 * @apiGroup common
 *
 * @apiParam {Number}   groupType
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      {
 *          "id": 11,
 *          "tenantId": 3,
 *          "groupName": "xx",
 *          "groupOwnerType": 3
 *          "groupType": 1,
 *          "id": 13,
 *          "sortIndex": 1111,
 *          "tenantId": 3
 *      }
 * }
 *
 */

/**
 * @api {get} /FriendExtendField/listExtendFieldForManage   好友列表扩展字段
 * @apiName    listExtendFieldForManage
 * @apiDescription 好友列表扩展字段
 * @apiVersion 1.0.0
 * @apiGroup  friendList
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      {
 *          "createTime": "",
 *          "departmentIds": {},
 *          "fieldContent": "",
 *          "fieldName": "",    // 字段名称
 *          "fieldType": 4,
 *          "id": 2,
 *          "isPublic": true,
 *          "isValid": true,
 *          "placeHolder": "用户的生日",
 *          "sortIndex": 1111,
 *          "tenantId": 3
 *      }，...
 * }
 *
 */


/**
 * @api {post} /WechatFriend/friendlistCount 获取好友数量
 * @apiName    friendlistCount
 * @apiDescription 获取好友数量
 * @apiVersion 1.0.0
 * @apiGroup    friendList
 *
 * @apiParam {Number}     addFrom
 * @apiParam {Number}     allotAccountId
 * @apiParam {Json}       extendFields
 * @apiParam {Number}     gender
 * @apiParam {Number}     groupId
 * @apiParam {Number}     isDeleted
 * @apiParam {Number}     isPass
 * @apiParam {Number}     keyword
 * @apiParam {Number}     labels
 * @apiParam {Number}     pageIndex
 * @apiParam {Number}     pageSize
 * @apiParam {Number}     preFriendId
 * @apiParam {Number}     wechatAccountKeyword
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      111
 * }
 *
 */




/**
 * @api {get}  /Account/listNormalAccountsForSelect  列出正常状态的客服
 * @apiName     listNormalAccountsForSelect
 * @apiDescription  列出正常状态的客服
 * @apiVersion 1.0.0
 * @apiGroup    friendList
 *
 * @apiParam {Bool}   containAllotFriendCount
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      {
 *          "accountType": 11,
 *          "allotChatroomCount": 0,
 *          "allotFriendCount": 0,
 *          "avatar": "",
 *          "dailyAllotFriendCount": 0,
 *          "departmentId": 37,
 *          "id": 57,
 *          "nickname": null,
 *          "realname": "",
 *          "todayFriendFristAllotCount": 0,
 *          "userName": "xxx"
 *      },...
 * }
 *
 */


/**
 * @api {get} /WechatAccount/listWechatAccountLabels  列出标签
 * @apiName   listWechatAccountLabels
 * @apiDescription 列出标签
 * @apiVersion 1.0.0
 * @apiGroup common
 *
 * @apiParam {Number} companyId          公司id
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      "客户",
 *      "xx"
 * }
 *
 */



/**
 * @api {post}  /WechatFriend/friendlistData 好友列表
 * @apiName     friendlistData
 * @apiDescription   好友列表
 * @apiVersion 1.0.0
 * @apiGroup   friendList
 *
 * @apiParam {String}   addFrom
 * @apiParam {Number}   allotAccountId     // 分配客服id
 * @apiParam {Json}     extendFields       // 扩展字段
 * @apiParam {Number}   gender             // 性别
 * @apiParam {Number}   groupId
 * @apiParam {Number}   isDeleted
 * @apiParam {bool}     isPass
 * @apiParam {Number}   keyword
 * @apiParam {Array}    labels            // 标签
 * @apiParam {Number}   pageIndex
 * @apiParam {Number}   pageSize
 * @apiParam {Number}   preFriendId
 * @apiParam {Number}   wechatAccountKeyword
 * @apiParam {String}   from            // 申请时间
 * @apiParam {String}   to              // 入库时间
 * @apiParam {Array}   createTime
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      {
 *          "accountId": "",
 *          "accountNickname": null,
 *          "accountRealName": "",
 *          "accountUserName": "",
 *          "addFrom": 1000017,
 *          "additionalPicture": "",
 *          "alias": "",
 *          "avatar": "",
 *          "conRemark": "",
 *          "createTime": "",
 *          "deleteTime": "",
 *          "desc": "",
 *          "extendFields": "",
 *          "gender": "",
 *          "groupId": "",
 *          "id": "",
 *          "isDeleted": false,
 *          "isPassed": true,
 *          "labels": {},
 *          "nickname": "",
 *          "ownerAlias": "",
 *          "ownerAvatar": "",
 *          "ownerNickname": "",
 *          "ownerWeChatId": "",
 *          "passTime": "",
 *          "phone": "",
 *          "pyInitial": "QS",
 *          "quanPin": "",
 *          "region": "",            // 地区
 *          "signature": "",
 *          "thirdParty": "",
 *          "wechatAccountId": 9,
 *          "wechatId": ""
 *      },...
 * }
 *
 */

