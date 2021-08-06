<?php


namespace App\Traits;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Arr;

trait HasResponse
{
    /**
     * Set failed response
     *
     * @param $message
     * @param array $data
     * @return JsonResponse
     */
    public function failedResponse($message, array $data = []): JsonResponse
    {
        $response = [
            'status' => config('eden.status.failed'),
            'statuscode' => config('eden.code.failed'),
            'message' => $message
        ];

        if (! empty($data)) {
            $response['data'] = $data;
        }

        return Response::json($response, 424);
    }

    /**
     * Set success response
     *
     * @param $message
     * @param array $data
     * @return JsonResponse
     */
    public function successResponse($message, array $data = []): JsonResponse
    {
        $response = [
            'status' => config('eden.status.success'),
            'statuscode' => config('eden.code.success'),
            'message' => $message
        ];

        if (! empty($data)) {
            $response['data'] = $data;
        }

        return Response::json($response);
    }

    /**
     * Set success response
     *
     * @param $message
     * @param mixed $data
     *
     * @return JsonResponse
     */
    public function successResponseWithResource($message, $data): JsonResponse
    {
        $response = [
            'status' => config('eden.status.success'),
            'statuscode' => config('eden.code.success'),
            'message' => $message
        ];

        if (! empty($data)) {
            $response['data'] = $data;
        }

        return Response::json($response);
    }

    /**
     * Set success response
     *
     * @param $message
     * @param $collection
     *
     * @return JsonResponse
     */
    public function successResponseWithCollection($message, $collection): JsonResponse
    {
        return Response::json(array_merge([
            'status' => config('eden.status.success'),
            'statuscode' => config('eden.code.success'),
            'message' => $message,
        ], (array)$collection));
    }


    /**
     * Set server error response
     *
     * @param $message
     * @param Exception|null $exception
     * @return JsonResponse
     */
    public function serverErrorResponse($message, Exception $exception = null): JsonResponse
    {
        if ($exception !== null) {
            Log::error(
                "{$exception->getMessage()} on line {$exception->getLine()} in {$exception->getFile()}"
            );
        }

        $response = [
            'status' => config('eden.status.failed'),
            'statuscode' => config('eden.code.server_error'),
            'message' => $message,
        ];

        if(config('app.debug')){
            $response['debug'] = $this->appendDebugData($exception);
        }

        return Response::json($response, 500);
    }

    /**
     * Append debug data to the response data returned.
     */
    protected function appendDebugData($exception): array
    {
        return [
            'message' => $exception->getMessage(),
            'exception' => get_class($exception),
            'file' => $exception->getFile(),
            'line' => $exception->getLine(),
            'trace' => collect($exception->getTrace())->map(function ($trace) {
                return Arr::except($trace, ['args']);
            })->all(),
        ];
    }

    /**
     * Set not found response
     *
     * @param $message
     * @param array $data
     * @return JsonResponse
     */
    public function notFoundResponse($message, array $data = []): JsonResponse
    {
        $response = [
            'status' => config('eden.status.failed'),
            'statuscode' => config('eden.code.not_found'),
            'message' => $message
        ];

        if (! empty($data)) {
            $response['data'] = $data;
        }

        return Response::json($response, 404);
    }

    /**
     * Set not allowed response
     *
     * @param $message
     * @param array $data
     * @return JsonResponse
     */
    public function notAllowedResponse($message, array $data = []): JsonResponse
    {
        $response = [
            'status' =>config('eden.status.failed'),
            'statuscode' => config('eden.code.not_allowed'),
            'message' => $message
        ];

        if (! empty($data)) {
            $response['data'] = $data;
        }

        return Response::json($response, 403);
    }

    /**
     * Set form validation errors
     *
     * @param $errors
     * @param array $data
     * @return JsonResponse
     */
    public function formValidationResponse($errors, array $data = []): JsonResponse
    {
        $response = [
            'status' => config('eden.status.failed'),
            'statuscode' => config('eden.code.failed'),
            'message' => 'Whoops. Validation failed',
            'validationErrors' => $errors,
        ];

        if (! empty($data)) {
            $response['data'] = $data;
        }

        return Response::json($response, 406);
    }

    /**
     * Set not exist response
     *
     * @param $message
     * @param array $data
     * @return JsonResponse
     */
    public function notExistResponse($message, array $data = []): JsonResponse
    {
        $response = [
            'status' => config('eden.status.failed'),
            'statuscode' => config('eden.code.notexist'),
            'message' => $message
        ];

        if (! empty($data)) {
            $response['data'] = $data;
        }

        return Response::json($response, 406);
    }

    /**
     * Set exist response
     *
     * @param $message
     * @param array $data
     * @return JsonResponse
     */
    public function existsResponse($message, array $data = []): JsonResponse
    {
        $response = [
            'status' => config('eden.status.failed'),
            'statuscode' => config('eden.code.exists'),
            'message' => $message
        ];

        if (! empty($data)) {
            $response['data'] = $data;
        }

        return Response::json($response, 409);
    }

    /**
     * Set network error response
     *
     * @param $message
     * @param array $data
     * @return JsonResponse
     */
    public function networkErrorResponse($message, array $data = []): JsonResponse
    {
        $response = [
            'status' => config('eden.status.failed'),
            'statuscode' => config('eden.code.network_error'),
            'message' => $message
        ];

        if (! empty($data)) {
            $response['data'] = $data;
        }

        return Response::json($response, 503);
    }

     /**
     * Set bad request response
     *
     * @param $message
     * @param array $data
     * @return JsonResponse
     */
    public function badRequestResponse($message, array $data = []): JsonResponse
    {
        $response = [
            'status' => config('eden.status.failed'),
            'statuscode' => config('eden.code.bad_request'),
            'message' => $message
        ];

        if (! empty($data)) {
            $response['data'] = $data;
        }

        return Response::json($response, 400);
    }

}
