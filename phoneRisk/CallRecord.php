<?php
/**
 * @api {get} /CallRecording/list 通话录音列表
 * @apiName callrecording.list
 * @apiDescription 通话录音列表
 * @apiVersion 1.0.0
 * @apiGroup callRecording
 *
 * @apiParam {String} [ keyword = null ]       IMEI，员工信息关键词
 * @apiParam {Number} [ isCallOut = null ]     true 呼出 false 呼入
 * @apiParam {Number} secondMin                秒（开始）
 * @apiParam {Number} secondMax                秒 (结束)
 * @apiParam {Number} pageIndex                当前页
 * @apiParam {Number} pageSize                 页数
 * @apiParam {String} from                     开始时间
 * @apiParam {String} to                       结束时间
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *     "results" : [
 *          {
 *              "userName": "xxx",
 *              "tenantId": 3,
 *              "realName": "",
 *              "phone": "xxx",    // 被叫号码
 *              "nickName": "",
 *              "isDeleted": false,
 *              "isCallOut": true,   // 呼叫类型
 *              "imei": "xxxxxx"     // IMEI
 *              "id": 1,
 *              "endTime": 1111111,  // 结束时间
 *              "createTime": "2019-xx",
 *              "beginTime": 111111
 *              "deviceOwnerId": 4,  //
 *              "audioUrl": "https://xxx"  // 录音文件
 *
 *          }
 * ]
 *
 *
 * }
 */