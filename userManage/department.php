<?php
/**
 * @api {PUT} /Department/department   部门修改
 * @apiName /Department/department
 * @apiDescription  部门修改
 * @apiGroup userManage
 * @apiVersion 1.0.0
 *
 * *@apiParam {array} departmentIdArr            权限ids
 * *@apiParam {sting} id                         id
 * *@apiParam {sting} isTop
 * *@apiParam {sting} level                     级别
 * *@apiParam {sting} memo                   描述
 * *@apiParam {sting} name                   名称
 * *@apiParam {sting} parentId                权限id
 * *@apiParam {sting} privileges
 * *@apiParam {sting} tenantId               模板id
 *
 *@apiSuccessExample [json-app]  操作成功
 * * HTTP/2.0 200 OK
 * {
 *      "code": 0，
 *      "msg": "",
 *      "data": [
 *      ]
 * }
 */