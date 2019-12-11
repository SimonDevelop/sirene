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

use SimonDevelop\Sirene;

/**
 * Class Sirene
 * Easy use of the siren API with Sirene class and ready-made functions
 */
class Sirene
{
    /**
     * @var string $urlApi the url of API sirene
     */
    private $urlApi = "https://api.insee.fr/entreprises/sirene/V3";

    /**
     * @var string $urlJWT the url for get JWT
     */
    private $urlJWT = "https://api.insee.fr/token";

    /**
     * @var string $secretKey the secret key you get on https://api.insee.fr/
     */
    private $secretKey;

    /**
     * @var string $pathJWTFile absolut path of JWT json file
     */
    private $pathJWTFile;

    /**
     * @param array $settings Settings of constructor Sirene object
     */
    public function __construct(array $settings = [])
    {
        if (!empty($settings)) {
            if (isset($settings["secret"]) && is_string($settings["secret"])) {
                $this->secretKey = $settings["secret"];
                if (isset($settings["jwt_path"])) {
                    if (file_exists($settings["jwt_path"])) {
                        if (is_dir($settings["jwt_path"])) {
                            if (is_readable($settings["jwt_path"]) && is_writable($settings["jwt_path"])) {
                                if (substr($settings["jwt_path"], -1) == "/") {
                                    $this->pathJWTFile = $settings["jwt_path"].".jwt_sirene.json";
                                } else {
                                    $this->pathJWTFile = $settings["jwt_path"]."/.jwt_sirene.json";
                                }
                            } else {
                                throw new \Exception("Unable build:
                                JWT path setting must be accessible reading and writing");
                            }
                        } else {
                            throw new \Exception("Unable build: JWT path setting must be a dir");
                        }
                    } else {
                        throw new \Exception("Unable build: JWT path setting does not exist");
                    }
                } else {
                    $this->pathJWTFile = dirname(__DIR__)."/jwt_sirene.json";
                }
            } else {
                throw new \Exception("Unable build: Argument settings need 'secret' param for api key sirene");
            }
        } else {
            throw new \Exception("Unable build: Argument settings must not be empty");
        }
    }

    /**
     * @return array|bool getting JWT or false if error API
     */
    private function getJWT()
    {
        if ($this->secretKey === "test") {
            return [
                "access_token" => "2b71fa29-3988-3955-94cb-a0bdaf3e0c86",
                "scope" => "am_application_scope default",
                "token_type" => "Bearer",
                "expires_in" => 604800
            ];
        } else {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $this->urlJWT);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
            $headers = [
                "Authorization: Basic ".$this->secretKey,
                "Content-Type: application/x-www-form-urlencoded"
            ];
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $result = curl_exec($ch);
            if (curl_errno($ch)) {
                return false;
            }
            curl_close($ch);
            return json_decode($result, true);
        }
    }

    /**
     * @return string|bool getting JWT or false if error
     */
    private function getJWTSirene()
    {
        if (!file_exists($this->pathJWTFile)) {
            $reponse = $this->getJWT();
            if ($reponse != false) {
                file_put_contents($this->pathJWTFile, json_encode([
                    "access_token" => $reponse["access_token"],
                    "expire" => time()+$reponse["expires_in"]
                ]));
                return $reponse["access_token"];
            } else {
                return false;
            }
        } else {
            $json = json_decode(file_get_contents($this->pathJWTFile), true);
            if ($json["expire"] <= time()) {
                $reponse = $this->getJWT();
                if ($reponse != false) {
                    file_put_contents($this->pathJWTFile, json_encode([
                        "access_token" => $reponse["access_token"],
                        "expire" => time()+$reponse["expires_in"]
                    ]));
                    return $reponse["access_token"];
                } else {
                    return false;
                }
            } else {
                return $json["access_token"];
            }
        }
    }

    /**
     * @param string $siret Siret of society
     * @return array|bool
     */
    public function siret(string $siret)
    {
        $JWT = $this->getJWTSirene();
        if (is_string($JWT)) {
            if ($this->secretKey === "test") {
                return [
                    "header" => [
                        "statut" => 200,
                        "message" => "OK"
                    ],
                    "etablissement" => []
                ];
            } else {
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $this->urlApi."/siret/".$siret);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $headers = [
                    "Accept: application/json",
                    "Authorization: Bearer ".$JWT
                ];
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                $result = curl_exec($ch);
                if (curl_errno($ch)) {
                    return false;
                }
                curl_close($ch);
                return json_decode($result, true);
            }
        } else {
            return $JWT;
        }
    }

    /**
     * @param string $siren Siren of society
     * @return array|bool
     */
    public function siren(string $siren)
    {
        $JWT = $this->getJWTSirene();
        if (is_string($JWT)) {
            if ($this->secretKey === "test") {
                return [
                    "header" => [
                        "statut" => 200,
                        "message" => "OK"
                    ],
                    "uniteLegale" => []
                ];
            } else {
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $this->urlApi."/siren/".$siren);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $headers = [
                    "Accept: application/json",
                    "Authorization: Bearer ".$JWT
                ];
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                $result = curl_exec($ch);
                if (curl_errno($ch)) {
                    return false;
                }
                curl_close($ch);
                return json_decode($result, true);
            }
        } else {
            return $JWT;
        }
    }
}