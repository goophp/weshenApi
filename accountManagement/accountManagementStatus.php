<?php
/**
 * @api {PUT} /account/accountStatus    账户管理状态
 * @apiName /account/accountStatus
 * @apiDescription  账户管理状态
 * @apiGroup accountManagement
 * @apiVersion 1.0.0
 *
 *@apiParam      {Number}     accountStatus               // 正常 = 0.停用=1
 *@apiParam      {Number}     id                         // 部门id
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