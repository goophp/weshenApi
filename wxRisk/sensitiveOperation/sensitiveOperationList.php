<?php

/**
 * @api {GET} /SensitiveOperate/list 敏感操作列表
 * @apiName SensitiveOperate/list
 * @apiDescription  敏感操作列表
 * @apiGroup sensitiveOperation
 * @apiVersion 1.0.0
 *
 *  @apiParam {String}          isChatroom    // 群敏感信息 = true  好友敏感信息 = false
 *  @apiParam  {Number}         deviceOwnerId
 *  @apiParam  {String}         keyword [String]      // IMEI搜索词
 *  @apiParam  {String}         opType
 *  @apiParam  {Number}           status        //未处理=0    已处理=1
 *  @apiParam  {String}     isNormal [String]      //  正常=true    异常=false
 *  @apiParam  {Number}         departmentId
 *  @apiParam  {Number}             departmentId
 *  @apiParam  {Number}         deviceGroupId
 *  @apiParam  {Number}         wechatGroupId
 *  @apiParam  {String}         begin               //  2019-03-06 开始时间
 *  @apiParam  {String}         end                 //  2019-03-13 结束时间
 *  @apiParam  {Number}         pageIndex           //页数
 *  @apiParam  {Number}         pageSize            //页数
 *
 **
 *@apiSuccessExample [json-app]
 * {
 *
 *      {
 *          "accountId" : "20"                 //id
 *          "accountNickname" : "去你的"                 //敏感词
 *          "accountUserName" : "d"                 //创建id
 *          "alias" : "2019-01-23T16:05:18.514874"                 //
 *          "createrRealName" : "xxxx"                 //创建者
 *          "createrUserName" : "xxxx"                 //创建者
 *            "content":{
 *                          "content":"JSON"
 *                          "isChatroomMessage":"true"
 *                           "messageId"

 *                      }
 *          "createTime" : "2019-03-13T10:19:40.683444"           ///创建时间
 *          "dealAccountId" : " 0"
 *          "dealAccountNickname" : NULL
 *          "dealAccountRealName" : NULL
 *          "dealAccountUserName" : NULL
 *          "dealMemo" : NULL
 *          "dealTime" : "0001-01-01T00:00:00"
 *          "deviceMemo" : "客服办公手机"
 *          "deviceOwnerId" : "47"
 *          "deviceOwnerNickname" : NULL
 *          "deviceOwnerRealName" : "王慧"             //设备所属客服
 *          "deviceOwnerUserName" : "wanghui"           //设备所属客服
 *          "friendAlias" : NULL
 *          "friendMemo" : NULL
 *          "friendOrChatroomAvatar" : "http"   //群头像
 *          "friendOrChatroomNickname" : "寻车群🈲🈲🈲发资源"    //好友昵称、群昵称
 *          "friendWechatId" : NULL
 *          "id" : "29519"
 *          "imei" : "995e86dfbd380533a3a07e34c6371fba"          //设备
 *          "isChatroom" : "true"      // // 群敏感信息 = true  好友敏感信息 = false
 *          "isNormal" : "false"      //正常=true    异常=false
 *          "operateTime" : "1552443550000"   //操作时间
 *          "operateType" : "6"
 *          "responsibleAccountId" : "47"
 *          "rmbYuan" : "0"
 *          "status" : "0"
 *          "tenantId" : "3"
 *          "wechatAccountId" : "15"
 *          "wechatAvatar" : "https://iweishen.oss-cn-zhangjiakou.aliyuncs.com/avatar/F0AFF261E4AD4F3292428F6657223F91/8eadc774bef4a71c167f8e1924eab5c7.png"
 *          "wechatFriendOrChatroomId" : "71"
 *          "wechatId" : "wxid_4ymdjeskpsdo22"     // 微信信息
 *          "wechatNickname" : "忠文汽贸"          // 微信信息
 *
 *      }
 *
 * }
 */