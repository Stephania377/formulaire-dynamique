
<?php
session_start();
require('./fpdf184/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);
$pdf->Multicell(0,9,"
                                    DECLARATION DE DISSOLUTION SANS LIQUIDATION 
                                    ET DE TRANSMISSION UNIVERSELLE DE PATRIMOINE
                                "); 
$pdf->Multicell(0,9,utf8_decode("I. EXPOSE PREALABLE
La société ").utf8_decode(strtoupper($_SESSION['nom'])).utf8_decode("
Siège social : ").$_SESSION['adr']."
                        ".$_SESSION['code']."
                        ".utf8_decode($_SESSION['nom'])."
SAS au capital de ".utf8_decode($_SESSION['nom']).utf8_decode(" | R.C.S. ").utf8_decode($_SESSION['nom']).utf8_decode(" | Siren ").$_SESSION['siren']. utf8_decode(" | Siret ") . $_SESSION['siren'].utf8_decode("
représentée par l'associée unique :
la société Nom de la nouvelle société , Registered Number : Numéro de la nouvelle société, sise 35 Firs Avenue, London, England, N11 3NE, représentée par :
Monsieur ou Madame"). $_SESSION['nomc']." , demeurant : ".$_SESSION['adrc'].", ".$_SESSION['codec'].", ".$_SESSION['villec'].", ".$_SESSION['paysnc'].utf8_decode(", né(e) le ").$_SESSION['datec'].utf8_decode(", de nationalité").$_SESSION['natc'].utf8_decode(strtoupper("
est designee ci-apres la societe confondue ET LE REPRESENTANT LEGAL DE LA SOCIETE CONFONDUE,")).utf8_decode("

    Procès-verbal des décisions de l' associée unique 
Le jour, mois, année de la dissolution, à 10 heures, 
l'Associée unique, propriétaire de la totalité des ").$_SESSION['nb']." parts de ".$_SESSION['mtt'].utf8_decode("euros de valeur nominale chacune, numérotées de 1 à ").$_SESSION['nb'].utf8_decode(", composant le capital social, intégralement libéré,  
agissant en sa qualité d'associée unique de la société confondue
A PRIS LES DECISIONS SUIVANTES : 

II. A) DISSOLUTION SANS LIQUIDATION :
      B) TRANSMISSION UNIVERSELLE DU PATRIMOINE de la société confondue
l'associée unique, décide, conformément aux dispositions de l'article 1844-5 alinéa 3 du Code civil, la dissolution sans liquidation à compter du jour, mois, année de la dissolution
de la société confondue
conformément aux dispositions de l'article 1844-5, alinéa 3, du Code civil, 
l'associée unique
détenant l'intégralité du capital social de la société confondue
la société unique a, par les présentes, décidé la dissolution de la société confondue, ce à compter du jour, mois, année de la dissolution, sous réserve de l'absence d'opposition dans le délai légal ;         

1-1- les éléments d'actif et de passif de la société confondue seront repris à compter du jour, mois, année de la dissolution par la société confondante, dans cette dissolution qui entraîne la transmission universelle du patrimoine, le jour, mois, année de la dissolution
de la société confondue au profit de la société confondante, sans qu'il y ait lieu à liquidation, sous la réserve qu'à l'issue du délai d'opposition accordé par la loi aux créanciers sociaux, les dits créanciers n'aient pas formé opposition à la dissolution ou, en cas d'oppositions, que celles-ci soit rejetées en première instance ou que le remboursement des créances ait été effectué ou les garanties constituées ;

1-2- la société confondante reprend par cette transmission universelle du patrimoine, la totalité des éléments d'actif et de passif de la société confondue, 
ce à compter du jour, mois, année de la dissolution
date effective de la transmission universelle de patrimoine de la société confondue au profit de la société confondante, conformément aux dispositions de l'article 1844-5 alinéa 3 du Code civil ; 

    2- But de la dissolution-confusion : projet d'expatriation, internationalisation de la marque et de l'image de marque, regroupement de deux patrimoines économiques et sociaux, permettant de lier et mutualiser des savoir-faire, des compétences, des ressources, des contacts commerciaux et de fournisseurs, des droits et des données, créer des valeurs ajoutées notamment intellectuelles, ainsi que le partage de locaux. In fine, l'intérêt est également centré sur une activité et une vitrine (représentativité) internationales, de par notamment une implantation dans une juridiction réputée pour une exposition et des échanges internationaux, import-export, vente à distance. L'intérêt de bénéficier d'expertises locales, en misant sur la proximité et la centralisation des compétences, dans une juridiction propice aux affaires internationales, est une des composantes ayant motivé ce rapprochement. Les avantages sociaux et fiscaux dont bénéficie la société absorbante sont également des éléments pris en compte."));

$pdf->Multicell(0,9,utf8_decode("
III.REGIME FISCAL
Dispositions générales :
Le représentant de la Société confondante oblige celle-ci à se conformer à toutes dispositions légales en vigueur, en ce qui concerne les déclarations à faire pour le paiement de l'impôt sur les sociétés et de toutes autres impositions ou taxes résultant de la réalisation définitive des apports faits au titre de la confusion de patrimoine.

Impôt sur les sociétés :
En conséquence, les résultats, bénéficiaires ou déficitaires, produis par l'exploitation de la société confondue, seront englobés dans le résultat imposable de la société confondante. Les parties déclarent soumettre la présente confusion de patrimoine au régime de faveur prévu à l'article 210 A du Code Général des Impôts.

La société confondante prend les engagements suivants :

    a) la société confondante reprendra au passif de son bilan les provisions dont l'imposition est différée chez la société confondue et s'engage à reprendre d'une manière rétroactive les dettes fiscales telles que TVA, impôts sur les sociétés, taxe sur les dividendes, CFE, ainsi que tous autres impôts, taxes, primes, contributions, cotisations, abonnements et pénalités dont la société confondue serait redevable ;
la société confondante, qui reprend la totalité du passif de la société confondue, fera son affaire de l'intégralité des dettes et charges de la société confondue, antérieures au jour de la réalisation définitive de la confusion ou qui auraient été omises en comptabilité, ce sans aucune exception ni réserve ; de la même manière, la société confondante s'engage à prendre en charge tout éventuel impôt ou taxe, inhérent à la présente transaction ;
plus généralement, la société confondante se substituera de plein droit à toutes charges, taxes, obligations fiscales et pénalités pouvant incomber à la société confondue, ce d'une manière rétroactive au jour de la réalisation définitive de la confusion ;

    b) la société confondante se substituera à la société confondue pour la réintégration des résultats dont la prise en compte avait été différée pour l'imposition de cette dernière ;

    c) la société confondante calculera les plus-values réalisées ultérieurement à l'occasion de la cession des immobilisations non amortissables reçues en apport d'après la valeur qu'avaient ces biens, du point de vue fiscal, dans les écritures de la société confondue ;

    d) la société confondante réintégrera dans ses bénéfices imposables, dans les délais et conditions prévus à l'article 210 A, 3e du Code Général des Impôts, les plus-values dégagées lors de l'apport des biens amortissables,

    e) la société confondante inscrira à son bilan, les éléments transférés pour la valeur qu'ils avaient, du point de vue fiscal, dans les écritures de la société confondue,

    f) la société confondante reprendra à son bilan les écritures comptables de la société confondue (valeurs d'origine, amortissements, provisions pour dépréciation) et continuera à calculer les dotations aux amortissements à partir de la valeur d'origine qu'avaient les biens apportés dans les écritures de la société confondue,

    g) la société confondante s'engage à faire son affaire des oppositions qui pourraient être pratiquées par tous créanciers.

