<?php

namespace News\Money\Block;

class GetMoney extends \Magento\Framework\View\Element\Template
{
    public function getMoney()
    {
        define("API_WEATHER", "http://api.openweathermap.org/data/2.5/weather?q=hanoi&appid=211ff006de9aba9ddd122331f87cdf8b");

        $curl = curl_init();
        curl_setopt_array($curl, array(CURLOPT_URL => API_WEATHER, CURLOPT_RETURNTRANSFER => 1, CURLOPT_SSL_VERIFYPEER => false));
        $response = curl_exec($curl);
        $data = var_dump(json_decode($response, true));
        curl_close($curl);
        return $data;
    }
}
