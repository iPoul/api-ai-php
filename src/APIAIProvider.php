<?php namespace AI;

class APIAIProvider implements AIContract
{
  protected $api_key;
  protected $serviceUrl;
  protected $version = "20150910";
  protected $language = "en"

  public function query($q)
  {
    $response = $client->post($this->getServiceUrl('query'), array(
          'headers' => array(
              'Authorization' => "Bearer {$this->api_key}",
              'Content-Type' => 'application/json; charset=utf-8'
          ),
          'json' => array(
              "query" => urlencode($q),
              "lang" => $this->language,
              "v" => $this->version
          )
      ));

      $result = $response->json();

      return $result;
  }

  public fucntion __constrctor(String $key, String $serviceUrl)
  {
    $this->key = $key;
    $this->serviceUrl = $serviceUrl;
  }

  // Get Service Url
  public function getServiceUrl($endpoint = "")
  {
    if (! empty($endpoint)) {
      return $this->serviceUrl;
    }

    return $this->serviceUrl;
  }
  
}