Rétroactivité fiscale :
La société confondante s'engage à reprendre et à respecter les engagements fiscaux pris par la société confondue, ce d'une manière rétroactive, à raison des engagements pris par elle au titre d'opérations de fusion ou assimilés, impôts sur les sociétés, TVA et notamment de la dissolution sans liquidation de la société confondue, et de manière générale pour toutes opérations auxquelles elle aurait été partie.
La présente dissolution-confusion emporte transmission universelle de tous les éléments d'actif et de passif constituant le patrimoine de la société confondue.
Déclaration d'actif et de passif :
    Passif :").$_SESSION['passif'].utf8_decode(" passif euros
    Actif : ").$_SESSION['actif'].utf8_decode("euros
    
    La société confondante s'engage à reprendre à son compte, sans réserve, la totalité de l'actif, du passif, de la perte, des déficits et des dettes.
    
    Enregistrement
    Le présent projet sera soumis à la formalité de l'enregistrement.
    
    Taxe sur la Valeur Ajoutée
    Les représentants de la société confondue et de la société confondante constatent que la confusion de patrimoine emporte transmission d'une universalité totale de biens au sens de l'article 257 bis du CGI. Par conséquent, la transmission des immeubles, biens meubles incorporels, biens mobiliers d'investissements et marchandises compris dans cette universalité sont dispensés de TVA. 
    Conformément à la documentation administrative (BOI-TVA-DED-50-20-20-20140513 n°130), le crédit ou débit TVA dont la société confondue disposera ou sera redevable à la date à laquelle elle cessera juridiquement d'exister sera purement et simplement transféré à la société confondante, qui sera subrogée dans tous les droits et obligations de la société confondue.
    La société confondante s'engage à reprendre à son compte, sans réserve, la totalité de l'actif, du passif, de la perte, des déficits et des dettes.

