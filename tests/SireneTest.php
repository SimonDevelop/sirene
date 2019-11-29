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

        // Good and with options
        $settings = [
            "secret" => "test",
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
        $result = $Sirene->siret("test");
        $this->assertEquals($result, [
            "header" => [
                "statut" => 200,
                "message" => "OK"
            ],
            "etablissement" => []
        ]);
    }

    /**
     * Siren function test
     * @depends testInitConstructor
     */
    public function testSiren($Sirene)
    {
        $result = $Sirene->siren("test");
        $this->assertEquals($result, [
            "header" => [
                "statut" => 200,
                "message" => "OK"
            ],
            "uniteLegale" => []
        ]);
    }
}
