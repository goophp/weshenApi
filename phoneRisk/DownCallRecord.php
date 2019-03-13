<?php
/**
 * @api {post} /CallRecording/prepareDownCallRecordingData 导出录音文件
 * @apiName  DownCallRecordingData
 * @apiDescription 导出录音文件
 * @apiVersion 1.0.0
 * @apiGroup callRecording
 *
 * @apiParam {String}  fileName   文件名
 * @apiParam {String}  from       开始时间
 * @apiParam {String}  to         结束时间
 * @apiParam {bool}    isCallOut  true 呼出 false 呼入
 * @apiParam {String}  keyword    关键词
 * @apiParam {Number}  secondMax  秒(结束)
 * @apiParam {Number}  secondMin  秒(开始)
 *
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *
 * }
 *
 */

