<?php

namespace SimonDevelop\Test;

use \PHPUnit\Framework\TestCase;
use \SimonDevelop\Sirene;

final class SireneTest extends TestCase
{
    public function initConstructor()
    {
        $Sirene = $this->createConfiguredMock(Sirene::class, [
            'informations' => [
                "etatsDesServices" => [
                    [
                        "Collection" => "Unités Légales",
                        "etatCollection" => "UP"
                    ],
                    [
                        "Collection" => "Établissements",
                        "etatCollection" => "UP"
                    ],
                    [
                        "Collection" => "Liens de succession",
                        "etatCollection" => "UP"
                    ]
                ]
            ],
            'siret' => [
                "header" => [
                    "statut" => 200,
                    "message" => "OK",
                ],
                "etablissements" => [
                    "siren" => "924578891",
                    "nic" => "00013",
                    "siret" => "92457889100013",
                    "statutDiffusionEtablissement" => "P",
                    "dateCreationEtablissement" => "2024-02-05",
                    "trancheEffectifsEtablissement" => null,
                    "anneeEffectifsEtablissement" => null,
                    "activitePrincipaleRegistreMetiersEtablissement" => null,
                    "dateDernierTraitementEtablissement" => "2024-09-18T21:04:14.490",
                    "etablissementSiege" => true,
                    "nombrePeriodesEtablissement" => 1,
                    "uniteLegale" => [
                    ],
                    "adresseEtablissement" => [
                    ],
                    "adresse2Etablissement" => [
                    ],
                    "periodesEtablissement" => [
                    ]
                ]
            ],
            'siren' => [
                "header" => [
                    "statut" => 200,
                    "message" => "OK",
                ],
                "uniteLegale" => [
                    "siren" => "924578891",
                    "statutDiffusionUniteLegale" => "P",
                    "dateCreationUniteLegale" => "2024-02-05",
                    "sigleUniteLegale" => "[ND]",
                    "sexeUniteLegale" => "[ND]",
                    "prenom1UniteLegale" => "[ND]",
                    "prenom2UniteLegale" => "[ND]",
                    "prenom3UniteLegale" => "[ND]",
                    "prenom4UniteLegale" => "[ND]",
                    "prenomUsuelUniteLegale" => "[ND]",
                    "pseudonymeUniteLegale" => "[ND]",
                    "identifiantAssociationUniteLegale" => null,
                    "trancheEffectifsUniteLegale" => null,
                    "anneeEffectifsUniteLegale" => null,
                    "dateDernierTraitementUniteLegale" => "2024-09-18T21:04:14.485",
                    "nombrePeriodesUniteLegale" => 1,
                    "categorieEntreprise" => null,
                    "anneeCategorieEntreprise" => null,
                    "periodesUniteLegale" => []
                ]
            ],
            'searchEtablissement' => [
                "header" => [
                    "statut" => 200,
                    "message" => "OK",
                    "total" => 46,
                    "debut" => 0,
                    "nombre" => 20
                ],
                "etablissements" => []
            ]
        ]);

        return $Sirene;
    }

    /**
     * Informations function test
     */
    public function testInformations()
    {
        $Sirene = $this->createConfiguredMock(Sirene::class, [
            'informations' => [
                "etatsDesServices" => [
                    [
                        "Collection" => "Unités Légales",
                        "etatCollection" => "UP"
                    ],
                    [
                        "Collection" => "Établissements",
                        "etatCollection" => "UP"
                    ],
                    [
                        "Collection" => "Liens de succession",
                        "etatCollection" => "UP"
                    ]
                ]
            ]
        ]);

        $result = $Sirene->informations();
        $this->assertEquals(is_array($result["etatsDesServices"]), true);
        $this->assertEquals(!empty($result["etatsDesServices"]), true);
    }

