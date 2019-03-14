<?php
/**
 * @api {GET} /device/pageResult    设备管理列表
 * @apiName /device/pageResult
 * @apiDescription  设备管理列表
 * @apiGroup deviceManagement
 * @apiVersion 1.0.0
 *
 *
 * @apiParam      {String}     keyword               // 搜索信息
 * @apiParam      {String}     groupId               // 分组Id
 * @apiParam      {String}     brand               // 手机品牌
 * @apiParam      {String}     model               // 手机型号
 * @apiParam      {String}     isDeleted               // false
 * @apiParam      {String}     operatingSystem               // 手机系统
 * @apiParam      {String}     softwareVersion               // 软件版本
 * @apiParam      {String}     rooted               // root = true
 * @apiParam      {String}     xPosed               // 未激活=false ,激活=true
 * @apiParam      {String}     alive               // 离线=false ,在线=true
 * @apiParam      {String}     hasWechat               // 无微信=false ,有微信=true
 * @apiParam      {String}     pageIndex               //当前页
 * @apiParam      {String}     pageSize               // 条数

 *
 *
 *@apiSuccessExample [json-app]
 * {
 *
 *      {
 *          "alias":"wuyanfei12138"              //设备管理者
 *          "alive":"true"
 *          "brand":"xiaomi"           //接受红包次数
 *          "createTime":"2019-02-18T20:44:55.804592"           //收转账金额
 *          "currentAccountId":"49"
 *          "deleteTime":"0001-01-01T00:00:00"             //收转账(次数)
 *          "acceptTransferCountConfirm":"0"
 *            "extra":{                                     //坐标
 *                  "battery":"62"
 *                  "ip":""
 *                  "location":"40.024863,116.474573"
 *                  "moduleVersion":"1452-common"

 *              }
 *          "groupId":"5"
 *          "groupName":"设备分组2"   .                           //分组
 *          "id":"77"                                               //id
 *          "imei":"1976b34fdfc8cc24e157dde1b58027a5"                 //设备号
 *          "isDeleted":"false"
 *          "lastAliveTime":"0001-01-01T00:00:00"
 *          "memo":"吴艳飞"                                                 //备注
 *          "model":"Redmi 5 Plus"                                          //型号
 *          "nickname":"Figo"
 *          "operatingSystem":"7.1.2"                                       //系统OS
 *          "realName":"wuyanfei"
 *          "rooted":"true"                                                  //root
 *          "softwareVersion":"1452-common"                                 //模板版本号
 *          "tenantId":"3"                                                   //微信信息
 *          "userName":"wuyanfei"                                              //设备保管者
 *          "wechatAvatar":"http"                                            //微信头像
 *          "wechatId":"wxid_8zel8oi3hxlm22"                                 //当前登录微信
 *          "wechatNickname":"無非"                                           //当前登录微信
 *          "wechatVersion":"7.0.3"                                          //微信版本
 *          "xPosed":"true"                                                      //CPosed
 *
 *      }
 * }
 */