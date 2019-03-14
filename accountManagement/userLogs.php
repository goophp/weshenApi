<?php
/**
 * @api {GET} /AccountLog/lastlog   用户登录日志
 * @apiName /AccountLog/lastlog
 * @apiDescription  用户登录日志
 * @apiGroup accountManagement
 * @apiVersion 1.0.0
 *
 *@apiParam      {Number}     accountId
 *@apiParam      {sting}     actionTypes                //登录,登出
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