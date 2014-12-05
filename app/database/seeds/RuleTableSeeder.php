<?php

class RuleTableSeeder extends DatabaseSeeder
{
	public function run()
	{
		$rules = array(
			array(
				"rule" => "admin",
				"group_id" => 1
			),
			array(
				"rule" => "newbie",
				"group_id" => 1
			)
		);

		foreach ($rules as $rule)
		{
            Rule::create($rule);
		}
	}
}