<?php
/**
 * @api {GET} /WechatFinance/list    微信财务统计
 * @apiName /WechatFinance/list
 * @apiDescription  微信财务统计
 * @apiGroup wechatFinancialStatistics
 * @apiVersion 1.0.0
 *
 *
 * @apiParam      {String}     keyword               // 搜索信息
 * @apiParam      {String}     begin               // 开始时间
 * @apiParam      {String}     end               // 结束时间

 *
 *
 *@apiSuccessExample [json-app]
 * {
 *
 *      {
 *          "acceptRedPacketConfirm":"0"
 *          "acceptRedPacketConfirmAmount":"0"
 *          "acceptRedPacketCount":"149"           //接受红包次数
 *          "acceptTransferAmount":"0.1"           //收转账金额
 *          "acceptTransferAmountConfirm":"0"
 *          "acceptTransferCount":"1"             //收转账(次数)
 *          "acceptTransferCountConfirm":"0"
 *          "alias":""
 *          "avatar":""   .//绑定手机号
 *          "giveRedPacketConfirm":"0"
 *          "giveRedPacketCount":"0"
 *          "giveTransferAmount":"0"
 *          "giveTransferAmountConfirm":"0"
 *          "giveTransferCount":"0"
 *          "giveTransferCountConfirm":"0"
 *          "wechatAccountId":"0"
 *          "wechatId":"wxid_4ymdjeskpsdo22"  //微信信息
 *          "wechatNickname":"忠文汽贸"       //微信信息
 *
 *      }
 *      {

 *      }
 * }
 */