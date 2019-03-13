<?php

/**
 * @api {POST} /CommonSetting        敏感通知保存
 * @apiName CommonSetting
 * @apiDescription     敏感通知保存
 * @apiGroup sensitiveNotice
 * @apiVersion 1.0.0
 *
 *  @apiParam  setting    保存内容   // {userName: "dd", password: "ddd", displayName: "dddd"}
 *  @apiParam  settingType           //5
 *
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