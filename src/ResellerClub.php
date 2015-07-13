<?php namespace ResellerClub;

class ResellerClub {
    private $userid;
    private $apikey;
    private $client;
    private $params = [];
    private $response;

    public function __construct($userid = null, $apikey = null){
        $this->userid = defined(RC_USERID) ? RC_USERID : $userid;
        $this->apikey = defined(RC_APIKEY) ? RC_APIKEY : $apikey;
        $this->client = new \GuzzleHttp\Client([
            'base_uri' => 'https://httpapi.com/api/',
            'timeout' => 30
        ]);
    }

    public function auth(){
        return $this->param('auth-userid', $this->userid)
                    ->param('api-key', $this->apikey);
    }

    public function param($key, $value){
        $this->params[] = $key.'='.$value;
        return $this;
    }

    public function get($action, $format = 'json'){
        $uri = $action . '.' . $format . '?' . implode('&', $this->params);
        try{
            $this->response = $this->client->get($uri);
        }catch(\Exception $e){
            return $this;
        }
        return $this;
    }

    public function post($action, $format = 'json'){
        $uri = $action . '.' . $format . '?' . implode('&', $this->params);
        try{
            $this->response = $this->client->post($uri);
        }catch(\Exception $e){
            return $this;
        }
        return $this;
    }

    public function result(){
        if(!$this->response) return false;
        $body = $this->response->getBody();
        $result = '';
        while(!$body->eof()){
            $result .= $body->read(1024);
        }
        return $result;
    }
}
