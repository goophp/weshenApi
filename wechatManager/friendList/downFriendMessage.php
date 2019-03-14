<?php


/**
 * @api {post} /FriendMessage/prepareDownFriendMessage 导出微信好友聊天记录
 * @apiName    DownFriendMessage
 * @apiDescription  导出微信好友聊天记录
 * @apiVersion 1.0.0
 * @apiGroup   friendList
 *
 * @apiParam {String}  dateBegin        // 开始时间
 * @apiParam {String}  dateEnd          // 结束时间
 * @apiParam {String}  fileName         // 文件名称
 * @apiParam {Number}  wechatFriendId   // 微信好友id
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 * }
 *
 */




/**
 * @api {post} /WechatFriend/prepareDownFriendlistData 导出好友列表
 * @apiName    DownFriendMessage
 * @apiDescription  导出微信好友聊天记录
 * @apiVersion 1.0.0
 * @apiGroup   friendList
 *
 * @apiParam {String}  addFrom                 // 开始时间
 * @apiParam {String}  allotAccountId          // 结束时间
 * @apiParam {Json}    extendFields            // 扩展字段
 * @apiParam {Number}  fileName                // 文件名
 * @apiParam {Number}  gender                  // 性别
 * @apiParam {Number}  groupId                 // 分组id
 * @apiParam {Bool}    isDeleted
 * @apiParam {Bool}    isPass
 * @apiParam {String}  keyword
 * @apiParam {Array}   labels                  // 标签
 * @apiParam {Number}  pageIndex
 * @apiParam {Number}  pageSize
 * @apiParam {Number}  preFriendId
 * @apiParam {String}  wechatAccountKeyword    //
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 * }
 *
 */