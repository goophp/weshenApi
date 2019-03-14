<?php
/**
 * @api {put} /SensitiveNotifySet/updateSensitiveNotifySet 修改敏感通知
 * @apiName updateSensitiveNotifySet
 * @apiDescription 修改敏感通知
 * @apiVersion 1.0.0
 * @apiGroup SensitiveNotifySet
 *
 * @apiParam {String}  email        邮箱
 * @apiParam {Number}  id
 * @apiParam {Number}  phone        短信手机
 * @apiParam {bool}  sendEmail      发邮件
 * @apiParam {bool}  sendPhoneMsg   发短信
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      "code": 0,
 *      "msg": "",
 *      "data": [
 *      ]
 * }
 *
 */