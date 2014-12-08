<?php

class RuleTableSeeder extends DatabaseSeeder
{
	public function run()
	{
		$rules = array(
			array(
				"rule" => "[]",
				"group_id" => 1,
                "user_id" => 1
			),
			array(
				"rule" => "[]",
				"group_id" => 2,
                "user_id" => 1
			)
		);

		foreach ($rules as $rule)
		{
            Rule::create($rule);
		}
	}
}