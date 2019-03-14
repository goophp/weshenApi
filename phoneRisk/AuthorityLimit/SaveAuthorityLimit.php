<?php

/**
 * @api {post} /AuthorityLimitRelation/saveAuthorityLimitDevices 保存权限风控
 * @apiName    saveAuthorityLimitDevices
 * @apiDescription 保存权限风控
 * @apiVersion 1.0.0
 * @apiGroup       AuthorityLimitRelation
 *
 * @apiParam {Number}   authorityLimit       分控id
 * @apiParam {Array}    authDeviceIds        设备id [1,3,4]
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