Enregistrement
Le présent projet sera soumis à la formalité de l'enregistrement.

Taxe sur la Valeur Ajoutée
Les représentants de la société confondue et de la société confondante constatent que la confusion de patrimoine emporte transmission d'une universalité totale de biens au sens de l'article 257 bis du CGI. Par conséquent, la transmission des immeubles, biens meubles incorporels, biens mobiliers d'investissements et marchandises compris dans cette universalité sont dispensés de TVA. 
Conformément à la documentation administrative (BOI-TVA-DED-50-20-20-20140513 n°130), le crédit ou débit TVA dont la société confondue disposera ou sera redevable à la date à laquelle elle cessera juridiquement d'exister sera purement et simplement transféré à la société confondante, qui sera subrogée dans tous les droits et obligations de la société confondue.

IV – DISPOSITIONS DIVERSES

En conséquence de cette dissolution sans liquidation, le Représentant légal ès-qualiés, sera habilité à agir en qualité de mandataire ad hoc et à cet effet disposera des pouvoirs ci-après, lesquels n'ont qu'un caractère énonciatif :
    • arrêter la situation des éléments actifs et passifs de la société confondue qui seront transmis à la société confondante,
    • contrôler l'acquit régulier du passif,
    • confirmer et réitérer par tous actes sous seings privés ou authentiques, la transmission des biens de la société confondue à la société confondante ; en préciser en tant que de besoin la désignation, réparer toutes omissions ou inexactitudes, établir et compléter toutes origines de propriété ;
    • à cet effet, faire toutes déclarations, accomplir toutes formalités de publicité, concourir à tous actes de dépôt avec ou sans reconnaissance d'écriture et de signature, effectuer les formalités requises pour assurer le transfert, dans le patrimoine de la société confondante, des biens de la société confondue,
    • accomplir toutes les significations nécessaires relativement aux biens et valeurs transmis,
    • représenter la société confondue en justice, exercer toutes actions en justice tant en demande qu'en défense et représenter la société confondue auprès de toutes administrations, pour procéder à la dissolution
    • aux effets ci-dessus, passer et signer tous actes, procès-verbaux, pièces et autres documents, élire domicile, substituer en partie les présents pouvoirs et, généralement, faire le nécessaire pour procéder à la dissolution sans liquidation de la société confondue et constater la transmission universelle de son patrimoine à la société confondante.


V – FORMALITES

Le Représentant légal, ès-qualités, accomplira toutes les formalités légales consécutives à la présente déclaration à l'effet de constater :

    • soit qu'à l'issue du délai de trente jours à compter de la publication de l'avis de dissolution, les créanciers n'auront pas formé opposition à la dissolution de la société confondue,
    • soit qu'en cas d'oppositions formées dans le délai susvisé, lesdites oppositions auront été rejetées en première instance ou que le remboursement des créances aura été effectué ou que des garanties auront été constituées,

de sorte que la société ainsi confondue soit radiée du registre du commerce et des sociétés.

En outre, le Représentant légal, ès-qualités, confère tous pouvoirs au porteur d'un original, d'une copie ou d'un extrait des présentes à l'effet d'accomplir toutes autres formalités requises par les textes législatifs ou réglementaires en vigueur.")); 
$pdf->Output();
?>