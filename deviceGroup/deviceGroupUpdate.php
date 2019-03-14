<?php
/**
 * @api {PUT} /DeviceGroup/update    修改设备分组
 * @apiName /DeviceGroup/update
 * @apiDescription  修改设备分组
 * @apiGroup deviceGroup
 * @apiVersion 1.0.0
 *
 *@apiParam      {String}     groupMemo               // 修改设备分组备注
 *@apiParam      {String}     groupName               // 修改设备分组名称
 *@apiParam      {Number}     id                      // id
 *@apiParam      {Number}     count               // 当前设备分组数量
 *@apiParam      {Number}     tenantId               // 模板id
 *@apiParam      {String}     createTime               // 创建时间
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