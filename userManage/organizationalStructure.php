<?php
/**
 * @api {GET} /Department/fetchMyAndSubordinateDepartment    组织架构
 * @apiName /Department/fetchMyAndSubordinateDepartment
 * @apiDescription  组织架构
 * @apiGroup userManage
 * @apiVersion 1.0.0
 *
 *
 *
 *@apiSuccessExample [json-app]
 * {
 *
 *      {
 *         "tenantId":"3"
 *         "privileges":""
 *         "parentId":""
 *         "name":"公司"
 *         "memo":"每个租户的顶级部门, 每个租户只有一个顶级部门, 不能删除该部门"
 *         "level":"0"
 *         "isTop":"true"
 *         "id":"3"
 *          "createTime":"2018-11-07T17:51:55.517002"
 *          "children":{
 *                  "tenantId":"3"
 *                  "privileges":"9000,9001,9002,9003,9004,9005,9006,9007,9008,9009,9010,9011,9012,9013,9014"
 *                  "parentId":"3"
 *                  "name":"微神星球"
 *                  "memo":"微神总部"
 *                  "level":"1"
 *                  "isTop":"false"
 *                  "id":"25"
 *                   "createTime":"2018-11-07T17:51:55.517002"
 *                     "children":{
 *                              "tenantId":"3"
 *                               "privileges":"9000,9001,9002,9003,9005"
 *                               "parentId":"25"
 *                               "name":"冠军队"
 *                               "memo":"第一小组"
 *                               "level":"2"
 *                               "isTop":"false"
 *                               "id":"26"
 *                                "createTime":"2018-12-28T14:30:37.136406"
 *                              }
 *              }
 *
 *      }
 * }
 */