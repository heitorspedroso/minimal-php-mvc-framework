<?php


namespace heitorspedroso\minimalphpmvcframework\exception;


class NotFoundException extends \Exception {
	protected $message = 'Page not found';
	protected $code = 404;
}