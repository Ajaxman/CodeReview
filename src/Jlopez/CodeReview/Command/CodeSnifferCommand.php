<?php
namespace Jlopez\CodeReview\Command;
/**
 *
 */
class CodeSnifferCommand
{
  public function __construct()
  {
    //CodeReview --repo=clickbus-mexico --pr=24 --flags=clean-code,psr2
    //CodeReview --repo=clickbus-mexico --branch=feature/LMX-788 --flags=clean-code,psr2

    $client = new \Github\Client();
    $repositories = $client->api('user')->repositories('ajaxman');
    var_dump($repositories);
     echo "working...";
  }
}
