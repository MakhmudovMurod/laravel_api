<?php

namespace App\Helpers;

use Illuminate\Http\JsonResponse;

use Illuminate\Support\Facades\Response;

final class Json
{
    /**
     * OK
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith200(array $data = []): JsonResponse
    {
        return self::sendJson($data, 200, true);
    }

    /**
     * Created
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith201(array $data = []): JsonResponse
    {
        return self::sendJson($data, 201, true);
    }

    /**
     * Accepted
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith202(array $data = []): JsonResponse
    {
        return self::sendJson($data, 202, true);
    }

    /**
     * Non-Authoritative Information
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith203(array $data = []): JsonResponse
    {
        return self::sendJson($data, 203, true);
    }

    /**
     * No Content
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith204(array $data = []): JsonResponse
    {
        return self::sendJson($data, 204, true);
    }

    /**
     * Reset Content
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith205(array $data = []): JsonResponse
    {
        return self::sendJson($data, 205, true);
    }

    /**
     * Partial Content
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith206(array $data = []): JsonResponse
    {
        return self::sendJson($data, 206, true);
    }

    /**
     * Multi-Status
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith207(array $data = []): JsonResponse
    {
        return self::sendJson($data, 207, true);
    }

    /**
     * Already Reported
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith208(array $data = []): JsonResponse
    {
        return self::sendJson($data, 208, true);
    }

    /**
     * IM Used
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith226(array $data = []): JsonResponse
    {
        return self::sendJson($data, 226, true);
    }

    /**
     * Bad request
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith400(array $data = []): JsonResponse
    {
        return self::sendJson($data, 400, false);
    }

    /**
     * Unauthorized
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith401(array $data = []): JsonResponse
    {
        return self::sendJson($data, 401, false);
    }

    /**
     * Payment Required
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith402(array $data = []): JsonResponse
    {
        return self::sendJson($data, 402, false);
    }

    /**
     * Forbidden
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith403(array $data = []): JsonResponse
    {
        return self::sendJson($data, 403, false);
    }

    /**
     * Not Found
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith404(array $data = []): JsonResponse
    {
        return self::sendJson($data, 404, false);
    }

    /**
     * Method Not Allowed
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith405(array $data = []): JsonResponse
    {
        return self::sendJson($data, 405, false);
    }

    /**
     * Not Acceptable
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith406(array $data = []): JsonResponse
    {
        return self::sendJson($data, 406, false);
    }

    /**
     * Proxy Authentication Required
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith407(array $data = []): JsonResponse
    {
        return self::sendJson($data, 407, false);
    }

    /**
     * Request Timeout
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith408(array $data = []): JsonResponse
    {
        return self::sendJson($data, 408, false);
    }

    /**
     * Conflict
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith409(array $data = []): JsonResponse
    {
        return self::sendJson($data, 409, false);
    }

    /**
     * Gone
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith410(array $data = []): JsonResponse
    {
        return self::sendJson($data, 410, false);
    }

    /**
     * Length Required
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith411(array $data = []): JsonResponse
    {
        return self::sendJson($data, 411, false);
    }

    /**
     * Precondition Failed
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith412(array $data = []): JsonResponse
    {
        return self::sendJson($data, 412, false);
    }

    /**
     * Payload Too Large
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith413(array $data = []): JsonResponse
    {
        return self::sendJson($data, 413, false);
    }

    /**
     * URI Too Long
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith414(array $data = []): JsonResponse
    {
        return self::sendJson($data, 414, false);
    }

    /**
     * Unsupported Media Type
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith415(array $data = []): JsonResponse
    {
        return self::sendJson($data, 415, false);
    }

    /**
     * Range Not Satisfiable
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith416(array $data = []): JsonResponse
    {
        return self::sendJson($data, 416, false);
    }

    /**
     * Expectation Failed
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith417(array $data = []): JsonResponse
    {
        return self::sendJson($data, 417, false);
    }

    /**
     * I’m a teapot
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith418(array $data = []): JsonResponse
    {
        return self::sendJson($data, 418, false);
    }

    /**
     * Authentication Timeout
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith419(array $data = []): JsonResponse
    {
        return self::sendJson($data, 419, false);
    }

    /**
     * Misdirected Request
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith421(array $data = []): JsonResponse
    {
        return self::sendJson($data, 421, false);
    }

    /**
     * Unprocessable Entity
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith422(array $data = []): JsonResponse
    {
        return self::sendJson($data, 422, false);
    }

    /**
     * Locked
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith423(array $data = []): JsonResponse
    {
        return self::sendJson($data, 423, false);
    }

    /**
     * Failed Dependency
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith424(array $data = []): JsonResponse
    {
        return self::sendJson($data, 424, false);
    }

    /**
     * Too Early
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith425(array $data = []): JsonResponse
    {
        return self::sendJson($data, 425, false);
    }

    /**
     * Upgrade Required
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith426(array $data = []): JsonResponse
    {
        return self::sendJson($data, 426, false);
    }

    /**
     * Precondition Required
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith428(array $data = []): JsonResponse
    {
        return self::sendJson($data, 428, false);
    }

    /**
     * Too Many Requests
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith429(array $data = []): JsonResponse
    {
        return self::sendJson($data, 429, false);
    }

    /**
     * Request Header Fields Too Large
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith431(array $data = []): JsonResponse
    {
        return self::sendJson($data, 431, false);
    }

    /**
     * Retry With
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith449(array $data = []): JsonResponse
    {
        return self::sendJson($data, 449, false);
    }

    /**
     * Unavailable For Legal Reasons
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith451(array $data = []): JsonResponse
    {
        return self::sendJson($data, 451, false);
    }

    /**
     * Client Closed Request
     *
     * @param array $data
     *
     * @return JsonResponse
     */
    public static function sendJsonWith499(array $data = []): JsonResponse
    {
        return self::sendJson($data, 499, false);
    }

    /**
     * @param array $data
     *
     * @param int $status
     *
     * @param bool $success
     *
     * @return JsonResponse
     */
    protected static function sendJson(array $data = [], int $status = 200, bool $success = true): JsonResponse
    {
        $response = [
            'success' => $success,

            'data' => $data,
        ];

        return Response::json($response, $status);
    }
}