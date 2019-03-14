<?php
/**
 * @api {GET} /WechatAccount/list    微信好友导出
 * @apiName /WechatAccount/list
 * @apiDescription  微信好友导出
 * @apiGroup wechatFriendsExport
 * @apiVersion 1.0.0
 *
 *
 * @apiParam     {String}    wechatAlive               //  dsddss@163.com,dsfdsfa@163.com
 * @apiParam      {String}     keyword               //  0  当前页
 * @apiParam      {Number}     departmentId                 // 部门id
 * @apiParam      {Number}     pageIndex                 //    当前页
 * @apiParam      {Number}     pageSize                 //   条数
 * @apiParam      {Number}     groupId                 //  部门id
 *
 *
 *@apiSuccessExample [json-app]
 * {
 *
 *      {
 *          "accountNickname":"xxx"
 *          "accountRealName":"xxx"
 *          "accountUserName":"xxx"
 *          "alias":"iweishen001"
 *          "avatar":"http"
 *          "bindEmail":""    //绑定邮箱
 *          "bindMobile":"18515230047"   .//绑定手机号
 *          "bindQQ":"18515230047"       //绑定QQ
 *          "createTime":"2018-11-19T15:37:52.90128"     //创建时间
 *          "currentDeviceId":"2"
 *          "deleteTime":"0001-01-01T00:00:00"
 *          "deviceAccountId":"4"
 *          "deviceAlive":"false"
 *          "deviceMemo":"李忠文办公手机"
 *          "femaleFriend":"0"
 *          "gender":"0"
 *          "groupId":"3"
 *          "id":"9"
 *          "imei":"874476f15a6d2671ad6befc123b24786"
 *          "isDeleted":"false"
 *          "keFuAlive":"false"
 *            "labels":[
 *                          {"0":"大客户"}
 *                          {"1":"大老板"}
 *                         ]
 *              "maleFriend":0
 *              "memo": "客服1组成员"
 *              "nickname": "李忠文&微神企业手机"
 *              "region": ""
 *              "sevenDayMsgCount": 0
 *              "signature": ""
 *              "tenantId": 3
 *              "thirtyDayMsgCount": 0
 *              "totalFriend": 0
 *              "wechatAlive": false
 *              "wechatGroupName": "公共存放"
 *              "wechatId": "wxid_e5gvt7bee0hf22"
 *              "wechatVersion": "6.7.3"
 *              "yesterdayMsgCount": 0
 *
 *      }
 * }
 */