    /**
     * Siret function test
     */
    public function testSiret()
    {
        $Sirene = $this->createConfiguredMock(Sirene::class, [
            'siret' => [
                "header" => [
                    "statut" => 200,
                    "message" => "OK",
                ],
                "etablissement" => [
                    "siren" => "924578891",
                    "nic" => "00013",
                    "siret" => "92457889100013",
                    "statutDiffusionEtablissement" => "P",
                    "dateCreationEtablissement" => "2024-02-05",
                    "trancheEffectifsEtablissement" => null,
                    "anneeEffectifsEtablissement" => null,
                    "activitePrincipaleRegistreMetiersEtablissement" => null,
                    "dateDernierTraitementEtablissement" => "2024-09-18T21:04:14.490",
                    "etablissementSiege" => true,
                    "nombrePeriodesEtablissement" => 1,
                    "uniteLegale" => [],
                    "adresseEtablissement" => [],
                    "adresse2Etablissement" => [],
                    "periodesEtablissement" => []
                ]
            ]
        ]);

        $result = $Sirene->siret("92457889100013");
        $this->assertEquals($result["header"], [
            "statut" => 200,
            "message" => "OK"
        ]);
        $this->assertEquals(is_array($result["etablissement"]), true);
        $this->assertEquals(isset($result["etablissement"]["siret"]), true);
        $this->assertEquals($result["etablissement"]["siret"], "92457889100013");
    }

    /**
     * Siren function test
     */
    public function testSiren()
    {
        $Sirene = $this->createConfiguredMock(Sirene::class, [
            'siren' => [
                "header" => [
                    "statut" => 200,
                    "message" => "OK",
                ],
                "uniteLegale" => [
                    "siren" => "924578891",
                    "statutDiffusionUniteLegale" => "P",
                    "dateCreationUniteLegale" => "2024-02-05",
                    "sigleUniteLegale" => "[ND]",
                    "sexeUniteLegale" => "[ND]",
                    "prenom1UniteLegale" => "[ND]",
                    "prenom2UniteLegale" => "[ND]",
                    "prenom3UniteLegale" => "[ND]",
                    "prenom4UniteLegale" => "[ND]",
                    "prenomUsuelUniteLegale" => "[ND]",
                    "pseudonymeUniteLegale" => "[ND]",
                    "identifiantAssociationUniteLegale" => null,
                    "trancheEffectifsUniteLegale" => null,
                    "anneeEffectifsUniteLegale" => null,
                    "dateDernierTraitementUniteLegale" => "2024-09-18T21:04:14.485",
                    "nombrePeriodesUniteLegale" => 1,
                    "categorieEntreprise" => null,
                    "anneeCategorieEntreprise" => null,
                    "periodesUniteLegale" => []
                ]
            ]
        ]);
        
        $result = $Sirene->siren("924578891");
        $this->assertEquals($result["header"], [
            "statut" => 200,
            "message" => "OK"
        ]);
        $this->assertEquals(is_array($result["uniteLegale"]), true);
        $this->assertEquals(isset($result["uniteLegale"]["siren"]), true);
        $this->assertEquals($result["uniteLegale"]["siren"], "924578891");
    }

    /**
     * searchEtablissement function test
     */
    public function testSearchEtablissement()
    {
        $Sirene = $this->createConfiguredMock(Sirene::class, [
            'searchEtablissement' => [
                "header" => [
                    "statut" => 200,
                    "message" => "OK",
                    "total" => 46,
                    "debut" => 0,
                    "nombre" => 20
                ],
                "etablissements" => []
            ]
        ]);
        
        $result = $Sirene->searchEtablissement([
            "city" => "BLAGNAC",
            "cp" => "31700",
            "company" => "AIRBUS",
            "ape" => "30.30Z",
            "cj" => "5710"
        ]);
        $this->assertEquals($result["header"]["statut"], 200);
        $this->assertEquals($result["header"]["message"], "OK");
        $this->assertEquals($result["header"]["debut"], 0);
        $this->assertEquals($result["header"]["nombre"], 20);
        $this->assertEquals(is_array($result["etablissements"]), true);
    }

    /**
     * searchEtablissement function test with pagination
     */
    public function testSearchEtablissementPagination()
    {
        $Sirene = $this->createConfiguredMock(Sirene::class, [
            'searchEtablissement' => [
                "header" => [
                    "statut" => 200,
                    "message" => "OK",
                    "total" => 46,
                    "debut" => 1,
                    "nombre" => 5
                ],
                "etablissements" => []
            ]
        ]);

        // City list (5 result)
        $result = $Sirene->searchEtablissement([
            "city" => "BORDEAUX"
        ], "siren", 1, 5);
        $this->assertEquals($result["header"]["statut"], 200);
        $this->assertEquals($result["header"]["message"], "OK");
        $this->assertEquals($result["header"]["debut"], 1);
        $this->assertEquals($result["header"]["nombre"], 5);
        $this->assertEquals(is_array($result["etablissements"]), true);
    }
}
