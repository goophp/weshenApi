<?php


/**
 * @api {get} /AuthorityLimitRelation/allAuthorityLimitRelation 权限风控列表
 * @apiName   AuthorityLimitRelationList
 * @apiDescription 权限风控列表
 * @apiVersion 1.0.0
 * @apiGroup AuthorityLimitRelation
 *
 * @apiParam {Number} companyId          公司id
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      {
 *          "authorityDevice": {1,2,3,4},
 *          "authorityDevices": [
 *                                  {
 *                                     "authorityLimit": 7,
 *                                      "createTime": "",
 *                                      "deviceId": 2,
 *                                      "hasAuth": false
 *                                      "id": 11,
 *                                      "tenantId": 3
 *
 *                                  }
 *                              ],
 *          "authorityLimit": 1,
 *          "count": 0,
 *          "forbiddenDevice": {},
 *          "name": ""               // 风控名称
 *
 *      },
 * }
 *
 */