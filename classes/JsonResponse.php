<?php
class JsonResponse {

    private $data;
    private $message;

    public function __construct( $message = false, $data = null) {
        $this->data = $data;
        $this->message = $message?'success':'error';

        $this->send();
    }

    public function send() {
        
        $response = array(
            'message' => $this->message,
            'data' => $this->data
        );

        echo json_encode($response);
        exit;
    }
}
