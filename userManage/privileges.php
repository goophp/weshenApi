<?php
/**
 * @api {GET} /Privilege/privileges   部门权限
 * @apiName /Privilege/privileges
 * @apiDescription  部门权限
 * @apiGroup userManage
 * @apiVersion 1.0.0
 *
 *
 *@apiSuccessExample [json-app]
 * {
 *     {
 *       "createTime":"2018-11-06T19:38:42.395579"
 *       "id":"9000"
 *       "isPublic":"true"
 *       "name":"首页统计-总览"
 *       "privilegeCode":"HomeTotalStas"
 *       "privilegeDesc":"可以查看设备总览，红包，转账，转账金额，昨日新增好友情况"
 *       "privilegeGroup":"super,tenant, home"
 *       "privileges":"Home_Total_Stats"
 *       "sortIndex":"0"
 *     }
 * }
 */