<?php
/**
 * @api {GET} /Account/myTenantPageAccounts    账户管理
 * @apiName /Account/myTenantPageAccounts
 * @apiDescription  账户管理
 * @apiGroup accountManagement
 * @apiVersion 1.0.0
 *
 *@apiParam      {String}     keyword               // 搜索
 *@apiParam      {Number}     departmentId               // 部门id
 *@apiParam      {Number}     pageIndex               // 当前页
 *@apiParam      {Number}     pageSize               // 页数
 *
 *@apiSuccessExample [json-app]
 * {
 *
 *      {
 *          "accountType":"11"              //当前分组设备数量
 *          "alive":"false"
 *          "avatar":""
 *          "createTime":"2019-03-13T09:50:15.441643"           //分组
 *          "creator":"0"
 *          "creatorRealName":"李忠文"
 *          "creatorUserName":"lizhongwen"
 *          "departmentId":"37"
 *          "departmentName":"333"         //所在部门
 *          "hasXiakeAccount":"false"
 *          "id":"5"
 *          "memo":null
 *          "nickname":null
 *          "phone":"5"
 *          "privilegeIds":{
 *                           "1001"
 *                           "1003"
 *                           "10035"
 *                      }
 *          "realName":"姓名"        //姓名
 *          "status":"0"              //状态
 *          "tenantId":"5"
 *          "userName":"xxx"
 *
 *      }
 * }
 */