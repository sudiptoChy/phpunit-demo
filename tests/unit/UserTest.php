<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
	public function testThatWeCanGetTheFirstName()
	{
		$user = new \App\Models\User;
		$user->setFirstName('Sudipto');
		$this->assertEquals($user->getFirstName(), 'Sudipto');
	}

	public function testThatWeCanGetTheLastName()
	{
		$user = new \App\Models\User;
		$user->setLastName('Chowdhury');
		$this->assertEquals($user->getLastName(), 'Chowdhury');
	}

	public function testThatWeCanGetTheFullName()
	{
		$user = new \App\Models\User;
		$user->setFirstName('Sudipto');
		$user->setLastName('Chowdhury');
		$this->assertEquals($user->getFullName(), 'Sudipto Chowdhury');
	}
}