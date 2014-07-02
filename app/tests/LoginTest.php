<?php

class LoginText extends TestCase {

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testLoginRoute()
    {
        $this->call('GET', '/');
        $this->assertResponseOk();
    }

    public function testLoginNullRequest()
    {
        // With null request
        $response = $this->call('POST', 'api/login', [
            'username'   => '',
            'password'   => '',
            'auth_token' => ''
            ]);

        $result = $response->getContent();
        $result = json_decode($result);
        $this->assertEquals('error', $result->status->code);
        $this->assertEquals('Authentication Token is not valid.', $result->response->invalid);
    }

    public function testLoginWithouUserPass()
    {
        // Only Auth Token provided, username and password is null
        $response = $this->call('POST', 'api/login', [
            'username'   => '',
            'password'   => '',
            'auth_token' => 'cebb30b4f9435ffc60886eab7fddcd99'
            ]);

        $result = $response->getContent();
        $result = json_decode($result);
        $this->assertTrue($result->error);
        $this->assertEquals('Username not found', $result->data);
    }

    public function testLoginInvalidUser()
    {
        // With wrong username
        $response = $this->call('POST', 'api/login', [
            'username'   => 'testadmin',
            'password'   => 'test',
            'auth_token' => 'cebb30b4f9435ffc60886eab7fddcd99'
            ]);

        $result = $response->getContent();
        $result = json_decode($result);
        $this->assertTrue($result->error);
        $this->assertEquals('Username not found', $result->data);
    }

    public function testLoginInvalidPass()
    {
        // with wrong password
        $response = $this->call('POST', 'api/login', [
            'username'   => 'crmadmin',
            'password'   => 'test',
            'auth_token' => 'cebb30b4f9435ffc60886eab7fddcd99'
            ]);

        $result = $response->getContent();
        $result = json_decode($result);
        $this->assertTrue($result->error);
        $this->assertEquals('Login credentials are not correct', $result->data);
    }

    public function testLoginValidCredentials()
    {
        // with wrong password
        $response = $this->call('POST', 'api/login', [
            'username'   => 'crmadmin',
            'password'   => 'sscrm@9820',
            'auth_token' => 'cebb30b4f9435ffc60886eab7fddcd99'
            ]);

        $result = $response->getContent();
        $result = json_decode($result);
        $this->assertFalse($result->error);
        $this->assertEquals('Login success', $result->data);
    }

    public function testLoginPostToController()
    {
        $response = $this->call('POST', '/login', [
            'username'   => 'crmadmin',
            'password'   => 'sscrm@9820',
            'auth_token' => 'cebb30b4f9435ffc60886eab7fddcd99'
            ]);
        $this->assertRedirectedTo('/Dashboard');
    }

}


