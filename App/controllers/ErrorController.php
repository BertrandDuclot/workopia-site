<?php

namespace App\Controllers;

// 404 Resource not found

class ErrorController {

    public static function notFound($message = 'Resource not found') {

    http_response_code(404);

    loadView('error', [
        'status' => '404',
        'message' => $message
    ]);
  } 
  
  // 403 Unauthorized error

  public static function unauthorized($message = 'Not authorized to view this') {

    http_response_code(403);

    loadView('error', [
        'status' => '403',
        'message' => $message
    ]);

  }   

}




