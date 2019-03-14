<?php
/**
 * @api {get} /WechatAccount/fetchMoment  获取朋友圈任务id
 * @apiName sm.changeCompanyStatus
 * @apiDescription 获取朋友圈任务id
 * @apiVersion    1.0.0
 * @apiGroup      WechatAccount
 *
 * @apiParam {Number}  wechatAccountId     微信账号id
 * @apiParam {Number}  createTimeSec
 * @apiParam {Number}  count
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *     "fromadmin-c4aaac162b3d456db27ecb378de75588"
 * }
 *
 */


/**
 * @api {get}   /WechatAccount/rollGetTaskResult  获取朋友圈信息
 * @apiName     rollGetTaskResult
 * @apiDescription 获取朋友圈信息
 * @apiVersion    1.0.0
 * @apiGroup      WechatAccount
 *
 * @apiParam {String}   taskId     任务id
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *     {
 *         "commentList": {},
 *         "createTime": 111111,
 *         "likeList": [
 *                          {
 *                              "nickname": "",
 *                              "wechatId": "",
 *                          },...
 *                      ],
 *          "momentEntity": {
 *                             "blob": "",
 *                             "content": "",
 *                             "createTime": "",
 *                             "picSize": "",
 *                             "snsId": "",
 *                             "urls":  {""},
 *                          },
 *          "snsId": "",
 *          "type": 1
 *
 *     },...
 * }
 *
 */



/**
 * @api {post} /WechatAccount/downloadMomentImages  查看朋友圈图片
 * @apiName    downloadMomentImages
 * @apiDescription  查看朋友圈图片
 * @apiVersion      1.0.0
 * @apiGroup        WechatAccount
 *
 * @apiParam {String}  cmdType
 * @apiParam {String}   snsId
 * @apiParam {array}    urls              // 图片路径
 * @apiParam {Number}   wechatAccountId   // 微信账号id
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      "fromadmin-d44b86780d7f4abca38b9a654bb21b55"
 * }
 *
 */