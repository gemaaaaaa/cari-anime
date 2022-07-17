<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_AnimeDetail extends CI_Controller {
	public function index($id = 0)
	{
        $animeDetail = $this->getDetailAnimeById($id);

        $data = array(
            'poster_url' => $animeDetail['images']['webp']['large_image_url'], 
            'title' => $animeDetail['title'],
            'title_english' => $animeDetail['title_english'],
            'title_japanese' => $animeDetail['title_japanese'],
            'score' => $animeDetail['score'],
            'synopsis' => $animeDetail['synopsis'],
        );
        
        $this->load->view("V_AnimeDetail", $data);
	}

    private function apiRequest($API_ENDPOINT)
    {
        $curl_init = curl_init();

        $curl_setopt = array(
            CURLOPT_URL => $API_ENDPOINT,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_NOPROGRESS => false,
        );

        curl_setopt_array($curl_init, $curl_setopt);

        $curl_response = curl_exec($curl_init);
        $curl_response_arr = json_decode($curl_response, true);

        $response = $curl_response_arr['data'];

        return $response;
    }

    private function getDetailAnimeById($id)
    {
        $API_ENDPOINT = "https://api.jikan.moe/v4/anime/$id/full";

        $animeDetail = $this->apiRequest($API_ENDPOINT);

        return $animeDetail;
    }
}
