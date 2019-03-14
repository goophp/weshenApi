<?php
/**
 * @api {POST} /account/newAccount   新增账户
 * @apiName /account/newAccount
 * @apiDescription  新增账户
 * @apiGroup accountManagement
 * @apiVersion 1.0.0
 *
 *@apiParam      {Number}     departmentId
 *@apiParam      {array}     departmentIdArr                /
 *@apiParam      {sting}     nickname
 *@apiParam      {sting}     password
 *@apiParam      {sting}     realName   //用户备注
 *@apiParam      {sting}     userName
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