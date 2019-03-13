<?php
/**
 * @api {post} /SensitiveWord/createSensitiveWord 新增短信敏感词
 * @apiName  createSensitiveWord
 * @apiDescription 新增短信敏感词
 * @apiVersion 1.0.0
 * @apiGroup sensitiveWord
 *
 * @apiParam {String} content        内容
 * @apiParam {bool}   isBlock
 * @apiParam {Number} useType
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
