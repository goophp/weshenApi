<?php
/**
 * @api {post} /PhoneMsg/prepareDownPhoneMsg 导出手机短信
 * @apiName  DownPhoneMessage
 * @apiDescription 导出手机短信
 * @apiVersion 1.0.0
 * @apiGroup phoneMsg
 *
 * @apiParam {String}  fileName   文件名
 * @apiParam {String}  from       开始时间
 * @apiParam {String}  to         结束时间
 * @apiParam {String}  keyword    关键词
 *
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *
 * }
 *
 */



/**
 * @api {delete} /PhoneMsg/del/{id} 删除手机短信
 * @apiName  delphoneMessage
 * @apiDescription 删除手机短信
 * @apiVersion 1.0.0
 * @apiGroup phoneMsg
 *
 * @apiParam {Number}  id
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 * }
 *
 */