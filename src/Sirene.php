<?php

/**
 * This file is the sirene package.
 *
 * (c) Simon Micheneau <contact@simon-micheneau.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SimonDevelop;

/**
 * Class Sirene
 * Easy use of the siren API with Sirene class and ready-made functions
 */
class Sirene
{
    /**
     * @var string $urlApi the url of API sirene
     */
    private string $urlApi = "https://api.insee.fr/api-sirene/3.11";

    /**
     * @var string $apiKey the api key of your sirene application
     */
    private string $apiKey;

    /**
     * @param string $key api sirene key of your application
     */
    public function __construct(string $key, ?string $urlApi = null)
    {
        $this->apiKey = $key;

        if (null !== $urlApi) {
            $this->urlApi = $urlApi;
        }
    }

    public function setApiUrl(string $url): void
    {
        $this->urlApi = $url;
    }

    /**
     * @return array|bool
     */
    public function informations(): array|bool
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->urlApi."/informations");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $headers = [
            "Accept: application/json",
            "X-INSEE-Api-Key-Integration: ".$this->apiKey
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            return false;
        }
        curl_close($ch);

        return is_null(json_decode($result, true)) ? false : json_decode($result, true);
    }

    /**
     * @param string $siret Siret of society
     * @return array|bool
     */
    public function siret(string $siret): array|bool
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->urlApi."/siret/".$siret);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $headers = [
            "Accept: application/json",
            "X-INSEE-Api-Key-Integration: ".$this->apiKey
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            return false;
        }
        curl_close($ch);

        return is_null(json_decode($result, true)) ? false : json_decode($result, true);
    }

    /**
     * @param string $siren Siren of society
     * @return array|bool
     */
    public function siren(string $siren): array|bool
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->urlApi."/siren/".$siren);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $headers = [
            "Accept: application/json",
            "X-INSEE-Api-Key-Integration: ".$this->apiKey
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            return false;
        }
        curl_close($ch);
        
        return is_null(json_decode($result, true)) ? false : json_decode($result, true);
    }

    /**
     * @param array $params Parameters of search
     * @return array|bool
     */
    public function searchEtablissement(
        array $params,
        string $tri = "siren",
        int $page = 0,
        int $nombre = 20
    ): array|bool {
        $list = [
            "city" => "libelleCommuneEtablissement",
            "cp" => "codePostalEtablissement",
            "cc" => "codeCommuneEtablissement",
            "cue" => "denominationUsuelleEtablissement",
            "company" => "denominationUniteLegale",
            "sigle" => "sigleUniteLegale",
            "ape" => "activitePrincipaleUniteLegale",
            "nape" => "nomenclatureActivitePrincipaleUniteLegale",
            "cj" => "categorieJuridiqueUniteLegale",
            "siren" => "siren"
        ];
        $data = "";
        if (!empty($params)) {
            foreach ($params as $k => $v) {
                if (array_key_exists($k, $list)) {
                    switch ($k) {
                        case 'company':
                        case 'city':
                            $data .= $list[$k].":\"".rawurlencode($v)."\" AND ";
                            break;
                        case 'cue':
                            $data = $data."periode(".$data.$list[$k].":\"".rawurlencode($v)."\") AND ";
                            break;
                        default:
                            $data .= $list[$k].":".rawurlencode($v)." AND ";
                    }
                    unset($params[$k]);
                }
            }
            $data = rawurlencode(substr($data, 0, -5));
            $ch = curl_init();
            $paramsTri = "&debut=".$page."&nombre=".$nombre."&tri=".$tri;
            curl_setopt($ch, CURLOPT_URL, $this->urlApi."/siret/?q=".$data.$paramsTri);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $headers = [
                "Accept: application/json",
                "X-INSEE-Api-Key-Integration: ".$this->apiKey
            ];
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $result = curl_exec($ch);
            if (curl_errno($ch)) {
                return false;
            }
            curl_close($ch);

            return is_null(json_decode($result, true)) ? false : json_decode($result, true);
        } else {
            return false;
        }
    }
}
