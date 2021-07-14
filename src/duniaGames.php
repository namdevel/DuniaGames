<?php
namespace Namdevel;
/*
@ Unofficial Dunia Games PHP Class
@ Author : namdevel
@ Created at 30-05-2021 14:26
@ Last Modified at 30-05-2021 01:17
*/

class DuniaGames
{
    const API_URL = "https://api.duniagames.co.id/api/transaction/v1/top-up/inquiry/store";
    
    public function getUserNameMobileLegends($userID, $zoneID)
    {
        $payload       = '{"productId":1,"itemId":66,"catalogId":121,"paymentId":805,"gameId":"' . $userID . '","zoneId":"' . $zoneID . '","product_ref":"CMS","product_ref_denom":"AE"}';
        $checkUsername = $this->Request(self::API_URL, $payload);
        $json          = json_decode($checkUsername, true);
        return $json['data']['userNameGame'];
    }
    
    public function getUserNameFreeFire($gameID)
    {
        $payload       = '{"productId":3,"itemId":353,"catalogId":376,"paymentId":1252,"gameId":"' . $gameID . '","product_ref":"CMS","product_ref_denom":"REG"}';
        $checkUsername = $this->Request(self::API_URL, $payload);
        $json          = json_decode($checkUsername, true);
        return $json['data']['userNameGame'];
    }
    
    public function getUserNameCODMobile($openID)
    {
        $payload       = '{"productId":18,"itemId":88,"catalogId":144,"paymentId":828,"gameId":"' . $openID . '","product_ref":"CMS","product_ref_denom":"REG"}';
        $checkUsername = $this->Request(self::API_URL, $payload);
        $json          = json_decode($checkUsername, true);
        return $json['data']['userNameGame'];
    }
    
    public function getUserNameLifeAfter($gameID, $serverName)
    {
        $server        = array(
            'miskatown' => '500001',
            'sandcastle' => '500002',
            'mouthswamp' => '500003',
            'redwoodtown' => '500004',
            'obelisk' => '500005',
            'fallforest' => '510001',
            'mountsnow' => '510002',
            'nancycity' => '520001',
            'charlestown' => '520002',
            'snowhighlands' => '520003',
            'santopany' => '520004',
            'levincity' => '520005',
            'newland' => '500006',
            'milestone' => '520006'
        );
        $serverID      = $server[strtolower($serverName)];
        $payload       = '{"productId":21,"itemId":117,"catalogId":173,"paymentId":857,"gameId":"' . $gameID . '","serverId":"' . $serverID . '","product_ref":"REG","product_ref_denom":"REG"}';
        $checkUsername = $this->Request(self::API_URL, $payload);
        $json          = json_decode($checkUsername, true);
        return $json['data']['userNameGame'];
    }
    
    protected function Request($url, $post = false)
    {
        $ch = curl_init();
        
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_RETURNTRANSFER => true
        ));
        
        if ($post) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        }
        
        $headers = array(
            'Host: api.duniagames.co.id',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:83.0) Gecko/20100101 Firefox/83.0',
            'Content-Type: application/json'
        );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}
