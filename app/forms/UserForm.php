<?php

class UserForm extends BaseForm
{
	public function isValidForLogin($account)
	{
		return $this->isValid($this->getAccountValid($account) + array(
				"password" => "required"
			));
	}

	public function isValidForRegist($account)
	{
		return $this->isValid($this->getAccountValid($account, 0) + array(
				"password" => "required|min:6",
				"password_confirmation" => "required|same:password"
			));
	}

	public function isValidForRequest($account)
	{
		return $this->isValid($this->getAccountValid($account));
	}

	public function isValidForReset($account)
	{
		return $this->isValid($this->getAccountValid($account) + array(
				"password" => "required|min:6",
				"password_confirmation" => "required|same:password",
				"token" => "required|exists:token,token"
			));
	}

	public function isValidForRepassword()
	{
		return $this->isValid(array(
			"password" => "required|min:6",
			"password_confirmation" => "required|same:password"
		));
	}

	public function isValidForPerfinfo($account)
	{
		return $this->isValid($this->getAccountValid($account, 0));
	}

	protected function getAccountValid($account, $exists = 1)
	{
		$accountValid = array(
			"email" => "required|email|" . ($exists ? "exists" : "unique") . ":user,email",
			"mobile" => "required|numeric|min:11|" . ($exists ? "exists" : "unique") . ":user,mobile",
			"user_name" => "required|min:5|" . ($exists ? "exists" : "unique") . ":user,user_name",
			"region" => "required|numeric",
		);
		if (!is_array($account)) {
			return array('account' => $accountValid[$account]);
		} else {
			$return = array();
			foreach ($account as $value) {
				$return[$value] = $accountValid[$value];
			}
			return $return;
		}
	}
}