<?php
/**
 * @api {post} /SensitiveOperate/prepareDownSensitiveOperateData 导出敏感短信
 * @apiName  DownSensitiveOperateData
 * @apiDescription 导出敏感短信
 * @apiVersion 1.0.0
 * @apiGroup SensitiveOperate
 *
 * @apiParam {String}  fileName   文件名
 * @apiParam {String}  begin       开始时间
 * @apiParam {String}  end         结束时间
 * @apiParam {Array}   date
 * @apiParam {String}  departmentId
 * @apiParam {Number}  deviceGroupId
 * @apiParam {Number}  deviceOwnerId
 * @apiParam {Number}  isNormal
 * @apiParam {Number}  keyword
 * @apiParam {Number}  opType
 * @apiParam {Number}  opTypes
 * @apiParam {Number}  status
 * @apiParam {Number}  wechatGroupId
 *
 *
 * @apiSuccessExample [json-app]  操作成功
 * HTTP/2.0 200 OK
 * {
 *
 * }
 *
 */