<?php

/**
 * @api {OPTIONS} /SensitiveOperate/multiDeal    敏感操作批处理
 * @apiName /SensitiveOperate/multiDeal
 * @apiDescription  敏感操作批处理
 * @apiGroup sensitiveOperation
 * @apiVersion 1.0.0
 *
 * *  @apiParam {String} dealMemo   // 处理备注
 * *  @apiParam  {array} ids [array]   // 处理的ids
 **
 *@apiSuccessExample [json-app]
 * {
 *
 *      {
 *          "dealMemo" : "sdsd"  //处理备注
 *          "ids" : "2018-11-19T17:27:35.514963"
 *          "defaultNormal" : "false"
 *          "id" : "28"
 *          "operateType" : "1"
 *          "tenantId" : ".3""
 *
 *
 *      }
 *
 * }
 */