<?php

/**
 * @api {get} /WechatFriend/oneWechatFriends 好友聊天列表
 * @apiName    oneWechatFriends
 * @apiDescription 好友聊天列表
 * @apiVersion 1.0.0
 * @apiGroup    WechatAccount
 *
 * @apiParam {String}  keyworld           // 好友名称关键词
 * @apiParam {Number}  pageIndex
 * @apiParam {Number}  pageSize
 * @apiParam {Number}  wechatAccountId   // 微信列表id
 * @apiParam {Number}  [ onlyFriendId = null ]  // 好友id
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      "results": [
 *          {
 *              accountId: 47
                addFrom: 1000030
                additionalPicture: ""
                alias: ""
                avatar: ""
                city: "朝阳"
                conRemark: "产品"
                country: "中国"
                createTime: "2019-01-30T16:07:58.855882"
                deleteTime: "2019-02-18T18:18:12.547727"
                desc: ""
                entryptUsername: ""
                extendFields: null
                gender: 2
                groupId: 0
                id: 19188
                isDeleted: false
                isPassed: true
                labels: {"大客户", "意向高"}
                lastUpdateTime: "2019-03-11T09:48:15.57299"
                nickname: "慧Whitney"
                passTime: "2019-01-30T16:08:12.216224"
                phone: ""
                privince: "北京"
                pyInitial: "HWHITNEY"
                quanPin: "huiWhitney"
                region: "北京朝阳"
                signature: ""
                sourceWechatId: ""
                tenantId: 3
                thirdParty: null
                todayMsgCount: 0
                wechatAccountId: 9
                wechatId: "wh136994997"
 *          },...
 *      ]
 * }
 *
 */




/**
 * @api {post} /FriendMessage/listFriendMessagesPageByPage  列出好友聊天记录
 * @apiName    listFriendMessagesPageByPage
 * @apiDescription  列出好友聊天记录
 * @apiVersion 1.0.0
 * @apiGroup WechatAccount
 *
 * @apiParam {String}  keyword        // 聊天内容
 * @apiParam {Number}  messageId
 * @apiParam {Number}  current             // 当前页数
 * @apiParam {Number}  pageSize            // 每页数量
 * @apiParam {Number}  wechatAccountId      // 微信账号id
 * @apiParam {Number}  wechatFriendId        // 微信好友id
 * @apiParam {bool}    older
 * @apiParam {Number}  fromWechatTime        // 开始时间
 * @apiParam {Number}  toWechatTime          // 结束时间
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      {
 *          "accountId":   47,
 *          "content":     "xx",     // 内容
 *          "createTime":  "",
 *          "deleteTime":  "",
 *          "id":          "",
 *          "isDeleted":   false,
 *          "isSend":      true,
 *          "msgId":       532,
 *          "msgSubType":  4,
 *          "msgSvrId":   "",
 *          "msgType":    1,
 *          "origin":     1,
 *          "recalled":   false,
 *          "sendStatus":  0,
 *          "synergyAccountId": 0,
 *          "tenantId":    3,
 *          "wechatAccountId":  9,
 *          "wechatFriendId":  11,
 *          "wechatTime":     1111111
 *      },
 *       .....
 * }
 *
 */
