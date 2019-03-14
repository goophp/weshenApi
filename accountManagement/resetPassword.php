<?php
/**
 * @api {PUT} /account/modifypw    重置密码
 * @apiName /account/modifypw
 * @apiDescription  重置密码
 * @apiGroup accountManagement
 * @apiVersion 1.0.0
 *
 *@apiParam      {Number}     id
 *@apiParam      {sting}     newPw                //重置密码
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