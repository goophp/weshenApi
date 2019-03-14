<?php

/**
 * @api {get}   /CommonSetting  邮箱，授权码,发件人获取
 * @apiName   commonSettingList
 * @apiDescription  邮箱，授权码,发件人设置获取
 * @apiVersion 1.0.0
 * @apiGroup    SensitiveNotifySet
 *
 * @apiParam {Number} settingType
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      "accountId": 0,
 *      "createTime": "",
 *      "id": "",
 *      "lastUpdateTime": "",
 *      "setting": {
 *              "userName": "",
 *              "password": "",
 *              "displayName": ""
 *          },
 *      "settingType": 5,
 *      "tenantId": 3
 * }
 *
 */


/**
 * @api {post}   /CommonSetting  邮箱，授权码,发件人设置
 * @apiName     CommonSettingCreate
 * @apiDescription  邮箱，授权码,发件人设置
 * @apiVersion 1.0.0
 * @apiGroup     SensitiveNotifySet
 *
 * @apiParam {Json}    setting
 * @apiParam {Number}  settingType
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