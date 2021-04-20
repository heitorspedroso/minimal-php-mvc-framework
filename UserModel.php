<?php


namespace heitorspedroso\minimalphpmvcframework;


use heitorspedroso\minimalphpmvcframework\db\DbModel;

abstract class UserModel extends DbModel {
	abstract public function getDisplayName(): string;
}