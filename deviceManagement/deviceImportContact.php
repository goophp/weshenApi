<?php
/**
 * @api {POST} /device/importContact    联系人导入
 * @apiName /device/importContact
 * @apiDescription  联系人导入
 * @apiGroup deviceManagement
 * @apiVersion 1.0.0
 *
 *
 * @apiParam      {String}     clearContact               //
 * @apiParam      {String}     contactJson               // json
 * @apiParam      {Number}     deviceId               // 设备id
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