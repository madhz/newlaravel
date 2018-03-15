<?php

namespace Tests\Unit;
use Illuminate\Foundation\Testing\WithoutMiddleware;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
//    use WithoutMiddleware; // use this trait
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicExample()
    {

        $rs=$this->call('GET','http://test.newlara.com/register');
        $this->assertEquals(200, $rs->getStatusCode());
//        $data=['name'=>'Ameya','email'=>'ameya@gmail.com','password'=>'ameya123'];
        $rs=$this->call('POST','http://test.newlara.com/User/registration',['_token' => csrf_token(),'name'=>'Ameya','email'=>'ameya@gmail.com','password'=>'ameya123']);
        $this->assertEquals(200, $rs->getStatusCode());
        echo $rs->getStatusCode();
        $this->assertTrue(true);
    }
}
