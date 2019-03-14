<?php
/**
 * @api {POST} /DeviceGroup/new    新增设备分组
 * @apiName /DeviceGroup/new
 * @apiDescription  新增设备分组
 * @apiGroup deviceGroup
 * @apiVersion 1.0.0
 *
 *@apiParam      {String}     groupMemo               // 分组名称
 *@apiParam      {String}     groupName               // 分组备注
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