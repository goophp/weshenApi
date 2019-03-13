<?php
/**
 * @api {get} /SensitiveWord/list  短信敏感词列表
 * @apiName   sensitivewordlist
 * @apiDescription 短信敏感词列表
 * @apiVersion 1.0.0
 * @apiGroup sensitiveWord
 *
 * @apiParam {Number} useType
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      {
 *         "content": "",     // 敏感词
 *         "createTime": "",  // 创建时间
 *         "createrId": 1,
 *         "createrRealName": "",
 *         "createrUserName": "",
 *         "deleteAccountId": 1,
 *         "deleteRealName":  "",
 *         "deleteTime": "",
 *         "deleteUserName": "",
 *         "id": 25,
 *         "isBlock": false,
 *         "isDeleted": false,
 *         "tenantId": ""
 *      }
 * }
 *
 */

