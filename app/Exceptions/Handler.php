<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->renderable(function (AuthenticationException $e) {
            return new JsonResponse([
                'message' => 'Unauthenticated',
            ], 401);
        });

        $this->renderable(function (ValidationException $e) {
            return new JsonResponse([
                'message' => 'Validation failed',
                'errors' => $e->errors(),
            ], 422);
        });

        $this->renderable(function (NotFoundHttpException $e) {
            return new JsonResponse([
                'message' => 'Resource not found',
            ], 404);
        });
    }
}