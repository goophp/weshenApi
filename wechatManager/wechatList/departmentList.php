<?php

/**
 * @api {post}  /Department/fetchMyAndSubordinateDepartment   获取我及下属部门
 * @apiName     fetchMyAndSubordinateDepartment
 * @apiDescription 获取我及下属部门
 * @apiVersion 1.0.0
 * @apiGroup   common
 *
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      {
 *         "createTime": "",
 *          "id": "",
 *          "isTop": false,
 *          "level": 2,
 *          "memo": "",
 *          "name": "",
 *          "parentId": 25,
 *          "privileges": "1,2,3",
 *          "tenantId": 2,
 *          "children": [
 *                        "createTime": "",
 *                        "id": "",
 *                        "isTop": false,
 *                        "level": 2,
 *                        "memo": "",
 *                        "name": "",
 *                        "parentId": 25,
 *                        "privileges": "1,2,3",
 *                        "tenantId": 2,
 *                      ]
 *      },...
 * }
 *
 */




/**
 * @api {get}   /WechatGroup/list    微信分组
 * @apiName     wechatGroup
 * @apiDescription   微信分组
 * @apiVersion 1.0.0
 * @apiGroup common
 *
 * @apiParam {Number} groupType     分组类型
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *      {
 *          "createTime": "",
 *          "departmentId": "",
 *          "groupMemo": "",
 *          "groupName": "",
 *          "groupOwnerType": 1,
 *          "groupType": 0,
 *          "id": 3,
 *          "sortIndex": "",
 *          "tenantId": 3
 *      }
 * }
 *
 */

