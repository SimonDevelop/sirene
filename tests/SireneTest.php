<?php

namespace SimonDevelop\Test;

use \PHPUnit\Framework\TestCase;
use \SimonDevelop\Sirene;

class SireneTest extends TestCase
{
    /**
     * Constructor test
     */
    public function testInitConstructor()
    {
        // Empty
        $testException = false;
        try {
            $Sirene = new Sirene();
        } catch (\Exception $e) {
            $testException = true;
        }
        $this->assertEquals(true, $testException);

        // Invalide path
        $testException = false;
        try {
            $Sirene = new Sirene(["jwt_path" => __DIR__."/test"]);
        } catch (\Exception $e) {
            $testException = true;
        }
        $this->assertEquals(true, $testException);

        // Good and with options (Secret token for tests only)
        $settings = [
            "secret" => "SG54YWo0eEtoM3dlWThVSXNINUtUNzZZaG5JYTpvSWx5akk3OVdqU21nQUNZSjRsT3hVeE5mYmth",
            "jwt_path" => dirname(__DIR__),
        ];
        $Sirene = new Sirene($settings);

        return $Sirene;
    }

    /**
     * Siret function test
     * @depends testInitConstructor
     */
    public function testSiret($Sirene)
    {
        // Siret of airbus
        $result = $Sirene->siret("38347481400100");
        $this->assertEquals($result["header"], [
            "statut" => 200,
            "message" => "ok"
        ]);
        $this->assertEquals(is_array($result["etablissement"]), true);
        $this->assertEquals(!empty($result["etablissement"]), true);
    }

    /**
     * Siren function test
     * @depends testInitConstructor
     */
    public function testSiren($Sirene)
    {
        // Siren of airbus
        $result = $Sirene->siren("383474814");
        $this->assertEquals($result["header"], [
            "statut" => 200,
            "message" => "OK"
        ]);
        $this->assertEquals(is_array($result["uniteLegale"]), true);
        $this->assertEquals(!empty($result["uniteLegale"]), true);
    }

    /**
     * searchEtablissement function test
     * @depends testInitConstructor
     */
    public function testSearchEtablissement($Sirene)
    {
        // Siren of airbus
        $result = $Sirene->searchEtablissement([
            "city" => "BLAGNAC",
            "cp" => "31700",
            "company" => "AIRBUS",
            "ape" => "30.30Z",
            "cj" => "5710"
        ]);
        $this->assertEquals($result["header"]["statut"], 200);
        $this->assertEquals($result["header"]["message"], "OK");
        $this->assertEquals(is_array($result["etablissements"]), true);
        $this->assertEquals(!empty($result["etablissements"]), true);
    }

    /**
     * searchEtablissement function test with pagination
     * @depends testInitConstructor
     */
    public function testSearchEtablissementPagination($Sirene)
    {
        // City list (5 result)
        $result = $Sirene->searchEtablissement([
            "city" => "BORDEAUX"
        ], "siren", 1, 5);
        $this->assertEquals($result["header"]["statut"], 200);
        $this->assertEquals($result["header"]["message"], "OK");
        $this->assertEquals(is_array($result["etablissements"]), true);
        $this->assertEquals(!empty($result["etablissements"]), true);
        $this->assertEquals(count($result["etablissements"]), 5);
    }
}
