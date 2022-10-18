<?php

namespace MyPlugin\Docs\Api;
/**
 * @OA\Get(
 *     path="/my-plugin/v1/health-check",
 *     operationId="health check",
 *     tags={"health check"},
 *     summary="health check",
 *     description="health check",
 *     @OA\Response(
 *         response=200,
 *         description="plugin health check",
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="伺服器錯誤，請聯絡工程師",
 *     ),
 * )
 */
class HealthCheckRoute
{
}
