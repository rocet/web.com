<?php
namespace App\Modules\Api\Controllers;
class CapchaController extends ApiController
{
	public function pic()
	{

	}
	public function code()
	{
		Crypt::decrypt(Crypt::encrypt('secret'));
	}
}