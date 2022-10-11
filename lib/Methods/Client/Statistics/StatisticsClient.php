<?php
namespace Telphin\Methods\Statistics;
/**
 * Трейт для пользователя типа клиент, методы не связаны с Агентами
 */
trait StatisticsClient
{
    function getCallHistory($call_uuid, $client_id = '@me', $data = [])
    {
        $path = self::$version . "/client/{$client_id}/call_history/$call_uuid";
        $method = "GET";
        $result = $this->makeRequest($path, $method, $data);
        return $result;
    }

    function getCdr($client_id = "@me", $data)
    {
        $path = self::$version . "/client/{$client_id}/cdr";
        $method = "GET";
        $result = $this->makeRequest($path, $method, $data);
        return $result;
    }

    function getCallHistories($client_id = "@me", $data)
    {
        $path = self::$version . "/client/{$client_id}/call_history/";
        $method = "GET";
        $result = $this->makeRequest($path, $method, $data);
        return $result;
    }

    function getCall($client_id = "@me", $data)
    {
        $path = self::$version . "/client/{$client_id}/calls/";
        $method = "GET";
        $result = $this->makeRequest($path, $method, $data);
        return $result;
    }

    function getCallStats($client_id = "@me", $data)
    {
        $path = self::$version . "/client/{$client_id}/calls/stats";
        $method = "GET";
        $result = $this->makeRequest($path, $method, $data);
        return $result;
    }
}

?>
