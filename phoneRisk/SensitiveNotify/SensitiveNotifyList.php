<?php

/**
 * @api {get}  /SensitiveNotifySet/listSensitiveNotifySet 敏感通知列表
 * @apiName    listSensitiveNotifySet
 * @apiDescription  敏感通知列表
 * @apiVersion 1.0.0
 * @apiGroup   SensitiveNotifySet
 *
 * @apiParam {Number} useType
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      {
 *          "createTime": "",
 *          "email": "",
 *          "id": 11,
 *          "lastUpdateTime": "",
 *          "operateType": "",
 *          "phone": "",     // 接受通知手机号
 *          "sendEmail": "",
 *          "sendPhoneMsg": "",  //
 *          "tenantId": 2
 *      },
 * }
 *
 */