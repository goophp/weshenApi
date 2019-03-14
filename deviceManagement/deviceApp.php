<?php
/**
 * @api {GET} /AppDisplaySetting/allAppDisplaySettingByDevice    设备管理App
 * @apiName /AppDisplaySetting/allAppDisplaySettingByDevice
 * @apiDescription  设备管理App
 * @apiGroup deviceManagement
 * @apiVersion 1.0.0
 *
 *
 * @apiParam      {Number}     deviceId               // 设备id
 *
 *
 *@apiSuccessExample [json-app]
 * {
 *
 *      {
 *          "appName":"微信"
 *          "appPackage":"com.tencent.mm"
 *          "createTime":"2018-11-19T16:18:39.46684"
 *          "creatorId":"3"
 *          "hasSet":"true"
 *          "id":"1"
 *          "tenantId":"3"
 *
 *      }
 *
 * }
 */