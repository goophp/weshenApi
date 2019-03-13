<?php

/**
 * @api {GET} /SensitiveWord/createSensitiveWord 敏感词新增
 * @apiName createSensitiveWord
 * @apiDescription  敏感词新增
 * @apiGroup sensitiveWord
 * @apiVersion 1.0.0
 *
 *  @apiParam  content  [String]   敏感词
 *  @apiParam  isBlock  [String]   1 = true = 阻止并预警  2 = false = 并预警
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