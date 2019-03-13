<?php

/**
 * @api {PUT} /SensitiveNotifySet/updateSensitiveNotifySet  编辑敏感通知
 * @apiName SensitiveNotifySet/updateSensitiveNotifySet
 * @apiDescription  编辑敏感通知
 * @apiGroup sensitiveNotice
 * @apiVersion 1.0.0
 *
 *
 * @apiParam   {String}  email                //  dsddss@163.com,dsfdsfa@163.com
 * @apiParam    {Number}  id                  // id
 * @apiParam   {String}    phone             // 手机号
 * @apiParam  {String}   sendEmail                 // true
 * @apiParam  {String}   sendPhoneMsg                 //  false
 *
 **
 *@apiSuccessExample [json-app]  操作成功
 * * HTTP/2.0 200 OK
 * {
 *      "code": 0，
 *      "msg": "",
 *      "data": [
 *      ]
 * }
 */