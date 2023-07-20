<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('homepage');
    }

    public function search()
    {
        return redirect()->to("school/" . $_POST['name']);
    }

    public function school($name = 010000)
    {
        $link = "https://api-sekolah-indonesia.vercel.app/sekolah?provinsi=$name&page=1&perPage=5";
        if ($name !== 010000) {
            $link = "https://api-sekolah-indonesia.vercel.app/sekolah/s?sekolah=" . $name;
        }
        if (isset($_GET['load'])) {
            $load = $_GET['load'];
            $link = "https://api-sekolah-indonesia.vercel.app/sekolah/s?sekolah=jakarta&page=1&perPage=$load";
        }

        $ch = curl_init();
        // IMPORTANT: the below line is a security risk, read https://paragonie.com/blog/2017/10/certainty-automated-cacert-pem-management-for-php-software
        // in most cases, you should set it to true
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $link);
        $api_sekolah = curl_exec($ch);
        curl_close($ch);

        $pilihan_sekolah = json_decode($api_sekolah);

        // if (!$pilihan_sekolah) {
        //     echo 'data kosong';
        //     die;
        // }

        if ($pilihan_sekolah == null) {
            echo ('data not found. Check your connection or the keyword');
            die;
        }
        $data_sekolah = $pilihan_sekolah->dataSekolah;

        $data = [
            'data' => $data_sekolah,
            'title' => 'School list',
        ];

        return view('school', $data);
    }

    public function getAddress()
    {

        // $latitude = 0;
        // $longitude = 0;
        // //google map api url
        // $url = "http://maps.google.com/maps/api/geocode/json?latlng=$latitude,$longitude";

        // // send http request
        // $geocode = file_get_contents($url);
        // $json = json_decode($geocode);
        // dd($json);
        // $address = $json->results[0]->formatted_address;
        // dd($address);
    }
}
