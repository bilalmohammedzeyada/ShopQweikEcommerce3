<?php

namespace System;

class Helper
{
     /**
     * Application Object
     *
     * @var \System\Application
     */
    private $app;

     /**
     * Constructor
     *
     * @param \System\Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

     /**
     * Start Session
     *
     * @return void
     */
    public function sendMail($to, $from, $subject, $message) {
		$subject = sprintf( '=?utf-8?B?' . base64_encode( $subject ) . '?=' );
		$headers = sprintf( 'To: %s <%s>
		From: %s
		MIME-Version: 1.0
		Content-type: text/html; charset=utf-8', $to, $to, $from );
		mail( $to, $subject, $message, $headers );
	}
}