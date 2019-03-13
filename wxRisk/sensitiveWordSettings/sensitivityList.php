<?php

/**
 * @api {GET} /SensitiveWord/list 敏感词列表
 * @apiName SensitiveWord/list
 * @apiDescription  敏感词列表
 * @apiGroup sensitiveWord
 * @apiVersion 1.0.0
 *
 *  @apiParam  content    敏感词
 *
 *
 **
 *@apiSuccessExample [json-app]
 * {
 *
 *      {
 *          "id" : "20"                 //id
 *          "content" : "去你的"                 //敏感词
 *          "createrId" : "d"                 //创建id
 *          "createTime" : "2019-01-23T16:05:18.514874"                 //创建时间
 *          "createrRealName" : "xxxx"                 //创建者
 *          "createrUserName" : "xxxx"                 //创建者
 *          "deleteAccountId" : "0"
 *          "deleteRealName" : " "
 *          "deleteTime" : " 0001-01-01T00:00:00"
 *          "deleteUserName" : "  "
 *          "isBlock" : "true 1 = true = 阻止并预警  2 = false = 并预警"
 *          "isDeleted" : " flase"
 *          "tenantId" : " 3"
 *
 *      }
 * }
 */