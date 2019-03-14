<?php
/**
 * @api {PUT} /account/accountStatus    编辑账户
 * @apiName /account/accountStatus
 * @apiDescription  编辑账户
 * @apiGroup accountManagement
 * @apiVersion 1.0.0
 *
 *@apiParam      {Number}     accountType
 *@apiParam      {sting}     alive                //在线
 *@apiParam      {sting}     avatar
 *@apiParam      {sting}     createTime
 *@apiParam      {sting}     creator
 *@apiParam      {sting}     creatorRealName
 *@apiParam      {sting}     creatorUserName       //创建者
 *@apiParam      {Number}     departmentId          //部门id
 *@apiParam      {array}     departmentIdArr         //部门ids
 *@apiParam      {sting}     departmentName
 *@apiParam      {sting}     hasXiakeAccount
 *@apiParam      {Number}     id
 *@apiParam      {sting}     memo
 *@apiParam      {sting}     nickname
 *@apiParam      {sting}     phone
 *@apiParam      {array}     privilegeIds      //权限ids
 *@apiParam      {sting}     realName          //姓名
 *@apiParam      {Number}     status
 *@apiParam      {Number}     tenantId
 *@apiParam      {sting}     userName         //登录账户
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