<?php


namespace heitorspedroso\minimalphpmvcframework\middlewares;


use heitorspedroso\minimalphpmvcframework\Application;
use heitorspedroso\minimalphpmvcframework\exception\ForbiddenException;

class AuthMiddleware extends BaseMiddleware {

	public array $actions = [];

	/**
	 * AuthMiddleware constructor.
	 *
	 * @param array $actions
	 */
	public function __construct( array $actions = [] ) {
		$this->actions = $actions;
	}

	public function execute() {
		if(Application::isGuest()){
			if(empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)){
				throw new ForbiddenException();
			}
		}
	}
}