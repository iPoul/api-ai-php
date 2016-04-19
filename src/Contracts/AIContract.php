<?php AI\Contracts;
/**
* API.ai Contract 
**/
interface AIContract 
{
  // Get the base URL
  public function getServiceUrl($endpoint = "");

  // Query
  public function query($string);
}