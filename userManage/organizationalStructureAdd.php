<?php
/**
 * @api {GET} /Department    t添加部门
 * @apiName /Department
 * @apiDescription  t添加部门
 * @apiGroup userManage
 * @apiVersion 1.0.0
 *
 *
 *@apiParam {array} departmentIdArr             上级Id
 *@apiParam {String} memo              部门描述
 *@apiParam {String} name              部门名称
 *@apiParam {String} parentId              父Id
 *
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